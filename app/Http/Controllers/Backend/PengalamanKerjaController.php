<?php

namespace App\Http\Controllers\Backend;

use App\Models\PengalamanKerja, App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengalamanKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengalaman_kerja = DB::table('pengalaman_kerja')->get();
        return view('backend.pengalaman_kerja.index', compact('pengalaman_kerja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengalaman_kerja = null;
        return view('backend.pengalaman_kerja.create', compact('pengalaman_kerja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('pengalaman_kerja')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar
        ]);

        return redirect()->route('pengalaman_kerja.index')
                        ->with('success', 'Data pengalaman kerja baru telah berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PengalamanKerja $pengalamanKerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengalaman_kerja = DB::table('pengalaman_kerja')->where('id',$id)->first();
        return view('backend.pengalaman_kerja.create', compact('pengalaman_kerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('pengalaman_kerja')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar
        ]);

        return redirect()->route('pengalaman_kerja.index')
                        ->with('success', 'Pengalaman Kerja berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('pengalaman_kerja')->where('id',$id)->delete();
        return redirect()->route('pengalaman_kerja.index')
                        ->with('success', 'Data Pengalaman Kerja berhasil dihapus');
    }
}
