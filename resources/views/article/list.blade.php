@extends("layouts.theme")
@section("title"," ARTICLES")

@section("content")
<div id="three-column" class="container">
		<div class="title">
			<h2>Feugiat lorem ipsum dolor sed veroeros</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
        @foreach($articles as $article)
		  <div class="boxA">
            <h1><a href="/article/{{$article->id}}">{{$article->title}}</a></h1>
			<p>{{$article->discription}}</p>
			<a class="btn btn-primary" href="/article/{{$article->id}}/edit">edit</a>
		  </div>
	    @endforeach
		
	</div>
@endsection