

@include('index.css')

@include('index.review.cssforrv')
<body class="product-template-default single single-product postid-265 theme-mendel woocommerce woocommerce-page woocommerce-no-js body_tag scheme_default blog_mode_shop body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content header_style_header-custom-21 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
<div class="body_wrap">
   <div class="page_wrap"><header class="top_panel top_panel_custom top_panel_custom_21 top_panel_custom_header-fullwidth-simple with_bg_image mendel_inline_453670308 with_featured_image scheme_default"><div class="vc_row wpb_row vc_row-fluid vc_custom_1500893297996 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex sc_layouts_row sc_layouts_row_type_compact sc_layouts_row_fixed scheme_dark">
       <div class="wpb_column vc_column_container vc_col-sm-3 sc_layouts_column sc_layouts_column_align_left sc_layouts_column_icons_position_left">
           <div class="vc_column-inner">
               <div class="wpb_wrapper">
               <div class="vc_empty_space  vc_custom_1500975516958"   style="height: 0px">
            <span class="vc_empty_space_inner">
                </span>
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
            <div class="vc_empty_space  vc_custom_1500893543863"   style="height: 0px">
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
<a href="{{route('admin')}}" class="sc_layouts_item_link sc_layouts_iconed_text_link">
        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-user"></span>
</a>
</div><!-- /.sc_layouts_iconed_text -->
</div>
@endif
                    <div class="sc_layouts_item">
                        <div id="sc_layouts_cart_2089087616" class="sc_layouts_cart">
		<span class="sc_layouts_item_icon sc_layouts_cart_icon trx_addons_icon-basket"></span>
		<span class="sc_layouts_item_details sc_layouts_cart_details">
						<span class="sc_layouts_item_details_line2 sc_layouts_cart_totals">
				<span class="sc_layouts_cart_items">0 items</span>
				-
				<span class="sc_layouts_cart_summa">&#36;0.00</span>
			</span>
		</span><!-- /.sc_layouts_cart_details -->
		<span class="sc_layouts_cart_items_short">0</span>
		<div class="sc_layouts_cart_widget widget_area">
			<span class="sc_layouts_cart_widget_close trx_addons_icon-cancel"></span>
			<div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>		</div><!-- /.sc_layouts_cart_widget -->
	</div><!-- /.sc_layouts_cart --></div><div class="sc_layouts_item">
        <div id="sc_layouts_iconed_text_2132007897" class="sc_layouts_iconed_text"><a href="/cdn-cgi/l/email-protection#afcad7cec2dfc3caefdbcadcdb81ccc0c2" class="sc_layouts_item_link sc_layouts_iconed_text_link"><span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-mail-1"></span></a></div><!-- /.sc_layouts_iconed_text --></div><div class="sc_layouts_item"><div id="sc_layouts_search_2026411655" class="sc_layouts_search"><div class="search_wrap search_style_fullscreen search_ajax layouts_search">
	<div class="search_form_wrap">
        <form role="search" method="POST" class="search_form"action="{{route('timkiem')}}">
            {{ csrf_field() }}
                <input type="text" class="search_field" placeholder="Search" value=""name="q">
                <button type="submit" class="search_submit trx_addons_icon-search"></button>
                <a class="search_close trx_addons_icon-delete"></a>
            </form>
	</div>
    <div class="search_results widget_area"><a href="#" class="search_results_close trx_addons_icon-cancel"></a>
        <div class="search_results_content">
            </div>
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
            <div id="sc_content_491076395"class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center">
                <div class="sc_content_container"><div class="vc_empty_space  em_sp_top vc_custom_1568806866743 height_large"   style="height: 32px">
                    <span class="vc_empty_space_inner">
                        </span>
                    </div>
                    <div class="sc_layouts_item">
                        <div id="sc_layouts_title_1914253930" class="sc_layouts_title with_content">
                            <div class="sc_layouts_title_content">
                                <div class="sc_layouts_title_title">
                                    <h1 class="sc_layouts_title_caption">{{ $product1 ->name }}</h1>
                            </div>
                            <div class="sc_layouts_title_breadcrumbs">
                                <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="{{ route('index.index')}}">Trang chủ</a>
                                <span class="breadcrumbs_delimiter"></span><a href="">Shop</a>
                                <span class="breadcrumbs_delimiter"></span>...<span class="breadcrumbs_delimiter">

                                </span>
                                <span class="breadcrumbs_item current">{{ $product1 ->name }}</span></div></div></div><!-- .sc_layouts_title_content --></div><!-- /.sc_layouts_title --></div><div class="vc_empty_space  em_sp_b vc_custom_1568806854216 height_large"   style="height: 32px"><span class="vc_empty_space_inner"></span></div></div></div><!-- /.sc_content --></div></div></div></div>
