<div class="form-group" wire:ignore>
    <label class="font-weight-bold" for="file">Ajouter un mot clé</label>
    <select wire:model="new_tag" class="form-control selectpicker" data-live-search="true" title="Ajoutez un mot clé...">
        @foreach($tags as $t)
            <option value="{{ $t->id }}">{{ $t->name }}</option>
        @endforeach
    </select>
</div>
