<?php

namespace App\Orchid\Screens;

use App\Models\Course;
use App\Orchid\Layouts\Course\CourseListLayout;
use Orchid\Screen\Screen;

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
            CourseListLayout::class
        ];
    }
}
