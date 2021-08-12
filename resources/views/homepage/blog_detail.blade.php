@extends('master_layout.home_master')
@section('title', 'Bài viết chi tiết')
@section('content_clien')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="">{{ $blog_detail->category_posts->name }}</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                                {{ $blog_detail->title }}</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-wd">
                    <div class="min-width-1100-wd">
                        <article class="card mb-8 border-0">
                            <img class="img-fluid" src="{{ url('') }}{{ $blog_detail->image }}"
                                alt="Image Description">
                            <div class="card-body pt-5 pb-0 px-0">
                                <div class="d-block d-md-flex flex-center-between mb-4 mb-md-0">
                                    <h4 class="mb-md-3 mb-1">{{ $blog_detail->name }}</h4>
                                    <a href="#" class="font-size-12 text-gray-5 ml-md-4"><i class="far fa-comment"></i>
                                        Leave a comment</a>
                                </div>
                                <div class="mb-3 pb-3 border-bottom">
                                    <div
                                        class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                        <a href="single-blog-post.html"
                                            class="mx-0dot5 text-gray-5">{{ $blog_detail->category_posts->name }} - </a>
                                        <a href="single-blog-post.html"
                                            class="mx-0dot5 text-gray-5">{{ $blog_detail->created_at->format('Y-m-d') }}</a>
                                    </div>
                                </div>
                                <p>
                                    <strong>{!! $blog_detail->short_description !!}</strong>
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                    {!! $blog_detail->content !!}
                                    </div>
                                </div>
                            </div>
                        </article>

                        {{-- <div class="mb-10">
                            <div class="border-bottom border-color-1 mb-10">
                                <h4 class="section-title mb-0 pb-3 font-size-25">3 Comments</h4>
                            </div>
                            <ol class="nav">
                                <li class="w-100 border-bottom pb-6 mb-6 border-color-1">
                                    <!-- Review -->
                                    <div class="d-block d-md-flex media">
                                        <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                            <img class="img-fluid rounded-circle" src="../../assets/img/100X100/img19.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim
                                                eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel
                                                est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                            <div class="d-flex">
                                                <h4 class="font-size-14 font-weight-bold mr-2"><a
                                                        href="single-blog-post.html" class="">John Doe</a></h4>
                                                <span><a href="single-blog-post.html" class="text-gray-23">March 16,
                                                        2016</a></span>
                                                <a href="#" class="text-blue ml-auto">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Review -->
                                </li>
                            </ol>
                        </div> --}}

                        {{-- binh luan --}}
                        {{-- <div class="mb-10">
                            <div class="border-bottom border-color-1 mb-6">
                                <h4 class="section-title mb-0 pb-3 font-size-25">Leave a Reply</h4>
                            </div>
                            <p class="text-gray-90">Your email address will not be published. Required fields are marked
                                <span class="text-dark">*</span></p>

                            <form class="js-validate" novalidate="novalidate">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Comment
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-4">
                                            <label class="form-label">
                                                Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Name" placeholder="" aria-label=""
                                                required="" data-msg="Please enter your name."
                                                data-error-class="u-has-error" data-success-class="u-has-success"
                                                autocomplete="off">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-4">
                                            <label class="form-label">
                                                Email address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" name="emailAddress" placeholder=""
                                                aria-label="" required="" data-msg="Please enter a valid email address."
                                                data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary-dark-w px-5">Post Comment</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>

                <div class="col-xl-3 col-wd">
                    {{-- <aside class="mb-7">
                        <form class="">
                            <div class="d-flex align-items-center">
                                <label class="sr-only" for="signupSrEmail">Search Electro blog</label>
                                <div class="input-group">
                                    <input type="text" class="form-control px-4" name="search" id="signupSrEmail"
                                        placeholder="Search..." aria-label="Search Electro blog">
                                </div>
                                <button type="submit" class="btn btn-primary text-nowrap ml-3 d-none">
                                    <span class="fas fa-search font-size-1 mr-2"></span> Search
                                </button>
                            </div>
                        </form>
                    </aside> --}}
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Categories</h3>
                        </div>
                        <div class="list-group">
                            <a href="#" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-0"><i class="mr-2 fas fa-angle-right"></i> Design</a>
                            @if ($category_post)
                                @foreach ($category_post as $a)
                                    @if ($a->posts()->count() > 0)
                                        <a href="{{route('blogCate',[$a->slug,$a->id])}}"
                                            class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-0"><i
                                                class="mr-2 fas fa-angle-right"></i>{{ $a->name }}
                                            ({{ $a->posts()->count() }})</a>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </aside>
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Recent Posts</h3>
                        </div>
                        @if ($post_recent)
                            @foreach ($post_recent as $a)
                                <article class="mb-4">
                                    <div class="media">
                                        <div class="width-75 height-75 mr-3">
                                            <img class="img-fluid object-fit-cover"
                                                src="{{ url('') }}{{ $a->image }}" alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="font-size-14 mb-1"><a href="{{route('blogDetail',[$a->slug,$a->id])}}" class="text-gray-39">{{$a->title}}</a></h4>
                                            <span class="text-gray-5">{{ $a->created_at->format('Y-m-d') }}</span>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </main>
<!-- ========== END MAIN CONTENT ========== -->@endsection
