@extends('layouts.app')
@section('content')

<header class="masthead">
    <br /><br /><br /><br /><br />
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>
                        <img src="{{ asset('/img/che2head.png') }}" alt="logo che2">
                        <h3> Créer une facture</h3>
                    </p>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['facture.add'],'enctype'=>'multipart/form-data']) !!}
                    @csrf
                    <div class="form-group ">
                        <div class="form-group  {!! $errors->has('qte') ? 'has-error' : '' !!}">
                            <div class="row">
                                <div class="col-md-6">
                                    {!! Form::number('num', null, ['class' => 'form-control border-primary',
                                            'placeholder' => 'Montant de la dépense', 'maxlength' => '6','min'=>'0',
                                            'step'=>'0.01']) !!}
                                    {!! $errors->first('num', '<small class="help-block">:message</small>')
                                            !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::text('dest', '2019/2020', ['class' => 'form-control
                                    border-primary', 'placeholder' => 'année/année']) !!}
                                    {!! $errors->first('annee', '<small class="help-block">:message</small>')
                                    !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        {!! Form::submit('Enregister le budget !', ['class' => 'btn btn-info pull-right']) !!}
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