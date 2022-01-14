<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent1() {
        // resources/views から見たパス
        // return view('test.component-test1');
        // 'test.component-test1' => 'test/component-test1';
        return view('test.component-test1');
    }
    public function showComponent2() {
        return view('test.component-test2');

    }
    //
}
