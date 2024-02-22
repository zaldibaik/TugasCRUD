@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        @csrf
        <div class="form-group">
            <label for="name">Nama category:</label>
            <input type="text" name="name" class="form-control " id="name">
        </div>
        
    </form> 
</div>
@endsection