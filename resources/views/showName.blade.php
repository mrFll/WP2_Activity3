
@extends('mainTemplate')

@section('title', 'show name')

@section('content')
  @parent
      <p style="font-size: xx-large;">name : {{$name}}</p>
@endsection
