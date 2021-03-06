<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
 </head>
 <body>
     <h1>Edit {{$post->title}}</h1>
     @include('partials.errors')
     <form action="{{route('posts.update', ['post'=> $post->id])}}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
         </div>
         @error('title')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="body">Body</label>
              <textarea name="body" id="body" class="form-control" rows="3">{{$post->body}}</textarea>
         </div>
         @error('body')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
             <label for="tags">Tags</label>
             <select class="form-control" name="tags[]" id="tags" multiple>
                 @if($tags)
                     @foreach($tags as $tag)
                         <option value="{{$tag->id}}" {{$post->tags->contains($tag) ? 'selected' : ''}}>{{$tag->name}}</option>
                     @endforeach
                 @endif
             </select>
         </div>
         @error('tags')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 </body>
</html>