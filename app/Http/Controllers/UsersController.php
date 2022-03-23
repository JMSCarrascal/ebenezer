<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        // $users = new User();
        // $users = $request->orderBy('id','DESC')->paginate(10);
        // return view('admin.users.index', compact('users'));
        $users = User::all();
        return view('admin.users.index', compact('users'));

    }

    public function create()
    {
        return ("Aqui puedes crear un usario");
    }

    public function store(Request $request)
    {
        return ("Aqui puedes almacenar un usario");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
