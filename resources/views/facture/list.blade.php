@extends('layouts.app')
@section('content')

<header class="masthead">
    <br /><br /><br /><br /><br />
</header>
<div class="container">
    <div class="row justify-content-center">
        @foreach($factures as $facture)
                <div class="col-md-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
        
                                <h5 class="card-title">
                                </h5>
                                <p class="card-text"><strong>
                                        <h4 style="color:black">{{ $facture->num }}</h4>
                                </p></strong>
                                <p class="card-text"><strong> Destination : {{ $facture->dest }}</p>
                                </strong>
                                <p class="sub-text" style="color:black"> le
                                    {{ $facture->date_cree->format('d-m-yy') }}</p>

                                <p class="sub-text">
            
                                </p>
                  
                                </p>  
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection