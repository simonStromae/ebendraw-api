@extends('layouts.app', ['breadcrumbs' => ['Utilisateurs', 'Nouveau'], 'users' => 'active'])

@section('title', '- Ajouter un utilisateur')

@section('content')
    <livewire:user-form/>
@endsection
