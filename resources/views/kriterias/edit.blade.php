<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kriteria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kriterias.update', $kriteria->id) }}" method="POST">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">KODE</label>
                                <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode', $kriteria->kode) }}" placeholder="Masukkan Kode Kriteria">
                            
                                <!-- error message untuk kode -->
                                @error('kode')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NAMA KRITERIA</label>
                                <input type="text" class="form-control @error('kriteria') is-invalid @enderror" name="kriteria" value="{{ old('kriteria', $kriteria->kriteria) }}" placeholder="Masukkan Nama Kriteria">
                            
                                <!-- error message untuk kriteria -->
                                @error('kriteria')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">BOBOT</label>
                                <input type="number" class="form-control @error('bobot') is-invalid @enderror" name="bobot" value="{{ old('bobot', $kriteria->bobot) }}" placeholder="Masukkan Bobot Kriteria">
                            
                                <!-- error message untuk bobot -->
                                @error('bobot')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">JENIS</label>
                                <select class="form-control @error('jenis') is-invalid @enderror" name="jenis">
                                    <option value="Benefit" {{ old('jenis', $kriteria->jenis) == 'Benefit' ? 'selected' : '' }}>Benefit</option>
                                    <option value="Cost" {{ old('jenis', $kriteria->jenis) == 'Cost' ? 'selected' : '' }}>Cost</option>
                                </select>
                            
                                <!-- error message untuk jenis -->
                                @error('jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
