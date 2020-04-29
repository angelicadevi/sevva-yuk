<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('v1/login');
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

        $data = Admin::select('select fname from admin where username=? and password=?',[$username, $password]);
        if($data){ //apakah email tersebut ada atau tidak
            //echo"hi";
            //if(Hash::check($password,$data->password)){
            //    Session::put('fname',$data->fname);
            //    Session::put('lname',$data->lname);
            //    Session::put('username',$data->username);
            //    Session::put('login',TRUE);
            return redirect('v1/home');
            //}
            //else{
            //    return redirect('v1/login')->with('alert','Check your username or password!');
            //}
        }
        else{
            return redirect('v1/login')->with('alert','password!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('alert','You have been loged out');
    }

    public function index()
    {
        return view('v1/home');
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