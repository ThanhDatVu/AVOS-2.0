<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Platform\Models\User;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Layouts\Rows;

class UserPasswordLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        /** @var User $user */
        $user = $this->query->get('user');
        $placeholder = $user->exists
            ? __('Để trống để không thay đổi mật khẩu')
            : __('Nhập mật khẩu tại đây');

        return [
            Password::make('user.password')
                ->placeholder($placeholder)
                ->title(__('Password')),
        ];
    }
}
