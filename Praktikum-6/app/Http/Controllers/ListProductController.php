<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function getData() {
        $dataBarang =  [
            ['id' => 1, 'produk' => 'Jasjus Mangga'],
            ['id' => 2, 'produk' => 'Teh Jus Gula Batu'],
            ['id' => 3, 'produk' => 'Pop Ice Taro'],
            ['id' => 4, 'produk' => 'Teh Sisri Gula Jawa'],
            ['id' => 5, 'produk' => 'Marimas Anggur'],
        ];

        return $dataBarang;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}
