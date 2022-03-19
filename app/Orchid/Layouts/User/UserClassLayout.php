<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use App\Models\Category;
use App\Models\Exam;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class UserClassLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [


            Select::make('user.class.')
                ->title('Select')
                ->options([
                    'AT14'   => 'AT14',
                    'AT15'   => 'AT15',
                    'AT16' => 'AT16',
                ])
                ->title(__('Xác định nhóm'))
                ->help('Xác định nhóm của người dùng này'),
        ];
    }
}
