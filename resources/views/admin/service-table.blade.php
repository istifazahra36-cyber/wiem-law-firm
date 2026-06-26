<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead><tr><th>Nama</th><th>Deskripsi</th><th class="text-end">Aksi</th></tr></thead>
            <tbody>
                @forelse($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($service->description, 120) }}</td>
                        <td class="text-end">
                            <a href="{{ $base }}/{{ $service->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ $base }}/{{ $service->id }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="3" class="text-center text-muted py-4">Belum ada data.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
