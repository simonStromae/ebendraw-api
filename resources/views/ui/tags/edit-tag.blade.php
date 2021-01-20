@extends('layouts.app', ['breadcrumbs' => ['Mots clés', $tag->name, 'Modifier'], 'tags' => 'active'])

@section('title', '- Modifier '.$tag->name)

@section('content')
    <livewire:tag-form :tag="$tag"/>
@endsection
