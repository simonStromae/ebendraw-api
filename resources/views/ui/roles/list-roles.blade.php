@extends('layouts.app', ['breadcrumbs' => ['Roles'], 'roles' => 'active'])

@section('title', '- Rôles')

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
                            <a href="{{ route('roles.create') }}" class="font-weight-bold text-dark"><i class="fi flaticon-add-3"></i> Ajouter un rôle</a>
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
                                @forelse($roles as $role)
                                    <tr>
                                        <td class="font-weight-bold">
                                            {{ $role->name }}
                                        </td>
                                        <td>{{ $role->description }}</td>
                                        <td class="width-150">
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                                    &nbsp; Actions &nbsp;
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a class="dropdown-item" href="{{ route('roles.edit', $role->id) }}">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-{{ $role->id }}">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        @include('layouts.partials.delete-modal',[
                                           'id'=> $role->id,
                                          "route"=> route('roles.destroy', $role->id),
                                          "sms"=> "Vouler-vous supprimer définitivement le rôle : <strong>$role->name</strong> ?"
                                       ])
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            Aucun rôle n'a été défini pour l'instant. vous pouvez profiter pour en créer
                                            <i class="fi flaticon-like"></i><a href="{{ route('roles.create') }}" class="ml-2 text-danger">Ajouter un rôle</a>
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
