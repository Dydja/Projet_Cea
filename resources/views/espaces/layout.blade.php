@extends('espaces.template')

@section('menu')
    @include('espaces.menu.menu'.Auth::user()->role_id)
@endsection

@section('container')


    @include('espaces.index.contenu'.Auth::user()->role__id)

@endsection
