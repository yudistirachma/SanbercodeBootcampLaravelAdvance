@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" class="col-md-12">
            <div class="card-body">
                <h5 class="card-title">{{$artikle->title}}</h5>
                <p class="card-text">{{$artikle->artikle}}</p>
                <h6 class="card-subtitle mb-2 text-muted">Created by : {{$artikle->user->name}}</h6>
                <a href="{{url('artikle/edit')}}" class="card-link">edit</a>
                <a href="{{url('artikle/'.$artikle->id)}}" class="card-link">read more</a>
            </div>
        </div>            
    </div>
@endsection