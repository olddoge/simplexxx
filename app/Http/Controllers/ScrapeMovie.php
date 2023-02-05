<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ScrapeMovie extends Controller
{
    /**
     * 刮削页面
     * @return View
     */
    public function index(): view
    {
        return view('scrape.movie');
    }
}
