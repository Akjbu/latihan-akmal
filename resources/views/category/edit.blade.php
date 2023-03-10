@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Tambah Kategori</div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $category->id ) }}">
                            @csrf
                            @method('Put')
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" value ="({$category->namacategory})" name="namacategory" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" value ="({$category->deskripsi})" name="deskripsi" class="form-control">

                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
