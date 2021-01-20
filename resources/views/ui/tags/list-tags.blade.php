@extends('layouts.app', ['breadcrumbs' => ['Mots clés'], 'tags' => 'active'])

@section('title', '- Mots clés')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                        <h5>
                            Liste <span class="fw-semi-bold">Mots clés</span>
                            <div class="widget-controls">
                                <a href="{{ route('tags.create') }}" class="font-weight-bold text-dark"><i class="fi flaticon-add-3"></i> Ajouter un mot clé</a>
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
                                @forelse($tags as $tag)
                                    <td>
                                        <span class="mt-2 badge badge-dark">
                                            {{ $tag->name }}
                                            <a href="{{ route('tags.edit', $tag->id) }}"><i class="text-white fi flaticon-edit"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#modal-{{ $tag->id }}"><i class="text-white ml-2 fa fa-remove"></i></a>
                                        </span>
                                    </td>

                                    @include('layouts.partials.delete-modal',[
                                           'id'=> $tag->id,
                                          "route"=> route('tags.destroy', $tag->id),
                                          "sms"=> "Vouler-vous supprimer définitivement le mot clé : <strong>$tag->name</strong> ?"
                                       ])
                                @empty
                                    <td>
                                        Aucun mot clé n'a été défini pour l'instant. vous pouvez profiter pour en créer
                                        <i class="fi flaticon-like"></i><a href="{{ route('tags.create') }}" class="ml-2 text-danger">Ajouter un mot clé</a>
                                    </td>
                                @endforelse
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
