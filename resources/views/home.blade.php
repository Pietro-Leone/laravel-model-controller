@extends("layouts.public")

@section("title", "Movies | Home")

@section("content")
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 mt-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Data</th>
            <th scope="col">Voto</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($movies as $movie)
          <tr>
            <td>{{$movie["title"]}}</td>
            <td>{{$movie["date"]}}</td>
            <td>{{$movie["vote"]}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection