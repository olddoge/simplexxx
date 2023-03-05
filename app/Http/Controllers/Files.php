<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

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


    /**
     * 表格数据
     * @return JsonResponse
     */
    public function fileList(): JsonResponse
    {
        $response = [
            'code'  => 0,
            'msg'   => '',
            'count' => 100,
            'data'  => [
                [
                    'id'        => 1,
                    'file'      => '20201208_樱坂46 Debut Countdown Live!!(中字).mp4',
                    'name'      => '樱坂46 Debut Countdown Live',
                    'extension' => 'mp4',
                    'path'      => '/Volumes/idol/01 - LIVE/櫻坂46/2020 年/20201208_樱坂46 Debut Countdown Live!!(中字).mp4',
                    'category'  => 2,
                    'status'    => 1,
                    'uid'       => 'xxx'
                ],
                [
                    'id'        => 2,
                    'file'      => '别对映像研出手 (2020).mp4',
                    'name'      => '别对映像研出手 (2020)',
                    'extension' => 'mp4',
                    'path'      => '/volume2/idol/04 - 电影/乃木坂46/别对映像研出手 (2020)/别对映像研出手 (2020).mp4',
                    'category'  => 1,
                    'status'    => 0,
                    'uid'       => 'xxx'
                ],
                [
                    'id'        => 3,
                    'file'      => '别对映像研出手 (2020).mp4',
                    'name'      => '别对映像研出手 (2020)',
                    'extension' => 'mp4',
                    'path'      => '/volume2/idol/04 - 电影/乃木坂46/别对映像研出手 (2020)/别对映像研出手 (2020).mp4',
                    'category'  => 3,
                    'status'    => 0,
                    'uid'       => 'xxx'
                ],
                [
                    'id'        => 4,
                    'file'      => '别对映像研出手 (2020).mp4',
                    'name'      => '别对映像研出手 (2020)',
                    'extension' => 'mp4',
                    'path'      => '/volume2/idol/04 - 电影/乃木坂46/别对映像研出手 (2020)/别对映像研出手 (2020).mp4',
                    'category'  => 4,
                    'status'    => 0,
                    'uid'       => 'xxx'
                ],
            ]
        ];
        return response()->json($response);
    }

}
