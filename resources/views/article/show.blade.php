@extends("layouts.theme")
@section("title"," ARTICLES")

@section("content")

<div id="three-column" class="container">
		<div class="title">
			<h2>Feugiat lorem ipsum dolor sed veroeros</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
        
		  <div class="boxA">
            <h1>{{$article->title}}</h1>
			<p>{{$article->discription}}</p>
			
		  </div>
	   <a href="/list">back</a>

	</div>
        <form method="post" action="/article/{{$article->id}}">
        @csrf
        @method("DELETE")
            <button onclick="confirm('are you sure?')" class="btn btn-primary">delete</button>
       </form>
@endsection