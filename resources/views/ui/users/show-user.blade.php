@extends('layouts.app', ['breadcrumbs' => ['Utilisateurs', $user->name], 'users' => 'active'])

@section('title', '- '.$user->name)

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-3">
                <section class="widget">
                    <div class="widget-body">
                        <img class="img-rounded" src="{{ is_null($user->avatar) ? "/master/img/!logged-user.jpg" : show_avatar($user->avatar) }}" alt="" width="385px" >
                        <div class="user-info">
                            <h3 class="bg-dark text-uppercase text-white w-auto">{{ $user->name }}</h3>
                            <span class="bg-primary text-uppercase text-white w-auto">{{ $user->role->name }}</span>
                        </div>
                    </div>
                </section>

                <section class="widget">
                    <div class="widget-body">
                        <h3>Récent</h3>
                        @if(illustrations_recent($user->id)->count() > 0)
                            <table class="table table-borderless">
                                <tbody>
                                    @foreach(illustrations_recent($user->id) as $i)
                                        <tr class="d-flex align-items-center">
                                            <td><img src="{{ show_svg($i->svg) }}" width="50px"></td>
                                            <td><a class="text-dark" href="{{ route('illustrations.show', $i->id) }}">{{ $i->name }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Aucune réalisations récentes postées</p>
                        @endif
                    </div>
                </section>
            </div>

            <div class="col-lg-8">
                <section class="widget">
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>libellé</th>
                                <th>Tags</th>
                                <th>Mise à jour</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($user->illustrations as $i)
                                <tr>
                                    <td class="font-weight-bold">
                                        <img class="m-3" src="{{ show_svg($i->svg) }}" width="70px">
                                    </td>
                                    <td class="width-200">{{ $i->name }}</td>
                                    <td class="w-auto">
                                        @foreach($i->tags->take(2) as $t)
                                            <span class="badge badge-dark">{{ $t->name }}</span>
                                        @endforeach
                                    </td>
                                    <td class="width-150">{{ $i->updated_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        Aucune illustration disponible pour l'instant.
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

@push('css')
    <style>
        .user-info{
            position: absolute;
            bottom: 45px;
            left: auto;
        }

        .user-info h3{
            position: relative;
            padding: 15px;
        }

        .user-info span{
            position: absolute;
            font-size: 12px;
            padding: 9px 12px;
            border-radius: 5px;
            left: 15px;
            bottom: -15px;
        }
    </style>
@endpush
