<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public $username;
    public $src;
    public function __construct(string $username, string $src)
    {
        $this->username = $username;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-header');
    }
}
