<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Course;


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

                            Link::make(__('Edit'))
                                ->route('edit-course', $course->id)
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
