@extends('web.layout.app')
@section('title','Shop')
@section('page','index')

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
                                    <h1>{{$current_category->title}}</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb d-flex justify-content-md-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item">Shop</li>
                                    <li class="breadcrumb-item active">{{$current_category->title}}</li>
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
                                <div class="nov-row-wrap row" id="product_list">
                                    <div class="col-md-12">
                                        <div class="product_header mb-30">
                                            <div class="product_header_left">
                                                <div class="custom_select">
                                                    <form id="filter" method="get" action="{{ route('customer.products.by-category',$current_category->cat_id) }}">
                                                        <select name="sort_by" class="form-control form-control-sm" onchange="$('#filter').submit();">
                                                            <option value="">Sort by</option>
                                                            <option value="price:asc" {{ request()->get('sort_by') =='price:asc'?'selected':'' }}>Sort by price: low to high</option>
                                                            <option value="price:desc" {{ request()->get('sort_by') =='price:desc'?'selected':'' }}>Sort by price: high to low</option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                            {{--<div class="product_header_right">
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
                                            </div>--}}
                                        </div>
                                    </div>

                                    {!! view('web.pages.product.partial.product_block', compact('products'))->render() !!}
                                </div>
                            </div>
                            <!-- product list section end -->
                        </div>
                        <div class="ajax-load text-center" style="display:none">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- wrapper end -->
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');
        });
    </script>
    <script>
        function loadMore() {
            let element= event.target;
            let url= $(element).data('url');

            $.ajax({
                url:url,
                method:'get',
                beforeSend: function () {
                    $("#show_more button").text('Loading...');
                    $("#show_more button").prop('disabled', true);
                },
                success: function (res) {
                    if(res.status){
                        $("#show_more").remove();
                        $('#product_list').append(res.html);
                    }else{
                        $(element).remove();
                    }
                }
            });
        }
    </script>

@endpush
