@extends("layouts.layout-main")

@section('title')
    Eventos atuais
@endsection

@section('content')


    @if ( \Session::has('notification') )
        @include('includes.notification')
    @endif


    <div style="padding-bottom: 140px !important;" class="container py-5">
        @foreach($events as $event )
            <div class="card mb-5">
			    <div class="row">
			        <div class="col-md-4">
			            <img class="card-img-top w-100" src="{{ $event->image }}" alt="Card image cap">
			        </div>
			        <div class="col-md-8">
			            <div class="card-body">
			                <h4 class="card-title">{{ $event->title}}</h4>
			                <p class="card-text">{{ $event->description }}</p>
			                <a href="{{ route('event.show', ['event' => $event->id ]) }}" class="btn btn-info">Detalhes</a>
			            </div>
			        </div>
			    </div>
			</div>

        @endforeach
    </div>

@endsection
