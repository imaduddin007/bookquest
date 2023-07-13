<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    public static function getAllBook()
    {
        return DB::table('books')->get();

				// Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
        // $alldata = DB::table('books')
        //     ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        //     ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        //     ->get();
        // return $alldata;
    }
}
