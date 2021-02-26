<div class="d-flex justify-content-center">
    <section class="widget mb-0 h-100 w-75">
        <header>
            <h4 class="font-weight-bold">{{ $action }} une illustration</h4>
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
                    <input wire:model.lazy="name" type="text" class="@error('name') is-invalid @enderror form-control" id="name">
                    @error("name")
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="desc">Description</label>
                    <textarea wire:model.lazy="description" class="@error('description') is-invalid @enderror form-control" id="desc"></textarea>
                    @error("description")
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="file">Svg</label>
                    <input wire:model.lazy="svg" type="file" class="@error('svg') is-invalid @enderror form-control-file" id="file">
                    @error("svg")
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group" wire:ignore>
                    <label class="font-weight-bold" for="file">Mots clés</label>
                    <select wire:model.lazy="tags" class="@error('tags') is-invalid @enderror form-control selectpicker" data-live-search="true" multiple="multiple" title="Ajoutez des mots clés...">
                        @foreach($tag_array as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    @error("tags")
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark float-right">{{ $action }}</button>
                </div>
            </form>

        </div>
    </section>
</div>

@push('css')
    <link href="/master/node_modules/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
@endpush

@push('js')
    <script type="text/javascript" src="/master/node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
@endpush
