<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<title>{{$reportage->title}}</title>
</head>
<body>
	<h1>PORESTO ONLINE</h1>
	<h2>{{$reportage->title}}</h2>
	<hr>
	{{$reportage->content}}
	<hr>
	{{$reportage->user->name}}|{{$reportage->category->name}}|

	@foreach($reportage->tags as $tag)
		{{$tag->name}}
	@endforeach
</body>
</html>