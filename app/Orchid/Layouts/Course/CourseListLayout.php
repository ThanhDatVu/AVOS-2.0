<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Course;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Course;

class CourseListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'courses';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', __('Tên'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Course $course) {
                    return $course->title;
                }),

            TD::make('teacher', __('Người tạo'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (course $course) {
                    return ModalToggle::make($course->teacher->user->fullname)
                        ->modal('oneAsyncModal')
                        ->modalTitle($course->title)
                        ->method('savecourse')
                        ->asyncParameters([
                            'Course' => $course->id,
                        ]);
                }),
            TD::make('category', __('Danh mục'))
                ->sort()
                ->render(function (Course $course) {
                    return $course->category;
                }),
            TD::make('category', __('Số học viên'))
                ->sort()
                ->render(function (Course $course) {

                    $userIds1 = DB::table('course_user')->where('course_id', $course->id)->pluck('user_id');
                    $userIds2 = DB::table('users')->where('class', $course->category)->pluck('id');
                    $userIds =$userIds1->merge($userIds2);
                    return $userIds->count();
                }),

            TD::make('updated_at', __('Cập nhật lần cuối'))
                ->sort()
                ->render(function (Course $course) {
                    return $course->updated_at->toDateTimeString();
                }),

            TD::make(__('Chỉnh sửa'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Course $course) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([


                            Link::make(__('Xem danh sách học viên'))
                                ->route('course-users', $course->id)
                                ->icon('eye'),
                            Link::make(__('Xem danh sách kết quả'))
                                ->route('course-user-results', $course->id)
                                ->icon('eye'),
                            Link::make(__('Xem các bài học'))
                                ->route('platform.systems.courses.lesson', $course->id)
                                ->icon('pencil'),
                            Link::make(__('Xem các bài kiểm tra'))
                                ->route('platform.systems.courses.exam', $course->id)
                                ->icon('pencil'),

                            Button::make(__('Xoá'))
                                ->icon('trash')
                                ->confirm(__('Khoá học này sẽ bị xoá vĩnh viễn và không thể phục hồi'))
                                ->method('remove', [
                                    'id' => $course->id,
                                ]),
                        ]);
                }),
        ];
    }
}
