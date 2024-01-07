<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DepartmentPage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $pageTitle;
    public $pageBreadcrumb;
    public $professors;
    public $programs;

    public function __construct($title, $pageTitle,$pageBreadcrumb, $professors, $programs ) 
    {
        $this->title = $title;
        $this->pageTitle= $pageTitle;
        $this->$pageBreadcrumb = $pageBreadcrumb;
        $this->professors = $professors;
        $this->programs = $programs;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.department-page');
    }
}
