<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $post->title }}</title>
        <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css')  }}" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/blog.css')  }}" crossorigin="anonymous">
        <script src="{{ asset('Bootstrap/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    </head>
    <body>
       {{-- @php(dd($post)) --}}
        <div class="container mt-5">
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
                <p class="blog-post-meta">{{date("d M Y H:i",strtotime($post->created_at))}}
                </p>
                <p>{{$post->content}}</p>
                <hr>
                <a href="{{ url('posts') }}" class="btn btn-danger"> < Kembali</a>
                <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning ms-3" >Update</a>

                <form  method="POST" action="{{ url("posts/$post->id") }}">
                    @method("DELETE")
                    @csrf
                   <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </article>
        </div>
    </body>
</html>
