<!-- resources/views/filem/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Filem</h1>
    <a href="{{ route('filem.create') }}" class="btn btn-primary">Tambah Filem</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filem as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>
                        <a href="{{ route('filem.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('filem.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
