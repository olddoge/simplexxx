<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class Files extends Controller
{
    public function scan()
    {
        return '扫描文件';
    }

    /**
     * 文件列表页面
     * @return View
     */
    public function index(): View
    {
        return view('files.index');
    }
}
