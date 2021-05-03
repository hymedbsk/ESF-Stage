@extends('layouts.log')
@section('content')

<header class="masthead">
    <br /><br /><br /><br /><br />
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style=" text-align:center">
                    <img src="{{ asset('/assets/img/Logo-ESF-RVB-1-5.png') }}" alt="Logo ESF">
                    <h3 class="panel-title">Liste des articles</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th class="scope">Titre</th>
                                <th class="scope">Sous-Titre</th>
                                <th class="scope">Contenu</th>
                                <th></th>
                                <th></th>
                                <th>
                                    <a  href="{{ url('article/add')}}">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-2x style='color : green'"></i></div>
                                        </div>
                                    </a>
                                </th>

                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td class="text-primary"><strong>{{ $article->titre }}</strong></td>
                                        <td class="text-primary"><strong></strong>{{ $article->sousTitre }} </td>
                                        <td id="contenu" class="text-primary"><strong></strong>{{ $article->contenu }}</td>
                                        <td class="text-primary">{!! link_to_route('article.edit', 'Modifier', [$article->article_id], ['class' => 'btn btn-warning ']) !!}</td>
                                        <td> {{ Form::open(['action' => ['App\Http\Controllers\ArticleController@destroy', $article->article_id], 'method' => 'POST'])}}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Supprimer', ['class' => 'btn btn-danger float-right', 'onclick' => 'return confirm(\'Vraiment supprimer cet article ?\')'] )}}
                                            {{Form::close()}}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
