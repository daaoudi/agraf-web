<?php

namespace App\Http\Livewire;

use App\Models\Devi;
use App\Models\Ouvrage;
use Livewire\Component;

class ProjectArticleForm extends Component
{
    public $projectId;
    public $articles;

    public function render()
    {
        if ($this->projectId) {
            $project = Devi::find($this->projectId);
            // dd($project->ouvrages);
            $articles = $project->ouvrages;
            $this->articles = $articles;

        } else {
            $this->articles = [];
        }

        $devis = Devi::all();


        return view('livewire.project-article-form', compact('devis'));
    }
}
