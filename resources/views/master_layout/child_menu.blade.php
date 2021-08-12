@if($a->categoryChils->count())
<?php $space = $space . '-' ?>

<ul class="u-header__sub-menu-nav-group">
    @foreach($a->categoryChils as $b)
    <li>
        <a href="{{route('product_clien_cate',[$b->slug,$b->id])}}" class="nav-link u-header__sub-menu-nav-link"> &ensp;{{ $space }}{{$b->name}}</a>
        @if($b->categoryChils->count())
            @include('master_layout.child_menu',['a'=>$b,'space'=>$space])
        @endif
    </li>
    @endforeach
</ul>
@endif
