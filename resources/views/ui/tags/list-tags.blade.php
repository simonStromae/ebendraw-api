@extends('layouts.app', ['breadcrumbs' => ['Tags']])

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                        <h5>
                            Liste <span class="fw-semi-bold">Mots clés</span>
                            <div class="widget-controls">
                                <a href="#" class="font-weight-bold text-dark"><i class="fi flaticon-add-3"></i> Ajouter un mot clé</a>
                            </div>
                        </h5>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="mt-2 badge badge-dark">Illustrateur <a href="#"><i class="text-white ml-2 fa fa-remove"></i></a></span>
                                    <span class="mt-2 badge badge-dark">Illustrateur <a href="#"><i class="text-white ml-2 fa fa-remove"></i></a></span>
                                    <span class="mt-2 badge badge-dark">Illustrateur <a href="#"><i class="text-white ml-2 fa fa-remove"></i></a></span>
                                    <span class="mt-2 badge badge-dark">Illustrateur <a href="#"><i class="text-white ml-2 fa fa-remove"></i></a></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
