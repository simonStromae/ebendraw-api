<div class="d-flex justify-content-center">
    <section class="widget mb-0 h-100 w-75">
        <header>
            <h4 class="font-weight-bold">Ajouter une illustration</h4>
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
                    <label class="font-weight-bold" for="desc">Description</label>
                    <textarea class="form-control" id="desc"></textarea>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="file">Svg</label>
                    <input type="file" class="form-control-file" id="file">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="file">Mots clés</label>
                    <select class="form-control selectpicker" data-live-search="true" multiple="multiple" title="Ajoutez des mots clés...">
                        <option value="AL">Alabama</option>
                        <option value="Dla">Douala</option>
                        <option value="Yde">Yaoundé</option>
                        <option value="Baf">Bafoussam</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-dark float-right">Ajouter</button>
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
