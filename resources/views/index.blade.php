<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Player MU</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Tombol Tambah player -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Daftar Player</h1>
        </div>

        <!-- Tabel player -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Pemain</th>
                        <th>Nomor Punggung</th>
                        <th>Posisi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_player as $player)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $player->nama_pemain }}</td>
                        <td>{{ $player->no_punggung }}</td>
                        <td>{{ $player->posisi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>