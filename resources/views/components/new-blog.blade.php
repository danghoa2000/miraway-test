<div class="row my-5">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center">
            <p class="title">{{ __('Bài viết mới nhất') }}</p>
            <div class="tool d-flex">
                <span class="previus active"><i class="fas fa-arrow-left"></i></span>
                <span class="next"><i class="fas fa-arrow-right"></i></span>
            </div>
        </div>
        @foreach ($othorBlog as $blog)
            @include('components.blog', [
                'image' => $blog['image'],
                'title' => $blog['title'],
                'content' => $blog['content'],
                'author' => '',
                'class' => 'feature-blog small-blog',
            ])
        @endforeach
    </div>
    <div class="col-md-4">
        <div class="show__more">
            <div class="title-with-icon">
                <div class="icon-title mr-3">
                    <img src="{{ asset('images/note.png') }}" alt="">
                </div>
                <p class="title title-small">{{ __('XEM THÊM') }}</p>
            </div>
            <div class="news">
                @for ($i = 0; $i < 9; $i++)
                    <a href="#" class="new__item title-small">
                        {{ __(' Thông báo Hợp tác chiến lược giữa Miraway – Bắc
                                                Hải – Viettelconstruction') }}
                    </a>
                @endfor
            </div>
        </div>

        <div class="show__more">
            <div class="title-with-icon my-3">
                <div class="icon-title mr-3">
                    <img src="{{ asset('images/tag.png') }}" alt="">
                </div>
                <p class="title title-small">{{ __('TAG') }}</p>
            </div>
            <div class="tags">
                @for ($i = 0; $i < 9; $i++)
                    <span href="#" class="tag__item">{{ __('CDP') }}</span>
                @endfor
            </div>
        </div>
    </div>
</div>
