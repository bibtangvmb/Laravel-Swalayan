@extends('template.index')

@section('title', 'Kategori')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Input Kategori</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/categories/{{ @$data->id }}" method="POST">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Input Kategori</h3>
                                    </div>
                                    @if (@$data)
                                        @method('PUT')
                                    @endif

                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="id">ID Kategori</label>
                                            <input type="text" class="form-control" name="id"
                                                placeholder="ID Kategori" value="{{ @$data->id }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" name="name" placeholder="Nama"
                                                value="{{ @$data->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Status</label>
                                            <select name="status" class="custom-select rounded-0">
                                                <option value="1" {{ @$data->status == 1 ? 'selected' : '' }}>Tersedia
                                                </option>
                                                <option value="0" {{ @$data->status == 0 ? 'selected' : '' }}>Sold Out
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            @endsection
