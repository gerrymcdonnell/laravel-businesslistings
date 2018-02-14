@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard
                    <span class="float-right">

                    <a href="/listings/create" class="btn btn success">Add Listing</a>

                    </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>
                        Your listings
                        <hr>
                        <br>

                        @if(count($listings))
                            <table>
                            <tr>
                                <th>company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td></td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                            </table>
                        @endif
                    </h3>
                </div>
            </div>
        </div>
    </div>

@endsection
