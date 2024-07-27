<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class DSSController extends Controller
{
    public function calculateSmart()
    {
        // Ambil data kriteria dan alternatif dari database
        $kriterias = Kriteria::all();

        // Normalisasi bobot
$totalBobot = $kriterias->sum('bobot');

$bk1 = $kriterias->where('id', 12)->first()->bobot / $totalBobot;
$bk2 = $kriterias->where('id', 13)->first()->bobot / $totalBobot;
$bk3 = $kriterias->where('id', 14)->first()->bobot / $totalBobot;
$bk4 = $kriterias->where('id', 15)->first()->bobot / $totalBobot;
$bk5 = $kriterias->where('id', 16)->first()->bobot / $totalBobot;
$bk6 = $kriterias->where('id', 17)->first()->bobot / $totalBobot;
$bk7 = $kriterias->where('id', 18)->first()->bobot / $totalBobot;
$bk8 = $kriterias->where('id', 19)->first()->bobot / $totalBobot;
$bk9 = $kriterias->where('id', 20)->first()->bobot / $totalBobot;
$bk10 = $kriterias->where('id', 21)->first()->bobot / $totalBobot;

$widget1 = ['kriterias' => $bk1];
$widget2 = ['kriterias' => $bk2];
$widget3 = ['kriterias' => $bk3];
$widget4 = ['kriterias' => $bk4];
$widget5 = ['kriterias' => $bk5];
$widget6 = ['kriterias' => $bk6];
$widget7 = ['kriterias' => $bk7];
$widget8 = ['kriterias' => $bk8];
$widget9 = ['kriterias' => $bk9];
$widget10 = ['kriterias' => $bk10];

$alternatifs = Alternatif::all();

$maxc1 = Alternatif::max('integrity');
$minc1 = Alternatif::min('integrity');

$maxc2 = Alternatif::max('communication');
$minc2 = Alternatif::min('communication');

$maxc3 = Alternatif::max('dependability');
$minc3 = Alternatif::min('dependability');

$maxc4 = Alternatif::max('problem_solving');
$minc4 = Alternatif::min('problem_solving');

$maxc5 = Alternatif::max('quality_of_work');
$minc5 = Alternatif::min('quality_of_work');

$maxc6 = Alternatif::max('technical_skills');
$minc6 = Alternatif::min('technical_skills');

$maxc7 = Alternatif::max('creativity');
$minc7 = Alternatif::min('creativity');

$maxc8 = Alternatif::max('adaptability');
$minc8 = Alternatif::min('adaptability');

$maxc9 = Alternatif::max('productivity');
$minc9 = Alternatif::min('productivity');

$maxc10 = Alternatif::max('attendance');
$minc10 = Alternatif::min('attendance');

$finalScores = [];

foreach ($alternatifs as $alternatif) {
    $integrity = (($alternatif->integrity - $minc1) / ($maxc1 - $minc1)) * $widget1['kriterias'];
    $communication = (($alternatif->communication - $minc2) / ($maxc2 - $minc2)) * $widget2['kriterias'];
    $dependability = (($alternatif->dependability - $minc3) / ($maxc3 - $minc3)) * $widget3['kriterias'];
    $problem_solving = (($alternatif->problem_solving - $minc4) / ($maxc4 - $minc4)) * $widget4['kriterias'];
    $quality_of_work = (($alternatif->quality_of_work - $minc5) / ($maxc5 - $minc5)) * $widget5['kriterias'];
    $technical_skills = (($alternatif->technical_skills - $minc6) / ($maxc6 - $minc6)) * $widget6['kriterias'];
    $creativity = (($alternatif->creativity - $minc7) / ($maxc7 - $minc7)) * $widget7['kriterias'];
    $adaptability = (($alternatif->adaptability - $minc8) / ($maxc8 - $minc8)) * $widget8['kriterias'];
    $productivity = (($alternatif->productivity - $minc9) / ($maxc9 - $minc9)) * $widget9['kriterias'];
    $attendance = (($alternatif->attendance - $minc10) / ($maxc10 - $minc10)) * $widget10['kriterias'];

    $finalScore = $integrity + $communication + $dependability + $problem_solving + $quality_of_work + $technical_skills + $creativity + $adaptability + $productivity + $attendance;

    $finalScores[] = [
        'kode' => $alternatif->kode,
        'nama' => $alternatif->nama,
        'final_score' => $finalScore,
    ];
}
        // Normalisasi bobot
        // $totalBobot = $kriterias->sum('bobot');

        // $bk1 = $kriterias->where('id', 12)->first()->bobot / $totalBobot;
        // $bk2 = $kriterias->where('id', 13)->first()->bobot / $totalBobot;
        // $bk3 = $kriterias->where('id', 14)->first()->bobot / $totalBobot;
        // $bk4 = $kriterias->where('id', 15)->first()->bobot / $totalBobot;
        // $bk5 = $kriterias->where('id', 16)->first()->bobot / $totalBobot;
        // $bk6 = $kriterias->where('id', 17)->first()->bobot / $totalBobot;
        // $bk7 = $kriterias->where('id', 18)->first()->bobot / $totalBobot;
        // $bk8 = $kriterias->where('id', 19)->first()->bobot / $totalBobot;
        // $bk9 = $kriterias->where('id', 20)->first()->bobot / $totalBobot;
        // $bk10 = $kriterias->where('id', 21)->first()->bobot / $totalBobot;
        $widget1 = [
            'kriterias'=> $bk1,
        ];
        $widget2 = [
            'kriterias'=> $bk2,
        ];
        $widget3 = [
            'kriterias'=> $bk3,
        ];
        $widget4 = [
            'kriterias'=> $bk4,
        ];
        $widget5 = [
            'kriterias'=> $bk5,
        ];
        $widget6 = [
            'kriterias'=> $bk6,
        ];
        $widget7 = [
            'kriterias'=> $bk7,
        ];
        $widget8 = [
            'kriterias'=> $bk8,
        ];
        $widget9 = [
            'kriterias'=> $bk9,
        ];
        $widget10 = [
            'kriterias'=> $bk10,
        ];

        // $alternatifs = Alternatif::all();
        $data = Alternatif::orderBy('nama')->get();
       
        // $maxc1 = Alternatif::max('integrity');
        // $minc1 = Alternatif::min('integrity');

        // $maxc2 = Alternatif::max('communication');
        // $minc2 = Alternatif::min('communication');

        // $maxc3 = Alternatif::max('dependability');
        // $minc3 = Alternatif::min('dependability');

        // $maxc4 = Alternatif::max('problem_solving');
        // $minc4 = Alternatif::min('problem_solving');

        // $maxc5 = Alternatif::max('quality_of_work');
        // $minc5 = Alternatif::min('quality_of_work');

        // $maxc6 = Alternatif::max('technical_skills');
        // $minc6 = Alternatif::min('technical_skills');

        // $maxc7 = Alternatif::max('creativity');
        // $minc7 = Alternatif::min('creativity');

        // $maxc8 = Alternatif::max('adaptability');
        // $minc8 = Alternatif::min('adaptability');

        // $maxc9 = Alternatif::max('productivity');
        // $minc9 = Alternatif::min('productivity');

        // $maxc10 = Alternatif::max('attendance');
        // $minc10 = Alternatif::min('attendance');

        $C1max = [
            'Alternatifs' => $maxc1,
        ];
        $C1min = [
            'Alternatifs' => $minc1,
        ];
        
        $C2max = [
            'Alternatifs' => $maxc2,
        ];
        $C2min = [
            'Alternatifs' => $minc2,
        ];
        
        $C3max = [
            'Alternatifs' => $maxc3,
        ];
        $C3min = [
            'Alternatifs' => $minc3,
        ];
        
        $C4max = [
            'Alternatifs' => $maxc4,
        ];
        $C4min = [
            'Alternatifs' => $minc4,
        ];
        
        $C5max = [
            'Alternatifs' => $maxc5,
        ];
        $C5min = [
            'Alternatifs' => $minc5,
        ];
        
        $C6max = [
            'Alternatifs' => $maxc6,
        ];
        $C6min = [
            'Alternatifs' => $minc6,
        ];
        
        $C7max = [
            'Alternatifs' => $maxc7,
        ];
        $C7min = [
            'Alternatifs' => $minc7,
        ];
        
        $C8max = [
            'Alternatifs' => $maxc8,
        ];
        $C8min = [
            'Alternatifs' => $minc8,
        ];
        
        $C9max = [
            'Alternatifs' => $maxc9,
        ];
        $C9min = [
            'Alternatifs' => $minc9,
        ];
        
        $C10max = [
            'Alternatifs' => $maxc10,
        ];
        $C10min = [
            'Alternatifs' => $minc10,
        ];
        

        // // foreach ($kriterias as $kriteria) {
        // //     $kriteria->bobot_normalized = $kriteria->bobot / $totalBobot;
        // // }

        // // Perhitungan SMART untuk setiap alternatif
        // $results = [];
        // foreach ($alternatifs as $alternatif) {
        //     $nilai = 0;
        //     foreach ($kriterias as $kriteria) {
        //         $nilaiAlternatif = $alternatif->{$kriteria->kode}; // Asumsikan kode kriteria sesuai dengan kolom di tabel alternatif
        //         $nilai += $kriteria->bobot_normalized * $nilaiAlternatif;
        //     }
        //     $results[] = [
        //         'alternatif' => $alternatif,
        //         'nilai' => $nilai,
        //         'total' => $totalBobot
        //     ];
        // }

        // // Urutkan hasil berdasarkan nilai tertinggi
        // usort($results, function ($a, $b) {
        //     return $b['$totalBobot'] <=> $a['$totalBobot'];
        // });

        return view('dss.result', compact(
            'C1max', 'C1min', 
            'C2max', 'C2min', 
            'C3max', 'C3min', 
            'C4max', 'C4min', 
            'C5max', 'C5min', 
            'C6max', 'C6min', 
            'C7max', 'C7min', 
            'C8max', 'C8min', 
            'C9max', 'C9min', 
            'C10max', 'C10min',
            'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 
            'widget6', 'widget7', 'widget8', 'widget9', 'widget10',
            'alternatifs', 'data', 'finalScores'
        ));
        
       
    }
    
}
