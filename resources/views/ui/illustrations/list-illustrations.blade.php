@extends('layouts.app', ['breadcrumbs' => ['Illustrations', 'Listes illustrations'], 'illustrations' => 'active'])

@section('title', '- Illustrations')

@section('content')
    <div>
        <div class="row">
            @forelse($illustrations as $illustration)
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
                                        <li><a class="dropdown-item" href="{{ route('illustrations.show', $illustration->id) }}">Détails</a></li>
                                        @if(user_connect()->id === $illustration->user->id)
                                            <li><a class="dropdown-item" href="{{ route('illustrations.edit', $illustration->id) }}">Modifier</a></li>
                                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-{{ $illustration->id }}">Supprimer</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </header>
                        <div class="widget-body">
                            <div style="min-height: 200px" class="d-flex justify-content-center align-items-center mb-lg">
                                <img class="m-3" style="max-width: 200px; width: 100%" src="{{ show_svg($illustration->svg) }}">
                            </div>
                            <div style="max-height: 350px;">
                                <h4>{{ $illustration->name }}</h4>
                                <p style="overflow: auto; min-height: 100px">
                                    {{ $illustration->description }}
                                </p>
                                <p class="text-right">Mise à jour : <strong>{{ $illustration->updated_at }}</strong></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @include('layouts.partials.delete-modal',[
               'id'=> $illustration->id,
              "route"=> route('illustrations.destroy', $illustration->id),
              "sms"=> "Vouler-vous supprimer définitivement le rôle : <strong>$illustration->name</strong> ?"
           ])
            @empty
                <div class="col-xl-4 col-md-6 mb-xlg">
                    <div class="pb-xlg h-100">
                        <section class="widget mb-0 h-100">
                            <div class="widget-body">
                                <div class="d-flex justify-content-center align-items-center mb-lg">
                                    <img class="m-3" src="/svg/new_actuality.svg" width="200px">
                                </div>
                                <p>
                                    Aucune illustration disponible pour l'instant. Profitez pour en créer une.
                                </p>
                                <div class="form-group">
                                    <a class="btn btn-primary btn-block" href="{{ route('illustrations.create') }}">Ajouter une illustration</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            @endforelse
        </div>

        <section>
            {{ $illustrations->links() }}
        </section>
    </div>
@endsection

