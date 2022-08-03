<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListArticle extends Component
{
    public $updateArticleID = 0;
    public $title;
    public $content;

    protected $listeners = [
        'articleCreated' => '$refresh'
    ];

    public function render()
    {

        $article = Article::where('users_id', Auth::user()->id)->get();
        // dd($article);
        return view('livewire.list-article', compact('article'));
    }

    public function editArticle($articleID)
    {
        $article = Article::find($articleID);
        $this->title = $article->title;
        $this->content = $article->content;
        $this->updateArticleID = $articleID;
    }

    public function updateArticle($articleID)
    {
        $article = Article::find($articleID);
        $article->title = $this->title;
        $article->content = $this->content;
        $article->save();
        $this->updateArticleID = '';
    }

    public function deleteArticle(Article $articleID)
    {
        // dd($articleID);
        // $article = Article::find($articleID);
        // $article->delete();
        $articleID->delete();
    }
}
