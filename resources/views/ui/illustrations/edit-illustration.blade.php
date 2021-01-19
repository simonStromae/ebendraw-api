@extends('layouts.app', ['breadcrumbs' => ['Illustrations', $illustration->name, 'Modifier']])

@section('content')
    <livewire:illustration-form :illustration="$illustration"/>
@endsection