</header><div class="menu_mobile_overlay"></div>
<div class="menu_mobile menu_mobile_fullscreen scheme_dark">
	<div class="menu_mobile_inner">
        <a class="menu_mobile_close icon-cancel"></a>
        <a class="sc_layouts_logo" href="http://mendel-antiques.ancorathemes.com/">
            <img src="{{ asset('img/img/logoheader.png') }}"  width="240" height="42">
        </a><div class="search_wrap search_style_normal search_mobile">
            <div class="menu_mobile_inner">
                @include('index.ad.headermobile')
             </div>
         </div>
	<div class="search_form_wrap">
        <form role="search" method="POST" class="search_form"action="{{route('timkiem')}}">
            {{ csrf_field() }}
                <input type="text" class="search_field" placeholder="Search" value=""name="q">
                <button type="submit" class="search_submit trx_addons_icon-search"></button>
                <a class="search_close trx_addons_icon-delete"></a>
            </form>
	</div>
    </div>
    	</div>
</div>

			<div class="page_content_wrap scheme_default">

								<div class="content_wrap">
					<div class="content">
				<article class="post_item_single post_type_product">
			<nav class="woocommerce-breadcrumb"><a href="#">Home</a>&nbsp;&#47;&nbsp;<a href="http://mendel-antiques.ancorathemes.com/product-category/chairs/">Chairs</a>&nbsp;&#47;&nbsp;Antique Chair 1734</nav>
			<div class="woocommerce-notices-wrapper"></div><div id="product-265" class="product type-product post-265 status-publish first instock product_cat-chairs product_tag-antique product_tag-chair has-post-thumbnail shipping-taxable purchasable product-type-variable">

	<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper">

		<div data-thumb="{{asset('img/'.$product1->image)}}"
		data-thumb-alt="" class="woocommerce-product-gallery__image">
		<a href="http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6.png">
			<img width="600" height="600"
			 src="{{asset('img/'.$product1->image)}}"
             class="wp-post-image" alt="" title="shop-6" data-caption=""
             data-src="{{asset('img/'.$product1->image)}}"
			  data-large_image="http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6.png"
			  data-large_image_width="1000" data-large_image_height="1000"
			   {{-- srcset="http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-600x600.png 600w,
			   http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-300x300.png 300w,
			   http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-100x100.png 100w,
			   http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-150x150.png 150w,
			   http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-768x768.png 768w,
			   http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-370x370.png 370w,
			   http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-90x90.png 90w,
			   http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-540x540.png 540w,
				http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6-760x760.png 760w,
				http://mendel-antiques.ancorathemes.com/wp-content/uploads/2017/05/shop-6.png 1000w" --}}
				sizes="(max-width: 600px) 100vw, 600px" /></a></div>	</figure>
</div>

	<div class="summary entry-summary">
		<h1 class="product_title entry-title">{{ $product1 ->name }}</h1>


			<div class="woocommerce-product-rating">
		<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
						</div>

<p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $product1 ->gia }}<span class="decimals">00</span>
</span> &ndash;</p>
<div class="woocommerce-product-details__short-description">
	<p>{{ $product1 ->detail }}</p>
