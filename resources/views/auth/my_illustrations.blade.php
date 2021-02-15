@extends('layouts.app', ['breadcrumbs' => ['Mes illustrations']])

@section('title', '- Mes Illustrations')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                        <h5>
                            <span class="fw-semi-bold">Mes illustrations</span>
                        </h5>
                        <div class="widget-controls">
                            <a href="{{ route('illustrations.create') }}" class="font-weight-bold text-dark"><i class="fi flaticon-add-3"></i> Ajouter une illustration</a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>libellé</th>
                                <th>Description</th>
                                <th>Mise à jour</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(Auth::user()->illustrations as $i)
                                <tr>
                                    <td class="font-weight-bold">
                                        <img class="m-3" src="{{ show_svg($i->svg) }}" width="200px">
                                    </td>
                                    <td class="width-200">{{ $i->name }}</td>
                                    <td>{{ $i->description }}</td>
                                    <td class="width-150">{{ $i->updated_at }}</td>
                                    <td class="width-150">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                                &nbsp; Actions &nbsp;
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="dropdown-item" href="{{ route('illustrations.show', $i->id) }}">Détails</a></li>
                                                <li><a class="dropdown-item" href="{{ route('illustrations.edit', $i->id) }}">Modifier</a></li>
                                                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-{{ $i->id }}">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    @include('layouts.partials.delete-modal',[
                                       'id'=> $i->id,
                                      "route"=> route('illustrations.destroy', $i->id),
                                      "sms"=> "Vouler-vous supprimer définitivement le rôle : <strong>$i->name</strong> ?"
                                   ])
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        Vous n'avez créé aucune illustration pour l'instant. vous pouvez profiter pour en créer
                                        <i class="fi flaticon-like"></i><a href="{{ route('illustrations.create') }}" class="ml-2 text-danger">Ajouter une illustration</a>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
