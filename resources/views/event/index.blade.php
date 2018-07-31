@extends("layouts.app")

@section('title')
    Eventos atuais
@endsection

@section('content')




<section class="cursos">
	<section class="py-5 px-5 container mt-5" style="margin-top: 0 !important; padding-bottom: 0px !important;">
			@if (isset($events))
			@foreach( $events as $key=>$event )
					@if( ( $key ) % 3 == 0 )
						<div class="row my-5">
					@endif

					<div class="col-sm">
					    <div class="card" style="margin-bottom: 15px;">
					        <img class="card-img-top w-100" src="{{ $event->image }}" alt="Imagem do evento">
					        <div class="card-body">
					        <h3 class="event-title"><b>Evento:</b></h3>
			                <h4 class="card-title">{{ $event->title}}</h4>
			                <h3 class="event-title"><b>Área de conhecimento:</b></h3>
			                <p class="card-text">{{ $event->general_theme }}</p>
			                <h3 class="event-title"><b>Slogam:</b></h3>
			                <p class="card-text">{{ $event->slogam }}</p>
			                <h3 class="event-title"><b>Data do evento:</b></h3>
			                <p class="card-text">{{ $event->period }}</p>
			                <h3 class="event-title"><b>Local:</b></h3>
			                <p class="card-text">{{ $event->place }}</p>
			                <h3 class="event-title"><b>Descrição:</b></h3>
			                <p class="card-text">{{ $event->description }}</p>
			                <h3 class="event-title"><b>Organização:</b></h3>
			                <p class="card-text">{{ $event->organiser }}</p>
			                <a href="{{ route('event/show', ['event' => $event->id ]) }}" class="btn btn-suc"><i class="fa fa-search-plus"></i>Detalhes</a>
			                <a href="{{ route('eventedit', ['event' => $event->id ]) }}" class="btn btn-suc"><i class="fa fa-pencil"></i> Editar</a>
					        </div>
					    </div>
					</div>
	  

					@if( ( $key - 2 ) % 3 == 0 )
						</div>
					@endif

			@endforeach
	</section>
	@endif
</section>
@endsection

