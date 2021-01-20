@extends('layouts.app', ['breadcrumbs' => ['Utilisateurs'], 'users' => 'active'])

@section('title', '- Utilisateurs')

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
                            <a href="{{ route('users.create') }}" class="font-weight-bold text-dark"><i class="fi flaticon-add-3"></i> Ajouter un utilisateur</a>
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
                                @forelse($users as $user)
                                    <tr>
                                        <td class="d-none d-md-table-cell">{{ $user->id }}</td>
                                        <td>
                                            <img class="img-rounded" src="{{ show_avatar($user->avatar) }}" alt="" width="80px">
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <p class="no-margin">
                                                <small>
                                                    <span class="fw-semi-bold">Nom :</span>
                                                    <span class="text-semi-muted">&nbsp; {{ $user->name }}</span>
                                                </small>
                                            </p>
                                            <p>
                                                <small>
                                                    <span class="fw-semi-bold">Email :</span>
                                                    <span class="text-semi-muted">&nbsp; {{ $user->email }}</span>
                                                </small>
                                            </p>
                                        </td>
                                        <td>{{ $user->username }}</td>
                                        <td class="font-weight-bold">
                                            {{ $user->role->name }}
                                        </td>
                                        <td class="width-150">
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                                    &nbsp; Actions &nbsp;
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a class="dropdown-item" href="{{ route('users.show', $user->id) }}">Détails</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-{{ $user->id }}">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        @include('layouts.partials.delete-modal',[
                                                   'id'=> $user->id,
                                                  "route"=> route('users.destroy', $user->id),
                                                  "sms"=> "Vouler-vous supprimer définitivement l'utilisateur : <strong>$user->name</strong> ?"
                                               ])
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            Aucun utilisateur n'a été créé pour l'instant. vous pouvez profiter pour en créer
                                            <i class="fi flaticon-like"></i><a href="{{ route('users.create') }}" class="ml-2 text-danger">Ajouter un utilisateur</a>
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
