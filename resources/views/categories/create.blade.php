@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h1>Tambah Genre</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        @csrf
        <div class="form-group">
            <label for="name">Nama Genre:</label>
            <input type="text" name="name" class="form-control " id="name">
        </div>
        
    </form> 
</div>
@endsection