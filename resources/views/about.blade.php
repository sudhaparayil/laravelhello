@extends("layouts.app")
@section("title","about page")
@section("page-content")

<p> about content</p>
{{$message}}{{$price}}
<ul>
@foreach($items as $item)

<li>{{$item}}</li>

@endforeach
</ul>
<h1>{{$id}} {{$name}}</h1>

<p>{{$test}}</p>
@endsection

