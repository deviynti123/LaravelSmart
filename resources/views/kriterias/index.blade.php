@extends('layouts.app')

@section('title', 'Daftar Kriteria')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Daftar Kriteria</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <!-- <a href="{{ route('kriterias.create') }}" class="btn btn-md btn-success mb-3">ADD KRITERIA</a> -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">KODE</th>  
                                    <th scope="col">NAMA KRITERIA</th>
                                    <th scope="col">BOBOT</th>
                                    <th scope="col">JENIS</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kriterias as $index => $kriteria)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $kriteria->kode }}</td>
                                        <td>{{ $kriteria->kriteria }}</td>
                                        <td>{{ $kriteria->bobot }}</td>
                                        <td>{{ $kriteria->jenis }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kriterias.destroy', $kriteria->id) }}" method="POST">
                                                <a href="{{ route('kriterias.show', $kriteria->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('kriterias.edit', $kriteria->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <!-- <button type="submit" class="btn btn-sm btn-danger">HAPUS</button> -->
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Data Kriteria belum Tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $kriterias->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
