@extends('master_layout.home_master')
@section('title','Tin tức')
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
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Blog</li>
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
                    <div class="max-width-1100-wd">
                        @if($blog)
                        @foreach($blog as $a)
                        <article class="card mb-13 border-0">
                            <div class="js-slick-carousel u-slick overflow-hidden"
                                data-pagi-classes="js-pagination u-slick__pagination u-slick__pagination--long u-slick__pagination--hover mb-0">
                                <div class="js-slide">
                                    <a href="{{route('blogDetail',[$a->slug,$a->id])}}" class="d-block"><img class="img-fluid" src="{{url('')}}{{$a->image}}" alt="Image Description" width="100%"></a>
                                </div>
                                {{-- <div class="js-slide">
                                    <a href="single-blog-post.html" class="d-block"><img class="img-fluid" src="../../assets/img/1500X730/img2.jpg" alt="Image Description"></a>
                                </div>
                                <div class="js-slide">
                                    <a href="single-blog-post.html" class="d-block"><img class="img-fluid" src="../../assets/img/1500X730/img3.jpg" alt="Image Description"></a>
                                </div>
                                <div class="js-slide">
                                    <a href="single-blog-post.html" class="d-block"><img class="img-fluid" src="../../assets/img/1500X730/img4.jpg" alt="Image Description"></a>
                                </div>
                                <div class="js-slide">
                                    <a href="single-blog-post.html" class="d-block"><img class="img-fluid" src="../../assets/img/1500X730/img5.jpg" alt="Image Description"></a>
                                </div> --}}
                            </div>
                            <div class="card-body pt-5 pb-0 px-0">
                                <h4 class="mb-3"><a href="{{route('blogDetail',[$a->slug,$a->id])}}">{{$a->title}}</a></h4>
                                <div class="mb-3 pb-3 border-bottom">
                                    <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                        <a href="#" class="mx-0dot5 text-gray-5">{{$a->category_posts->name}} - </a>
                                        <a href="#" class="mx-0dot5 text-gray-5">Thêm mới ngày : {{ $a->created_at->format('Y-m-d') }}</a>
                                    </div>
                                </div>
                                <p>{!! $a->short_description !!}</p>
                                <div class="flex-horizontal-center">
                                    <a href="{{route('blogDetail',[$a->slug,$a->id])}}" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                    <a href="#" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> 3</a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-xl-3 col-wd">
                    <aside class="mb-7">
                        <form class="">
                            <div class="d-flex align-items-center">
                                <label class="sr-only" for="signupSrEmail">Search Electro blog</label>
                                <div class="input-group">
                                    <input type="text" class="form-control px-4" name="search" id="signupSrEmail" placeholder="Search..." aria-label="Search Electro blog">
                                </div>
                                <button type="submit" class="btn btn-primary text-nowrap ml-3 d-none">
                                    <span class="fas fa-search font-size-1 mr-2"></span> Search
                                </button>
                            </div>
                        </form>
                    </aside>
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Categories</h3>
                        </div>
                        <div class="list-group">
                            <a href="#" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-0"><i class="mr-2 fas fa-angle-right"></i> Design</a>
                            @if($category_post)
                            @foreach($category_post as $a)
                               @if($a->posts()->count() > 0)
                               <a href="{{route('blogCate',[$a->slug,$a->id])}}" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-0"><i class="mr-2 fas fa-angle-right"></i>{{$a->name}} ({{$a->posts()->count()}})</a>
                               @endif
                            @endforeach
                            @endif
                        </div>
                    </aside>
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Recent Posts</h3>
                        </div>
                        @if($post_recent)
                        @foreach($post_recent as $a)
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="{{url('')}}{{$a->image}}" alt="Image Description">
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

            <div class="row mt-4">
                <div class="col-md-12">
                    {{ $blog->links() }}
                </div>
            </div>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->@endsection
