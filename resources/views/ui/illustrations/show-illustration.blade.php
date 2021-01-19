@extends('layouts.app', ['breadcrumbs' => ['Illustrations', $illustration->name]])

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <div class="widget-body">
                        <div class="row p-3">
                            <div class="col-xl-6 col-md-12 mb-xlg">
                                <div class="d-flex justify-content-center align-items-center mb-lg">
                                    <img src="{{ show_svg($illustration->svg) }}" width="400px">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12 mb-xlg">
                                <h3>{{ $illustration->name }}</h3>
                                <p>{{ $illustration->description }}</p>
                                <div class="row">
                                    <p class="col-6 "><u>Auteur :</u> <span class="font-weight-bold">{{ "@".$illustration->user->username }}</span></p>
                                    <p class="col-6"><u>Dernière mise à jour :</u> <span class="font-weight-bold">{{ $illustration->updated_at }}</span></p>
                                </div>
                                <div>
                                    <h6><u>Mots clés :</u></h6>
                                    <livewire:tags-to-illustration :tags="$tags" :illustration="$illustration" />

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
