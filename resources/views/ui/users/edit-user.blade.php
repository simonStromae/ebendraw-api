@extends('layouts.app', ['breadcrumbs' => ['Utilisateurs', $user->name, 'Modifier'], 'users' => 'active'])

@section('title', '- Modifier '.$user->name)

@section('content')
    <livewire:user-form :user="$user"/>
@endsection
