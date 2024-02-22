<!-- resources/views/categories/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h1>Edit Genre</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-primary">Simpan</button>
        <div class="form-group">
            <label for="name">Nama Genre:</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="name">
        </div>
    </form>
</div>
@endsection
