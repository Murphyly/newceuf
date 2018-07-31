@extends("layouts.app")

@section('title')
    Eventos atuais
@endsection

@section('content')


    @if ( \Session::has('notification') )
        @include('includes.notification')
    @endif

    <div class="container py-5 ">
		<div class="card mb-5 ">
			<div class="row p-5 topo text-white">
				<div class="col-md-8" style= " max-height:320px; overflow :hidden; padding-right:0; padding-left:0; ">
					<img class="w-100 card-img-top rounded-0" src="{{ $event->image }}" alt="{{ $event->title}}" >
				</div>
				<div class="col-md-4 " style= " max-height:320px; overflow :hidden; background:#917744">
						<p class="card-text data py-2">{{ $event->period }},</p>
						<h3 class="card-title title text-uppercase text-center py-5" >{{ $event->title}}</h3>
						<p class="card-text data">por {{ $event->organiser }},</p>
				</div>
			</div>
			<div class="row px-5">
				<div class="col-md-8">
						<h3><b>Mais informações:</b></h3>
						<p class="card-text">{{ $event->description }}</p>
						<p class="card-text">{{ $event->slogam }}</p>
						<h3><b>Área de conhecimento:</b></h3>
						<p class="card-text">{{ $event->general_theme }}</p>
				</div>
				<div class="col-md-4">
					<h3><i class="fa fa-calendar" aria-hidden="true"></i> <b>Data e hora:</b></h3>
					{{ $event->period }}
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> <b>Local:</b></h3>
					<p class="card-text">{{ $event->place }}</p>
				</div>
			</div>
				</div>
			</div>
		</div>
    </div>

@endsection
