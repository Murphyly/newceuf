@extends("layouts.app")

@section('title')
    Eventos atuais
@endsection

@section('content')


    @if ( \Session::has('notification') )
        @include('includes.notification')
    @endif


    <div class="container py-5">
            <div class="card mb-5">
			    <div class="row py-5">
			        <div class="col-md-4">
			            <img class="card-img-top p-3" src="{{ $event->image }}" alt="Card image cap" >
			        </div>
			        <div class="col-md-8">
			            <div class="card-body">
			            	<h3><b>Evento:</b></h3>
			                <h4 class="card-title">{{ $event->title}}</h4>
			                <h3><b>Área de conhecimento:</b></h3>
			                <p class="card-text">{{ $event->general_theme }}</p>
			                <h3><b>Slogam:</b></h3>
			                <p class="card-text">{{ $event->slogam }}</p>
			                <h3><b>Data do evento:</b></h3>
			                <p class="card-text">{{ $event->period }}</p>
			                <h3><b>Local:</b></h3>
			                <p class="card-text">{{ $event->place }}</p>
			                <h3><b>Descrição:</b></h3>
			                <p class="card-text">{{ $event->description }}</p>
			                <h3><b>Organização:</b></h3>
			                <p class="card-text">{{ $event->organiser }}</p>
			            </div>
			        </div>
			    </div>
			</div>

    </div>

@endsection
