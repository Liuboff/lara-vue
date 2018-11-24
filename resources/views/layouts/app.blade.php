<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lara-vue app</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lara-vue</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>
<body>
	<div class="container" id="app">
		@yield("content")
	</div>

	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>