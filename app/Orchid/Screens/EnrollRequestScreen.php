<?php

namespace App\Orchid\Screens;

use App\Models\Course;
use App\Models\CourseUserRequest;
use App\Models\Lesson;
use App\Orchid\Layouts\Course\CourseCategoryListLayout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class EnrollRequestScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Yêu cầu tham gia khoá học';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'results' => CourseUserRequest::paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::table('results', [
                TD::make('name', __('Tên người dùng'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (CourseUserRequest $result) {
                        return $result->user->fullname;
                    }),
                TD::make('name', __('Tên khoá học'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (CourseUserRequest $result) {
                        return $result->course->title;
                    }),


                TD::make('updated_at', __('Thời gian'))
                    ->sort()
                    ->render(function (CourseUserRequest $result) {
                        return $result->updated_at->toDateTimeString();
                    }),
                TD::make(__('Thao tác'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (CourseUserRequest $result) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([

                                Button::make(__('Chấp thuận'))
                                    ->icon('check')
                                    ->confirm(__('Chấp nhận yêu cầu này?'))
                                    ->method('add', [
                                        'id' => $result->id,
                                    ]),
                                Button::make(__('Xoá'))
                                    ->icon('trash')
                                    ->confirm(__('xoá yêu cầu này'))
                                    ->method('remove', [
                                        'id' => $result->id,
                                    ]),
                            ]);
                    }),

            ]),


        ];
    }
    public function remove(CourseUserRequest $enrollRequest)
    {
        $enrollRequest->delete();

        Toast::info(__('Đã xoá thành công'));

        return redirect()->route('platform.systems.enrollrequest');
    }
    public function add(CourseUserRequest $enrollRequest)
    {
        DB::table('course_user')
            ->updateOrInsert(
                ['user_id' => $enrollRequest->user_id,
                    'course_id' => $enrollRequest->course_id]

            );
        $enrollRequest->delete();

        Toast::info(__('Đã thêm thành công'));

        return redirect()->route('platform.systems.enrollrequest');
    }
}
