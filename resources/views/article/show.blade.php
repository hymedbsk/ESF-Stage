@extends('layouts.log')
@section('content')
<header class="masthead">
    <br /><br /><br />
</header>

    <div class="jumbotron">
        <h1 class="display-2">{{ $article->titre }}!</h1>
        <hr class="my-4">
        <h5>{{ $article->sousTitre }}</h5>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="{{ url('article') }}" role="button">Retour</a>
        </p>
      </div>
      <div class="container">
          <p class="text-center">
              {!! $article->contenu !!}
          </p>
      </div>
@endsection
