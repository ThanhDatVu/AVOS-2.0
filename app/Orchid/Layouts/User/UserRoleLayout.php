<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class UserRoleLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Select::make('user.role.')
                ->options([
                    'student'   => 'student',
                    'teacher'   => 'teacher',
                    'administrator' => 'administrator',
                ])
                ->title(__('Xác định Role'))
                ->help('Xác định Role của người dùng này')


        ];
    }
}
