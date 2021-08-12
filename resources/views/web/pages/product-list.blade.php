@extends('web.layout.app')

@section('content')
    <!-- wrapper start -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <div class="breadcrumb_section bg_gray page-title-mini">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="page-title">
                                    <h1>Shop List</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb d-flex justify-content-md-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Shop List</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER-->
                </div>
                <section id="content" class="page-home pagehome-two">
                    <div class="container">
                        <div class="row">
                            <!-- product list section start -->
                            <div class="nov-row page-home-right product-list-section col-lg-cus-12 col-lg-12 col-xs-12">
                                <div class="nov-row-wrap row">
                                    <div class="col-md-12">
                                        <div class="product_header mb-30">
                                            <div class="product_header_left">
                                                <div class="custom_select">
                                                    <select class="form-control form-control-sm">
                                                        <option value="order">Default sorting</option>
                                                        <option value="popularity">Sort by popularity</option>
                                                        <option value="date">Sort by newness</option>
                                                        <option value="price">Sort by price: low to high</option>
                                                        <option value="price-desc">Sort by price: high to low
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="product_header_right">
                                                <div class="products_view">
                                                    <a href="javascript:Void(0);" class="shorting_icon grid active"><i
                                                            class="ti-view-grid"></i></a>
                                                </div>
                                                <div class="custom_select">
                                                    <select class="form-control form-control-sm first_null not_chosen">
                                                        <option value="">Showing</option>
                                                        <option value="9">9</option>
                                                        <option value="12">12</option>
                                                        <option value="18">18</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/5-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/6-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/7-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/9-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/10-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/11-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/12-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/13-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/14-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/15-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/16-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title" itemprop="name">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris</a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                    </a>




                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">

                                                            <div class="product-price-and-shipping">



                                                                <span itemprop="price" class="price">$25.00</span>





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
                                                    <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add
                                                                        to cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span>
                                                                    Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 text-center mt-20 mb-40">
                                        <button class="btn btn-primary">Show More</button>
                                    </div>
                                </div>
                            </div>
                            <!-- product list section end -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- wrapper end -->
@endsection
