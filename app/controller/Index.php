<?php

namespace app\controller;

use support\Request;

class Index
{
    public function index(Request $request)
    {
        $a = 'a stupid friend';
        return response($a);
    }
}
