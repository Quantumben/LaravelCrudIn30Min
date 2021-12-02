<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="container max-w-full">
<h1 class="text-4xl font-bold mb-4">My Blog</h1>
<form action="/posts/create" method="get">
    <button class="bg-blue-500 tracking-wide text-white px-6 py-2
    inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Posts</button>
</form>


    <article class="mb-2">

        @foreach ($posts as $post)
    <a href="/posts/{{$post->id}}/edit" class="text-xl font-bold text-blue-500">{{$post->title}}</a>
  <p class="text-md text-gray-600">{{$post->content}}
    </article>
    <hr class="mt-2">
    @endforeach
</div>


</body>
</html>
