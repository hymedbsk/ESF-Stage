@extends('layouts.log')
@section('content')
<script>
    tinymce.init({
      selector: '#mytextarea'
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
                        <h3> Modifier un article</h3>
                    </p>
                </div>
                <div class="card-body">
                    {!! Form::model($article,['route' => ['article.update', $article->article_id], 'method' => 'put', 'class'=>'form-horizontal panel']) !!}
                    @csrf
                    <div class="form-group ">
                        <div class="form-group  {!! $errors->has('qte') ? 'has-error' : '' !!}">
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::text('titre', $article->titre, ['class' => 'form-control border-primary',
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

                                    {!! Form::text('sousTitre', $article->sousTitre, ['class' => 'form-control border-primary',
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
                                    {!! Form::textarea('contenu', $article->contenu, ['class' => 'form-control border-primary','id' => 'mytextarea',
                                            'placeholder' =>  'Contenu']) !!}
                                    {!! $errors->first('text', '<small class="help-block">:message</small>')
                                            !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 text-center">
                        {!! Form::submit('Modifier l\'article', ['class' => 'btn btn-info pull-right']) !!}
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
