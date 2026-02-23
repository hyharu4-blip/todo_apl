<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

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
        // 20260223 開発演習6 yomura haruto add s
        $nocomplete = Task::where('user_id', Auth::id())
                            ->where('finish_flg',0)
                            ->count();
        // 20260223 開発演習6 yomura haruto add e

        // 20260223 開発演習6 yomura haruto mod s
        // return view('home');
        return view('home', compact('nocomplete'));
        // 20260223 開発演習6 yomura haruto mod e
    }
}
