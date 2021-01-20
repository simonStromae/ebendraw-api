@extends('layouts.app', ['breadcrumbs' => ['Illustrations', 'Nouveau'], 'illustrations' => 'active'])

@section('title', '- Ajouter une illustration')

@section('content')
    <livewire:illustration-form/>
@endsection
