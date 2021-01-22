<!-- Quick access -->
<div class="theme-helper">
    <section class="widget theme-helper-content">
        <header class="theme-helper-header d-flex p-0">
            <div class="theme-helper-toggler">
                <div class="theme-helper-spinner bg-primary text-white">
                    <i class="fi flaticon-settings-5"></i>
                    <i class="fi flaticon-settings-5 fs-smaller"></i>
                </div>
            </div>
            <h6>Accès Rapide</h6>
        </header>
        <div class="widget-body mt-3">
            <div class="mt-4">
                <a href="{{ route('tags.create') }}" role="button" class="btn btn-warning btn-rounded-f btn-block fs-mini text-white">
                    <i class="fi flaticon-add"></i>
                    Nouveau Tag
                </a>
                <a href="{{ route('illustrations.create') }}" role="button" class="btn btn-danger btn-rounded-f btn-block fs-mini">
                    <i class="fi flaticon-add"></i>
                    Nouvelle Illustration
                </a>
                @if(Gate::allows('admin-settings'))
                    <a href="{{ route('roles.create') }}" role="button" class="btn btn-secondary btn-rounded-f btn-block fs-mini">
                        <i class="fi flaticon-add"></i>
                        Nouveau Rôle
                    </a>
                    <a href="{{ route('users.create') }}" role="button" class="btn btn-dark btn-rounded-f btn-block fs-mini">
                        <i class="fi flaticon-add"></i>
                        Nouveau Utilisateur
                    </a>
                @endif
            </div>
        </div>
    </section>
</div>
<!-- end Quick access -->
