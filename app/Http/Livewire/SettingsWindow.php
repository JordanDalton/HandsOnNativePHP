<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Native\Laravel\Facades\Window;

class SettingsWindow extends Component
{
    public function render()
    {
        return view('livewire.settings-window');
    }

    public function closeWindow()
    {
        Window::close('settings');
    }

    public function resizeWindow()
    {
        Window::resize(400, 300, 'settings');
    }
}
