<?php

declare(strict_types=1);

namespace App\Orchid\Screens\User;

use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\UserSwitch;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
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
use App\Models\Result;

class UserGradeScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Điểm số cá nhân';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Điểm số cá nhân từng khoá học của người dùng';

    /**
     * @var string
     */
    public $permission = 'platform.systems.users';

    /**
     * @var User
     */
    private $user;

    /**
     * Query data.
     *
     * @param User $user
     *
     * @return array
     */
    public function query(User $user): array
    {
        $this->user = $user;
        $results = Result::all()->where('user_id', $user->id);

        $user->load(['roles']);

        return [
            'results' => $results,
            'user' => $user,
            'permission' => $user->getStatusPermission(),
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
            Button::make('Xuất ra CSV')
                ->method('export')
                ->icon('cloud-download')
                ->rawClick()
                ->novalidate(),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::table('results', [
                TD::make('name', __('Tên khoá học'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Result $result) {
                        return $result->exam->course->title;
                    }),
                TD::make('name', __('Tên bài kiểm tra'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Result $result) {
                        return $result->exam->title;
                    }),

                TD::make('point', __('Điểm số'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Result $result) {
                        return $result->points . '/' . $result->exam->number_of_questions;
                    }),

                TD::make('updated_at', __('Last edit'))
                    ->sort()
                    ->render(function (Result $result) {
                        return $result->updated_at->toDateTimeString();
                    })


            ]),


        ];
    }

    /**
     * @param User $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(User $user, Request $request)
    {
        $request->validate([
            'user.email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($user),
            ],
        ]);

        $permissions = collect($request->get('permissions'))
            ->map(function ($value, $key) {
                return [base64_decode($key) => $value];
            })
            ->collapse()
            ->toArray();

        $userData = $request->get('user');
        if ($user->exists && (string)$userData['password'] === '') {
            // When updating existing user null password means "do not change current password"
            unset($userData['password']);
        } else {
            $userData['password'] = Hash::make($userData['password']);
        }

        $user
            ->fill($userData)
            ->fill([
                'permissions' => $permissions,
            ])
            ->save();

        $user->replaceRoles($request->input('user.roles'));

        Toast::info(__('User was saved.'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(User $user)
    {
        $user->delete();

        Toast::info(__('User was removed'));

        return redirect()->route('platform.systems.users');
    }

    public function export(User $user)
    {
        $results = Result::all()->where('user_id', $user->id);
        $data = collect([
        ]);
        foreach ($results as $result) {
            $data->push([$result->exam->course->title,$result->exam->title,$result->points . ' trên ' . $result->exam->number_of_questions]);
        }

        return response()->streamDownload(function () use ($data) {

            $csv = tap(fopen('php://output', 'wb'), function ($csv) {
                fputcsv($csv, ['Tên khoá học ', 'Tên bài kiểm tra ' , 'Điểm số ']);
            });
            $data->each(function (array $row) use ($csv) {
                fputcsv($csv, $row);
            });

            return tap($csv, function ($csv) {
                fclose($csv);
            });
        }, 'Điểm số cá nhân '.$user->fullname.'.csv');
    }
}
