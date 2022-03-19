<?php

namespace App\Orchid\Screens;

use App\Models\Category;
use App\Orchid\Layouts\Course\CourseCategoryListLayout;
use Orchid\Screen\Screen;

class DanhMucKhoaHocScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Danh sách danh mục các khoá học';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'category' => Category::paginate()
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
            CourseCategoryListLayout::class,


        ];
    }
}
