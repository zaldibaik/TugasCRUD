@extends('layouts.app')

@section('content')
<div class="container  text-white">
    <h1>Daftar gentre</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Tambah genre</a>
    <table class=" table table-dark table-striped">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td class="teks">{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>                    
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
