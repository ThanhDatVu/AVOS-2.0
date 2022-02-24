<?php

namespace App\Orchid\Screens;

use App\Models\Course;
use App\Models\Result;
use App\Orchid\Layouts\Course\CourseListLayout;
use Illuminate\Http\Request;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class BaiHocScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Danh sách Khoá học';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'lessons' => ::with('teacher')
                ->paginate(),


        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make(__('Thêm bài học mới '))
                ->icon('plus')
                ->route('make-new-course'),

        ];
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
                TD::make('name', __('Tên bài học'))
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

    public function remove(Request $request): void
    {
        Course::findOrFail($request->get('id'))
            ->delete();

        Toast::info(__('User was removed'));
    }
}
