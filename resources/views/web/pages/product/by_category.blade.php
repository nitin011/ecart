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
                                    <form id="filter" method="get" action="{{ route('customer.products.by-category',$current_category->cat_id) }}" style="position: relative; display: contents;">
                                        <div class="col-md-6">
                                            <div class="product_header mb-30">
                                                <div class="product_header_left">
                                                    <div class="custom_select">
                                                        <select name="filter[sort_by]" class="form-control form-control-sm" onchange="$('#filter').submit();">
                                                            <option value="">Sort by Popularity</option>
                                                            <option value="price:asc" {{ request()->get('filter')['sort_by'] =='price:asc'?'selected':'' }}>Sort by price: low to high</option>
                                                            <option value="price:desc" {{ request()->get('filter')['sort_by'] =='price:desc'?'selected':'' }}>Sort by price: high to low</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-sm-12 text-right mb-5">
                                                    <a class="btn btn-primary" data-toggle="collapse" href="#filterCollapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-arrow-down"></i> Filter</a>
                                                </div>
                                                <div class="col-sm-12 mb-5">
                                                    <div class="collapse" id="filterCollapse">
                                                        <div class="card">
                                                            <div class="card-body row">
                                                                <div class="col-sm-6 col-xs-12">
                                                                    <h3 class="text-center">Price</h3>
                                                                    <section class="range-slider">
                                                                        <input value="{{ request()->get('filter')['min_price'] ?? 1 }}" min="1" max="5000" step="1" type="range">
                                                                        <input value="{{ request()->get('filter')['max_price'] ?? 5000 }}" min="1" max="5000" step="1" type="range">
                                                                    </section>
                                                                    <div style="display:inline-flex; position:relative;">
                                                                        <input class="form-control" type="text" id="min_price" readonly style="width: 45%">
                                                                        <span style="width: 10%; margin: auto; text-align: center">TO</span>
                                                                        <input class="form-control" type="text" id="max_price" readonly style="width: 45%">
                                                                        <input type="hidden" name="filter[min_price]">
                                                                        <input type="hidden" name="filter[max_price]">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 text-center mt-10">
                                                                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

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
