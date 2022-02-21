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
use App\Models\Category;

class CourseCategoryListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'category';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', __('ID'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Category $category) {
                    return $category->id;
                }),
            TD::make('name', __('Tên'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Category $category) {
                    return $category->name;
                }),



            TD::make('updated_at', __('Cập nhật lần cuối'))
                ->sort()
                ->render(function (Category $category) {
                    return $category->updated_at->toDateTimeString();
                }),

            TD::make(__('Chỉnh sửa'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Category $category) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                //->route('platform.systems.users.edit', $course->id)
                                ->icon('pencil'),

                            Button::make(__('Xoá'))
                                ->icon('trash')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->method('remove', [
                                    'id' => $category->id,
                                ]),
                        ]);
                }),
        ];
    }
}
