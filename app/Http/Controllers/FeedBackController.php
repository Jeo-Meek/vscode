<?php

namespace App\Http\Controllers;

use App\User;

class FeedBackController extends Controller
{
    public function republic(User $user)
    {
        if ($user) {
            return $this->success()->with('已经成功登录');
        }

    }

}
