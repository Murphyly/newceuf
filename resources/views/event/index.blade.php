@extends("layouts.app")

@section('title')
    Eventos atuais
@endsection

@section('content')


    <div class="container py-5">
        @foreach($events as $event )
            <div class="card mb-5">
			    <div class="row py-5">
			        <div class="col-md-4">
			            <img style="width: 100%; height: 100%; padding: 5%" class="card-img-top" src="{{ $event->image }}" alt="Card image cap">
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
			                <a href="{{ route('event/show', ['event' => $event->id ]) }}" class="btn btn-info">Detalhes</a>
			            </div>
			        </div>
			    </div>
			</div><hr style="border: 1px solid #556270">

        @endforeach
    </div>

@endsection
