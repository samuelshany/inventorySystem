<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class employeeController extends Controller
{
    function signUpForm()
    {
        return view('employee/signUp');
    }
    function signUp(Request $request)
    {
        $user = new User();
        $user->email=$request->email;
        $user->name=$request->name;
        $user->password=Hash::make($request->password);
        $user->manager=$request->manager;
        $user->sales=$request->sales;
        $user->custumerService=$request->CS;
        $user->acountant=$request->Acountant;
        $user->hr=$request->HR;
        $user->save();
      return redirect('/loginForm');
    }
    function logout()
    {
        session()->flush();
        return redirect('/loginForm');
    }
    function loginForm()
    {
        return view('employee/login');
    }
  public function login(Request $request)
    {
        //dd($request->all());
        $credentials = array('email'=>$request->email,'password'=>$request->password);
        //dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
           return view('product/employee');
        }
        else
        {
            return "error";
        }
        /*$user=User::where('email',$request->email)->first();
        if($user->manager == true)
        {
            session()->put('manager',$user->email);
           // return redirect('/manager');
           return $this->managerr();
        }
        elseif(($user->sales == true)&&($user->acountant == true))
        {
            session()->put('sales&acountant',$user->email);
            return $this->SA();
        }
        elseif(($user->sales == true)&&($user->custumerService == true))
        {
            session()->put('sales&CS',$user->email);
            return $this->S_CS();
        }
        elseif($user->custumerService == true)
        {
            session()->put('CS',$user->email);
            return $this->CS();
        }
        elseif($user->hr == true)
        {
            session()->put('HR',$user->email);
            return $this->HR();
        }
        elseif($user->sales == true)
        {
            session()->put('sales',$user->email);
            return $this->sales();
        }
        elseif($user->acountant == true)
        {
            session()->put('acountant',$user->email);
            return $this->acountant();
        }
        else
        {
            return redirect('/loginForm');
        }*/
        
    }
    function managerr()
    {
        if(session()->has('manager'))
        {
            return view('home/manager');
        }
    }
    function sales()
    {
        if(session()->has('sales'))
        {
            return view('home/sales');
        }
    }
    function CS()
    {
        if(session()->has('CS'))
        {
            return view('home/CS');
        }
    }
    function HR()
    {
        if(session()->has('HR'))
        {
            return view('home/HR');
        }
    }
    function SA()
    {
        if(session()->has('sales&acountant'))
        {
            return view('home/sales&acountant');
        }
    }
    function S_CS()
    {
        if(session()->has('S-CS'))
        {
            return view('home/sales&CS');
        }
    }
    function acountant()
    {
        if(session()->has('acountant'))
        {
            return view('home/acountant');
        }
    }
}
