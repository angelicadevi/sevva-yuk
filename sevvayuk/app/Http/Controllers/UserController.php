<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        return view('login');
    }
    public function loginPost()
    {
         $email = $request->string('email')->unique();
        $password = $request->string('password');

        $data = User::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            //echo"hi";
            $data = User::where('password',$password)->first();
            if($data){
                Session::put('email',$data->email);
                Session::put('password',$data->password);
                Session::put('login',TRUE);
            return redirect('home');
            }
            else{
                return redirect('login')->with('alert','Check your email or password!');
            }
        }
        else{
         return redirect('/')-> with('success', 'You have successfully logged in');
        }
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'noktp' => 'required',
            'notelp' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);
        $data = new User();
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->noktp = $request->noktp;
        $data->notelp = $request->notelp;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save();
        return redirect('/')-> with('success', 'You have been registered');
        
    }

   
}
