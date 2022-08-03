<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    public $title;
    public $content;
    public function render()
    {
        // $article = Article::all();
        return view('livewire.create-post');
    }

    public $rules = [
        'title' => 'required|min:6',
        'content' => 'required'
    ];

    public function createArticle()
    {
        $this->validate();
        // dd($validateData);

        Article::create([
            'users_id' => Auth::user()->id,
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->title = "";
        $this->content = "";

        session()->flash('message', 'Successfully added article');

        $this->emit('articleCreated');
    }
}
