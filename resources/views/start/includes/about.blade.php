@extends("layouts.app")

@section('title')
    Sobre
@endsection

@section('content')

    @if ( \Session::has('notification') )
        @include('includes.notification')
    @endif

    <section class="cover-page text-white p-5" style="height: 200px; background-image:url('images/about.jpg'); ">
			<div class="row">
	   			 <h1 class="ml-5">Quem somos nós?</h1>
			</div>
	</section>
	<section class="container p-5 text-dark">
		<H4><p>Estudantes de computação que querem facilitar a participação de eventos dentro da UFBA</p></H4>
	</section>

@endsection