@extends("layouts.theme")
@section("title"," ARTICLES")

@section("content")


    <form method="post" action="/articles/{{$article->id}}" >
        @csrf
        @method("PUT")
        <div class="form-group ">
            <label for="">Article Title</label>
            <div class="form-control">
                <input name="title" type="text" class="form-control" value="{{$article->title}}" >
            </div>
        </div>
        <div class="form-group ">
            <label  for="">Article  discription</label>
            <div class="form-control">
                <textarea name="discription" type="text" class="form-control">{{$article->discription}}</textarea>
            </div>
        </div>
     
    
        <div class="form-group ">
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection