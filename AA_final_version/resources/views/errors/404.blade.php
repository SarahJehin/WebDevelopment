@extends('layouts.app')

@section('title', 'Page not found!')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            <div class="panel panel-default">
                <div class="panel-heading">Oops, deze pagina bestaat helaas niet ...</div>

                <div class="panel-body">
                    
                    
                    <div>
                        <p>De pagina die je zoekt bestaat helaas niet. Misschien heb je een typfoutje gemaakt of misschien is deze pagina verwijderd van onze servers.</p>
                        <p>Ga terug naar de <a href="{{url('/')}}">homepagina</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection