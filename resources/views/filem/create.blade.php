<!-- resources/views/filem/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h1>Tambah Filem Baru</h1>
    <form action="{{ route('filem.store') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Simpan</button>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="content">Konten:</label>
            <textarea name="content" class="form-control" id="content"></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Kategori:</label>
            <select name="category_id" class="form-control" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>
@endsection
