@extends('main')

@section('content')
    <div id="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <h1>Add a Member Here</h1>
                {!! Form::open(array('action'=>'MembersController@store', 'files'=>true)) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, array( 'class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, array( 'class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Phone') !!}
                    {!! Form::text('phone', null, array( 'class'=>'form-control')) !!}
                </div>
                {!! Form::label('image', 'Upload avatar') !!}
                {!! Form::file('image', null, array( 'class'=>'form-control')) !!}


                {!! Form::submit( 'Add Member', array('class'=>'btn'))  !!}
                {!! Form::close() !!}
            </div>
            <div class="col-md-4" >

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@stop