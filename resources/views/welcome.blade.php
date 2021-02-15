@extends('layouts.app', ['breadcrumbs' => ['Tableau de bord'], 'dashboard' => 'active'])

@section('title', '- Tableau de bord')

@section('content')
    <div class="analytics">
        <div class="analytics-side">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-xl-4 mb-xlg">
                    <div class="pb-xlg h-100">
                        <section class="widget mb-0 h-100">
                            <header class="d-flex justify-content-between flex-wrap">
                                <h4 class="d-flex align-items-center pb-1 big-stat-title">
                                    <span class="circle bg-primary mr-sm" style="font-size: 6px;"></span>
                                    Utilisateurs
                                </h4>
                            </header>
                            <div class="widget-body p-0">
                                <h4 class="fw-semi-bold ml-lg mb-lg">{{ user() }}</h4>
                                <div class="d-flex border-top">
                                    <div class="w-50 border-right p-3 px-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6>{{ user('administrateur') }}</h6>
                                            <i class="la la-arrow-right la-lg text-success rotate-315"></i>
                                        </div>
                                        <p class="text-muted mb-0 mr"><small>Administrateurs</small></p>
                                    </div>
                                    <div class="w-50 p-3 px-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6>{{ user('illustrateur') }}</h6>
                                            <i class="la la-arrow-right la-lg text-danger rotate-45"></i>
                                        </div>
                                        <p class="text-muted mb-0 mr"><small>Illustrateurs</small></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-4 mb-xlg">
                    <div class="pb-xlg h-100">
                        <section class="widget mb-0 h-100">
                            <header class="d-flex justify-content-between flex-wrap">
                                <h4 class="d-flex align-items-center pb-1 big-stat-title">
                                    <span class="circle bg-danger mr-sm" style="font-size: 6px;"></span>
                                    Illustrations
                                </h4>
                            </header>
                            <div class="widget-body p-0">
                                <h4 class="fw-semi-bold ml-lg mb-lg">{{ illustrations() }}</h4>
                                <div class="d-flex border-top">
                                    <div class="w-100 border-right p-3 px-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6>+30</h6>
                                            <i class="la la-arrow-right la-lg text-success rotate-315"></i>
                                        </div>
                                        <p class="text-muted mb-0 mr"><small>Récentes</small></p>
                                    </div>{{--
                                    <div class="w-50 p-3 px-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6>2.5%</h6>
                                            <i class="la la-arrow-right la-lg text-success rotate-315"></i>
                                        </div>
                                        <p class="text-muted mb-0 mr"><small>Bounce Rate</small></p>
                                    </div>--}}
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-4 mb-xlg">
                    <div class="pb-xlg h-100">
                        <section class="widget mb-0 h-100">
                            <header class="d-flex justify-content-between flex-wrap">
                                <h4 class="d-flex align-items-center pb-1 big-stat-title">
                                    <span class="circle bg-info mr-sm" style="font-size: 6px;"></span>
                                    Patterns
                                </h4>
                            </header>
                            <div class="widget-body p-0">
                                <h4 class="fw-semi-bold ml-lg mb-lg">{{ patterns() }}</h4>
                                <div class="d-flex border-top">
                                    <div class="w-100 border-right p-3 px-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6>+230</h6>
                                            <i class="la la-arrow-right la-lg text-success rotate-315"></i>
                                        </div>
                                        <p class="text-muted mb-0 mr"><small>Récents</small></p>
                                    </div>{{--
                                    <div class="w-50 p-3 px-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6>21.5%</h6>
                                            <i class="la la-arrow-right la-lg text-danger rotate-45"></i>
                                        </div>
                                        <p class="text-muted mb-0 mr"><small>Bounce Rate</small></p>
                                    </div>--}}
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
