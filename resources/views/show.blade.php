<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $article->title }}</h1>
        @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" width="575" class="img-fluid mb-3">
        @endif
        <p>{{ $article->content }}</p>
        <a href="{{ route('welcome') }}" class="btn btn-secondary">Back to Articles</a>


--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
