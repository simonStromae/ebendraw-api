@extends('layouts.app', ['breadcrumbs' => ['Illustrations', 'Listes illustrations']])

@section('content')
    <div>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-xlg">
                <div class="pb-xlg h-100">
                    <section class="widget mb-0 h-100">
                        <header class="mb-2">

                            <div class="widget-controls">
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
                            </div>
                        </header>
                        <div class="widget-body">
                            <div class="d-flex justify-content-center align-items-center mb-lg">
                                <img class="m-3" src="/svg/order_confirmed.svg" width="200px">
                            </div>
                            <h4>Order Confirmed</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Asperiores culpa expedita harum inventore magni nihil nostrum recusandae....
                            </p>
                            <p class="text-right">Mise à jour : <strong>Jan 16, 2021</strong></p>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <section>
            <a href="#" class="btn btn-link" disabled>Précèdent</a>
            <a href="#" class="text-dark rounded-circle">1</a>
            <a href="#" class="text-secondary rounded-circle">2</a>
            <a href="#" class="text-secondary rounded-circle">3</a>
            <a href="#" class="btn btn-link">Suivant</a>
        </section>
    </div>
@endsection