</div>

<form class="variations_form cart" action="#" method="post" enctype='multipart/form-data' data-product_id="265" >

			<table class="variations" cellspacing="0">
			<tbody>
									<tr>
						<td class="label"><label for="pa_types-of-wood">{{ $product1 ->name }}</label></td>
						<td class="value">
							<select id="pa_types-of-wood" class="" name="attribute_pa_types-of-wood" data-attribute_name="attribute_pa_types-of-wood" data-show_option_none="yes"><option value="">Choose an option</option><option value="elm" >Elm</option><option value="mahogany" >Mahogany</option></select><a class="reset_variations" href="#">Clear</a>						</td>
					</tr>
							</tbody>
		</table>

		<div class="single_variation_wrap">
			<div class="woocommerce-variation single_variation"></div><div class="woocommerce-variation-add-to-cart variations_button">

		<div class="quantity">
				<label class="screen-reader-text" for="quantity_5e7771e456c06">{{ $product1 ->name }}</label>
		<input
			type="number"
			id="quantity_5e7771e456c06"
			class="input-text qty text"
			step="1"
			min="1"
			max=""
			name="quantity"
			value="1"
			title="Qty"
			size="4"
			placeholder=""
			inputmode="numeric" />
			</div>

	<button type="submit" class="single_add_to_cart_button button alt" disabled="true">add to cart</button>


	<input type="hidden" name="add-to-cart" value="265" />
	<input type="hidden" name="product_id" value="265" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
		</div>

	</form>

<div class="product_meta">
<span class="posted_in">Category: <a href="#" rel="tag">Chairs</a></span>

	<span class="product_id">Product ID: <span>{{ $product1 ->id }}</span></span>
</div>
	</div>



	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
							<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
					<a href="#tab-description">
						Description					</a>
				</li>
							<li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
					<a href="#tab-additional_information">
						Additional information					</a>
				</li>
							<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
					<a href="#tab-reviews">
						Reviews (1)					</a>
				</li>
					</ul>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

	<h2>Description</h2>

<p>{{ $product1 ->detail }}</p>
<p><strong>Dimensions:</strong></p>
<ul class="trx_addons_list_dot">
<li>Erat suscipit dignissim fusce at ut pede, mauris anim pede bibendum aliquet et vitae.</li>
<li>Eget diam auctor neque eleifend, sed integer eros ullamcorper, arcu tincidunt</li>
</ul>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">

	<h2>Additional information</h2>

<table class="woocommerce-product-attributes shop_attributes">
			<tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_types-of-wood">
			<th class="woocommerce-product-attributes-item__label">Types of Wood</th>
			<td class="woocommerce-product-attributes-item__value"><p>Elm, Mahogany</p>
</td>
		</tr>
	</table>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
				<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<h2 class="woocommerce-Reviews-title">
			1 review for <span>Antique Chair 1734</span>		</h2>

					<ol class="commentlist">
				<li class="review even thread-even depth-1" id="li-comment-10">

	<div id="comment-10" class="comment_container">

		{{-- <img alt='' src='' srcset='http://1.gravatar.com/avatar/4859526e4f9ffb6fe0d37882a6c90c53?s=120&#038;d=mm&#038;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' /> --}}
		<div class="comment-text">

			<div class="star-rating" role="img" aria-label="Rated 5 out of 5"><span style="width:100%">Rated <strong class="rating">5</strong> out of 5</span></div>
	<p class="meta">
		<strong class="woocommerce-review__author"> </strong>
				<span class="woocommerce-review__dash">&ndash;</span> <time class="woocommerce-review__published-date" datetime="2017-05-26T14:37:23+00:00"></time>
	</p>

	<div class="description"><p>.</p>
</div>
		</div>
	</div>
