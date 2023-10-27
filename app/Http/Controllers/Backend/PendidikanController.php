<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index() {
        $pendidikan = Pendidikan::get();
        return view('backend.pendidikan.index',compact('pendidikan'));
    }

    public function create() {
        $pendidikan = null;
        return view('backend.pendidikan.create', compact('pendidikan'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required',
            'tingkatan' => 'required|in:1,2,3,4,5,6,7,8',
            'tahun_masuk' => 'required|numeric',
            'tahun_keluar' => 'required|numeric|gte:tahun_masuk',
        ],[
            'nama.required' => 'Nama tidak boleh kosong!',
            'tahun_masuk.required' => 'Tahun masuk harus diisi!',
            'tahun_keluar.required' => 'Tahun keluar tidak boleh kosong!',
            'tahun_keluar.gte' => 'Tahun keluar harus lebih besar dari tahun masuk!'
        ]);
        Pendidikan::create($request->all());
        return redirect()-> route('pendidikan.index')
                        ->with('success', 'Data Pendidikan baru telah berhasil disimpan.');
    }

    public function edit(Pendidikan $pendidikan) {
        return view('backend.pendidikan.create', compact('pendidikan'));
    }

    public function update(Request $request, Pendidikan $pendidikan) {
        $pendidikan->update($request->all());

        return redirect()->route('pendidikan.index')
                        ->with('success', 'Pendidikan berhasil diperbaharui.');
    }

    public function destroy(Pendidikan $pendidikan) {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')
                        ->with('success', 'Data Pendidikan berhasil dihapus.');
    }
}
