@extends('layouts.app', ['breadcrumbs' => ['Mots clés', 'Nouveau'], 'tags' => 'active'])

@section('title', '- Ajouter un mot clé')

@section('content')
    <livewire:tag-form/>
@endsection
