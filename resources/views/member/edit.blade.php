@extends('main')

@section('content')
    <div id="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <h1>Edit {!! $member->name !!} Here</h1>

                {{--                {!! Form::open(array('action'=>'MembersController@store', 'files'=>true)) !!}--}}

                {{--                {!! Form::model($article, ['method' => 'PATCH', 'action' =>['ArticlesController@update', $article->id]]) !!}--}}

                {!! Form::model($member, ['method' => 'PATCH', 'files'=>true, 'action' =>['MembersController@update', $member->id]]) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', $member->name, array( 'class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', $member->email, array( 'class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Phone') !!}
                    {!! Form::text('phone', $member->phone, array( 'class'=>'form-control')) !!}
                </div>
                {!! Form::label('image', 'Upload avatar') !!}
                {!! Form::file('image', null, array( 'class'=>'form-control')) !!}


                {!! Form::submit( 'Edit Member', array('class'=>'btn'))  !!}
                {!! Form::close() !!}


                {!! Form::open(['method' => 'DELETE','route' =>['member.destroy',$member->id]]) !!}
                <div class ="form-group">
                    {!! Form::submit('Delete Member', ['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
@stop