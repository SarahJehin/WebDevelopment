@extends('layouts.app')

@section('title', 'Spelregels')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('extra_nav')
            
            <div class="panel panel-default">
                <div class="panel-heading">Spelregels</div>

                <div class="panel-body">
                    @include('rules')
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection