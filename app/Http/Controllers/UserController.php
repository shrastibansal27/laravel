<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\MessageBag;
use Illuminate\Contracts\Validation\Factory;
use App\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function save(Request $request)
    {
    	$user = new User;
    	$this->validate($request,['email'=>'required']);
    	//$validator = Validator::make(['email'=>'required'],['required'=>'Email is mandatory']);
    	// $user->username = $request->username;
     //    $user->email = $request->email;
     //    $user->fname = $request->fname;
     //    $user->lname = $request->lname;
    	// $user->password = bcrypt($request['password']);

        $username = $request->username;
        $email = $request->email;

        $data = [];

        $user_arr = compact('username','email');
        Storage::put('file.txt',$user_arr);
        $get = Storage::get('file.txt');

         if($get != ''){
             $data  = json_decode($get);
             $data[] = $user_arr;
         }
         else{
            $data[] = $user_arr;
         }

            $final_arr = json_encode($data);
            $output = Storage::put('file.txt',$final_arr);

       
            $get = Storage::get('file.txt');
            $arr = json_decode($get);

die;
    	$user->save();
    	if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }

   		return redirect('/user');
    }
   
    public function destroy($id)
    {
    	User::find($id)->delete();
    	return redirect('/user');
    }
    public function index(Request $request)
    {

        /*  Pagination with Eloquent Model*/

        // $users = User::paginate(2);
        // return view('user/userlist',compact('users'));


		$page = (int) $request->input('page') ?: 1;

    	$users = User::all();
		$onPage = 2;
		$slice = $users->slice(($page-1)* $onPage, $onPage);
		$paginator = new \Illuminate\Pagination\LengthAwarePaginator($slice, $users->count(), $onPage);
    	return view('user/userlist')->with('users', $paginator);


    }
    public function edit(Request $request ,$id)
    {

    $user = User::find($id);
    $user->id = $id;
    $user->username = $user['username']?$user->username:'';
    $user->email = $user['email'] ? $user->email : '';
    $user->fname = $user['fname'] ? $user->fname : '';
    $user->lname = $user['lname'] ? $user->lname : '';
    //dd($user->username);
     return view('user/edit',compact('user'));
    }

    public function update(Request $request ,$id)
    {
    	$post = User::find($id);
    	$post->username = $request->username;
    	$post->email = $request->email;
    	$post->fname = $request->fname;
    	$post->lname = $request->lname;

    	$post->save();
   		return redirect('/user');

    }
    public function store(Request $request){

        $sub_category = $request->sub_category;
        $sub_category_info = $request->sub_category_info;

        $sub_cat_arr = compact('sub_category','sub_category_info');

        Storage::put('subcat.txt',$sub_cat_arr);
        $file_data = Storage::get('subcat.txt');

        $sub_arr = [];

        if($file_data != ''){

         $sub_arr  = json_decode($file_data);
         $sub_arr[] = $sub_cat_arr;

        }else{

        $sub_arr[] = $sub_cat_arr;

        }
            $final_arr = json_encode($sub_arr);
            $output = Storage::put('subcat.txt',$final_arr);

       
           
        return redirect('/user');


    }
}
