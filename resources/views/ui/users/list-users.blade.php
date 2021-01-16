@extends('layouts.app', ['breadcrumbs' => ['Utilisateurs']])

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                        <h5>
                            Liste <span class="fw-semi-bold">Utilisateurs</span>
                        </h5>
                        <div class="widget-controls">
                            <a href="#" class="font-weight-bold text-dark"><i class="fi flaticon-add-3"></i> Ajouter un utilisateur</a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="d-none d-md-table-cell">#</th>
                                <th colspan="2">Informations Personnel</th>
                                <th>Nom utilisateur</th>
                                <th>Rôle</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="d-none d-md-table-cell">1</td>
                                <td>
                                    <img class="img-rounded" src="/master/demo/img/pictures/1.jpg" alt="" height="50">
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Nom :</span>
                                            <span class="text-semi-muted">&nbsp; Monoue Simon</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Email :</span>
                                            <span class="text-semi-muted">&nbsp; simonulrich56@gmail.com</span>
                                        </small>
                                    </p>
                                </td>
                                <td>simonStromae</td>
                                <td class="font-weight-bold">
                                    Administrateur
                                </td>
                                <td class="width-150">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                            &nbsp; Actions &nbsp;
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a class="dropdown-item" href="#">Détails</a></li>
                                            <li><a class="dropdown-item" href="#">Modifier</a></li>
                                            <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                        </ul>
                                    </div>
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
