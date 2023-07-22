<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Facades\Window;

class Windows extends Component
{
    public function render()
    {
        return view('livewire.windows');
    }

    public function openWindow()
    {
        Window::open('settings')->route('settings')->width(800)->height(800);
    }

    public function openWindowWithSizeRestrictions()
    {
        Window::open('settings')
            ->minWidth(400)
            ->minHeight(400)
            ->maxWidth(800)
            ->maxHeight(800)
            ->url('https://nativephp.com');
    }

    public function openWindowToUrl()
    {
        Window::open('settings')->url('https://nativephp.com');
    }

    public function changePositioning()
    {
        Window::open('settings')
            ->route('settings')
            ->width(800)
            ->height(800)
            ->position(100, 100);
    }

    public function notResizeable()
    {
        Window::open('settings')
            ->route('settings')
            ->width(800)
            ->height(800)
            ->resizable(false);
    }

    public function nonMovable()
    {
        Window::open('settings')
            ->route('settings')
            ->movable(false);
    }

    public function noShadow()
    {
        Window::open('settings')
            ->route('settings')
            ->hasShadow(false);
    }
}
