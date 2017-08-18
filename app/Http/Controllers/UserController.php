<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\MessageBag;
use Illuminate\Contracts\Validation\Factory;
use App\User;

class UserController extends Controller
{
    public function save(Request $request)
    {
    	$user = new User;
    	$this->validate($request,['email'=>'required']);
    	//$validator = Validator::make(['email'=>'required'],['required'=>'Email is mandatory']);
    	$user->username = $request->username;
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
    	$user->password = bcrypt($request['password']);
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
    public function index()
    {
    	$users = User::all();
    	// dd($users);
    	return view('user/userlist',compact('users'));
    	//return view('user/userlist');


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
}
