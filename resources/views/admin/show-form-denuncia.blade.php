@extends('layouts.admin')

@section('content')
    @livewire('admin.show-form-denuncia',  ['formulario' => $formulario])
@endsection