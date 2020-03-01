@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Transaksi</strong>
            <small>{{ $item->uuid }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-group-label">Nama Pemesan</label>
                    <input type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') ? old('name') : $item->name }}"
                            class="form-control @error('name') is-invalid @enderror" />
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-group-label">Email</label>
                    <input type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') ? old('email') : $item->email }}"
                            class="form-control @error('email') is-invalid @enderror" />
                    @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="number" class="form-group-label">Nomor HP</label>
                    <input type="text"
                            name="number"
                            id="number"
                            value="{{ old('number') ? old('number') : $item->number }}"
                            class="form-control @error('number') is-invalid @enderror" />
                    @error('number') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-group-label">Alamat Pemesan</label>
                    <textarea name="address"
                                id="address"
                                rows="3"
                                class="form-control @error('address') is-invalid @enderror">{{ old('address') ? old('address') : $item->address }}</textarea>
                    @error('address') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Transaksi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection