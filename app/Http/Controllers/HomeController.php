<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }



    public function store(Request $request)
    {

        dd($request);
        echo $name = $request->input('name');

    }

    public function show()
    {

        echo 'show';

    }
     public function update()
    {

        echo 'update';

    }
     public function destroy()
    {

        echo 'show';

    }

    public function edit()
    {

        echo 'edit';
    }
}
