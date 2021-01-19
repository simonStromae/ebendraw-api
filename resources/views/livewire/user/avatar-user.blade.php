<div>
    <div class="d-flex justify-content-center">
        <img class="rounded-circle" src="{{ show_avatar() }}" alt="" width="200px" height="200px">
    </div>

    <form wire:submit.prevent="update_avatar_user" class="d-flex justify-content-center align-items-center">
        <div class="form-group">
            <input wire:model.lazy="avatar" type="file" id="photo"  class="@error('avatar') is-invalid @enderror mt-3 mb-3 form-control-file border-0">
            @error('avatar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-dark">Modifier l'avatar</button>
        </div>
    </form>
</div>
