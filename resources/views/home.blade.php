@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/add/match')}}">Add Match</a>
                    <a href="{{ url('/add/category')}}">Add Category</a>
                    <a  href="{{ url('/edit')}}">Edit</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
