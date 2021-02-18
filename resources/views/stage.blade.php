@extends('layouts.app')

@section('content')
    <header class="masthead">
        <br /><br /><br /><br /><br /><br />
        <div class="alert alert-primary" role="alert">
            <h2 class="alert-heading"> Demande de Stage </h2>
            <p> ESF encadre des stagiaires qui se spécialisent dans tous les domaines de la santé à conditions d’être en dernière année et de maitriser au moins deux langues parlées (dont l’une du pays). </p>
            <p> Les candidatures sont à envoyer à l’attention de madame Leblicq, accompagnée d’une lettre de motivation et de l’attestation de fréquentation scolaire </p>
        </div>
    </header>
    <section class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-header"style=" text-align:center">
                                <p> <img src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}"
                                        alt="logo che2"></p>
                                <p>Seul les fichier PDF sont acceptés. </p>
                                <p>Veillez à ce que les fichiers porte un nom différents.</p>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'stage.send', 'enctype' => 'multipart/form-data']) !!}
                                <div class="form-group row">
                                    <label for="nom" class="col-md-3 col-form-label text-md-right">Nom</label>

                                    <div class="col-md-8">
                                        <input id="nom" type="text"
                                            class="form-control @error('nom') is-invalid @enderror" name="nom"
                                            value="{{ old('nom') }}" required autocomplete="nom" placeholder="Doe"
                                            autofocus>
                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="prenom" class="col-md-3 col-form-label text-md-right">Prénom</label>
                                    <div class="col-md-8">
                                        <input id="prenom" type="text"
                                            class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                            value="{{ old('prenom') }}" required autocomplete="prenom" placeholder="John"
                                            autofocus>
                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="poste" class="col-md-3 col-form-label text-md-right">Poste</label>
                                    <div class="col-md-8">
                                        <select name='poste' class=" form-control ">
                                            <option value="Assistant(e) social">Assistant(e) social</option>
                                            <option value="Secrétaire">Secrétaire</option>
                                            <option value="Informatique">Informatique</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">Adresse
                                        Mail</label>
                                    <div class="col-md-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="johndoe@gmail.com">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cv" class="col-md-3 col-form-label text-md-right">C.V.</label>
                                    <div class="col-md-8">
                                        {!! Form::file('cv', ['class' => 'form-control-file border-primary btn  btn-info'] ) !!}
                                        {!! $errors->first('cv', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cv" class="col-md-3 col-form-label text-md-right">Lettre de motivation</label>
                                    <div class="col-md-8">
                                        {!! Form::file('lm', ['class' => 'form-control-file border-primary btn  btn-danger'] ) !!}
                                        {!! $errors->first('lm', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cv" class="col-md-3 col-form-label text-md-right">Attestation de fréquentation scolaire</label>
                                    <div class="col-md-8">
                                        {!! Form::file('afs', ['class' => 'form-control-file border-primary btn  btn-success'] ) !!}
                                        {!! $errors->first('afs', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>


                                <br/>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 offset-md-5">
                                        <button type="submit" class="btn btn-primary">
                                            S&apos;inscrire
                                        </button>
                                    </div>
                                </div>
                            {{ Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
