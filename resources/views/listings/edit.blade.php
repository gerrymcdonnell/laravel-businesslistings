@extends('...layouts.app')

<!-- copied from create listing -->

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="card-header">Edit listing</div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    {!! Form::open(['action' => ['ListingsController@update',$listing->id],'method'=>'post']) !!}

                    {{Form::bsText('name',$listing->name,['placeholder'=>'Company Name'])}}
                    {{Form::bsText('email',$listing->email,['placeholder'=>'Company email'])}}
                    {{Form::bsText('phone',$listing->phone,['placeholder'=>'Company phone'])}}
                    {{Form::bsText('address',$listing->address,['placeholder'=>'Company address'])}}
                    {{Form::bsText('website',$listing->website,['placeholder'=>'Company website'])}}
                    {{Form::bsTextArea('bio',$listing->bio,['placeholder'=>'Company Bio'])}}

                    {{Form::hidden('_method','PUT')}}


                    {{Form::bsSubmit('submit me',['class'=>'btn btn-primary'])}}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection