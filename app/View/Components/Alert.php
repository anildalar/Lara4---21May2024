<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    //1. Property/variable
    public $msg='';

    //2. Constructor
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type)
    {
        
        //The role of constructor is to initialize the properties
        $this->msg='A simple success alert—check it out!123123';
    }

    //3. Method
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert'); // resource/views/components/components/alert.blade.php
    }
}
