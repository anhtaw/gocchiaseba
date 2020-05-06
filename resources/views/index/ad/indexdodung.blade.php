@include('index.css')
@include('index.ad.cssforad')
<body class="archive post-type-archive post-type-archive-product theme-mendel woocommerce woocommerce-page woocommerce-no-js body_tag scheme_default blog_mode_shop body_style_wide  is_stream blog_style_excerpt sidebar_show sidebar_left header_style_header-custom-21 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
<div class="body_wrap">
    <div class="page_wrap">
        <header class="top_panel top_panel_custom top_panel_custom_21 top_panel_custom_header-fullwidth-simple with_bg_image mendel_inline_713640390 scheme_default">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1500893297996 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex sc_layouts_row sc_layouts_row_type_compact sc_layouts_row_fixed scheme_dark">
                <div class="wpb_column vc_column_container vc_col-sm-3 sc_layouts_column sc_layouts_column_align_left sc_layouts_column_icons_position_left">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space  vc_custom_1500975516958" style="height: 0px">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                            <div class="sc_layouts_item">
                                <a href="index.html"  id="sc_layouts_logo_72816308"  class="sc_layouts_logo sc_layouts_logo_default">
                                    <img class="logo_image" src="{{ asset('img/img/logoheader.png') }}" alt="" width="240" height="42">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="sc_layouts_item">
                                @include('index.header')
                                <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-sm vc_hidden-xs sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space  vc_custom_1500893543863" style="height: 0px">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                            <div class="sc_layouts_item">
                                <div id="sc_layouts_iconed_text_1992222615" class="sc_layouts_iconed_text">
                                <a href="{{route('admin.index')}}" class="sc_layouts_item_link sc_layouts_iconed_text_link">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-user"></span>
                                </a>
                                </div><!-- /.sc_layouts_iconed_text -->
                            </div>
                            <div class="sc_layouts_item">
                                <div id="sc_layouts_iconed_text_1482665506" class="sc_layouts_iconed_text">
                                    <a href="/cdn-cgi/l/email-protection#7b1e031a160b171e3b0f1e080f55181416" class="sc_layouts_item_link sc_layouts_iconed_text_link">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-mail-1"></span>
                                    </a>
                                </div><!-- /.sc_layouts_iconed_text -->
                            </div>
                        <form role="search" method="POST" class="search_form"action="{{route('timkiem')}}">
                                {{ csrf_field() }}
                                    <input type="text" class="search_field" placeholder="Search" value=""name="q">
                                    <button type="submit" class="search_submit trx_addons_icon-search"></button>
                                    <a class="search_close trx_addons_icon-delete"></a>
                                </form>
                            <div class="sc_layouts_item">
                                <div id="sc_layouts_search_176019722" class="sc_layouts_search">
                                    <div class="search_wrap search_style_fullscreen search_ajax layouts_search">
                                        <div class="search_form_wrap">

                                        </div>
                                        <div class="search_results widget_area">
                                            <a href=""class="search_results_close trx_addons_icon-cancel"></a>
                                            <div class="search_results_content"></div>
                                        </div>
                                    </div>
                                </div><!-- /.sc_layouts_search -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1500902865228 vc_row-has-fill sc_layouts_row sc_layouts_row_type_normal sc_layouts_hide_on_frontpage scheme_dark">
                <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div id="sc_content_1297489030" class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center">
                                <div class="sc_content_container">
                                    <div class="vc_empty_space  em_sp_top vc_custom_1568806866743 height_large"style="height: 32px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="sc_layouts_item">
                                        <div id="sc_layouts_title_1722447689" class="sc_layouts_title with_content">
                                            <div class="sc_layouts_title_content">
                                                <div class="sc_layouts_title_title">
                                                    <h1 class="sc_layouts_title_caption">ĐỒ DÙNG</h1>
                                                </div>
                                                <div class="sc_layouts_title_breadcrumbs">
                                                    <div class="breadcrumbs">
                                                        <a class="breadcrumbs_item home" href="{{ route('index.index')}}">Trang Chủ</a>
                                                        <span class="breadcrumbs_delimiter"></span>
                                                        <span class="breadcrumbs_item current">Đồ Dùng</span>
                                                    </div>
                                                </div>
                                            </div><!-- .sc_layouts_title_content -->
                                        </div><!-- /.sc_layouts_title -->
                                    </div>
                                    <div class="vc_empty_space  em_sp_b vc_custom_1568806854216 height_large"  style="height: 32px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div><!-- /.sc_content -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="menu_mobile_overlay"></div>
        <div class="menu_mobile menu_mobile_fullscreen scheme_dark">
            <div class="menu_mobile_inner">
               @include('index.ad.headermobile')
            </div>
        </div>
        <div class="page_content_wrap scheme_default">
            <div class="content_wrap">
                <div class="content">
                    <div class="list_products shop_mode_list">
                        <div class="list_products_header">
                            <nav class="woocommerce-breadcrumb"><a href="{{ route('index.index')}}">Trang Chủ</a>&nbsp;&#47;&nbsp;Rao Vặt</nav>
                            <header class="woocommerce-products-header">
                                <h1 class="woocommerce-products-header__title page-title">Rao Vặt</h1>
                            </header>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="mendel_shop_mode_buttons">
                            <form action="#" method="post">
                                <input type="hidden" name="mendel_shop_mode" value="thumbs"/>
                                <a href="#" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                                <a href="#" class="woocommerce_list icon-th-list" title="Show products as list"></a>
                            </form>
                        </div><!-- /.mendel_shop_mode_buttons -->
                        <p class="woocommerce-result-count">Xem {{count ($doquangduc)}} kết quả</p>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="popularity">Phổ biến</option>
                                <option value="rating">Đánh giá</option>
                                <option value="date" selected='selected'>Mới Nhất</option>
                                <option value="price">Giá thấp-cao</option>
                                <option value="price-desc">Giá cao-thấp</option>
                            </select>
                            <input type="hidden" name="paged" value="1"/>
                            <input type="hidden" name="q" value="/shop/"/>
                        </form>
                        <ul class="products columns-2">
                            @foreach ($doquangduc as $a)
                            <li class="  column-1_2 product type-product post-243 status-publish first instock product_cat-chairs product_cat-leather-furniture product_tag-armchair product_tag-leather has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <div class="post_item post_layout_list">
                                    <div class="post_featured hover_shop">
                                        <a href="#">
                                            <img width="300" height="300"  src="{{asset('img/'.$a->image)}}"class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"alt="" sizes="(max-width: 300px) 100vw, 300px"/></a>
                                        <div class="mask"></div>
                                        <div class="icons">
                                            <a rel="nofollow"href="{{route('chitiet',$a->id)}}"aria-hidden="true" data-quantity="1" data-product_id="238"data-product_sku="" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable"></a>
                                            <a href="#"aria-hidden="true" class="shop_link button icon-link"></a>
                                        </div>
                                    </div><!-- /.post_featured -->
                                    <div class="post_data">
                                        <div class="post_data_inner">
                                            <div class="post_header entry-header">
                                                <div class="post_tags product_tags">
                                                    <a href="#"rel="tag">đi</a>,
                                                    <a href="#"rel="tag">drawer</a>,
                                                    <a href="#"rel="tag">french</a>,
                                                    <a href="#"rel="tag">gold</a>,
                                                    <a href="#"rel="tag">silver</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title">
                                                    <a href="#">{{ $a ->name }}</a></h2>
                                                <div >
                                                    <p>{{ $a ->detail }}</p>
                                                </div>
                                                <br>
                                            </div><!-- /.post_header -->
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;
                                                </span>{{ $a ->gia }}<span class="decimals">00</span>


                                            </span>
                                            <a href="#"data-quantity="1" class="button product_type_variable add_to_cart_button"data-product_id="238" data-product_sku=""aria-label="Select options for &ldquo;Antique French Drawer&rdquo;"rel="nofollow">Liên Hệ</a>
                                            </div><!-- /.post_data_inner -->

                                    </div><!-- /.post_data -->

                                </div><!-- /.post_item -->

                            </li> @endforeach

                        </ul>
                    </div><!-- /.list_products -->
                </div><!-- </.content> -->
                <div class="sidebar left widget_area" role="complementary">
                    <div class="sidebar_inner">
                        <aside id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart"><h5 class="widget_title">THÔNG TIN</h5>
                            <div class="widget_shopping_cart_content"></div>
                        </aside>
                        <aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter"><h5 class="widget_title">Lọc giá</h5>
                            <form method="get" action="index">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider" style="display:none;"></div>
                                    <div class="price_slider_amount" data-step="1">
                                        <input type="text" id="min_price" name="min_price" value="100" data-min="100"placeholder="Min price"/>
                                        <input type="text" id="max_price" name="max_price" value="3000" data-max="3000"placeholder="Max price"/>
                                        <button type="submit" class="button">Lọc</button>
                                        <div class="price_label" style="display:none;">Giá: <span class="from"></span> &mdash; <span class="to"></span>
                                        </div>
                                        <input type="hidden" name="q" value="/shop/"/>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <aside id="woocommerce_product_categories-2"class="widget woocommerce widget_product_categories">
                            <h5 class="widget_title">Loại hàng</h5>
                            <ul class="product-categories">
                                <li class="cat-item cat-item-53"><a href="{{ route('giaotrinh') }}">Giáo trình</a></li>
                                <li class="cat-item cat-item-54">
                                    <a href="{{ route('dodung') }}">Đồ dùng học tập</a></li>
                                <li class="cat-item cat-item-55">
                                    <a href="{{ route('doan') }}">Đồ ăn</a></li>
                                <li class="cat-item cat-item-56"><a
                                        href="{{ route('dodungcanhan') }}">Đồ dùng cá nhân</a></li>
                                <li class="cat-item cat-item-57">
                                    <a href="{{ route('quanao') }}">Quần áo</a>
                                </li>
                            </ul>
                        </aside>
                        <aside id="woocommerce_product_tag_cloud-2" class="widget woocommerce widget_product_tag_cloud">
                            <h5 class="widget_title">Thẻ</h5>
                            <div class="tagcloud">
                                <a href="{{ route('index.review')}}"class="tag-cloud-link tag-link-58 tag-link-position-1"style="font-size: 22pt;">Tàiliệu</a>
                                <a href="{{ route('index.index')}}"class="tag-cloud-link tag-link-60 tag-link-position-2" style="font-size: 14.3pt;">Trang chủ</a>
                                <a href="{{ route('giaotrinh') }}"class="tag-cloud-link tag-link-59 tag-link-position-3" style="font-size: 8pt;">Giáo trình</a> </div>
                        </aside>
                    </div><!-- /.sidebar_inner -->
                </div><!-- /.sidebar -->
            </div><!-- </.content_wrap> -->
        </div><!-- </.page_content_wrap> -->
        @include('index.footer')
    </div><!-- /.page_wrap -->
</div><!-- /.body_wrap -->
@include('index.ad.js')
</body>
</html>
