<?php
/**
 * Created by PhpStorm.
 * User: x4017
 * Date: 2016/12/6
 * Time: 下午 10:09
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function getUser(Request $request)
    {
        try {
            $this->validate($request, [
            'user_name' => 'required',
            'password' => 'required'
            ]);
        } catch (\Exception $e) {
            return 'error';
        }

        $user_name = $request->input('user_name');
        $pwd = $request->input('password');

    }

}