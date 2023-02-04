<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    /**
     * 首页占位
     *
     * @return View
     */
    public function index(): View
    {
        return view('main/index');
    }
}
