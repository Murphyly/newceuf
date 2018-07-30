@extends("layouts.app")

@section('title')
    Eventos atuais
@endsection

@section('content')>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Standalone Image Button</h2>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
          <input id="thumbnail" class="form-control" type="text" name="image">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
      </div>
    </div>
  </div>

  @endsection



