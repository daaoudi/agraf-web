<div>
    <div class="form-group">
        <label for="project">Select a Project:</label>
        <select wire:model="projectId" name="devi_id" class="form-control">
            <option value="">Select Project</option>
            @foreach($devis as $project)
                <option value="{{ $project->id }}">{{ $project->nom_devi }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="article">Select Article:</label>
        <select id="article" wire:loading wire:target="projectId" class="form-control">
            <option value="">Loading articles...</option>
        </select>
        <select id="article" wire:ignore wire:model="articles" name="ouvrage_id" wire:target="projectId" class="form-control">
            <option value="">Select Article</option>
            @foreach ($articles as $article)
                <option value="{{ $article->id }}">{{ $article->designation_ouvrage }}</option>
            @endforeach
        </select>
    </div>
    
</div>
