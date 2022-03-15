<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
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
