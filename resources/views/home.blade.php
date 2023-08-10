@extends('layouts.app')

@section('content')
    <?php
    $blog = [
        'image' => asset('images/blog-1.png'),
        'title' => 'DATA – TRÁI TIM CỦA CÔNG NGHỆ CHUYỂN ĐỔI SỐ',
        'content' => '
                    Chuyển đổi công nghệ số đang trở thành xu hướng không thể tránh khỏi đối với các doanh nghiệp 
                    trong thời đại ngày nay. Với sự phát triển của 4.0 thì chuyển đổi số đã không còn là sự lựa chọn mà 
                    là con đường bắt buộc của những doanh nghiệp muốn thành công. Vậy phải làm thế nào? Dựa trên cái gì?
                    Hãy cùng Miraway tìm hiểu
                ',
        'author' => '_ 07/07/2023_ Phạm Uyên_ 0 Comments',
    ];
    
    $othorBlog = [
        [
            'image' => asset('images/blog-2.png'),
            'title' => 'Ứng dụng CDP phân tích nguyện vọng và hành vi của khách hàng lĩnh vực tài chính ngân hàng',
            'content' => '',
            'author' => '_ 07/07/2023_',
        ],
        [
            'image' => asset('images/blog-3.png'),
            'title' => 'Miraway tài trợ hội thảo IDG – Chuyển đổi số trong lĩnh vực Tài chính – Ngân hàng và Fintech – Dữ liệu cá nhân',
            'content' => '',
            'author' => '_ 07/07/2023_',
        ],
    ];
    ?>

    {{-- main blog --}}
    <div class="container">
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
                        'content' => $blog['content'],
                        'author' => $blog['author'],
                        'class' => 'small-blog'
                    ])
                @endforeach
            </div>
        </div>

        {{-- mira on internet --}}
        <div class="row my-3">
            <div class="miraway__on__internet text-center">
                <p class="title">{{ __('Miraway trên mạng xã hội') }}</p>
                <img src="{{ asset('images/mira_on_internet.png') }}" alt="">
            </div>
        </div>

        {{-- Featured blog --}}

        <div class="row my-3">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="title">{{ __('Bài viết tiêu biểu') }}</p>
                    <div class="tool">
                        <span class="previus"><img src="{{ asset('images/icon-previus.png') }}" alt=""></span>
                        <span class="next"><img src="{{ asset('images/icon-next.png') }}" alt=""></span>
                    </div>
                </div>
                @foreach ($othorBlog as $blog)
                    @include('components.blog', [
                        'image' => $blog['image'],
                        'title' => $blog['title'],
                        'content' => $blog['content'],
                        'author' => '',
                        'class' => 'feature-blog small-blog'
                    ])
                @endforeach
            </div>
        </div>
    </div>
@endsection
