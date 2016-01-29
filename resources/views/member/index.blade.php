@extends('main')

@section('content')

    <h1>List All Member Here</h1>


    @foreach($members as $member)
        <h1><a href="{{url('/member', $member->id)}}">{{$member -> name}}</a></h1>

        <h3>  {{ Form::image($member->image, '',array('height'=>80, 'width'=> 80)   ) }}


        </h3>
    @endforeach

@stop