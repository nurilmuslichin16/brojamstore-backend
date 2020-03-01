@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_id" class="form-group-label">Nama Barang</label>
                    <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror">
                        <option value="">Pilih Barang</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>                             
                        @endforeach
                    </select>
                    @error('product_id') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="photo" class="form-group-label">Foto Barang</label>
                    <input type="file" id="photo" name="photo" accept="image/*" required class="form-control @error('photo') is-invalid @enderror">
                    @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="is_default">Jadikan Default</label>
                    <br/>
                    <div class="radio">
                        <label>
                            <input type="radio" id="is_default" name="is_default" value="1" class="@error('is_default') is-invalid @enderror"/>&nbsp;Ya
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" id="is_default" name="is_default" value="0" class="@error('is_default') is-invalid @enderror"/>&nbsp;Tidak
                        </label>
                    </div>
                    @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Foto Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection