<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showberanda(){
		return view('template.beranda');
	}

	function showproduk(){
		return view('template.produk');
	}


	function client(){
		return view('client.client');
	}

	function test($produk){
			echo "Nama produk $produk";
	
	$data['list'] = Produk::simplePaginate(15);
	return view('test-collection', $data);

		dd($list_bike, $list_produk);
	}

}