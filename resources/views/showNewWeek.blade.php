
@extends('mainTemplate')

@section('title', 'New Week')

@section('content')
  @parent
      <h2>new week added to course</h2>
      <p style="font-size: xx-large;">starting date: {{$start}}</p>
      <p style="font-size: xx-large;">ending date: {{$end}}</p>
      <p style="font-size: xx-large;">week number: {{$numb}}</p>
      <p style="font-size: xx-large;">titles: </p>
      <ul style="font-size: xx-large;">
        @foreach ($titles as $ttl)
          <li>{{ $ttl }}</li>
        @endforeach
      </ul>

@endsection
