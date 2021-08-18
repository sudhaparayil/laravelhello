@extends("layouts.theme")
@section("title"," ARTICLES")

@section("content")


    <form method="post" action="/articles" >
        @csrf
        <div class="form-group ">
            <label for="">Article Title</label>
            <div class="form-control">
                <input name="title" type="text" value="{{old('title')}}" class="form-control"  >
                {{-- @if($errors->has("title"))--}}
                @error("title")
                <p style= "color:red">{{$errors->first("title")}}</p>
                @enderror
                {{-- @endif--}}
            </div>
        </div>
        <div class="form-group ">
            <label  for="">Article  discription</label>
            <div class="form-control">
                <textarea name="discription" type="text" class="form-control">{{old('discription')}}</textarea>
                {{-- @if($errors->has("discription"))--}}
                @error("title")
                <p style= "color:red">{{$errors->first("discription")}}</p>
                @enderror
                {{--@endif--}}
            </div>
        </div>
     
    
        <div class="form-group ">
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection