@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>
                        Your listings
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
</div>
@endsection
