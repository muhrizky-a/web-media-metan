<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class Header extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('home.layout.header', [
            'categories' => $categories,
        ]);
    }
}
