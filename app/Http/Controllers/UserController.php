<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //  
    public function login(){
        return redirect('login');
    }
   
        public function authentication(Request $request)
        {
            $validatedata = $request->validate([
                'email' => ['required', 'email'],
                'password' => 'required'
            ]);
            if (Auth::attempt($validatedata)) {
                return redirect('home');   
            }
                return redirect()->back()->with('pesan', 'Maaf login Anda gagal');
            
        }
        public function index(){
            return view('home');
        }
        public function loginoption() {
            return view('login');
        }
        public function adminn() {
            return view('admin.dashboard.index');
        }

        public function home2() {
            return view('home2');
        }

        public function admin() {
            return view('adminn');
        }

        public function detail() {
            return view('detailproduk');
        }

        public function detailco() {
            return view('detailcowo');
        }

        public function about() {

            return view ('about');
        }

        public function detailcewe() {

            return view ('detailcewe');
        }



        // public function showindex() {
        //     return view('/indexx');
        // }

        
        function logout()
        {
            Auth::logout();
            return redirect('/');
        }
    }

