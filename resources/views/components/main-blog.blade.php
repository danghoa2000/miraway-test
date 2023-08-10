<div class="row">
    <div class="col-md-8">
        @include('components.blog', [
            'image' => $blog['image'],
            'title' => $blog['title'],
            'content' => $blog['content'],
            'author' => $blog['author'],
        ])
    </div>

    <div class="col-md-4">
        @foreach ($othorBlog as $blog)
            @include('components.blog', [
                'image' => $blog['image'],
                'title' => $blog['title'],
                'content' => '',
                'author' => $blog['author'],
                'class' => 'small-blog',
            ])
        @endforeach
    </div>
</div>