</li><!-- #comment-## -->
			</ol>

						</div>

			<div id="review_form_wrapper">
			<div id="review_form">
					<div id="respond" class="comment-respond">
		<span id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/antique-chair-1734/#respond" style="display:none;">Cancel reply</a></small></span><p class="must-log-in">You must be <a href="http://mendel-antiques.ancorathemes.com/my-account/">logged in</a> to post a review.</p>	</div><!-- #respond -->
				</div>
		</div>

	<div class="clear"></div>
</div>
			</div>

			</div>


	<section class="related products">

                    <h2>Gợi ý sản phẩm</h2>



		<ul class="products columns-3">
            @foreach ($randomUser as $item)
					<li class=" column-1_3 product type-product post-238 status-publish first instock product_cat-dressers product_tag-antique product_tag-drawer product_tag-french product_tag-gold product_tag-silver has-post-thumbnail shipping-taxable purchasable product-type-variable">
			<div class="post_item post_layout_thumbs">
			<div class="post_featured hover_shop">
								<a href="{{route('chitiet',$item->id)}}">
                <img width="100%" height="100%" src="{{asset('img/'.$item->image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" style="width: 500px; height: 250px" alt=""   /></a>
                <div class="mask"></div>			<div class="icons">
				<a rel="nofollow" href="{{route('chitiet',$item->id)}}"
														aria-hidden="true"
														data-quantity="1"
														data-product_id="238"
														data-product_sku=""
                                                        class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">
                                                    </a><a href="{{route('chitiet',$item->id)}}" aria-hidden="true" class="shop_link button icon-link"></a>
			</div>
						</div><!-- /.post_featured -->
			<div class="post_data">
				<div class="post_data_inner">
					<div class="post_header entry-header">
                    <div class="post_tags product_tags"><a href="#" rel="tag"></a>,
                         <a href="{{route('chitiet',$item->id)}}" rel="tag"></a>,
                         <a href="{{route('chitiet',$item->id)}}" rel="tag"></a>{{ $item->name }}
                         <a href="{{route('chitiet',$item->id)}}" rel="tag"></a>,
                         <a href="{{route('chitiet',$item->id)}}" rel="tag"></a>, <a href="{{route('chitiet',$item->id)}}" rel="tag"></a>
                        </div><h2 class="woocommerce-loop-product__title">
                            <a href="{{route('chitiet',$item->id)}}"></a></h2>
                            <div class="star-rating" role="img" aria-label="Rated 3.00 out of 5">
                                <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                            </div>
                            	</div><!-- /.post_header -->
	<span class="price">
        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $item->gia }}<span class="">Đ
        </span>
</span>
</span>
<a href="#" data-quantity="1" class="button product_type_variable add_to_cart_button" data-product_id="238" data-product_sku="" aria-label="Select options for &ldquo;Antique French Drawer&rdquo;" rel="nofollow">add to cart</a>				</div><!-- /.post_data_inner -->
			</div><!-- /.post_data -->
		</div><!-- /.post_item -->
        </li>
        @endforeach

		</ul>

	</section>
	</div>
				</article><!-- /.post_item_single -->
					</div><!-- </.content> -->

                    </div><!-- </.content_wrap> -->
                	</div><!-- </.page_content_wrap> -->
                    @include('index.footer')
		</div><!-- /.page_wrap -->

	</div><!-- /.body_wrap -->


			<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
			var ajaxRevslider;

			jQuery(document).ready(function() {


				// CUSTOM AJAX CONTENT LOADING FUNCTION
				ajaxRevslider = function(obj) {

					// obj.type : Post Type
					// obj.id : ID of Content to Load
					// obj.aspectratio : The Aspect Ratio of the Container / Media
					// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content

					var content	= '';
					var data	= {
						action:			'revslider_ajax_call_front',
						client_action:	'get_slider_html',
						token:			'a945e10489',
						type:			obj.type,
						id:				obj.id,
						aspectratio:	obj.aspectratio
					};

					// SYNC AJAX REQUEST
					jQuery.ajax({
						type:		'post',
						url:		'http://mendel-antiques.ancorathemes.com/wp-admin/admin-ajax.php',
						dataType:	'json',
						data:		data,
						async:		false,
						success:	function(ret, textStatus, XMLHttpRequest) {
							if(ret.success == true)
								content = ret.data;
						},
						error:		function(e) {
							console.log(e);
						}
					});

					 // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
					 return content;
				};

				// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
				var ajaxRemoveRevslider = function(obj) {
					return jQuery(obj.selector + ' .rev_slider').revkill();
				};


				// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
				if (jQuery.fn.tpessential !== undefined)
					if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined')
						jQuery.fn.tpessential.defaults.ajaxTypes.push({type: 'revslider', func: ajaxRevslider, killfunc: ajaxRemoveRevslider, openAnimationSpeed: 0.3});
						// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
						// func: the Function Name which is Called once the Item with the Post Type has been clicked
						// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
						// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)



			});
		</script>
		<!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "http://mendel-antiques.ancorathemes.com/wp-admin/admin-ajax.php";
