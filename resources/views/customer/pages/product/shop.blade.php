@extends('customer.layouts.master')
@section('title','Shop')
@section('header_styles')
    <style type="text/css">
        .ajax-load {
            /*background: #e1e1e1;*/
            padding: 10px 0px;
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <!-- border bottom -->
    <div class="border-bottom"></div>

    <!-- ee breadcrumb -->
    <div class="ee-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.blade.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page -->
    <div class="bg-grey">
        <section class="type-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Shop</h5>
                    </div>
                    {{--<div class="col-md-6 text-right">
                        <div class="d-flex justify-content-end">
                            <div class="popularity-input">
                                <input type="text" placeholder="Popularity">
                            </div>
                            <button class="filter-btn">FILTERS</button>
                        </div>
                    </div>--}}
                </div>
            </div>
        </section>
        <section class="product-list">
            <div class="container" id="post-data">
                @include('customer.pages.product.partials.products_block',['products'=>$products])
            </div>
            <div class="ajax-load text-center" style="display:none">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        var page = 1;
        var totalPages = '{{ $products->lastPage() }}';
        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() && (page <= parseInt(totalPages))) {
                page++;
                setTimeout(loadMoreData(page), 10000);
            }
        });

        function loadMoreData(page) {
            try {
                $.ajax(
                    {
                        url: '?page=' + page,
                        type: "get",
                        beforeSend: function () {
                            $('.ajax-load').show();
                        }
                    })
                    .done(function (data) {
                        if (data.status === false) {
                            $('.ajax-load').html("No more records found");
                            return;
                        }
                        $('.ajax-load').hide();
                        $("#post-data").append(data.html);
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        console.log('server not responding...');
                    });
            } catch (e) {
                console.log(e);
            }
        }
    </script>
@endsection
