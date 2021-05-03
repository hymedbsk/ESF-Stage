@extends('layouts.log')
@section('content')

<header class="masthead">
    <br /><br /><br /><br /><br />
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <input class="form-control" id="myInput" type="text" placeholder="Recherche...">
              <script>
                $(document).ready(function () {
                  $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#myList ").filter(function () {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
              </script>
            </div>
          </div>
          <br /><br />
          <div class="row">
            @foreach($articles as $article)
            <div class="col-md-6">
              <div class="jumbotron" id="myList">
                  <h1 class="display-5" style="text-align:left; font-size: 32px">{{$article->titre}}</h1>
                  <p class="lead" style="text-align:left">{{$article->sousTitre}}</p>
                  <hr class="my-4" style="text-align:left">
                  <p class="lead" style="text-align:left">
                    <a class="btn btn-primary btn-lg" href={{url("article-show/".$article->article_id)}} role="button">En savoir plus</a>

                  </p>
                </div>
            </div>
            @endforeach

          </div>
        </div>

@endsection
