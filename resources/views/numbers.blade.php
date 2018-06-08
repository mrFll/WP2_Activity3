
@extends('mainTemplate')

@section('title', 'show number')

@section('content')
  @parent
      <p style="font-size: xx-large;">number is : {{$number}}</p>
@endsection
