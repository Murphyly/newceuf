@extends("layouts.app")

@section('title')
    Eventos
@endsection

@section('content')

    @if ( \Session::has('notification') )
        @include('includes.notification')
    @endif

    <div style="padding-bottom: 140px !important;" class="container py-5">
        <h4>Exibindo {{ $events->count() }} resultados para <em>{{ $search }}</em></h4>
        @if(empty($events->first()))
			<div class="card mb-5">
			    <div class="row">
			        <div class="col-md-4">
			            <img class="card-img-top w-50 not-found-img" style="width: 300px; height: 300px;" src="{{ asset('images/erro.png') }}" alt="Not found">
			        </div>
			        <div class="col-md-8">
			            <div class="card-body">
			                <h4 class="card-title">Não encontrado</h4>
			                <p class="card-text">Não foi possível encontrar algum curso com a descrição ou nome fornecido.</p>
			                <p class="card-text">Talvez a sua busca tenha sido muito específica, por favor tente novamente com um termo diferente.</p>     
			            </div>
			        </div>
			    </div>
			</div>
        @else
	        @foreach($events as $event )
	            @include('event.show')
	        @endforeach
        @endif
    </div>

@endsection