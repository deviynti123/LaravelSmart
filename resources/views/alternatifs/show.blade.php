<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Alternatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $alternatif->nama }}</h3>
                        <hr/>
                        <p>Kode: {{ $alternatif->kode }}</p>
                        <p>Integrity: {{ $alternatif->integrity }}</p>
                        <p>Communication: {{ $alternatif->communication }}</p>
                        <p>Dependability: {{ $alternatif->dependability }}</p>
                        <p>Problem Solving: {{ $alternatif->problem_solving }}</p>
                        <p>Quality of Work: {{ $alternatif->quality_of_work }}</p>
                        <p>Technical Skills: {{ $alternatif->technical_skills }}</p>
                        <p>Creativity: {{ $alternatif->creativity }}</p>
                        <p>Adaptability: {{ $alternatif->adaptability }}</p>
                        <p>Productivity: {{ $alternatif->productivity }}</p>
                        <p>Attendance: {{ $alternatif->attendance }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('alternatifs.index') }}" class="btn btn-md btn-primary mb-3">KEMBALI</a>
                        <a href="{{ route('alternatifs.edit', $alternatif->id) }}" class="btn btn-md btn-warning mb-3">EDIT</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('alternatifs.destroy', $alternatif->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-md btn-danger mb-3">HAPUS</button>
                        </form>
                        <hr/>
                        <p><strong>Nama Alternatif:</strong> {{ $alternatif->nama }}</p>
                        <p><strong>Kode:</strong> {{ $alternatif->kode }}</p>
                        <p><strong>Integrity:</strong> {{ $alternatif->integrity }}</p>
                        <p><strong>Communication:</strong> {{ $alternatif->communication }}</p>
                        <p><strong>Dependability:</strong> {{ $alternatif->dependability }}</p>
                        <p><strong>Problem Solving:</strong> {{ $alternatif->problem_solving }}</p>
                        <p><strong>Quality of Work:</strong> {{ $alternatif->quality_of_work }}</p>
                        <p><strong>Technical Skills:</strong> {{ $alternatif->technical_skills }}</p>
                        <p><strong>Creativity:</strong> {{ $alternatif->creativity }}</p>
                        <p><strong>Adaptability:</strong> {{ $alternatif->adaptability }}</p>
                        <p><strong>Productivity:</strong> {{ $alternatif->productivity }}</p>
                        <p><strong>Attendance:</strong> {{ $alternatif->attendance }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
