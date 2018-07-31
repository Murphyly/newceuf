@extends("layouts.app")

@section('title')
    Eventos
@endsection

@section('content')

    @if ( \Session::has('notification') )
        @include('includes.notification')
    @endif

    <div style="padding-bottom: 140px !important;" class="container py-5">
        <h4>Exibindo <b>{{ $events->count() }}</b> resultados para <em>{{ $search }}</em></h4>
        @if(empty($events->first()))
			<div class="card mb-5">
			    <div class="row">
			        <div class="col-md-4">
			            <img class="card-img-top not-found-img" src="https://media3.giphy.com/media/hEc4k5pN17GZq/giphy.gif" alt="Not found">
			        </div>
			        <div class="col-md-8">
			            <div class="card-body">
			                <h4 class="card-title">?????</h4>
			                <p class="card-text">Não foi possível encontrar algum curso com a descrição ou nome fornecido.</p>
			                <p class="card-text">Talvez a sua busca tenha sido muito específica, por favor tente novamente com um termo diferente.</p>     
			            </div>
			        </div>
			    </div>
			</div>
        @else
	        <section class="cursos">
		<section class="py-5 px-5 container mt-5" style="margin-top: 0 !important; padding-bottom: 0px !important;">
				@if (isset($events))
				@foreach( $events as $key=>$event )
						@if( ( $key ) % 2 == 0 )
							<div class="row my-5">
						@endif

						<div class="col-sm">
						    <div class="card" style="margin-bottom: 15px;">
						        <img class="card-img-top w-100" src="{{ $event->image }}" alt="Card image cap">
						        <div class="card-body">
						            <h4 class="card-title"><b>{{ $event->title }}</b></h4>
						            <p class="card-text">{{ $event->description }}</p>
						        </div>
						    </div>
						</div>
		  

						@if( ( $key - 1 ) % 2 == 0 )
							</div>
						@endif

				@endforeach
		</section>
		@endif
	</section>
        @endif
    </div>

@endsection