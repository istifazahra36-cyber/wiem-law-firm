<div class="mb-3">
    <label class="form-label" for="name">Nama</label>
    <input class="form-control" id="name" name="name" value="{{ old('name', $service?->name) }}" required>
</div>
<div class="mb-3">
    <label class="form-label" for="description">Deskripsi</label>
    <textarea class="form-control" id="description" name="description" rows="6" required>{{ old('description', $service?->description) }}</textarea>
</div>
