

<div>
    <div class="col-md-12">
        <label for="designation_ouvrage">designation d'ouvrage</label>
        <input list="designations" type="text" name="designation" wire:model="designation" class="form-control" id="designation_ouvrage" placeholder="Designation" required>

        @if (!empty($designations))
            <datalist id="designations">
                @foreach ($designations as $designation)
                    <option value="{{ $designation }}">
                @endforeach
            </datalist>
        @endif
    </div>
</div>
