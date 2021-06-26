@extends('layout.app')


@section('content')
  <h2>{{ $title }}</h2>
  <h1>Services page</h1>
  @if (count($services) > 3)
   <ul class="list-group">  
      @foreach ( $services as $service )
        <li class="list-group-item">{{ $service }}</li>
        
       @endforeach
   </ul>
  @endif

@endsection 
        

        