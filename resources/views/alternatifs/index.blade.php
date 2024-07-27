@extends('layouts.app')

@section('title', 'Daftar Alternatif')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Daftar Alternatif</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('alternatifs.create') }}" class="btn btn-md btn-success mb-3">ADD ALTERNATIF</a>
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">KODE</th>
                                    <th scope="col">NAMA ALTERNATIF</th>
                                    <th scope="col">INTEGRITY</th>
                                    <th scope="col">COMMUNICATION</th>
                                    <th scope="col">DEPENDABILITY</th>
                                    <th scope="col">PROBLEM SOLVING</th>
                                    <th scope="col">QUALITY OF WORK</th>
                                    <th scope="col">TECHNICAL SKILLS</th>
                                    <th scope="col">CREATIVITY</th>
                                    <th scope="col">ADAPTABILITY</th>
                                    <th scope="col">PRODUCTIVITY</th>
                                    <th scope="col">ATTENDANCE</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($alternatifs as $index => $alternatif)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $alternatif->kode }}</td>
                                        <td>{{ $alternatif->nama }}</td>
                                        <td>{{ $alternatif->integrity }}</td>
                                        <td>{{ $alternatif->communication }}</td>
                                        <td>{{ $alternatif->dependability }}</td>
                                        <td>{{ $alternatif->problem_solving }}</td>
                                        <td>{{ $alternatif->quality_of_work }}</td>
                                        <td>{{ $alternatif->technical_skills }}</td>
                                        <td>{{ $alternatif->creativity }}</td>
                                        <td>{{ $alternatif->adaptability }}</td>
                                        <td>{{ $alternatif->productivity }}</td>
                                        <td>{{ $alternatif->attendance }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('alternatifs.destroy', $alternatif->id) }}" method="POST">
                                                <a href="{{ route('alternatifs.show', $alternatif->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('alternatifs.edit', $alternatif->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="14" class="text-center">Data Alternatif belum Tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $alternatifs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
