<!DOCTYPE html>
<html>
<head>
    <title>WordPress Posts</title>
</head>
<body>
    <h1>Latest WordPress Posts</h1>

    @foreach ($posts as $post)
        <div style="margin-bottom: 20px;">
            <h2>{{ $post->post_title }}</h2>
            <p>{!! Str::limit(strip_tags($post->post_content), 150) !!}</p>
            <small>Status: {{ $post->post_status }} | Post ID: {{ $post->ID }}</small>
        </div>
        <hr>
    @endforeach
</body>
</html>
