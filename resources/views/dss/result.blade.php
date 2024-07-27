@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Results</h1>
    
    <h2>Alternatifs</h2>
    <ul>
        @foreach($alternatifs as $alternatif)
            <li>{{ $alternatif->nama }}</li>
        @endforeach
    </ul>
    
    <h2>Data</h2>
    <ul>
        @foreach($data as $datum)
            <li>{{ $datum->nama }}</li>
        @endforeach
    </ul>
    
    <h2>Max and Min Values</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Criteria</th>
                <th>Max</th>
                <th>Min</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Integrity</td>
                <td>{{ $C1max['Alternatifs'] }}</td>
                <td>{{ $C1min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Communication</td>
                <td>{{ $C2max['Alternatifs'] }}</td>
                <td>{{ $C2min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Dependability</td>
                <td>{{ $C3max['Alternatifs'] }}</td>
                <td>{{ $C3min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Problem Solving</td>
                <td>{{ $C4max['Alternatifs'] }}</td>
                <td>{{ $C4min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Quality of Work</td>
                <td>{{ $C5max['Alternatifs'] }}</td>
                <td>{{ $C5min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Technical Skills</td>
                <td>{{ $C6max['Alternatifs'] }}</td>
                <td>{{ $C6min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Creativity</td>
                <td>{{ $C7max['Alternatifs'] }}</td>
                <td>{{ $C7min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Adaptability</td>
                <td>{{ $C8max['Alternatifs'] }}</td>
                <td>{{ $C8min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Productivity</td>
                <td>{{ $C9max['Alternatifs'] }}</td>
                <td>{{ $C9min['Alternatifs'] }}</td>
            </tr>
            <tr>
                <td>Attendance</td>
                <td>{{ $C10max['Alternatifs'] }}</td>
                <td>{{ $C10min['Alternatifs'] }}</td>
            </tr>
        </tbody>
    </table>
    
    <h2>Final Scores</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Final Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach($finalScores as $score)
                <tr>
                    <td>{{ $score['kode'] }}</td>
                    <td>{{ $score['nama'] }}</td>
                    <td>{{ $score['final_score'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
