@extends('layouts.app')
@section('content')

<header class="masthead">


</header>

<section class="page-section " id="portfolio">
    <div class="container">
        <div class="text-center alert alert-danger">
            <h2 class="section-heading text-uppercase">Devenir membre</h2>
            <h4>En devenant membre vous vous engagez à respecter le règlement d’ordre d’intérieur et également à vous acquitter d’une cotisation mensuelle pour un montant de </h4> <h3> 10€ par mois sur le compte: Espace Santé Famille  BE24 3631 7733 5238. </h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="portfolio-item p-3 mb-5 bg-white rounded">
                    <a class="portfolio-link" data-toggle="modal" href="#myModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('assets/img/portfolio/particulier.png')}}" alt="" />
                    </a>
                </div>
            </div>
            <div class="portfolio-item p-3 mb-5 bg-white rounded ">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{asset('assets/img/portfolio/professionnel.png')}}" alt="" />
                </a>
            </div>
        </div>
    </div>
<section>

    <div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p style="text-align:center">
                    <h3> Données Personnelles</h3>
                </p>
            </div>
            <div class="modal-body">
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
                                    <label for="poste" class="col-md-3 col-form-label text-md-right">Date de naissance</label>
                                    <div class="col-md-8">
                                        <input type="date" id="Date de naissance" name="ddn"  class="form-control @error('prenom') is-invalid @enderror" required >
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

                                </div>
                                <div class="form-group row">

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

@endsection
