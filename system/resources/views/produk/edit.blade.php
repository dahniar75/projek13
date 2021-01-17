@extends('template.beranda')
@section('content')
<div class="card bg-dark">
      <div class="card-body">
       <center>  <img src="{{url("public/$produk->foto")}}" class="img-fluid" style="width:25%"> </center>
      </div>
      </img>
    </div>
        <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="card " style="margin-top: 40px;">
                  <div class="card-header">
                    Edit Data produk
                  </div>
                  <div class="card-body" >
                   <form action="{{url('produk', $produk->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method("PUT")
                     <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$produk->nama}}"></input>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="control-label">Foto</label>
                           <input type="file" class="form-control" name='foto' accept=".png"></input>
                         </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Harga</label>
                             <input type="text" class="form-control" name="harga"></input>
                           </div> 
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Berat</label>
                             <input type="text" class="form-control" name="berat"></input>
                           </div> 
                        </div>
                         <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Stok</label>
                             <input type="text" class="form-control" name="stok"></input>
                          </div>
                        </div>
                     </div>
                      <div class="form-group">
                             <label for="" class="control-label">Deskripsi</label>
                             <textarea id="deskripsi" name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                         </div>
                     <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
@endsection
@push('style')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#deskripsi').summernote();
    });
  </script>
@endpush