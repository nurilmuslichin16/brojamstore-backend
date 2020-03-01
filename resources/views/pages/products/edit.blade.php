@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Barang</strong>
            <small>{{ $item->name }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-group-label">Nama Barang</label>
                    <input type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') ? old('name') : $item->name }}"
                            class="form-control @error('name') is-invalid @enderror" />
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-group-label">Tipe Barang</label>
                    <input type="text"
                            name="type"
                            id="type"
                            value="{{ old('type') ? old('type') : $item->type }}"
                            class="form-control @error('type') is-invalid @enderror" />
                    @error('type') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-group-label">Deskripsi Barang</label>
                    <textarea name="description"
                                id="description"
                                rows="3"
                                class="editor form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>
                    @error('description') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-group-label">Harga Barang</label>
                    <input type="number"
                            name="price"
                            id="price"
                            value="{{ old('price') ? old('price') : $item->price }}"
                            class="form-control @error('price') is-invalid @enderror" />
                    @error('price') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="quantity" class="form-group-label">Kuantitas Barang</label>
                    <input type="number"
                            name="quantity"
                            id="quantity"
                            value="{{ old('quantity') ? old('quantity') : $item->quantity }}"
                            class="form-control @error('quantity') is-invalid @enderror" />
                    @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Barang
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        ClassicEditor
                .create( document.querySelector( '.editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
@endsection