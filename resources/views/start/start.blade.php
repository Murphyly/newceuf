@extends("layouts.app")

@section('title')
    Eventos
@endsection

@section ('content')

    @if ( \Session::has('notification') )
        @include('includes.notification')
    @endif

    @include('start.includes.welcome')
    @include('start.includes.events')
    
@endsection

