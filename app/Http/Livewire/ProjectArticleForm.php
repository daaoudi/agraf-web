<?php

namespace App\Http\Livewire;

use App\Models\Devi;
use App\Models\Ouvrage;
use Livewire\Component;

class ProjectArticleForm extends Component
{
    public $projectId;
    public $articles = [];

    public function updatedProjectId()
    {
        if ($this->projectId) {
            $project = Devi::find($this->projectId);
            // dd($project->ouvrages);
            $this->articles = $project ? $project->ouvrages : [];
        } else {
            $this->articles = [];
        }
    }

    public function mount()
    {
        $this->articles = [];
    }

    public function render()
    {
        $devis = Devi::all();

        return view('livewire.project-article-form', compact('devis'));
    }
}
