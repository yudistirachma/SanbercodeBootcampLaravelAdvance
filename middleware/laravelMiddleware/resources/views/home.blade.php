@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav class="nav flex-column">
                        <a class="nav-link " href="{{route('route1')}}">Route1 (hanya super admin)</a>
                        <a class="nav-link " href="{{route('route2')}}">Route2 (hanya super admin dan admin)</a>
                        <a class="nav-link" href="{{route('route3')}}">Route3 (untuk semua)</a>                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
