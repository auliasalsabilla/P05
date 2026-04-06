<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Ambil semua produk.
     *
     * Endpoint ini mengembalikan seluruh data produk yang tersedia.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'status' => true,
            'data' => $products
        ]);
    }

    /**
     * Ambil satu produk.
     *
     * Mengembalikan detail produk berdasarkan ID yang diberikan.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['status' => false, 'message' => 'Product tidak ditemukan'], 404);
        }
        return response()->json(['status' => true, 'data' => $product]);
    }

    /**
     * Tambah produk baru.
     *
     * Menerima data nama, deskripsi, foto, dan harga untuk membuat produk baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric'
        ]);
        $product = Product::create($request->all());
        return response()->json(['status' => true, 'message' => 'Product berhasil ditambahkan', 'data' => $product]);
    }

    /**
     * Update data produk.
     *
     * Memperbarui data produk berdasarkan ID yang diberikan.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['status' => false, 'message' => 'Product tidak ditemukan'], 404);
        }
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric'
        ]);
        $product->update($request->all());
        return response()->json(['status' => true, 'message' => 'Product berhasil diupdate', 'data' => $product]);
    }

    /**
     * Hapus produk.
     *
     * Menghapus produk berdasarkan ID yang diberikan.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['status' => false, 'message' => 'Product tidak ditemukan'], 404);
        }
        $product->delete();
        return response()->json(['status' => true, 'message' => 'Product berhasil dihapus']);
    }
}