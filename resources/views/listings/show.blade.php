@extends('...layouts.app')

<!-- copied from create listing -->

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="card-header">{{$listing->name}}</div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <ul class="list-group-item"> Address: {{$listing->address}}</ul>
                    <ul class="list-group-item"> Email: {{$listing->email}}</ul>
                    <ul class="list-group-item"> Website:{{$listing->website}}</ul>
                    <ul class="list-group-item"> Phone:{{$listing->phone}}</ul>

                    <hr>
                    Bio:
                    <div class="well">
                    {{$listing->bio}}
                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection