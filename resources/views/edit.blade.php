<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>
    <!-- Inclure le CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white p-3 mb-4">
        <div class="container">
            <h1>Edit Article</h1>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('create') }}">Create Article</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <main class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="excerpt">Excerpt:</label>
                        <textarea class="form-control" id="excerpt" name="excerpt" required>{{ old('excerpt', $article->excerpt) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control" id="content" name="content" required>{{ old('content', $article->content) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @if ($article->image)
                            <img src="{{ Storage::url($article->image) }}" alt="Article Image" width="300" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Article</button>
                        
                        <!-- Formulaire de suppression -->
                        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <!-- Inclure le JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
