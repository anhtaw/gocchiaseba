<a class="menu_mobile_close icon-cancel">
</a>
<a class="sc_layouts_logo" href="{{ route('index.index')}}">
    <img src="{{ asset('img/img/logoheader.png') }}" width="240" height="42"></a>
<nav class="menu_mobile_nav_area">
    <ul id="menu_mobile-main-menu" class="">
        <li id="menu_mobile-item-102"
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-102">
            <a href="{{ route('index.index')}}"><span>Trang chủ</span></a>
        <li id="menu_mobile-item-103"
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-103">
            <a href="#"><span>About Us</span></a>
        </li>
        <li id="menu_mobile-item-95"
            class="menu-item menu-item-type-post_type current_page_item menu-item-object-page current-menu-item menu-item-95"><a
                href="{{ route('review.index')}}"><span>GÓC REVIEW</span></a>
        </li>
        <li id="menu_mobile-item-96"
            class="menu-item menu-item-type-post_type  menu-item-object-page   menu-item-96"><a
                href="{{ route('document.index')}}"><span>TÀI LIỆU</span></a></li>
        <li id="menu_mobile-item-98"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a
                href="{{ route('ad.index')}}"><span>RAO VẶT</span></a></li>
        <li id="menu_mobile-item-104"
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-104">
            <a href="#"><span>TÌM ĐỒ</span></a>
        </li>
        <li id="menu_mobile-item-87"
            class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-75  menu-item-87">
            <a href="{{ route('contact.index')}}"
               aria-current="page"><span>LIÊN LẠC</span></a></li>
    </ul>
</nav>
<div class="search_wrap search_style_normal search_mobile">
    <div class="search_form_wrap">
        <form role="search" method="get" class="search_form"
              action="#">
            <input type="text" class="search_field" placeholder="Search" value="" name="s">
            <button type="submit" class="search_submit trx_addons_icon-search"></button>
        </form>
    </div>
</div>
