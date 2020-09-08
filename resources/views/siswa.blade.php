<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>

<h1>Data Siswa</h1>
<h3>Ganteng Ngoding</h3>

<ul>
	@foreach($siswa as $s)
		<li>{{ "Nama : ". $s->nama . ' | Alamat : ' . $s->alamat }}</li>
	@endforeach
</ul>

</body>
</html>