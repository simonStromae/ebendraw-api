@extends('layouts.app', ['breadcrumbs' => ['Roles', $role->name, 'Modifier'], 'roles' => 'active'])

@section('title', '- Modifier '.$role->name)

@section('content')
    <livewire:role-form :role="$role"/>
@endsection
