<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Alternatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('alternatifs.update', $alternatif->id) }}" method="POST">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">KODE</label>
                                <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode', $alternatif->kode) }}" placeholder="Masukkan Kode Alternatif">
                            
                                <!-- error message untuk kode -->
                                @error('kode')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NAMA ALTERNATIF</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $alternatif->nama) }}" placeholder="Masukkan Nama Alternatif">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">INTEGRITY</label>
                                <input type="number" class="form-control @error('integrity') is-invalid @enderror" name="integrity" value="{{ old('integrity', $alternatif->integrity) }}" placeholder="Masukkan Integrity">
                            
                                <!-- error message untuk integrity -->
                                @error('integrity')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">COMMUNICATION</label>
                                <input type="number" class="form-control @error('communication') is-invalid @enderror" name="communication" value="{{ old('communication', $alternatif->communication) }}" placeholder="Masukkan Communication">
                            
                                <!-- error message untuk communication -->
                                @error('communication')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">DEPENDABILITY</label>
                                <input type="number" class="form-control @error('dependability') is-invalid @enderror" name="dependability" value="{{ old('dependability', $alternatif->dependability) }}" placeholder="Masukkan Dependability">
                            
                                <!-- error message untuk dependability -->
                                @error('dependability')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">PROBLEM SOLVING</label>
                                <input type="number" class="form-control @error('problem_solving') is-invalid @enderror" name="problem_solving" value="{{ old('problem_solving', $alternatif->problem_solving) }}" placeholder="Masukkan Problem Solving">
                            
                                <!-- error message untuk problem_solving -->
                                @error('problem_solving')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">QUALITY OF WORK</label>
                                <input type="number" class="form-control @error('quality_of_work') is-invalid @enderror" name="quality_of_work" value="{{ old('quality_of_work', $alternatif->quality_of_work) }}" placeholder="Masukkan Quality of Work">
                            
                                <!-- error message untuk quality_of_work -->
                                @error('quality_of_work')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">TECHNICAL SKILLS</label>
                                <input type="number" class="form-control @error('technical_skills') is-invalid @enderror" name="technical_skills" value="{{ old('technical_skills', $alternatif->technical_skills) }}" placeholder="Masukkan Technical Skills">
                            
                                <!-- error message untuk technical_skills -->
                                @error('technical_skills')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">CREATIVITY</label>
                                <input type="number" class="form-control @error('creativity') is-invalid @enderror" name="creativity" value="{{ old('creativity', $alternatif->creativity) }}" placeholder="Masukkan Creativity">
                            
                                <!-- error message untuk creativity -->
                                @error('creativity')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">ADAPTABILITY</label>
                                <input type="number" class="form-control @error('adaptability') is-invalid @enderror" name="adaptability" value="{{ old('adaptability', $alternatif->adaptability) }}" placeholder="Masukkan Adaptability">
                            
                                <!-- error message untuk adaptability -->
                                @error('adaptability')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">PRODUCTIVITY</label>
                                <input type="number" class="form-control @error('productivity') is-invalid @enderror" name="productivity" value="{{ old('productivity', $alternatif->productivity) }}" placeholder="Masukkan Productivity">
                            
                                <!-- error message untuk productivity -->
                                @error('productivity')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">ATTENDANCE</label>
                                <input type="number" class="form-control @error('attendance') is-invalid @enderror" name="attendance" value="{{ old('attendance', $alternatif->attendance) }}" placeholder="Masukkan Attendance">
                            
                                <!-- error message untuk attendance -->
                                @error('attendance')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning me-3">RESET</button>
                            <a href="{{ route('alternatifs.index') }}" class="btn btn-md btn-secondary">KEMBALI</a>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
