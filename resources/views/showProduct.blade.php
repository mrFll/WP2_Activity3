
@extends('mainTemplate')

@section('title', 'show products')

@section('content')
  @parent

    @if($products->isEmpty())
        <p style="color: black; font-size: xx-large">There isn't any product yet. please add product first!</p>
    @else
        <h2>Products List</h2>

        <table>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>description</th>
                <th>published</th>
            </tr>

            @foreach($products as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->description}}</td>
                    @if($item->published == '1')
                        <td>YES</td>
                    @else
                        <td>NO</td>
                    @endif

                </tr>
            @endforeach

        </table>
    @endif

@endsection
