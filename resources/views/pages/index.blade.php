@extends('layouts.app')
@section('content')
  <h1>Index</h1>
  <p>Main page</p>
    @if(count($album) > 0)

      @foreach ($album as $thisalbum)
      <ul>
        @foreach ($thisalbum as $albuminfo)
            <li>{{$albuminfo}}</li>
        @endforeach
      </ul>

      {{-- <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div> --}}

      @endforeach

    @endif
@endsection
