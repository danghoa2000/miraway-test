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
            'content' => 'Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.',
            'author' => '_ 07/07/2023_',
        ],
        [
            'image' => asset('images/blog-3.png'),
            'title' => 'Miraway tài trợ hội thảo IDG – Chuyển đổi số trong lĩnh vực Tài chính – Ngân hàng và Fintech – Dữ liệu cá nhân',
            'content' => 'Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.',
            'author' => '_ 07/07/2023_',
        ],
    ];
    ?>

    {{-- main blog --}}
    <div class="container">
        {{-- main blog --}}
        @include('components.main-blog', ['blog' => $blog, 'othorBlog' => $othorBlog])

        {{-- mira on internet --}}
        <div class="row my-3">
            <div class="miraway__on__internet text-center">
                <p class="title">{{ __('Miraway trên mạng xã hội') }}</p>
                <img src="{{ asset('images/mira_on_internet.png') }}" alt="">
            </div>
        </div>

        {{-- Featured blog --}}
        @include('components.featured-blog', ['blog' => $blog, 'othorBlog' => $othorBlog])

        {{-- new blog --}}
        @include('components.new-blog', ['blog' => $blog, 'othorBlog' => $othorBlog])

        {{-- register blog --}}
        @include('components.register-blog')
    </div>
@endsection
