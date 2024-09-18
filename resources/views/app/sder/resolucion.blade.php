@extends('layouts.main')

@vite(['resources/css/preguntas.css', 'resources/js/questions.js'])

@section('content')
    @livewire('show-resolucion')
@endsection