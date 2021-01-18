<div class="d-flex justify-content-center">
    <section class="widget mb-0 h-100 w-75">
        <header>
            <h4 class="font-weight-bold">{{ $action }} un utilisateur</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cum, deserunt.
                A cupiditate in ipsum nostrum quaerat, quam repellat rerum saepe unde.
                Culpa fugiat illum officiis possimus tenetur, ullam veritatis.
            </p>
        </header>
        <div class="widget-body">
            <form wire:submit.prevent="submitForm">
                <div class="form-group">
                    <label class="font-weight-bold" for="name">Nom</label>
                    <input type="text" wire:model.lazy="name" class="form-control @error('name') is-invalid @enderror" id="name">
                    @error('name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="email">Adresse email</label>
                    <input type="text" wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror" id="email">
                    @error('email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Rôle</label>

                    <div class="form-row">
                        @foreach($roles as $role)
                            <div class="col-auto">
                                <div class="form-check">
                                    <input wire:model="role" type="radio" value="{{ $role->id }}" class="@error('role') is-invalid @enderror form-check-input" id="admin-{{ $role->id }}">
                                    <label class="form-check-label" for="admin-{{ $role->id }}">{{ $role->name }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @error('role')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="username">Identifiant</label>
                    <input type="text" wire:model.lazy="username" class="form-control @error('username') is-invalid @enderror" id="username">
                    @error('username')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-7 font-weight-bold" for="password">Mot de passe</label>
                        <a href="#" wire:click="generate_password" class="btn-link text-purple col-4 text-right">Générer</a>
                        <a href="#" wire:click="see_password" class="text-purple col-1">Voir</a>
                    </div>
                    @if($show)
                        <input type="text" wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="">
                    @else
                        <input type="password" wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="">
                    @endif
                    <small>Votre mot de passe doit contenir au moins 6 caractères</small>
                    @error('password')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                @if($created)
                    <div class="form-group">
                        <label class="font-weight-bold" for="c_password">Confirmartion mot de passe</label>
                        <input type="password" wire:model.lazy="password_confirmation" class="form-control" id="c_password" placeholder="">
                    </div>
                @endif

                <div class="form-group">
                    <button type="submit" class="btn btn-dark float-right">
                        <span wire:loading.remove>{{ $action }} un utilisateur</span>
                        <span wire:loading>Vérification ...</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>

