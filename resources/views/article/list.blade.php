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
    <div class="container">
        <div class="jumbotron">
           <h1>Laravel 8 Autocomplete: Real Programmer</h1>
        </div>
     </div>
     <div class="container">
        <input class="typeahead form-control" type="text">
     </div>
     <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $('input.typeahead').typeahead({
            source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            }
        });
     </script>
@endsection
