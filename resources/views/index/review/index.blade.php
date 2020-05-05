@include('index.css')
@include('index.review.cssforrv')
<body class="page-template-default page page-id-30 theme-mendel woocommerce-no-js body_tag scheme_default blog_mode_page body_style_wide is_single sidebar_hide expand_content remove_margins header_style_header-custom-21 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
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
                                    <a href="{{ route('index.index')}}" id="sc_layouts_logo_72816308" class="sc_layouts_logo sc_layouts_logo_default">
                                        <img class="logo_image" src="{{ asset('img/img/logoheader.png') }}" alt="" width="240" height="42">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="sc_layouts_item ">
                                    @include('index.review.header')
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
                                @if (Auth::check())

                                    <div class="sc_layouts_item">
                                        <nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_fade hide_on_mobile" id="sc_layouts_menu_1622638574" data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall">
                                            <ul id="menu-main-menu" class="sc_layouts_menu_nav">
                                                <li id="menu-item-103" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><a href="#">
                                                        <span> <?php print_r('Xin Chào : '.$user = Auth::user()-> name) ?></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79">
                                                            <a href="{{ route('logout')}}" aria-current="page">
                                                                <span>Đăng xuất</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                                            <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                                <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                            </a>
                                        </div>
                                    </div>

                                @else
                                    <div class="sc_layouts_item">
                                        <div id="sc_layouts_iconed_text_1992222615" class="sc_layouts_iconed_text">
                                            <a href="{{route('admin.index')}}" class="sc_layouts_item_link sc_layouts_iconed_text_link">
                                                <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-user"></span>
                                            </a>
                                        </div><!-- /.sc_layouts_iconed_text -->
                                    </div>
                                @endif
                                <div class="sc_layouts_item">
                                    <div id="sc_layouts_iconed_text_1672848536" class="sc_layouts_iconed_text">
                                        <a href="/cdn-cgi/l/email-protection#c0a5b8a1adb0aca580b4a5b3b4eea3afad" class="sc_layouts_item_link sc_layouts_iconed_text_link">
                                            <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-mail-1"></span>
                                        </a>
                                    </div><!-- /.sc_layouts_iconed_text -->
                                </div>
                                <div class="sc_layouts_item">
                                    <div id="sc_layouts_search_1510506392" class="sc_layouts_search">
                                        <div class="search_wrap search_style_fullscreen search_ajax layouts_search">
                                            <div class="search_form_wrap">
                                                <form role="search" method="get" class="search_form" action="#">
                                                    <input type="text" class="search_field" placeholder="Search" value="" name="s">
                                                    <button type="submit" class="search_submit trx_addons_icon-search"></button>
                                                    <a class="search_close trx_addons_icon-delete"></a>
                                                </form>
                                            </div>
                                            <div class="search_results widget_area">
                                                <a href="#" class="search_results_close trx_addons_icon-cancel"></a>
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
                                <div id="sc_content_154974658" class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center">
                                    <div class="sc_content_container">
                                        <div class="vc_empty_space  em_sp_top vc_custom_1568806866743 height_large"   style="height: 36px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="sc_layouts_item">
                                            <div id="sc_layouts_title_670912576" class="sc_layouts_title with_content">
                                                <div class="sc_layouts_title_content">
                                                    <div class="sc_layouts_title_title">
                                                        <h1 class="sc_layouts_title_caption">KHOA HỆ THỐNG THÔNG TIN QUẢN LÝ</h1>
                                                    </div>
                                                    <div class="sc_layouts_title_breadcrumbs">
                                                        <div class="breadcrumbs">
                                                            <a class="breadcrumbs_item home" href="{{ route('index.index') }}">Trang chủ</a>
                                                            <span class="breadcrumbs_delimiter"></span>
                                                            <span class="breadcrumbs_item current">KHOA HỆ THỐNG THÔNG TIN QUẢN LÝ</span>
                                                        </div>
                                                    </div>
                                                </div><!-- .sc_layouts_title_content -->
                                            </div><!-- /.sc_layouts_title -->
                                        </div>
                                        <div class="vc_empty_space  em_sp_b vc_custom_1568806854216 height_large"   style="height: 36px">
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
                    @include('index.review.headermobile')
                </div>
            </div>
            <div class="page_content_wrap scheme_default">
                <div class="content_wrap">
                    <div class="content">
                        <article id="post-30" class="post_item_single post_type_page post-30 page type-page status-publish hentry">
                            <div class="post_content entry-content">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space  vc_custom_1500708919986 height_large"   style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div id="sc_title_1460721231" class="sc_title color_style_default sc_title_Alternative">
                                                    <h6 class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_title_style_Alternative"></h6>
                                                    <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_Alternative sc_item_title_tag">GIỚI THIỆU KHOA HTTT</h2>
                                                    <div class="sc_item_descr sc_title_descr sc_align_center">
                                                        <p> Cùng với xu hướng hội nhập và toàn cầu hóa, bên cạnh các chuyên ngành đào tạo truyền thống, Học viện Ngân hàng chú trọng phát triển các chuyên ngành đào tạo mới nhằm đáp ứng nhu cầu nhân lực có chất lượng cao cho ngành ngân hàng, tài chính và xã hội. Khoa Hệ thống thông tin quản lý là một trong những khoa chuyên ngành mới của Học viện Ngân hàng có nhiệm vụ giảng dạy, đào tạo và nghiên cứu khoa học trong lĩnh vực Hệ thống thông tin kinh tế.</p>
                                                    </div>
                                                </div><!-- /.sc_title -->
                                                <div class="vc_empty_space  vc_custom_1500708941450 height_large"   style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1500708262499">
                                    <div class="z-index wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner vc_custom_1500708238643">
                                            <div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <img width="632" height="305" src="{{ asset('img/img/b.png') }}" class="vc_single_image-img attachment-full" alt="">
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div  id="sc_action_1310820250" class="sc_action color_style_link2 sc_action_simple">
                                                    <div class="sc_action_content sc_item_content">
                                                        <div class="sc_action_item sc_action_item_simple with_image with_bg_color sc_action_item_mc" style="background-color:#898f4b;">
                                                            <div class="sc_action_item_mask"></div>
                                                            <div class="sc_action_item_inner">
                                                                <h6 class="sc_action_item_subtitle">
                                                                    <span></span>
                                                                </h6>
                                                                <h3 class="sc_action_item_title">
                                                                    <span>KHOA HỆ THỐNG THÔNG TIN QUẢN LÝ</span>
                                                                    <span></span>
                                                                    <span> Học viện ngân hàng </span>
                                                                </h3>
                                                            </div><!-- /.sc_action_item_inner -->
                                                            <a href="#" class="sc_action_item_link sc_action_item_link_over"></a>
                                                        </div>
                                                    </div>
                                                </div>
                        <!-- /.sc_action --></div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner vc_custom_1500708286428">
                                            <div class="wpb_wrapper">
                                                <div id="widget_video_923983579" class="widget_area sc_widget_video vc_widget_video wpb_content_element">
                                                    <aside id="widget_video_923983579_widget" class="widget widget_video">
                                                        <div id="sc_video_1615859743" class="trx_addons_video_player with_cover hover_play">
                                                            <img src="{{ asset('img/img/khoahtttql.jpg') }}" alt="" width="632" height="611">
                                                            <div class="video_mask"></div>
                                                            <a class="video_hover trx_addons_popup_link" href="#sc_video_1615859743_popup"></a>
                                                        </div><!-- .sc_popup -->
                                                        <div id="sc_video_1615859743_popup" class="sc_popup">
                                                            <div id="sc_video_1615859743_popup_player" class="trx_addons_video_player without_cover">
                                                                <div class="video_embed video_frame">
                                                                    <iframe src="https://player.vimeo.com/video/12200080" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                                                    <a href="https://vimeo.com/12200080">Jonathan Charles - Fine Furniture</a>from
                                                                    <a href="https://vimeo.com/timjanssen">TIM JANSSEN</a> on <a href="https://vimeo.com">Vimeo</a>.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1500709802445 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left"><div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space  vc_custom_1500710018993 height_huge"   style="height: 32px">
                                                    <span class="vc_empty_space_inner">
                                                    </span>
                                                </div>
                                                <div class="sc_team color_style_default sc_team_default">
                                                    <h6 class="sc_item_subtitle sc_team_subtitle sc_align_center sc_item_title_style_Alternative"></h6>
                                                    <h2 class="sc_item_title sc_team_title sc_align_center sc_item_title_style_Alternative sc_item_title_tag">
                                                        Giới Thiệu Giảng Viên </h2>
                                                    <div class="sc_team_columns_wrap sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_team_item">
                                                                <div class="post_featured with_thumb hover_icon sc_team_item_thumb">
                                                                    <img width="540" height="540"src="{{ asset('img/huay.jpg') }}"  class="attachment-mendel-thumb-team size-mendel-thumb-team wp-post-image" alt="Richard Mendel">
                                                                    <div class="mask">
                                                                    </div>
                                                                    <div class="icons">
                                                                        <a href="#" aria-hidden="true" class="icon-search-alt"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_team_item_info">
                                                                    <div class="sc_team_item_header">
                                                                        <div class="sc_team_item_subtitle"></div>
                                                                        <h5 class="sc_team_item_title"><a href="#">Thầy Chu Văn Huy</a></h5>
                                                                    </div>
                                                                    <div class="sc_team_item_content"><p>Môn lập trình web</p></div>
                                                                    <div class="sc_team_item_socials socials_wrap">
                                                                        <a target="_blank" href="#" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_facebook">
                                                                                <span class="icon-facebook"></span>
                                                                            </span>
                                                                        </a>
                                                                        <a target="_blank" href="#" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_twitter">
                                                                                <span class="icon-twitter"></span>
                                                                            </span>
                                                                        </a>
                                                                        <a target="_blank" href="#" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_pinterest-circled">
                                                                                <span class="icon-pinterest-circled"></span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="sc_team_item_button">
                                                                        <a href="#" class="sc_button sc_button_simple">Learn more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_team_item">
                                                                <div class="post_featured with_thumb hover_icon sc_team_item_thumb">
                                                                    <img width="540" height="540" src="{{ asset('img/3.png') }}" class="attachment-mendel-thumb-team size-mendel-thumb-team wp-post-image" alt="Richard Mendel"/>
                                                                    <div class="mask"></div>
                                                                    <div class="icons">
                                                                        <a href="#" aria-hidden="true" class="icon-search-alt"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_team_item_info">
                                                                    <div class="sc_team_item_header">
                                                                        <div class="sc_team_item_subtitle"></div>
                                                                        <h5 class="sc_team_item_title"><a href="#">Cô Bùi Hồng Nhung</a></h5>
                                                                    </div>
                                                                    <div class="sc_team_item_content"><p>Môn cơ sở lập trình</p></div>
                                                                    <div class="sc_team_item_socials socials_wrap">
                                                                        <a target="_blank" href="#" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_facebook">
                                                                                <span class="icon-facebook"></span>
                                                                            </span>
                                                                        </a>
                                                                        <a target="_blank" href="https://twitter.com/ancora_themes" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_twitter">
                                                                                <span class="icon-twitter"></span>
                                                                            </span>
                                                                        </a>
                                                                        <a target="_blank" href="https://www.pinterest.com/themerex0063" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_pinterest-circled">
                                                                                <span class="icon-pinterest-circled"></span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="sc_team_item_button">
                                                                        <a href="http://mendel-antiques.ancorathemes.com/team/anthony-dean/" class="sc_button sc_button_simple">Learn more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_team_item">
                                                                <div class="post_featured with_thumb hover_icon sc_team_item_thumb">
                                                                    <img width="540" height="540" src="{{ asset('img/2a.jpg') }}" sizes="(max-width: 540px) 100vw, 540px" />
                                                                    <div class="mask">
                                                                    </div>
                                                                    <div class="icons">
                                                                        <a href="#" aria-hidden="true" class="icon-search-alt"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_team_item_info">
                                                                    <div class="sc_team_item_header">
                                                                        <div class="sc_team_item_subtitle"></div>
                                                                        <h5 class="sc_team_item_title">
                                                                            <a href="#">Đinh Trọng Hiếu</a>
                                                                        </h5>
                                                                    </div>
                                                                    <div class="sc_team_item_content">
                                                                        <p>Môn quản lý dự án.</p>
                                                                    </div>
                                                                    <div class="sc_team_item_socials socials_wrap">
                                                                        <a target="_blank" href="#" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_facebook">
                                                                                <span class="icon-facebook">
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a target="_blank" href="https://twitter.com/ancora_themes" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_twitter">
                                                                                <span class="icon-twitter"></span>
                                                                            </span>
                                                                        </a>
                                                                        <a target="_blank" href="https://www.pinterest.com/themerex0063" class="social_item social_item_style_icons social_item_type_icons">
                                                                            <span class="social_icon social_pinterest-circled">
                                                                                <span class="icon-pinterest-circled">
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="sc_team_item_button">
                                                                        <a href="http://mendel-antiques.ancorathemes.com/team/austin-pearson/" class="sc_button sc_button_simple">Learn more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_empty_space  vc_custom_1500713468778 height_huge"   style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div class="sc_item_button sc_button_wrap sc_align_center">
                                                    <a href="{{route('teacher.index')}}" id="sc_button_249188387" class="sc_button color_style_dark sc_button_default  vc_custom_1500711522715 sc_button_size_normal sc_button_icon_left">
                                                        <span class="sc_button_text">
                                                            <span class="sc_button_title">Xem Thêm</span>
                                                        </span><!-- /.sc_button_text --></a><!-- /.sc_button -->
                                                </div>
                                                <div class="vc_empty_space  vc_custom_1500711552929 height_large"   style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space  vc_custom_1500713766609 height_large"   style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div id="sc_title_1186009437" class="sc_title color_style_default sc_title_Alternative">
                                                    <h6 class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_title_style_Alternative"></h6>
                                                    <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_Alternative sc_item_title_tag"> Giới thiệu môn học </h2>
                                                </div><!-- /.sc_title -->
                                                <div class="vc_empty_space  emp_480_m_b vc_custom_1568815772324 height_huge"   style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1496047996415 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left"><div class="vc_column-inner vc_custom_1500713826575">
                                            <div class="wpb_wrapper"><div id="sc_services_793734850" class="sc_services color_style_default sc_services_default sc_services_featured_top">
                                                    <div class="sc_services_columns_wrap sc_item_columns sc_item_columns_3 trx_addons_columns_wrap columns_padding_bottom">
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_services_item without_content with_image sc_services_item_featured_top">
                                                                <div class="post_featured with_thumb hover_icon sc_services_item_thumb">
                                                                    <img width="740" height="460" src="{{ asset('img/img/e.png') }}" class="attachment-mendel-thumb-med size-mendel-thumb-med wp-post-image" alt="Antique collection and delivery" />
                                                                    <div class="mask"></div>
                                                                    <div class="icons">
                                                                        <a href="#" aria-hidden="true" class="icon-search-alt"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_header">
                                                                        <h5 class="sc_services_item_title">
                                                                            <a href="#">Lập trình web</a>
                                                                        </h5>
                                                                        <div class="sc_services_item_subtitle">
                                                                            <a href="#" title="View all posts in Services">Services</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://mendel-antiques.ancorathemes.com/services/antique-collection-and-delivery/" class="sc_button sc_button_simple">Learn more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_services_item without_content with_image sc_services_item_featured_top">
                                                                <div class="post_featured with_thumb hover_icon sc_services_item_thumb">
                                                                    <img width="740" height="460" src="{{ asset('img/img/d.png') }}" class="attachment-mendel-thumb-med size-mendel-thumb-med wp-post-image" alt="Antique furniture restoration" />
                                                                    <div class="mask"></div>
                                                                    <div class="icons">
                                                                        <a href="#" aria-hidden="true" class="icon-search-alt"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_header">
                                                                        <h5 class="sc_services_item_title">
                                                                            <a href="#">Khai phá dữ liệu</a>
                                                                        </h5>
                                                                        <div class="sc_services_item_subtitle"><a href="#" title="View all posts in Services">Services</a></div>
                                                                    </div>
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="#" class="sc_button sc_button_simple">Learn more</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_services_item without_content with_image sc_services_item_featured_top">
                                                                <div class="post_featured with_thumb hover_icon sc_services_item_thumb">
                                                                    <img width="740" height="460" src="{{ asset('img/img/e.png') }}" class="attachment-mendel-thumb-med size-mendel-thumb-med wp-post-image" alt="Upholstery and polish service" />
                                                                    <div class="mask"></div>
                                                                    <div class="icons">
                                                                        <a href="#" aria-hidden="true" class="icon-search-alt"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_header">
                                                                        <h5 class="sc_services_item_title">
                                                                            <a href="#">Quản lí dự án</a>
                                                                        </h5>
                                                                        <div class="sc_services_item_subtitle">
                                                                            <a href="#">Services</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="#" class="sc_button sc_button_simple">Learn more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.sc_team -->
                                                <div class="vc_empty_space  height_small"   style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div class="sc_item_button sc_button_wrap sc_align_center">
                                                    <a href="{{route('teacher.index')}}" id="sc_button_249188387" class="sc_button color_style_dark sc_button_default  vc_custom_1500711522715 sc_button_size_normal sc_button_icon_left">
                                                        <span class="sc_button_text"><span class="sc_button_title">Xem thêm</span></span><!-- /.sc_button_text -->
                                                    </a><!-- /.sc_button -->
                                                </div><!-- /.sc_item_button -->
                                                <div class="vc_empty_space  vc_custom_1500711552929 height_large"   style="height: 32px">
    <span class="vc_empty_space_inner">
        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1500711617511 vc_row-has-fill scheme_dark">
                                    <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-offset-2 vc_col-md-offset-2 vc_col-sm-offset-2 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space  vc_custom_1500713139873 height_huge"   style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span></div>
                                                <div class="sc_testimonials color_style_default sc_testimonials_default">
                                                    <h2 class="sc_item_title sc_testimonials_title sc_align_center sc_item_title_style_default sc_item_title_tag"></h2>
                                                    <div class="sc_testimonials_slider sc_item_slider slider_swiper_outer slider_outer_nocontrols slider_outer_nopagination slider_outer_one"></div><!-- .entry-content -->
                        </article>

                    </div><!-- </.content> -->
                </div><!-- </.content_wrap> -->
            </div><!-- </.page_content_wrap> -->
            @include('index.footer')
        </div><!-- /.page_wrap -->
    </div><!-- /.body_wrap -->
    @include('index.js')
</body>

