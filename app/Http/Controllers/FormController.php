<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return View
     */
    public function form()
    {
        return view('form');
    }

    public function save()
    {
        $users = DB::select('select * from test where name = "Nikolaj"');
        var_dump($users);
        return view('form');
    }
}