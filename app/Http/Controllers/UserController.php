<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users;
    public function index()
    {
        return view('admin.user.index');
    }

    public function createUser(Request $request)
    {
        User::newUser($request);
        return redirect('/admin/add-user')->with('message', 'User Info Save Successfully.');
    }

    public function manage()
    {
        $this->users = User::orderBy('id', 'desc')->get();
        return view('admin.user.manage', ['users' =>$this->users]);
    }

    public function edit()
    {

    }
    public function delete()
    {

    }


}
