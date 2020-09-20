<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tutorial Laravel #21 : CRUD Eloquent Laravel</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Eloquent Data Pegawai - <a href="#" target="_blank">Ganteng Ngoding</a>
            </div>
            <div class="card-body">
                <a href="/employee/create" class="btn btn-primary">Input Pegawai Baru</a>
                <br />
                <br />

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p style="text-align: center">{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $no => $list)
                            <tr>
                                <th>{{ $no + 1 }}</th>
                                <td>{{ $list->nama }}</td>
                                <td>{{ $list->alamat }}</td>
                                <td>
                                    <a href="/employee/edit/{{ $list->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/employee/delete/{{ $list->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $employees->links() !!}

            </div>
        </div>
    </div>
</body>

</html>
