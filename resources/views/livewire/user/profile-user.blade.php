<div>
    <form wire:submit.prevent="update_profile">
        <div class="form-group">
            <label class="font-weight-bold" for="firstname">Nom</label>
            <input type="text" wire:model.lazy="name" class="form-control @error('name') is-invalid @enderror" id="firstname">
            @error('name')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="username">Nom d'utilisateur</label>
            <input type="text" wire:model.lazy="username" class="form-control @error('username') is-invalid @enderror" id="username">
            @error('username')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="email">Adresse email</label>
            <input type="email" wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror" id="email">
            @error('email')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="password">Mot de passe</label>
            <input type="password" wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror" id="password">
            <small>Votre mot de passe doit contenir au moins 6 caractères</small>
            @error('password')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="c_password">Confirmartion mot de passe</label>
            <input type="password" wire:model.lazy="password_confirmation" class="form-control" id="c_password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-dark">Sauvegarder les modifications</button>
            <a class="ml-3 text-white btn bg-red-500" data-toggle="modal" data-target="#modal-{{ user_connect()->id }}"><i class="fi flaticon-trash mr-2"></i>Supprimer mon compte</a>
        </div>
    </form>

    @include('layouts.partials.delete-modal',[
           'id'=> user_connect()->id,
          "route"=> route('users.destroy', user_connect()->id),
          "sms"=> "Souhaitez-vous véritablement supprimer votre compte ?"
       ])
</div>
