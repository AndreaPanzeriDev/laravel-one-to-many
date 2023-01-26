@extends('layouts.app')

@section('content')
    <form method="POST" class="w-75 m-auto my-3" action="{{ route('admin.posts.store') }}">

        @csrf

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control ">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="body" class="form-control"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Add Comic</button>

    </form>
@endsection
