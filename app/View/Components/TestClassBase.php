<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $classBaseMessags;
    public $defaultMessage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // construct... 変数の初期値
    public function __construct($classBaseMessags, $defaultMessage="メッセージの初期値")
    {
        $this->classBaseMessags = $classBaseMessags;
        $this->defaultMessage = $defaultMessage;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // resorces/views/
        return view('components.tests.test-class-base');
    }
}
