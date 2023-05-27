<div>
    <div class="col-md-12">
        <label for="devi_id">Projet :</label>
    <select class="form-select" id="devi_id" name="devi_id" wire:model="devi_id">
        <option value="">Select Devi</option>
        @foreach ($devis as $devi)
            <option value="{{ $devi->id }}">{{ $devi->nom_devi }}</option>
        @endforeach
    </select>
</div>

<div class="col-md-12"> 
    <label for="ouvrage_id">Ouvrage :</label>
<select class="form-select" id="ouvrage_id" name="ouvrage_id">
        <option value="">Select Article</option>
        @foreach ($articles as $article)
            <option value="{{ $article->id }}">{{ $article->designation_ouvrage }}</option>
        @endforeach
    </select>
</div>   
</div>
