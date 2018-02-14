@extends('...layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">create listing</div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    {!! Form::open(['action' => 'ListingsController@store','method'=>'post']) !!}

                    {{Form::bsText('name','',['placeholder'=>'Company Name'])}}
                    {{Form::bsText('email','',['placeholder'=>'Company email'])}}
                    {{Form::bsText('phone','',['placeholder'=>'Company phone'])}}
                    {{Form::bsText('address','',['placeholder'=>'Company address'])}}
                    {{Form::bsTextArea('bio','',['placeholder'=>'Company Bio'])}}


                    {{Form::bsSubmit('submit me',['class'=>'btn btn-primary'])}}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection