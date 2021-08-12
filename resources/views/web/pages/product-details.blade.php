@extends('web.layout.app')

@section('content')
    <div id="wrapper-site">
        <div class="no-index">
            <div id="content-wrapper">
                <div class="breadcrumb_section bg_gray page-title-mini mb-50">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="page-title">
                                    <h1>Product Details</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb d-flex justify-content-md-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Product Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER-->
                </div>
                <section id="main">
                    <!-- Proudct image & description section start -->
                    <div class="product-detail-top">
                        <div class="container">
                            <div class="row main-productdetail" data-product_layout_thumb="bottom_thumb" style="position: relative;">
                                <div class="col-lg-5 col-md-4 col-xs-12 box-image">
                                    <section class="page-content" id="content">
                                        <div class="images-container bottom_thumb">

                                            <div class="product-cover">
                                                <img class="js-qv-product-cover img-fluid" src="images/Home/common/1-1.jpg" alt="" title="" style="width:100%;">
                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                    <i class="fa fa-expand"></i>
                                                </div>
                                            </div>

                                            <div class="js-qv-mask mask only-product">
                                                <div class="product-images slick-images" data-vertical="false" data-autoplay="false" data-autoplaytimeout="6000" data-items="4" data-margin="10" data-nav="true" data-dots="false" data-loop="false" data-items_mobile="3">
                                                    <div class="item thumb-container">
                                                        <img class="img-fluid thumb js-thumb  selected " data-image-medium-src="images/Home/common/2-1.jpg" data-image-large-src="images/Home/common/2-1.jpg" src="images/Home/common/2-1.jpg" alt="" title="">
                                                    </div>
                                                    <div class="item thumb-container">
                                                        <img class="img-fluid thumb js-thumb " data-image-medium-src="images/Home/common/8-1.jpg" data-image-large-src="images/Home/common/8-1.jpg" src="images/Home/common/8-1.jpg" alt="" title="">
                                                    </div>
                                                    <div class="item thumb-container">
                                                        <img class="img-fluid thumb js-thumb " data-image-medium-src="images/Home/common/8-2.jpg" data-image-large-src="images/Home/common/8-2.jpg" src="images/Home/common/8-2.jpg" alt="" title="">
                                                    </div>
                                                    <div class="item thumb-container">
                                                        <img class="img-fluid thumb js-thumb " data-image-medium-src="images/Home/common/9-1.jpg" data-image-large-src="images/Home/common/9-1.jpg" src="images/Home/common/9-1.jpg" alt="" title="">
                                                    </div>
                                                    <div class="item thumb-container">
                                                        <img class="img-fluid thumb js-thumb " data-image-medium-src="images/Home/common/10-1.jpg" data-image-large-src="images/Home/common/10-1.jpg" src="images/Home/common/10-1.jpg" alt="" title="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>

                                <div class="col-lg-7 col-md-8 col-xs-12 mt-sm-20">
                                    <div class="product-information">
                                        <div class="product-actions">

                                            <form action="" method="post" id="add-to-cart-or-refresh" class="row">
                                                <input type="hidden" name="token" value="">
                                                <input type="hidden" name="id_product" value="2" id="product_page_product_id">
                                                <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                                                <div class="col-12 col-lg-12 col-md-12 p-5">
                                                    <div class="product-reviews">
                                                        <div id="product_comments_block_extra">

                                                            <div class="comments_note">
                                                                <span>Review: </span>
                                                                <div class="star_content clearfix">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h1 class="detail-product-name">Lorem ipsum dolor sit amet</h1>
                                                    <div class="group-price d-flex justify-content-start align-items-center">
                                                        <div class="product-prices">
                                                            <div class="product-price has-discount">
                                                                <div class="current-price">
                                                                    <span class="price" content="43.2">$43.20</span>
                                                                    <span class="regular-price">$48.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="in_border end">
                                                        <div class="info-stock mb-20">
                                                            <label class="control-label">Availability:</label> In Stock
                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="sku">
                                                            <label class="control-label">Sku:</label>
                                                            <span content="demo_3">demo_3</span>
                                                        </div>
                                                        <div class="pro-cate">
                                                            <label class="control-label">Categories:</label>
                                                            <div>
                                                                    <span>
                                                                        <a href="#"
                                                                           title="Computer &amp; Networking">Computer
                                                                            &amp; Networking</a>
                                                                    </span>
                                                                <span>
                                                                        <a href="#" title="Hard Disk">Hard
                                                                            Disk</a>
                                                                    </span>
                                                                <span>
                                                                        <a href="#"
                                                                           title="Laptop &amp; Accessories">Laptop
                                                                            &amp; Accessories</a>
                                                                    </span>
                                                                <span>
                                                                        <a href="#"
                                                                           title="Smartphone &amp; Tablet">Smartphone
                                                                            &amp; Tablet</a>
                                                                    </span>
                                                                <span>
                                                                        <a href="#" title="Electronics">Electronics
                                                                        </a>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="pro-tag">
                                                            <label class="control-label">Tags:</label>
                                                            <div>
                                                                <span><a href="#">smartphone</a></span>
                                                                <span><a href="#">iphone</a></span>
                                                                <span><a href="#">samsung</a></span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="product-quantity">
                                                        <span class="control-label">Quantity : </span>
                                                        <div class="qty">
                                                            <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group" min="1" />
                                                        </div>
                                                    </div>


                                                    <div class="product-variants in_border">
                                                        <div class="product-variants-item">
                                                            <span class="control-label">Size : </span>
                                                            <select id="group_1" data-product-attribute="1" name="group[1]">
                                                                <option value="1" title="S" selected="selected">S
                                                                </option>
                                                                <option value="2" title="M">M</option>
                                                                <option value="3" title="L">L</option>
                                                                <option value="4" title="XL">XL</option>
                                                            </select>
                                                        </div>

                                                    </div>


                                                    <div class="product-add-to-cart in_border">
                                                        <div class="add">
                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                <div
                                                                    class="icon-cart d-flex align-items-center justify-content-center">
                                                                    <svg version="1.1" id="shopping-cart-2"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         fill="#fff" height="20px" width="20px"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         x="0px" y="0px"
                                                                         viewBox="0 0 512.001 512.001"
                                                                         style="enable-background:new 0 0 512.001 512.001;"
                                                                         xml:space="preserve">
                                                                            <g>
                                                                                <g>
                                                                                    <path d="M503.142,79.784c-7.303-8.857-18.128-13.933-29.696-13.933H176.37c-6.085,0-11.023,4.938-11.023,11.023
                            c0,6.085,4.938,11.023,11.023,11.023h297.07c5.032,0,9.541,2.1,12.688,5.914c3.197,3.88,4.475,8.995,3.511,13.972l-44.054,220.282
                            c-1.709,7.871-8.383,13.366-16.232,13.366H184.323L83.158,36.854C77.69,21.234,62.886,10.74,45.932,10.74
                            c-0.005,0-0.011,0-0.017,0c-14.38,0.496-28.963,0.491-32.535,0.248c-3.555-0.772-7.397,0.22-10.152,2.976
                            c-4.305,4.305-4.305,11.282,0,15.587c3.412,3.412,4.564,4.564,43.068,3.23c7.22,0,13.674,4.564,15.995,11.188l103.618,311.962
                            c1.499,4.503,5.71,7.545,10.461,7.545h252.982c18.31,0,33.841-12.638,37.815-30.909l44.109-220.525
                            C513.503,100.513,510.544,88.757,503.142,79.784z"></path>
                                                                                </g>
                                                                            </g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="M424.392,424.11H223.77c-6.785,0-13.162-4.674-15.46-11.233l-21.495-63.935c-1.94-5.771-8.207-8.885-13.961-6.934
                            c-5.771,1.935-8.874,8.19-6.934,13.961l21.539,64.061c5.473,15.625,20.062,26.119,36.31,26.119h200.622
                            c6.085,0,11.023-4.933,11.023-11.018S430.477,424.11,424.392,424.11z"></path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="M231.486,424.104c-21.275,0-38.581,17.312-38.581,38.581s17.306,38.581,38.581,38.581s38.581-17.312,38.581-38.581
                            S252.761,424.104,231.486,424.104z M231.486,479.22c-9.116,0-16.535-7.419-16.535-16.535c0-9.116,7.419-16.535,16.535-16.535
                            c9.116,0,16.535,7.419,16.535,16.535C248.021,471.802,240.602,479.22,231.486,479.22z"></path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M424.392,424.104c-21.269,0-38.581,17.312-38.581,38.581s17.312,38.581,38.581,38.581
                            c21.269,0,38.581-17.312,38.581-38.581S445.661,424.104,424.392,424.104z M424.392,479.22c-9.116,0-16.535-7.419-16.535-16.535
                            c0-9.116,7.419-16.535,16.535-16.535c9.116,0,16.535,7.419,16.535,16.535C440.927,471.802,433.508,479.22,424.392,479.22z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        </svg>
                                                                </div>
                                                                <span>Add to cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>


                                                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="Refresh">

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Proudct image & description section end -->

                    <!-- Product description tab start -->
                    <div class="product-detail-middle">
                        <div class="container">
                            <div class="row">
                                <div class="tabs col-lg-12 col-md-12 m-auto">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#product-details">Product
                                                Detail</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="tab-content">
                                        <div class="tab-pane fade in active" id="description">
                                            <div class="product-description">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                                                    felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer
                                                    adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                                <h3>Lorem ipsum dolor sit amet</h3>
                                                <div class="image-des">
                                                    <a href="#" class="text-left"><img class="img-fluid text-left" src="images/Home/banner/banner-1.jpg" alt="#" /></a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br />                                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet,
                                                    consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                                <div class="image-des">
                                                    <a href="#" class="text-left"><img class="img-fluid text-left" src="images/Home/banner/banner-2.jpg" alt="#" /></a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br />                                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet,
                                                    consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br /> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="product-details">

                                            <div class="in_border end">

                                                <div class="info-stock mb-20">
                                                    <label class="control-label">Availability:</label> In Stock
                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                </div>

                                                <div class="sku">
                                                    <label class="control-label">Sku:</label>
                                                    <span>demo_3</span>
                                                </div>
                                                <div class="pro-cate">
                                                    <label class="control-label">Categories:</label>
                                                    <div>
                                                            <span><a href="#" title="Computer &amp; Networking">Computer
                                                                    &amp; Networking</a></span>
                                                        <span><a href="#" title="Hard Disk">Hard Disk</a></span>
                                                        <span><a href="#" title="Laptop &amp; Accessories">Laptop
                                                                    &amp; Accessories</a></span>
                                                        <span><a href="#" title="Smartphone &amp; Tablet">Smartphone
                                                                    &amp; Tablet</a></span>
                                                        <span><a href="#" title="Electronics">Electronics</a></span>
                                                    </div>
                                                </div>
                                                <div class="pro-tag">
                                                    <label class="control-label">Tags:</label>
                                                    <div>
                                                        <span><a href="#">smartphone</a></span>
                                                        <span><a href="#">iphone</a></span>
                                                        <span><a href="#">samsung</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Product description tab  -->

                    <!-- Related product section start -->
                    <div class="product-detail-bottom">
                        <div class="container">

                            <section class="relate-product product-accessories clearfix">
                                <h3 class="h5 title_block">Related products<span class="sub_title">Hand-picked
                                            arrivals from the best designer</span></h3>
                                <div class="products product_list grid owl-carousel owl-theme" data-autoplay="true" data-autoplayTimeout="6000" data-loop="true" data-items="5" data-items_large="4" data-margin="0" data-nav="true" data-dots="false" data-items_mobile="2">
                                    <div class="item  text-center">
                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1">
                                            <div class="product-cat-content">

                                                <div class="category-title">
                                                    <a href="#">Smartphone
                                                        &amp; Tablet
                                                    </a>
                                                </div>


                                                <div class="product-title">
                                                    <a href="#">Nullam
                                                        sed sollicitudin mauris
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="thumbnail-container">
                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                    <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">
                                                    <div class="product-group-price">
                                                        <div class="product-price-and-shipping">
                                                            <span class="price">$25.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-comments">
                                                        <div class="star_content">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                        <span>0 review</span>
                                                    </div>
                                                    <p class="seller_name">
                                                        <a title="View seller profile" href="#">
                                                            <i class="fa fa-user"></i> David James
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-start">
                                                    <form action="" method="post" class="formAddToCart">
                                                        <input type="hidden" name="token" value="">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                    </form>
                                                    <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  text-center">
                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="3" data-id-product-attribute="40">
                                            <div class="product-cat-content">

                                                <div class="category-title"><a href="#">Smartphone
                                                        &amp; Tablet</a></div>


                                                <div class="product-title"><a href="#">Mauris
                                                        molestie porttitor diam</a></div>

                                            </div>
                                            <div class="thumbnail-container">

                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                    <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">
                                                    <div class="product-group-price">
                                                        <div class="product-price-and-shipping">
                                                            <span class="price">$69.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-comments">
                                                        <div class="star_content">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                        <span>0 review</span>
                                                    </div>
                                                    <p class="seller_name">
                                                        <a title="View seller profile" href="#">
                                                            <i class="fa fa-user"></i> David James
                                                        </a>
                                                    </p>

                                                </div>
                                                <div class="product-buttons d-flex justify-content-start">
                                                    <form action="" method="post" class="formAddToCart">
                                                        <input type="hidden" name="token" value="">
                                                        <input type="hidden" name="id_product" value="3">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                    </form>
                                                    <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="">
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  text-center">
                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="4" data-id-product-attribute="52">
                                            <div class="product-cat-content">

                                                <div class="category-title"><a href="#">Electronics</a>
                                                </div>


                                                <div class="product-title"><a href="#">Maecenas
                                                        vulputate ligula vel</a></div>

                                            </div>
                                            <div class="thumbnail-container">
                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/4-1.jpg" width="270" height="360">
                                                    <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/4-2.jpg" width="270" height="360">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">
                                                    <div class="product-group-price">
                                                        <div class="product-price-and-shipping">
                                                            <span class="price">$49.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-comments">
                                                        <div class="star_content">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                        <span>0 review</span>
                                                    </div>
                                                    <p class="seller_name">
                                                        <a title="View seller profile" href="#">
                                                            <i class="fa fa-user"></i> David James
                                                        </a>
                                                    </p>

                                                </div>
                                                <div class="product-buttons d-flex justify-content-start">
                                                    <form action="" method="post" class="formAddToCart">
                                                        <input type="hidden" name="token" value="">
                                                        <input type="hidden" name="id_product" value="4">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                    </form>
                                                    <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="">
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  text-center">
                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="5" data-id-product-attribute="64">
                                            <div class="product-cat-content">

                                                <div class="category-title"><a href="#">Smartphone
                                                        &amp; Tablet</a></div>


                                                <div class="product-title"><a href="#">Vehicula
                                                        vel tempus sit amet ulte</a></div>

                                            </div>
                                            <div class="thumbnail-container">

                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover" src="images/Home/common/5-1.jpg" alt="" data-full-size-image-url="images/Home/common/5-1.jpg" width="270" height="360">
                                                    <img class="img-fluid image-secondary" src="images/Home/common/6-1.jpg" alt="" data-full-size-image-url="images/Home/common/6-1.jpg" width="270" height="360">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">
                                                    <div class="product-group-price">
                                                        <div class="product-price-and-shipping">
                                                            <span class="price">$15.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-comments">
                                                        <div class="star_content">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                        <span>0 review</span>
                                                    </div>
                                                    <p class="seller_name">
                                                        <a title="View seller profile" href="#">
                                                            <i class="fa fa-user"></i> David James
                                                        </a>
                                                    </p>

                                                </div>
                                                <div class="product-buttons d-flex justify-content-start">
                                                    <form action="" method="post" class="formAddToCart">
                                                        <input type="hidden" name="token" value="">
                                                        <input type="hidden" name="id_product" value="5">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                    </form>
                                                    <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="">
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  text-center">
                                        <div class="product-miniature js-product-miniature item-two first_item">
                                            <div class="product-cat-content">

                                                <div class="category-title"><a href="#">Electronics</a>
                                                </div>
                                                <div class="product-title"><a href="#">Mauris
                                                        semper mattis gravida</a></div>

                                            </div>
                                            <div class="thumbnail-container">

                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover" src="images/Home/common/7-1.jpg" alt="" data-full-size-image-url="images/Home/common/7-1.jpg" width="270" height="360">
                                                    <img class="img-fluid image-secondary" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">
                                                    <div class="product-group-price">
                                                        <div class="product-price-and-shipping">
                                                            <span class="price">$15.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-comments">
                                                        <div class="star_content">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                        <span>0 review</span>
                                                    </div>
                                                    <p class="seller_name">
                                                        <a title="View seller profile" href="#">
                                                            <i class="fa fa-user"></i> David James
                                                        </a>
                                                    </p>

                                                </div>
                                                <div class="product-buttons d-flex justify-content-start">
                                                    <form action="" method="post" class="formAddToCart">
                                                        <input type="hidden" name="token" value="">
                                                        <input type="hidden" name="id_product" value="16">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                    </form>
                                                    <a class="addToWishlist wishlistProd_16" href="#" data-rel="16" onclick="">
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- Related product section start -->

                    <!-- Zoom image modal start -->
                    <div class="modal fade js-product-images-modal" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <figure>
                                        <img class="js-modal-product-cover product-cover-modal" width="600" src="images/Home/common/8-1.jpg" alt="" title="">
                                    </figure>
                                    <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">

                                        <div class="js-modal-mask mask  nomargin ">
                                            <ul class="product-images js-modal-product-images">
                                                <li class="thumb-container">
                                                    <img data-image-large-src="images/Home/common/8-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/8-1.jpg" alt="" title="" width="125">
                                                </li>
                                                <li class="thumb-container">
                                                    <img data-image-large-src="images/Home/common/9-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/9-1.jpg" alt="" title="" width="125">
                                                </li>
                                                <li class="thumb-container">
                                                    <img data-image-large-src="images/Home/common/10-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/10-1.jpg" alt="" title="">
                                                </li>
                                                <li class="thumb-container">
                                                    <img data-image-large-src="images/Home/common/11-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/11-1.jpg" alt="" title="">
                                                </li>
                                                <li class="thumb-container">
                                                    <img data-image-large-src="images/Home/common/12-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/12-1.jpg" alt="" title="">
                                                </li>
                                            </ul>
                                        </div>

                                    </aside>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- Zoom image modal end -->
                </section>
            </div>
        </div>
    </div>
@endsection
