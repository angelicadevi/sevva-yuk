<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        return view('v1/register');
    }

    public function registerPost(Request $request)
    {
        //echo"hi";
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required|unique:admins',
            'password' => 'required|min:8'
        ]);
        $data = new Admin();
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save();
        //Admin::create($admin);
        return redirect('/admin') -> with('success', 'You have been registered');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        return view('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = ModelAdmin::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('username',$data->name);
                Session::put('login',TRUE);
                return redirect('/home');
            }
            else{
                return redirect('/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('alert','You have been loged out');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}