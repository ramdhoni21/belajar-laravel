<!DOCTYPE html>
<html>
<head>
	<title>Passing data Controller ke View</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

    <br>

    <p>Nama : {{ $nama }}</p>

    <p>Mara Pelajaran</p>
    <ul>
        @foreach ($makul as $m)
            <li>{{ $m }}</li>
        @endforeach
    </ul>

</body>
</html>