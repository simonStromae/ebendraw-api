<div class="d-flex justify-content-center">
    <section class="widget mb-0 h-100 w-75">
        <header>
            <h4 class="font-weight-bold">{{ $action }} un tag</h4>
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
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.lazy="name" id="name">
                    @error("name")
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark float-right">
                        <span wire:loading.remove>{{ $action }}</span>
                        <span wire:loading>Vérification ...</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
