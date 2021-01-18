@extends('layouts.app', ['breadcrumbs' => ['Roles', $role->name, 'Modifier']])

@section('content')
    <livewire:role-form :role="$role"/>
@endsection
