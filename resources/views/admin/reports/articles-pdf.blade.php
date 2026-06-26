<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article Report</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color: #222; }
        h1 { font-size: 22px; margin-bottom: 4px; }
        table { width: 100%; border-collapse: collapse; margin-top: 18px; }
        th, td { border: 1px solid #ccc; padding: 8px; vertical-align: top; }
        th { background: #f0f0f0; }
    </style>
</head>
<body>
    <h1>Article Report</h1>
    <p>Generated at {{ now()->format('d M Y H:i') }}</p>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Tag</th>
                <th>Created</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $article->name }}</td>
                    <td>{{ $article->tag }}</td>
                    <td>{{ $article->created_at?->format('d M Y') }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($article->description, 180) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
