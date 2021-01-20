@extends('layouts.app', ['breadcrumbs' => ['Roles', 'Nouveau'], 'roles' => 'active'])

@section('title', '- Ajouter un rôle')

@section('content')
    <livewire:role-form/>
@endsection
