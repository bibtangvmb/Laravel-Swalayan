@extends('templete.index')

@section('title', 'Barang')

@section('content')

<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <form action="/stuffs/{{ @$data->id}}" method="POST" enctype="multipart/form-data">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

    <div class="row">
      <div class="col-4">
        <div class="card card-primary">
          <div class="card-body">
             <div class="form-group">
                <input type="file" id="file" name="file">
             </div>
          </div>
        </div>
      </div>
      <div class="col-8">
       
 
            <div class="card card-primary">
             <div class="card-header">
             <h3 class="card-title">Input Barang<h3>
             </div>
             
              <!-- /.card-header -->
              <!-- /.card-body -->

             
                @if (@$data)
                  @method('PUT')
                @endif

                @csrf
                <div class="card-body">
                    <div class="form-group">           
                        <label for="id">Kode</label>
                        <input type="text" class="form-control" name="id" placeholder="Kode" value="{{ @$data->id}}">
                    </div>
                    <div class="form-group">           
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ @$data->name}}">
                    </div>
                    <div class="form-group">           
                        <label for="price">Harga</label>
                        <input type="number" class="form-control" name="price" placeholder="Harga" value="{{ @$data->price}}">
                    </div>
                    <div class="form-group">           
                        <label for="unit">Unit</label>
                        <input type="text" class="form-control" name="unit" placeholder="Unit" value="{{ @$data->unit}}">
                    </div>
                    <div class="form-group">           
                        <label for="id_category">Kategori</label>
                        <select name="id_category" class="custom-select rounded-0">
                          @foreach ($categories as $item)
                            <option value="{{ $item->id }}"
                             {{ @$data->id_category == $item->id ? 'selected' : '' }}>
                             {{ $item->name }}</option>
                          @endforeach
                        </select>
                    </div>
              
                <div class="form-group">           
                        <label for="status">Status</label>
                        <select name="status" class="custom-select rounded-0">
                            <option value="1" {{ @$data->status == 1 ? 'selected' : ''}}>Aktif</option>
                            <option value="0" {{ @$data->status == 0 ? 'selected' : ''}}>Tidak Aktif</option>
                        </select>
                    </div>
                  </div>
                </div>      
              <!-- /.card-body -->

              <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
@endsection