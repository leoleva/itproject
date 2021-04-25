<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class AdminAppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('admin.layout.app');
    }
}