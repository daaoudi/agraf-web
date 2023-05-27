<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Devi;

class ArticleSelection extends Component
{
    public $devi_id;
    public $articles;
    public $devis;

    public function mount($devis)
    {
        $this->devis = $devis;
    }

    public function render()
    {
        // Load the articles based on the selected devi_id
        if ($this->devi_id) {
            $devi = Devi::find($this->devi_id);
            $this->articles = $devi->ouvrages;
        } else {
            $this->articles = [];
        }

        return view('livewire.article-selection');
    }
}
