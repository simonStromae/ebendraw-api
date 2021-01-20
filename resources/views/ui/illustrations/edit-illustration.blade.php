@extends('layouts.app', ['breadcrumbs' => ['Illustrations', $illustration->name, 'Modifier'], 'illustrations' => 'active'])

@section('title', '- Modifier '.$illustration->name)

@section('content')
    <livewire:illustration-form :illustration="$illustration"/>
@endsection
