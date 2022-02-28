<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use App\Models\Course;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\courseSwitch;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ExamListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Bài kiểm tra ';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Bài kiểm tra của khoá học';

    /**
     * @var string
     */


    /**
     * @var Course
     */
    private $course;

    /**
     * Query data.
     *
     * @param Course $course
     *
     * @return array
     */
    public function query(Course $course): array
    {
        $this->course = $course;


        $exams = Exam::all()->where("course_id", $course->id);


        return [
            'exams' => $exams,

        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make(__('Thêm bài kiểm tra'))
                ->icon('plus')
                ->route('make-new-exam')
                ->canSee($this->course->exists),




        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::table('exams', [
                TD::make('name', __('Tên bài kiểm tra'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Exam $exam) {
                        return $exam->title;
                    }),
                TD::make('description', __('Mô tả'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Exam $exam) {
                        return $exam->description;
                    }),

                TD::make('number_of_questions', __('Số câu hỏi'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Exam $exam) {
                        return $exam->number_of_questions;
                    }),

                TD::make('updated_at', __('Last edit'))
                    ->sort()
                    ->render(function (Exam $exam) {
                        return $exam->updated_at->toDateTimeString();
                    }),
                TD::make(__('Chỉnh sửa'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Exam $exam) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([

                                Link::make(__('Edit'))
                                    ->route('platform.systems.courses.lesson', $exam->id)
                                    ->icon('pencil'),
                                Link::make(__('Xem các câu hỏi'))
                                    ->route('platform.systems.courses.lesson', $exam->id)
                                    ->icon('eye'),
                                Link::make(__('Xem danh sách điểm'))
                                    ->route("show-all-exam-result",["examid"=>$exam->id])
                                    ->icon('eye'),



                                Button::make(__('Xoá'))
                                    ->icon('trash')
                                    ->confirm(__('Bài kiểm tra này sẽ bị xoá vĩnh viễn và không thể phục hồi'))
                                    ->method('remove', [
                                        'id' => $exam->id,
                                    ]),
                            ]);
                    }),

            ]),


        ];
    }


    /**
     * @param course $course
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Course $course)
    {
        $course->delete();

        Toast::info(__('course was removed'));

        return redirect()->route('platform.systems.courses');
    }


}
