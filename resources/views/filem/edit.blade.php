<!-- resources/views/filem/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h1>Edit Berita</h1>
    <form action="{{ route('filem.update', ['filem' => $filem->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" name="title" value="{{ $filem->title }}" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="content">Konten:</label>
            <textarea name="content" class="form-control" id="content">{{ $filem->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Kategori:</label>
            <select name="category_id" class="form-control" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $filem->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
