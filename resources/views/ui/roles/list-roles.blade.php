@extends('layouts.app', ['breadcrumbs' => ['Roles']])

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                        <h5>
                            Liste <span class="fw-semi-bold">Rôles</span>
                        </h5>
                        <div class="widget-controls">
                            <a href="#" class="font-weight-bold text-dark"><i class="fi flaticon-add-3"></i> Ajouter un rôle</a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">
                                        Administrateur
                                    </td>
                                    <td>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Accusamus autem cupiditate doloribus eos explicabo fugiat harum id impedit iste laboriosam laudantium natus,
                                        omnis quibusdam ratione repellat sequi sint vitae voluptates.
                                    </td>
                                    <td class="width-150">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                                &nbsp; Actions &nbsp;
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">
                                        Illustrateur
                                    </td>
                                    <td>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Accusamus autem cupiditate doloribus eos explicabo fugiat harum id impedit iste laboriosam laudantium natus,
                                        omnis quibusdam ratione repellat sequi sint vitae voluptates.
                                    </td>
                                    <td class="width-150">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                                &nbsp; Actions &nbsp;
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
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
