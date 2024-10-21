<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    const PATH_VIEW  = 'admin.users.';
    const PATH_UPlOAD = 'users';
    public function index()
    {
        // echo 1; die();
        $data = User::query()->latest('id')->get();
        // dd($data);
        return view(self::PATH_VIEW. __FUNCTION__ , compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW. __FUNCTION__ , compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view(self::PATH_VIEW. __FUNCTION__ , compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