</script>
<script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@graph":[{"@context":"https:\/\/schema.org\/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"name":"Home","@id":"http:\/\/mendel-antiques.ancorathemes.com"}},{"@type":"ListItem","position":2,"item":{"name":"Chairs","@id":"http:\/\/mendel-antiques.ancorathemes.com\/product-category\/chairs\/"}},{"@type":"ListItem","position":3,"item":{"name":"Antique Chair 1734","@id":"http:\/\/mendel-antiques.ancorathemes.com\/product\/antique-chair-1734\/"}}]},{"@context":"https:\/\/schema.org\/","@type":"Product","@id":"http:\/\/mendel-antiques.ancorathemes.com\/product\/antique-chair-1734\/#product","name":"Antique Chair 1734","url":"http:\/\/mendel-antiques.ancorathemes.com\/product\/antique-chair-1734\/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur libero at imperdiet maximus. Nulla rutrum leo erat, eget pharetra turpis aliquam non. Nullam tristique sollicitudin purus, at blandit ligula dictum vulputate. Nam egestas eget turpis eu rutrum. Aenean non vestibulum purus.","image":"http:\/\/mendel-antiques.ancorathemes.com\/wp-content\/uploads\/2017\/05\/shop-6.png","sku":265,"offers":[{"@type":"AggregateOffer","lowPrice":"550.00","highPrice":"600.00","offerCount":2,"priceCurrency":"USD","availability":"http:\/\/schema.org\/InStock","url":"http:\/\/mendel-antiques.ancorathemes.com\/product\/antique-chair-1734\/","seller":{"@type":"Organization","name":"Mendel Antiques. Furniture Design and Restoration","url":"http:\/\/mendel-antiques.ancorathemes.com"}}],"aggregateRating":{"@type":"AggregateRating","ratingValue":"5.00","reviewCount":1},"review":[{"@type":"Review","reviewRating":{"@type":"Rating","bestRating":"5","ratingValue":"5","worstRating":"1"},"author":{"@type":"Person","name":"Cindy Jefferson"},"reviewBody":"Habitant orci, cras wisi cursus, vestibulum tempor, in faucibus neque amet in morbi. Mattis montes qui leo ligula suspendisse. Ac diam, elementum tincidunt, at cras dignissim eget, ac maecenas augue fusce urna pretium morbi.","datePublished":"2017-05-26T14:37:23+00:00"}]}]}</script>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
				<button class="pswp__button pswp__button--share" aria-label="Share"></button>
				<button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
				<button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div>
			<button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
			<button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type="text/template" id="tmpl-variation-template">



</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<link property="stylesheet" rel='stylesheet' id='js_composer_front-css'  href='http://mendel-antiques.ancorathemes.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.0.5' type='text/css' media='all' />
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/mendel-antiques.ancorathemes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.7'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-timepicker/jquery-ui-timepicker-addon.min.js?ver=5.3.2'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-sliderAccess.js?ver=5.3.2'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_addons/js/swiper/swiper.jquery.min.js'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var TRX_ADDONS_STORAGE = {"ajax_url":"http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php","ajax_nonce":"97687fc03d","site_url":"http:\/\/mendel-antiques.ancorathemes.com","post_id":"265","vc_edit_mode":"0","popup_engine":"magnific","animate_inner_links":"0","user_logged_in":"0","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","msg_ajax_error":"Invalid server answer!","msg_magnific_loading":"Loading image","msg_magnific_error":"Error loading image","msg_error_like":"Error saving your like! Please, try again later.","msg_field_name_empty":"The name can't be empty","msg_field_email_empty":"Too short (or empty) email address","msg_field_email_not_valid":"Invalid email address","msg_field_text_empty":"The message text can't be empty","msg_search_error":"Search error! Try again later.","msg_send_complete":"Send message complete!","msg_send_error":"Transmit failed!","ajax_views":"","menu_cache":[".menu_mobile_inner > nav > ul"],"login_via_ajax":"1","msg_login_empty":"The Login field can't be empty","msg_login_long":"The Login field is too long","msg_password_empty":"The password can't be empty and shorter then 4 characters","msg_password_long":"The password is too long","msg_login_success":"Login success! The page should be reloaded in 3 sec.","msg_login_error":"Login failed!","msg_not_agree":"Please, read and check 'Terms and Conditions'","msg_email_long":"E-mail address is too long","msg_email_not_valid":"E-mail address is invalid","msg_password_not_equal":"The passwords in both fields are not equal","msg_registration_success":"Registration success! Please log in!","msg_registration_error":"Registration failed!","scroll_to_anchor":"1","update_location_from_anchor":"0","msg_sc_googlemap_not_avail":"Googlemap service is not available","msg_sc_googlemap_geocoder_error":"Error while geocode address"};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_addons/js/trx_addons.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var TRX_DEMO_STORAGE = {"ajax_url":"http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php","ajax_nonce":"97687fc03d","site_url":"http:\/\/mendel-antiques.ancorathemes.com","user_logged_in":"0","msg_ajax_error":"Invalid server response! Try again later.","tabs_delay":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_demo/js/trx_demo_panels.js'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-min.js?ver=6.0.5'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=4.0.1'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_628ed1ee6ec9661da1ed4f9e60a23a4b","fragment_name":"wc_fragments_628ed1ee6ec9661da1ed4f9e60a23a4b","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.0.1'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var MENDEL_STORAGE = {"ajax_url":"http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php","ajax_nonce":"97687fc03d","site_url":"http:\/\/mendel-antiques.ancorathemes.com","theme_url":"http:\/\/mendel-antiques.ancorathemes.com\/wp-content\/themes\/mendel","site_scheme":"scheme_default","user_logged_in":"","mobile_layout_width":"767","mobile_device":"","menu_side_stretch":"","menu_side_icons":"1","background_video":"","use_mediaelements":"1","comment_maxlength":"1000","admin_mode":"","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","strings":{"ajax_error":"Invalid server answer!","error_global":"Error data validation!","name_empty":"The name can&#039;t be empty","name_long":"Too long name","email_empty":"Too short (or empty) email address","email_long":"Too long email address","email_not_valid":"Invalid email address","text_empty":"The message text can&#039;t be empty","text_long":"Too long message text"},"alter_link_color":"#838a40","button_hover":"slide_left","stretch_tabs_area":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/themes/mendel/js/__scripts.js'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/comment-reply.min.js?ver=5.3.2'></script>
<script type='text/javascript'>
var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.13-9993131'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.3.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=5.3.2'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/wp-embed.min.js?ver=5.3.2'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.0.5'></script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-includes/js/wp-util.min.js?ver=5.3.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type='text/javascript' src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=4.0.1'></script>


</body>
</html>
