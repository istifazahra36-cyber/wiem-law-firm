@extends('layouts.admin')
@section('title', 'Edit Page')

@section('content')
<h2 class="h3 mb-4">Edit Page: {{ ucfirst($page->slug) }}</h2>
<form action="/admin/pages/{{ $page->slug }}" method="POST" class="card border-0 shadow-sm p-4">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label" for="title">Title</label>
        <input class="form-control" id="title" name="title" value="{{ old('title', $page->title) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="subtitle">Subtitle</label>
        <input class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $page->subtitle) }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="body">Body</label>
        <textarea class="form-control" id="body" name="body" rows="7">{{ old('body', $page->body) }}</textarea>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label" for="button_text">Button Text</label>
            <input class="form-control" id="button_text" name="button_text" value="{{ old('button_text', $page->button_text) }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label" for="button_url">Button URL</label>
            <input class="form-control" id="button_url" name="button_url" value="{{ old('button_url', $page->button_url) }}">
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="image">Image Path</label>
        <input class="form-control" id="image" name="image" value="{{ old('image', $page->image) }}">
        <div class="form-text">Contoh: images/us.jpg</div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" name="email" type="email" value="{{ old('email', $page->email) }}">
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label" for="phone">Phone</label>
            <input class="form-control" id="phone" name="phone" value="{{ old('phone', $page->phone) }}">
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label" for="address">Address</label>
            <input class="form-control" id="address" name="address" value="{{ old('address', $page->address) }}">
        </div>
    </div>
    <div class="mt-3">
        <button class="btn btn-dark" type="submit">Update</button>
        <a href="/admin/pages" class="btn btn-outline-secondary">Batal</a>
    </div>
</form>
@endsection
