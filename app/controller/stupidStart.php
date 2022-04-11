<?php

namespace app\controller;

use support\Redis;
use support\Request;

class stupidStart
{
    public function index(Request $request)
    {
        $channel = "stupidChannel";
        $res = Redis::subscribe($channel, function ($instance, $channelName, $message) {
            echo  $message;
        });
    }

    public function pub(Request $request){
        $channel = "stupidChannel";
        $res = Redis::publish($channel, 'dsb');
        return response($res);
    }
}
