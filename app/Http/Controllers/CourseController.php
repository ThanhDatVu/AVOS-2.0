<?php

namespace App\Http\Controllers;

use URL;
use Session;
use Exception;
use App\Models\Course;
use App\Models\User;
use PayPal\Api\Item;
use App\Models\Lesson;
use PayPal\Api\Payee;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use App\Models\CourseUser;
use PayPal\Api\ItemList;
use App\Models\Category;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use Illuminate\Routing\RouteUri;
use PayPal\Api\PaymentExecution;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Submit an edited course to publish.
     *
     * @return \Illuminate\Http\Response
     */


     public function submitEditCourse(Request $request)
    {
        $request->validate([
            "titre"=>"string",
            'descriptif'=>"string|required",
            "objectif"=>"string|required",
            "competences"=>"required|string",
            "difficulte"=>"integer|max:10",
            "cout"=>"integer",
        ]);
         function courseimg(Request $request){
            return $request->courseimg ? Storage::disk("public")->put("courses",$request->courseimg)  :  "courses/default".mt_rand(0,2).".png";
        }
        Course::create([
            'title'=>$request->titre,
            'teacher_id'=>Auth::user()->teacher->id,
            'descriptif'=>$request->descriptif,
            'image'=>courseimg($request),
            "objectif"=>$request->objectif,
            "competences_requises"=>$request->competences,
            "niveau_de_difficulte"=>$request->difficulte,
            "coût_du_cours"=>$request->cout,
            "created_at"=>now(),
        ]);
        return view(
            "admin-courses",
            [
                "courses"=>Course::where('teacher_id',Auth::user()->teacher->id)->get()
            ]);
    }

    /**
     * Show the form for creating a new course.
     *
     * @return \Illuminate\Http\Response
     */
    public function editcourse()
    {
        if(isset(Auth::user()->teacher->id)){
            return view("admin-publish-course",["categories"=>Category::All()]);
        }else{
            return view("dashboard");
        }
    }



    /**
     * Show the form for showing a single course.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSingle($id)
    {

        $course=Course::where('id',$id)->firstOrFail();
        return view('admin-courses-detail',["course"=>$course]);
    }



    /**
     * Show the form for showing a single course.
     *
     * @return \Illuminate\Http\Response
     */
    public $idu;
    public function enroll($id)
    {
        $this->idu=$id;
        $course=Course::where('id',$id)->firstOrFail();

        function pay($course,$id){
            if($course->coût_du_cours!=0){
                $url="http://money_service.local?number=".Auth::user()->telephone."&benef=657675216&amount=$course->coût_du_cours";
                $pay=@json_decode(file_get_contents($url));
                if($pay->status){
                    return true;
                }else{
                    return false;
                }
            }else{
                Auth::user()->course()->toggle([$course->id]);
            }
        }
        $coursA=array();
        $i=0;
        foreach(Auth::user()->cours as $cours){
            $coursA[$i]=$cours->id;
        }
        $Existusers = DB::table('cour_user')
            ->whereIn('cour_id', $coursA)
            ->where('user_id', Auth::user()->id)
            ->get();
        if(!isset($Existusers[0])){

            if(isset(Auth::user()->cours)){
                if(($couruser->user_id!=Auth::user()->id)&&($couruser->cour_id!=$id)){
                    if(pay($course,$id))
                        Auth::user()->course()->toggle([$course->id]);

                }
            }else{
                pay($course,$id);
            }
        }

        return view('all-courses',["courses"=>Auth::user()->cours]);
        /* if($course->coût_du_cours){
            // Create new payer and method
            $payer = new Payer();
            $payer->setPaymentMethod("paypal");

            // Set redirect URLs
            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl(route("course",['id'=>$course->id]))
            ->setCancelUrl(route("course",['id'=>$course->id]));

            // Set payment amount
            $amount = new Amount();
            $amount->setCurrency("USD")
            ->setTotal($course->coût_du_cours);

            // Set transaction object
            $transaction = new Transaction();
            $transaction->setAmount($amount)
            ->setDescription('paiement effectué pour '.$course->title.', montant '.$course->coût_du_cours.' par '.Auth::user()->nom_utilisateur);

            // Create the full payment object
            $payment = new Payment();
            $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
            $apiContext = new ApiContext(
                new OAuthTokenCredential(
                    config("paypal.client_id"),
                    config("paypal.secret")
                )
            );
            try {
                dd($payment->create($apiContext));
                // Get PayPal redirect URL and redirect the customer
                //$approvalUrl = $payment->getApprovalLink();

                // Redirect the customer to $approvalUrl
            } catch (PayPal\Exception\PayPalConnectionException $ex) {
                echo $ex->getCode();
                echo $ex->getData();
                die($ex);
            } catch (Exception $ex) {
               dd($ex->getMessage());
            }*/
    }


    /**
     * Show the form for creating a new course.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminmycourse()
    {

        if(isset(Auth::user()->enseignant->id)){
            return view('admin-courses',["courses"=>Course::where('enseignant_id',Auth::user()->enseignant->id)->firstOrFail()->get()]);
        }else{
            return view("dashboard");
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $cour
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin-courses',["courses"=>Course::All()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $cour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $cour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $cour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $cour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $cour)
    {
        //
    }
}
