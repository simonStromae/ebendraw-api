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
            <form>
                <div class="form-group">
                    <label class="font-weight-bold" for="name">Nom</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="email">Adresse email</label>
                    <input type="text" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Rôle</label>

                    <div class="form-row">
                        @foreach($roles as $role)
                            <div class="col-auto">
                                <div class="form-check">
                                    <input name="role" type="radio" value="{{ $role->id }}" class="form-check-input" id="admin-{{ $role->id }}">
                                    <label class="form-check-label" for="admin-{{ $role->id }}">{{ $role->name }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="username">Identifiant</label>
                    <input type="text" class="form-control" id="username">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="mdp">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp">
                </div>

                <div class="form-group">
                    <button class="btn btn-dark float-right">{{ $action }} un utilisateur</button>
                </div>
            </form>
        </div>
    </section>
</div>

