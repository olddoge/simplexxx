<?php

namespace App\Http\Controllers;

use Illuminate\Http\ {
    Request,
    JsonResponse
};

class Init extends Controller
{
    /**
     * 输出菜单
     * @return JsonResponse
     */
    public function menu(): JsonResponse
    {
        $response = [
            'homeInfo' => [
                'title' => '首页',
                'href'  => '/welcome'
            ],
            'logoInfo' => [
                'title' => 'Mini',
                'image' => asset('images/logo.png')
            ],
            'menuInfo' => [
                [
                    'title'  => '常规管理',
                    'icon'   => 'fa fa-address-book',
                    'href'   => '',
                    'target' => '_self',
                    'child'  => [
                        [
                            'title'  => '文件索引',
                            'href'   => '',
                            'icon'   => 'fa fa-magnet',
                            'target' => '_self',
                            'child'  => [
                                [
                                    'title'  => '扫描文件',
                                    'href'   => route('scan_file'),
                                    'icon'   => 'fa fa-film',
                                    'target' => '_self'
                                ],
                                [
                                    'title'  => '文件清单',
                                    'href'   => route('file_list'),
                                    'icon'   => 'fa fa-tv',
                                    'target' => '_self'
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'title'  => '常规管理',
                    'icon'   => 'fa fa-address-book',
                    'href'   => 'page/icon.html',
                    'target' => '_self',
                ]
            ]
        ];
        return response()->json($response);
    }

    /**
     * 清空缓存
     * @return JsonResponse
     */
    public function clear(): JsonResponse
    {
        $response = [
            'code' => 1, 'msg' => '成功'
        ];
        return response()->json($response);
    }

}
