<?php

namespace App\View\Components;

use App\Models\ArticlePageView;
use Illuminate\View\Component;


class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $popular_articles = ArticlePageView::with(['article'])
            ->get()
            ->groupBy('article_id')
            ->sortByDesc(function ($h) {
                return $h->count();
            })->take(5);
            
        return view('home.layout.sidebar', [
            'popular_articles' => $popular_articles,
        ]);
    }
}
