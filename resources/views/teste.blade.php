@extends ('layouts.app')

@section('title')
  Cadastro
@endsection

@section('content')

    <div style="margin-top: 30px; padding-bottom: 140px !important;" class="body-cadastro">
        <div id="main" class="container">
            <form action="{{ route('new_event') }}" method="POST" data-toggle="validator">
            {{ csrf_field() }}

                <div class="row">
                  <div class="col-md-12">
                    <h4 class="page-header">Cadastre-se</h4>
                  </div>
                </div>

                <div class="row">
                     <div class="form-group col-md-12">
                       <label for="campo1">Titulo</label>
                       <input name="title" value="{{ old('name') }}" type="text" class="form-control" placeholder="Digite o seu nome">
                     </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="campo1">Slogam</label>
                        <input name="slogam" value="{{ old('email') }}" type="text" class="form-control" placeholder="Digite o seu email">
                    </div>
                    <div class="form-group col-md-6">
                       <label for="campo2">Tema Geral</label>
                       <input name="general_theme" type="text" class="form-control" placeholder="Confirme seu text">
                    </div>

                    <div class="form-group col-md-6">
                       <label for="campo2">Descrição do evento</label>
                       <input name="description" type="text" class="form-control" placeholder="Confirme seu text">
                    </div>

                    <div class="form-group col-md-6">
                       <label for="campo2">Período</label>
                       <input name="period" type="text" class="form-control" placeholder="Confirme seu text">
                    </div>

                     <div class="form-group col-md-6">
                       <label for="campo2">Local</label>
                       <input name="place" type="text" class="form-control" placeholder="Confirme seu text">
                    </div>


                    <div class="form-group col-md-6">
                       <label for="campo2">Organizador</label>
                       <input name="organiser" type="text" class="form-control" placeholder="Confirme seu text">
                    </div>

                     <div class="form-group col-md-6">
                       <label for="campo2">Banner de divulgação</label>
                       <input name="image" type="text" class="form-control" placeholder="Confirme seu text">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-info">Cadastrar</button><br>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
