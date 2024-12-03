@extends('layout.admin')

@section('content')
<form action="{{ route('admin.about.store') }}" method="POST">
    @csrf
    <textarea name="bio" rows="10" class="form-control">{{ $about->bio ?? '' }}</textarea>
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>
@endsection