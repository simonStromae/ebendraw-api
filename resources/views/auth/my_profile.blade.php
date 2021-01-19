@extends('layouts.app', ["breadcrumbs" => ['Mon profil']])

@section('content')
    <div class="">
        <div class="row">
            <div class="col-lg-8">
                <section class="widget">
                    <div class="widget-body">
                        <livewire:user.avatar-user />
                        <livewire:user.profile-user />
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
