<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

class DeleteUser
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $user = User::find($args['id']);
        $status = $user->delete();

        return [
            'status' => $status,
            'message' => 'User has been deleted !!!'
        ];
    }
}
