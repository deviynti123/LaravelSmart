<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the alternatif.
     *
     * @return \Illuminate\View\View
     */
    public function index() : View
    {
        // Urutkan alternatif berdasarkan id secara ascending
        $alternatifs = Alternatif::orderBy('id', 'asc')->paginate(10);

        // Render view dengan alternatif
        return view('alternatifs.index', compact('alternatifs'));
    }

    /**
     * Show the form for creating a new alternatif.
     *
     * @return \Illuminate\View\View
     */
    public function create() : View
    {
        return view('alternatifs.create');
    }

    /**
     * Store a newly created alternatif in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        // Validate form
        $request->validate([
            'kode'              => 'required',
            'nama'              => 'required|min:3',
            'integrity'         => 'required|numeric',
            'communication'     => 'required|numeric',
            'dependability'     => 'required|numeric',
            'problem_solving'   => 'required|numeric',
            'quality_of_work'   => 'required|numeric',
            'technical_skills'  => 'required|numeric',
            'creativity'        => 'required|numeric',
            'adaptability'      => 'required|numeric',
            'productivity'      => 'required|numeric',
            'attendance'        => 'required|numeric'
        ]);

        // Create alternatif
        Alternatif::create([
            'kode'              => $request->kode,
            'nama'              => $request->nama,
            'integrity'         => $request->integrity,
            'communication'     => $request->communication,
            'dependability'     => $request->dependability,
            'problem_solving'   => $request->problem_solving,
            'quality_of_work'   => $request->quality_of_work,
            'technical_skills'  => $request->technical_skills,
            'creativity'        => $request->creativity,
            'adaptability'      => $request->adaptability,
            'productivity'      => $request->productivity,
            'attendance'        => $request->attendance
        ]);

        // Redirect to index
        return redirect()->route('alternatifs.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Show the form for editing the specified alternatif.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\View\View
     */
    public function edit(Alternatif $alternatif) : View
    {
        return view('alternatifs.edit', compact('alternatif'));
    }

    /**
     * Update the specified alternatif in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Alternatif $alternatif) : RedirectResponse
    {
        // Validate form
        $request->validate([
            'kode'              => 'required',
            'nama'              => 'required|min:3',
            'integrity'         => 'required|numeric',
            'communication'     => 'required|numeric',
            'dependability'     => 'required|numeric',
            'problem_solving'   => 'required|numeric',
            'quality_of_work'   => 'required|numeric',
            'technical_skills'  => 'required|numeric',
            'creativity'        => 'required|numeric',
            'adaptability'      => 'required|numeric',
            'productivity'      => 'required|numeric',
            'attendance'        => 'required|numeric'
        ]);

        // Update alternatif
        $alternatif->update([
            'kode'              => $request->kode,
            'nama'              => $request->nama,
            'integrity'         => $request->integrity,
            'communication'     => $request->communication,
            'dependability'     => $request->dependability,
            'problem_solving'   => $request->problem_solving,
            'quality_of_work'   => $request->quality_of_work,
            'technical_skills'  => $request->technical_skills,
            'creativity'        => $request->creativity,
            'adaptability'      => $request->adaptability,
            'productivity'      => $request->productivity,
            'attendance'        => $request->attendance
        ]);

        // Redirect to index
        return redirect()->route('alternatifs.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * Remove the specified alternatif from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Alternatif $alternatif) : RedirectResponse
    {
        // Delete alternatif
        $alternatif->delete();

        // Redirect to index
        return redirect()->route('alternatifs.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * Show the specified alternatif.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\View\View
     */
    public function show(Alternatif $alternatif) : View
    {
        // Render view with alternatif
        return view('alternatifs.show', compact('alternatif'));
    }
}
