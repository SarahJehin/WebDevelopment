@extends('layouts.app')

@section('title', 'Periodes')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('extra_nav')
            
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>

                <div class="panel-body">
                    
                    @if(Auth::user()->is_admin)
                    <div>
                        Hier kan je je periodes aanpassen:
                        
                        @if (session('msg'))
                            <div class="msg_info">
                                {{ session('msg') }}
                            </div>
                        @endif
                        
                        <div>
                            @foreach($periods as $period)
                            <div>
                                <h4>{{ $period->period_name }}</h4>
                                
                                <form id="update_period" action="{{ url('admin/update_period') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div>
                                        <label for="startdate">Startdatum:</label>
                                        <input type="date" name="startdate" id="startdate" value="{{ explode(" ", $period->startdate)[0] }}">
                                        <input type="time" name="starttime" id="starttime" value="{{ explode(" ", $period->startdate)[1] }}">
                                    </div>
                                    <div>
                                        <label for="enddate">Einddatum:</label>
                                        <input type="date" name="enddate" id="enddate" value="{{ explode(" ", $period->enddate)[0] }}">
                                        <input type="time" name="endtime" id="endtime" value="{{ explode(" ", $period->enddate)[1] }}">
                                    </div>
                                    
                                    <div>
                                        <input type="number" name="period_id" value="{{ $period->id }}" hidden="hidden">
                                    </div>
                                    
                                    <div>
                                        <input type="submit" value="Updaten">
                                    </div>
                                    
                                </form>
                                
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    @else
                    <div>
                        Only admins can view this page
                    </div>
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection