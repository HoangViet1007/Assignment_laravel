@if ($cate->categoryChils->count())
    <ul class="u-header__sub-menu-nav-group mb-3">
        @foreach ($cate->categoryChils as $cateChildren)
            <li><a class="nav-link u-header__sub-menu-nav-link" href="{{route('product_clien_cate',[$cateChildren->slug,$cateChildren->id])}}" data-target="#{{$cate->slug}}">{{$cateChildren->name}}</a></li>
            @if($cate->categoryChils->count())
                 @include('master_layout.child_menu_sidebar',['cate'=>$cateChildren])
            @endif
        @endforeach
    </ul>
@endif
