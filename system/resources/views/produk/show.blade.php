
@extends('template.beranda')
@section('content')
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="card" style="margin-top: 40px;">
                  <div class="card-header">
                    Detail Data produk
                  </div>
                  <div class="card-body" >
                    <h3>{{$produk->nama}}</h3>
                    <hr>
                    <p>
                      {{$produk->harga}} |
                      Stok : {{$produk->stok}} |
                      Berat : {{$produk->berat}} kg |
                      Seller : {{$produk->seller->nama}} Dahniar |
                      Tanggal Produk : {{$produk->created_at->diffForHumans()}}
                    </p>
                    <p>
                         {!! nl2br($produk->deskripsi) !!}
                    </p>

                    <p>
                        <img src="{{url("public/$produk->foto")}}" alt=""> 
                    </p>
                  </div>
                </div>
              </div>  
            </div> 
          </div>


@endsection