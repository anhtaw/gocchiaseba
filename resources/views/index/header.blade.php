
<nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_fade hide_on_mobile" id="sc_layouts_menu_1622638574" data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall">
    <ul id="menu-main-menu" class="sc_layouts_menu_nav">
        <li id="menu-item-102"
            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-102">
            <a href="{{ route('index.index')}}"><span>TRANG CHỦ</span></a>
        </li>
        <li id="menu-item-95"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95">
            <a href="{{ route('review.index')}}"><span>GÓC REVIEW</span></a></li>
        <li id="menu-item-96"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96">
            <a href="{{ route('document.index')}}"><span>TÀI LIỆU</span></a></li>
        <li id="menu-item-98"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
            <a href="{{ route('ad.index')}}"><span>RAO VẶT</span></a></li>
        <li id="menu-item-104"
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-104">
            <a href="{{ route('post.index')}}"><span>TÌM ĐỒ</span></a>
        </li>
        <li id="menu-item-87"
            class="menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-75  menu-item-87">
            <a href="{{ route('contact.index')}}"
               aria-current="page"><span>Liên Lạc</span></a>
        </li>
{{--        @if (Auth::check())--}}

{{--            <li id="menu-item-103" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><a href="#">--}}
{{--                    <span> <?php print_r('Xin Chào : '.$user = Auth::user()-> name) ?></span></a>--}}
{{--                <ul class="sub-menu">--}}
{{--                    <li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79">--}}
{{--                        <a href="{{ route('logout')}}" aria-current="page">--}}
{{--                            <span>đăng xuất</span></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--    </ul>--}}

{{--</nav>--}}
{{--@else--}}
    </ul>

</nav>
