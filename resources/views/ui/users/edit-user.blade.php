@extends('layouts.app', ['breadcrumbs' => ['Utilisateurs', $user->name, 'Modifier']])

@section('content')
    <livewire:user-form :user="$user"/>
@endsection
