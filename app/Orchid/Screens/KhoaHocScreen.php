<?php

namespace App\Orchid\Screens;

use App\Models\Course;
use App\Orchid\Layouts\Course\CourseListLayout;
use Illuminate\Http\Request;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class KhoaHocScreen extends Screen
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
            'courses' => Course::with('teacher')
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
            Link::make(__('Thêm khoá học mới '))
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
            CourseListLayout::class
        ];
    }

    public function remove(Request $request): void
    {
        Course::findOrFail($request->get('id'))
            ->delete();

        Toast::info(__('User was removed'));
    }
}
