@extends('layouts.app')

@section('content')

<table class="table table-dark table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">price</th>
      <th scope="col">sale_date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($comics as $comic)
  <tr>
        <th scope="row">{{ $comic['id'] }}</th>
        <td>
            <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
                 {{ $comic['title'] }}
            </a>
        </td>
        <td>{{ $comic['price'] }}</td>
        <td>{{ $comic['sale_date'] }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection('content')