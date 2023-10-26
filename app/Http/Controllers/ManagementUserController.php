<?php

namespace App\Http\Controllers;

use App\Models\ManagementUser;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Halo ini adalah method index dalam controller ManagementUser.";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user.";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru.";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=".$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=".$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return "Method ini nantinya digunakan untuk menghapus data user user dengan id=".$id;
    }
}
