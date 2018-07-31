@extends ('layouts.app')

@section('title')
  Novo Evento
@endsection

@section('content')

  <div class="body-cadastro">
    <div id="main" class="container">
      <form action="{{ route('event.store') }}" method="POST" data-toggle="validator" enctype="multipart/form-data" meta name="csrf-token" content="{{ csrf_token() }}">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="row">
          <div class="col-md-12">
            <h4 class="page-header">Cadastrar evento</h4>
          </div>
        </div>

        <div class="row">
             <div class="form-group col-md-12">
               <label for="campo1">Titulo</label>
               <input name="title" value="{{ old('title') }}" type="text" class="form-control" placeholder="Digite o nome do evento">
             </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="campo1">Slogam</label>
                <input name="slogam" value="{{ old('slogam') }}" type="text" class="form-control" placeholder="Texto para público alvo">
            </div>

            <div class="form-group col-md-6">
                  <label for="campo1">Tema Geral</label><br>
                  <select name="general_theme" value="{{ old('general_theme') }}"  type="text" class="custom-select">
                    <option value="Artes">Artes</option>
                    <option value="Arqueologia">Arqueologia</option>
                    <option value="Agronomia">Agronomia</option>
                    <option value="Antropologia">Antropologia</option>
                    <option value="Arquitetura e urbanismo">Arquitetura e urbanismo</option>
                    <option value="Administração">Administração</option>
                    <option value="Astronomia">Astronomia</option>
                    <option value="Botânica">Botânica</option>
                    <option value="Biologia geral">Biologia geral</option>
                    <option value="Bioquímica">Bioquímica</option>
                    <option value="Biofísica">Biofísica</option>
                    <option value="Biomédica">Biomédica</option>
                    <option value="Ciências da computação">Ciências da computação</option>
                    <option value="Ciências Biológicas">Ciências Biológicas</option>
                    <option value="Ciências agrárias">Ciências agrárias</option>
                    <option value="Ciências Sociais">Ciências Sociais</option>
                    <option value="Ciências Humana">Ciências Humanas</option>
                    <option value="Ciências Exatas">Ciências Exatas</option>
                    <option value="Ciências da Saúde">Ciências da Saúde</option>
                    <option value="Ciências Polític">Ciências Política</option>
                    <option value="Comunicação">Comunicação</option>
                    <option value="Demografia">Demografia</option>
                    <option value="Desenho">Desenho</option>
                    <option value="Desenho Técnico">Desenho Técnico</option>
                    <option value="Desenho Indústrial">Desenho Indústrial</option>
                    <option value="Direito">Direito</option>
                    <option value="Educação">Educação</option>
                    <option value="Engenharia de pesca">Engenharia de pesca</option>
                    <option value="Engenharia civil">Engenharia civil</option>
                    <option value="Engenharia elétrica">Engenharia elétrica</option>
                    <option value="Engenharia ambiental">Engenharia ambiental</option>
                    <option value="Economia">Economia</option>
                    <option value="Filosofia">Filosofia</option>
                    <option value="Geográfia">Geográfia</option>
                    <option value="História">História</option>
                    <option value="Museologia">Museologia</option>
                    <option value="Psicologia">Psicologia</option>
                    <option value="Letras">Letras</option>
                    <option value="Linguistica">Linguistica</option>
                    <option value="Tecnologia">Tecnologia</option>
                    <option value="Teologia">Teologia</option>
                    <option value="Turismo">Turismo</option>
                    <option value="Psicologia">Psicologia</option>
                    <option value="Sociologia">Sociologia</option>
                    <option value="Zooologia">Zooologia</option>
                    <option value="Lazer">Lazer</option>
                    <option value="Integração">Integração</option>
                    <option value="Integração">Comemoração</option>
                  </select>
                </div>
            </div>

            <div class="row">

            <div class="form-group col-md-12">
               <label for="campo2">Descrição</label>
               <input name="description" type="text" class="form-control" placeholder="Digite uma descrição do evento">
            </div>

            </div>

            <div class="row">

              <div class="form-group col-md-6">
                 <label for="campo2">Período</label>
                 <input name="period" type="date" class="form-control" placeholder="Quando será seu evento?">
              </div>

               <div class="form-group col-md-6">
                 <label for="campo2">Local</label>
                 <input name="place" type="text" class="form-control" placeholder="Onde será o evento?">
              </div>

              <div class="form-group col-md-6">
                 <label for="campo2">Instituto / Departamento</label>
                 <input name="department" type="text" class="form-control" placeholder="Qual Instituto / Departamento?">
              </div>

              <div class="form-group col-md-6">
                 <label for="campo2">Organizador</label>
                 <input name="organiser" type="text" class="form-control" placeholder="Digite o nome do Organizador">
              </div>

            </div>

            <div class="row">

              <div class="form-group col-md-6">
                 <label for="campo2">Valor</label>
                 <input name="price" type="text" class="form-control" placeholder="Digite o nome do Organizador">
              </div>


            <div class="form-group col-md-6">
              <label for="">Banner do evento</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Escolher
                  </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="image">
              </div>
              <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-suc btn-lg">Cadastrar</button><br>
              </div>
            </div>
          </form>
        </div>
      </div>
@endsection

