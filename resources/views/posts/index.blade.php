<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog Rama</title>
        <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css')  }}">
        <script src="{{ asset('Bootstrap/js/bootstrap.min.js') }}"></script>
        <style>
            h1 {
                text-align: center;
                margin: 20px;
            }
            .blog {
                padding: 10px;
                margin: 5px 10px 20px;
                border: 1px solid lightgray;
            }
            .blog h3 {
                margin: 5px;
            }
            .blog p {
                margin: 5px;
            }
            small {
                color: gray;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Blog Rama</h1>
            <a href="{{ url('posts/create') }}" class="btn btn-light mb-3"> + Buat Postingan</a>
            @foreach ($posts as $post)
            {{-- @php(dd($post)) --}}
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <p class="card-text">
                        <small class="text-body-secondary">Last updated at {{date("d M Y H:i",strtotime($post->created_at))}} By <a href="https://www.instagram.com/ramaprambudii/">Rama</a></small>
                    </p>
                    <a href="{{ url ("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ url ("posts/$post->id/edit") }}" class="btn btn-warning ">Update</a>
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>
