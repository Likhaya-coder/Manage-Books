<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $description;
    public $changeImage;
    public $src;
    
    public function __construct(string $title, string $description, string $changeImage, string $src)
    {
        $this->title = $title;
        $this->description = $description;
        $this->changeImage = $changeImage;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
