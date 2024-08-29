@extends('layouts.main')

@section('content')
    @livewire('form-denunciados',  ['formulario' => $formulario])
@endsection