<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use App\Models\Course;
use App\Models\Exam;
use App\Models\Lesson;
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


class LessonListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Bài giảng ';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Bài giảng của khoá học';

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


        $lessons = Lesson::all()->where("course_id", $course->id);




        return [
            'lessons' => $lessons,

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


            Button::make(__('Remove'))
                ->icon('trash')
                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                ->method('remove')
                ->canSee($this->course->exists),


        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::table('lessons', [
                TD::make('name', __('Tên khoá học'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Lesson $lesson) {
                        return $lesson->title;
                    }),
                TD::make('description', __('Tên bài kiểm tra'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Lesson $lesson) {
                        return $lesson->descriptif;
                    }),

                TD::make('pdf', __('Tài liệu đính kèm'))
                    ->sort()
                    ->cantHide()
                    ->filter(Input::make())
                    ->render(function (Lesson $lesson) {
                        return $lesson->file;
                    }),

                TD::make('updated_at', __('Last edit'))
                    ->sort()
                    ->render(function (Lesson $lesson) {
                        return $lesson->updated_at->toDateTimeString();
                    }),
                TD::make(__('Chỉnh sửa'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Lesson $lesson) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([

                                Link::make(__('Edit'))
                                    ->route('edit-lesson', $lesson->id)
                                    ->icon('pencil'),
                                //todo




                                Button::make(__('Xoá'))
                                    ->icon('trash')
                                    ->confirm(__('Bài giảng này sẽ bị xoá vĩnh viễn và không thể phục hồi'))
                                    ->method('remove', [
                                        'id' => $lesson->id,
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
