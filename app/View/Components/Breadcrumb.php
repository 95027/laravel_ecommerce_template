<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $section;
    public $page;
    /**
     * Create a new component instance.
     */
    public function __construct($section, $page)
    {
        $this->section = $section;
        $this->page = $page;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumb');
    }
}
