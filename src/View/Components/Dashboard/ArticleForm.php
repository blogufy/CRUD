<?php

namespace Blogufy\Crud\View\Components\Dashboard;

use Illuminate\View\Component;

class ArticleForm extends Component
{
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $editArticle = false)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('blogufy::components.dashboard.article-form');
    }
}
