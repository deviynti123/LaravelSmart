<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Kriteria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $kriteria->kriteria }}</h3>
                        <hr/>
                        <p>Kode: {{ $kriteria->kode }}</p>
                        <p>Bobot: {{ $kriteria->bobot }}</p>
                        <p>Jenis: {{ $kriteria->jenis }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('kriterias.index') }}" class="btn btn-md btn-primary mb-3">KEMBALI</a>
                        <a href="{{ route('kriterias.edit', $kriteria->id) }}" class="btn btn-md btn-warning mb-3">EDIT</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kriterias.destroy', $kriteria->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-md btn-danger mb-3">HAPUS</button>
                        </form>
                        <hr/>
                        <p><strong>Kriteria:</strong> {{ $kriteria->kriteria }}</p>
                        <p><strong>Kode:</strong> {{ $kriteria->kode }}</p>
                        <p><strong>Bobot:</strong> {{ $kriteria->bobot }}</p>
                        <p><strong>Jenis:</strong> {{ $kriteria->jenis }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
