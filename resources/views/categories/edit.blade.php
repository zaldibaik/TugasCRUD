<!-- resources/views/categories/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-primary">Simpan</button>
        <div class="form-group">
            <label for="name">Nama category:</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="name">
        </div>
    </form>
</div>
@endsection
