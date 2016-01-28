@extends('main')

@section('content')

    <h1>List All Member Here</h1>


    <h1>{{$member -> name}}</h1>

    <h3>  {{ Form::image($member->image, '',array('height'=>80, 'width'=> 80)   ) }}
    </h3>
    <h3> {!! $member->phone !!}</h3>
    <h3> {!! $member->email !!}</h3>
    <a href="{{url('member', $member->id.'/edit')}}"> Edit</a>

@stop