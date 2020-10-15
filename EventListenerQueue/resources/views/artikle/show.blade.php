@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" class="col-md-12">
            <div class="card-body">
                <h5 class="card-title">{{$artikle->title}}</h5>
                <p class="card-text">{{$artikle->artikle}}</p>
                <h6 class="card-subtitle mb-2 text-muted">Created by : {{$artikle->user->name}}</h6>
                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <a href="{{url('artikle/'.$artikle->id.'/edit')}}" class="card-link">edit</a>
                    </div>
                    <div class="p-2 bd-highlight">Status : @if ($artikle->publish == true) Published @else not published @endif</div>
                    <div class="ml-auto p-2 bd-highlight">
                        @if ($artikle->publish == false)
                            <form action="{{url('artikle/publish/'.$artikle->id)}}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="hidden" value=true name="publish">
                                <button type="submit" class="btn btn-light">Publish</button>
                            </form>
                        @endif
                    </div>
                </div>
                
                
            </div>
        </div>            
    </div>
@endsection