<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <--- 1. Phải thêm dòng này để dùng được Auth::

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function logout()
    {
        // Không cần if(Auth::check()) vì nếu chưa login thì middleware đã chặn rồi
        Auth::logout();
        
        // <--- 2. Phải có chữ 'return' ở đầu dòng này
        return redirect('/login'); 
    }
}