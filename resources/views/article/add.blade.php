@extends('layouts.log')
@section('content')
<script>
    tinymce.init({
      selector: '#mytextarea',
      plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'table emoticons template paste help'
        ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
    menu: {
        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
      },
      menubar: 'favs file edit view insert format tools table help',

    });
  </script>
<header class="masthead">
    <br /><br /><br /><br /><br />
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=" text-align:center">
                    <p>
                        <img src="{{ asset('assets/img/Logo-ESF-RVB-1-5.png') }}" alt="logo ESF">
                        <h3> Créer un article</h3>
                    </p>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['article.add'],'enctype'=>'multipart/form-data']) !!}
                    @csrf
                    <div class="form-group ">
                        <div class="form-group  {!! $errors->has('qte') ? 'has-error' : '' !!}">
                            <div class="row">

                                <div class="col-md-12">
                                    {!! Form::text('titre', null, ['class' => 'form-control border-primary',
                                            'placeholder' => 'Titre de l\'article', 'required']) !!}
                                    {!! $errors->first('text', '<small class="help-block">:message</small>')
                                            !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-group  {!! $errors->has('qte') ? 'has-error' : '' !!}">
                            <div class="row">
                                <div class="col-md-12">

                                    {!! Form::text('sousTitre', null, ['class' => 'form-control border-primary',
                                            'placeholder' => 'Sous-Titre', 'required']) !!}
                                    {!! $errors->first('text', '<small class="help-block">:message</small>')
                                            !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-group  {!! $errors->has('qte') ? 'has-error' : '' !!}">
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::textarea('contenu', null, ['class' => 'form-control border-primary','id' => 'mytextarea',
                                            'placeholder' =>  'Contenu']) !!}
                                    {!! $errors->first('text', '<small class="help-block">:message</small>')
                                            !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        {!! Form::submit('Créer l\'article', ['class' => 'btn btn-info pull-right']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"> Retour</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
