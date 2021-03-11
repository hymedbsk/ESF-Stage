@extends('layouts.log')

@section('content')

<header class="masthead">
    <br /><br /><br /><br /><br /><br />
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="intro-text">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <a href="{{ url('/budget') }}">
                                    <h5 class="card-title"><i style="color:#CD9A64" class="fas fa-coins fa-4x"></i></h5>
                                    <p class="card-text"><strong>Factures</p></strong>
                                    <a class="card-text"></a>
                                    <a class="card-text"></a>
                                    <p class="sub-card"> </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <a href="{{ url('/user/list') }}">
                                    <h5 class="card-title"><i style="color:#CD9A64" class="fas fa-users fa-4x"></i></h5>
                                    <p class="card-text"><strong>Gestion des utilisateurs</p></strong>
                                    <a class="card-text"></a>
                                    <a class="card-text"></a>
                                    <p class="sub-card"> </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <a href="{{ url('/role') }}">
                                    <h5 class="card-title"><i style="color:#CD9A64" class="fas fa-calendar-alt fa-4x"></i>
                                    </h5>
                                    <p class="card-text"><strong>Calendrier</p></strong>
                                    <a class="card-text"></a>
                                    <a class="card-text"></a>
                                    <p class="sub-card"> </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <a href="{{ url('/role') }}">
                                    <h5 class="card-title"><i style="color:#CD9A64" class="fas fa-bullhorn fa-4x"></i></h5>
                                    <p class="card-text"><strong>Gestion des articles</p></strong>
                                    <a class="card-text"></a>
                                    <a class="card-text"></a>
                                    <p class="sub-card"> </p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
