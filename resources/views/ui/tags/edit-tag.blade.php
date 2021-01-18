@extends('layouts.app', ['breadcrumbs' => ['Tags', $tag->name, 'Modifier']])

@section('content')
    <livewire:tag-form :tag="$tag"/>
@endsection
