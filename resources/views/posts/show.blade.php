<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="/css/app.css">
 </head>
 <body>
     <h1>{{$post->title}}</h1>
     <p>{{$post->body}}</p>
     <p>Category: {{$post->category ? $post->category->name : 'N/A'}} ({{$post->category ? $post->category->description : ''}})</p>
 </body> 
</html>