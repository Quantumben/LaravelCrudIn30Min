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
<form action="/posts" method="POST">
@csrf
<label class="font-bold text-gray-800" for="title">Title:</label>
<input type="text" name="title"  class="h-18 bg-white border border-gray-300
 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">

 <label class="font-bold text-gray-800" for="title">Content:</label>
<textarea type="text" name="content" value="" class="h-16 bg-white border border-gray-300
rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">

</textarea>
<button class="bg-blue-500 tracking-wide text-white px-6 py-2
inline-block mb-6 shadow-lg rounded hover:shadow">create Post</button>

</form>


</body>
</html>
