<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent1() {
        // resources/views から見たパス
        // return view('test.component-test1');
        // 'test.component-test1' => 'test/component-test1';

        $controllMessage = 'メッセージ';
        return view('test.component-test1',
        compact('controllMessage'));
    }
    public function showComponent2() {
        return view('test.component-test2');

    }
    //
}
