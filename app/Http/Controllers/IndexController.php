<?php
/**
 * Created by zxzTool.
 * User: zxz
 * Datetime: 2019/1/21 下午10:48
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redis;

class IndexController extends Controller {
    public function index(){
        $result = Redis::hgetall('rsc:fdToUid:hash');
        print_r($result);
        echo config('app.name');
        echo "zxz say hello--";
    }
}