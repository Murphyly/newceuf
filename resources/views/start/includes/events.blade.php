<section class="cursos">
	<section class="py-5 px-5 container mt-5" style="margin-top: 0 !important; padding-bottom: 0px !important;">
			@if (isset($events))
			@foreach( $events as $key=>$event )
					@if( ( $key ) % 3 == 0 )
						<div class="row my-5">
					@endif

					<div class="col-sm py-2">
					    <div class="card" style="margin-bottom: 15px;">
					        <img class="card-img-top w-100" src="{{ $event->image }}" alt="Card image cap">
					        <div class="card-body">
					            <h4 class="card-title card-index"><b>{{ $event->title }}</b></h4>
					            <p class="card-text card-index">{{ $event->description }}</p>
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