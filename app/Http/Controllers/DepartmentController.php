<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {

    	$depart = Department::all();
    	return view('system.departlist',compact('depart'));
   }
   public function create()
   {

   	echo 'create';
   	die;
   }
}
