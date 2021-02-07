<?php

namespace App\Http\Controllers;

use App\Models\Username;
use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function createUserForm()
    {
        return view('create_user');
    }
    public function createUserThank()
    {
        return view('create_user_post');
    }

    public function createUserPost(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|alpha_num|min:6|max:10|unique:usernames',
            'password' => 'required|min:6',
        ]);

        $username = $request->username;
        $password = $request->password;


        Username::create([
            'username' => $username,
            'password' => $password,
        ]);

        DB::statement("create user if not exists '$username'@'%' identified by '$password';");
        DB::statement("grant 'student_role_1' to '$username'@'%';");
        DB::statement("set default role 'student_role_1' to '$username'@'%';");
        DB::statement("flush privileges;");
        return redirect()->route('create.user.thank')
                        ->with([
                            'username' => $username,
                            'password' => $password
                        ]);
    }
}
