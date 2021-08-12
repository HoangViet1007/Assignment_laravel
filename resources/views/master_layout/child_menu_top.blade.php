@if($cate->categoryChils->count())
    <ul class="u-header-collapse__nav-list">
        @foreach($cate->categoryChils as $cateChildren)
            <li><span class="u-header-sidebar__sub-menu-title"><a href="{{route('product_clien_cate',[$cateChildren->slug,$cateChildren->id])}}">{{$cateChildren->name}}</a></span></li>
            @if($cateChildren->categoryChils->count())
               @include('master_layout.child_menu_top',['cate'=>$cateChildren])
            @endif
        @endforeach
    </ul>
@endif
