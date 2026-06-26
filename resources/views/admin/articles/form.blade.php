<div class="mb-3">
    <label class="form-label" for="name">Judul</label>
    <input class="form-control" id="name" name="name" value="{{ old('name', $article?->name) }}" required>
</div>

<div class="mb-3">
    <label class="form-label" for="tag">Tag</label>
    <input class="form-control" id="tag" name="tag" value="{{ old('tag', $article?->tag) }}" required>
</div>

<div class="mb-3">
    <label class="form-label" for="description">Deskripsi</label>
    <textarea class="form-control" id="description" name="description" rows="8" required>{{ old('description', $article?->description) }}</textarea>
</div>

@if($article?->image)
    <div class="mb-3">
        <p class="form-label">Foto Sebelumnya</p>
        <img src="{{ asset($article->image) }}" alt="Foto Sebelumnya" class="img-fluid rounded border" style="max-width: 260px;">
        <div class="small text-muted mt-1">{{ $article->image }}</div>
    </div>
@endif

<div class="mb-3">
    <label class="form-label" for="image">Foto Article</label>
    <input class="form-control" id="image" name="image" type="file" accept=".jpg,.jpeg,.png,.webp" {{ $article ? '' : 'required' }}>
    <div class="form-text">Format jpg, jpeg, png, webp. Maksimal 2MB.</div>
</div>
