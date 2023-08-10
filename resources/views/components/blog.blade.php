<div class="blog {{ $class ?? '' }}">
    <div class="blog__image">
        <img src="{{ $image }}" alt="">
    </div>
    <div class="conent">
        <p class="blog__title">
            {{ $title }}
        </p>
        <p class="blog__description">
            {{ $content }}
        </p>
        <div class="blog__footer d-flex justify-content-between align-items-center">
            <p class="blog__author">{{ $author }}</p>
            <a href="#" class="more">{{ __('Xem thêm') }}</a>
        </div>
    </div>
</div>
