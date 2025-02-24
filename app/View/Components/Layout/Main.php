<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{

    /*
     * The navbar items
     */
    public array $navItems = [
        ['route' => 'home', 'title' => 'Home'],
        ['route' => 'about', 'title' => 'About'],
        ['route' => 'dashboard.index', 'title' => 'Dashboard'],
        ['route' => 'posts.index', 'title' => 'Blog'],
        ['route' => 'projects.index', 'title' => 'FAQ'],
        ['route' => 'tasks.index', 'title' => 'Tasks'],
        ['route' => 'converter', 'title' => 'Converter']
    ];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.main');
    }
}
