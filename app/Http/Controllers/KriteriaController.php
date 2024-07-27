<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the kriteria.
     *
     * @return View
     */
    public function index() : View
    {
        // Urutkan kriteria berdasarkan id secara ascending
        $kriterias = Kriteria::orderBy('id', 'asc')->paginate(10);

        // Render view dengan kriteria
        return view('kriterias.index', compact('kriterias'));
    }

    /**
     * Show the form for creating a new kriteria.
     *
     * @return View
     */
    public function create() : View
    {
        return view('kriterias.create');
    }

    /**
     * Store a newly created kriteria in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        // Validate form
        $request->validate([
            'kode'          => 'required',
            'kriteria'      => 'required|min:3',
            'bobot'         => 'required|numeric',
            'jenis'         => 'required'
        ]);

        // Create kriteria
        Kriteria::create([
            'kode'          => $request->kode,
            'kriteria'      => $request->kriteria,
            'bobot'         => $request->bobot,
            'jenis'         => $request->jenis
        ]);

        // Redirect to index
        return redirect()->route('kriterias.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Show the form for editing the specified kriteria.
     *
     * @param Kriteria $kriteria
     * @return View
     */
    public function edit(Kriteria $kriteria) : View
    {
        return view('kriterias.edit', compact('kriteria'));
    }

    /**
     * Update the specified kriteria in storage.
     *
     * @param Request $request
     * @param Kriteria $kriteria
     * @return RedirectResponse
     */
    public function update(Request $request, Kriteria $kriteria) : RedirectResponse
    {
        // Validate form
        $request->validate([
            'kode'          => 'required',
            'kriteria'      => 'required|min:3',
            'bobot'         => 'required|numeric',
            'jenis'         => 'required'
        ]);

        // Update kriteria
        $kriteria->update([
            'kode'          => $request->kode,
            'kriteria'      => $request->kriteria,
            'bobot'         => $request->bobot,
            'jenis'         => $request->jenis
        ]);

        // Redirect to index
        return redirect()->route('kriterias.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * Remove the specified kriteria from storage.
     *
     * @param Kriteria $kriteria
     * @return RedirectResponse
     */
    public function destroy(Kriteria $kriteria) : RedirectResponse
    {
        // Delete kriteria
        $kriteria->delete();

        // Redirect to index
        return redirect()->route('kriterias.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * Show the specified kriteria.
     *
     * @param string $id
     * @return View
     */
    public function show(string $id): View
    {
        // Get kriteria by ID
        $kriteria = Kriteria::findOrFail($id);

        // Render view with kriteria
        return view('kriterias.show', compact('kriteria'));
    }
}
