@extends('layout.main')

@section('title', 'HDC Events')

@section('content')

<h1>Início</h1>

@foreach($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach

@endsection