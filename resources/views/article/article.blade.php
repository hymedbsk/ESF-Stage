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
                    <h3 class="panel-title">Liste des utilisateurs</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th class="scope">#</th>
                                <th class="scope">Titre</th>
                                <th class="scope">Sous-titre</th>
                                <th class="scope"></th>
                                
                                <th class="scope">{!! link_to_route('article.add', 'Ajouter', null, ['class' => 'btn btn-success']) !!}</th>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td class="text-primary"><strong>{{ $article->article_id }}</strong></td>
                                        <td class="text-primary"><strong></strong>{{ $article->titre }}</td>
                                        <td class="text-primary"><strong></strong>{{ $article->sousTire }}</td>
                                        <td>{!! link_to_route('article.edit', 'Modifier', [$article->id], ['class' => 'btn btn-warning ']) !!}</td>
                                        <td>
                                            {{ Form::open(['action' => ['App\Http\Controllers\ArticleController@destroy', $article->id], 'method' => 'DELETE'])}}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Supprimer', ['class' => 'btn btn-danger float-center', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')'] )}}
                                            {{Form::close()}}
                                        </td>
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
