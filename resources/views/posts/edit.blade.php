<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Postingan</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css')  }}">
    <script src="{{ asset('Bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
   <div class="container mt-5 p-2">
    <h1 class="fw-bold text-center mb-3">Ubah Postingan Blog</h1>
    <form action="{{ url("posts/{$post->id}") }}" method="POST" class="form-control">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="3" name="content">{{$post->content}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mt-2">Simpan</button>
          <a href="{{ url("posts") }}" class="btn btn-primary mt-2">Kembali</a>
    </form>
   </div>
</body>
</html>
