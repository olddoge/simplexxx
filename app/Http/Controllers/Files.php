<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Files extends Controller
{
    public function scan()
    {
        return '扫描文件';
    }

    public function index()
    {
        return '文件首页';
    }
}
