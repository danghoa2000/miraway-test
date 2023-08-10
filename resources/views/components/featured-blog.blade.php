<div class="row my-3">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center">
            <p class="title">{{ __('Bài viết tiêu biểu') }}</p>
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
        <div class="card">
            <p class="card-title text-center">{{ __('Đăng ký tài khoản viết bài') }}</p>
            <div class="card-body">
                <form class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">{{ __('Email') }}</label>
                            <input type="email" class="form-control" placeholder="{{ __('Nhập email') }}">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">{{ __('Mật Khẩu') }}</label>
                            <input type="password" class="form-control" placeholder="{{ __('Nhập mật khẩu') }}">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100 mt-4">{{ __('Đăng Ký') }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
