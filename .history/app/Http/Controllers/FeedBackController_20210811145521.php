<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request
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
