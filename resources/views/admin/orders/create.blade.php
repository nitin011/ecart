@extends('admin.layout.app')
@section('page_title','Create Order')
@section('header_styles')
@endsection
@section('content')
    <div class="container">
        <div class="az-content-body az-content-body-invoice">
            <div class="card mb-3">
            <div class="card-header">
                <h3>Create Order</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.order.post.create') }}" method="post" id="order-create">
                    @csrf
                    @include('admin.orders.fields')
                </form>
            </div>
        </div>
        </div></div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#user-record').select2({
                ajax: {
                    url: "{{ route('userlist') }}",
                    data:function (params) {
                        let query= {
                            search: params.term,
                            page: params.page || 1
                        };
                        return query;
                    },
                    processResults: function (responseTxt, params) {
                        response = JSON.parse(responseTxt);
                        params.page = params.page || 1;
                        return {
                            results: response.data,
                            pagination: {
                                more: response.current_page !== response.last_page,
                            }
                        };
                    }
                }
            });

            $('#product').select2();

            $(document).on('click','.next', function () {
                let target=$(this);
                let type= target.data('type');
                if (type === 'user_product'){
                    let user= $('#user-record').val();
                    let products= $('#product').val();
                    let error= false;

                    if (user === '') {
                        toastr["error"]('User is required', "Error");
                        error = true;
                    }
                    if (!products.length) {
                        toastr["error"]('Product is required', "Error");
                        error = true;
                    }

                    if(!error){
                        target.prop('disabled', true);
                        target.text('Process...');
                        $.ajax({
                            url:'{{ route('admin.order.get.product') }}',
                            method:'post',
                            data:{_token:'{{csrf_token()}}','products':products},
                            success:function (res) {
                                $('#collapseTwo #product-table').html(res.html);
                            },
                            complete: function () {
                                target.prop('disabled', false);
                                target.text('Next');
                                $('#collapseTwo').collapse('show');
                                $('#collapseOne').collapse('hide');
                            }
                        })
                    }
                }
                if (type === 'product_details'){
                    target.prop('disabled', true);
                    target.text('Process...');
                    let formData= $('#order-create').serialize();
                    $.ajax({
                        url:'{{ route('admin.order.get.details') }}',
                        method:'post',
                        data:formData,
                        success: function (res) {
                            $("#collapseThree #order_details").html(res.html);
                        },
                        complete: function () {
                            target.prop('disabled', false);
                            target.text('Next');
                            $('#collapseThree').collapse('show');
                            $('#collapseTwo').collapse('hide');
                        }
                    });
                }
            });

            $(document).on('click', '.quantity', function () {
                let type = $(this).data('type');
                let id = $(this).data('id');
                let price = $(this).data('price');
                let input = $(this).closest('.form-group').find('input[name="qty['+id+']"]');
                let qty = parseInt(input.val());
                if (type === 'add') {
                    input.val(qty + 1);
                }
                if (type === 'less') {
                    if (qty > 1) {
                        input.val(qty - 1);
                    }
                }
                let total= parseInt(price)* parseInt(input.val());
                $('#price_'+ id).text(total);
            });

            $(document).on('click','.previous', function () {
                let type= $(this).data('type');
                if (type === 'user_product'){
                    $('#collapseOne').collapse('show');
                    $('#collapseTwo').collapse('hide');
                }
                if (type === 'product_details'){
                    $('#collapseTwo').collapse('show');
                    $('#collapseThree').collapse('hide');
                }
            });

            $('#user-record').on('change', function (event) {
                    $.ajax({
                        url:'{{ route('admin.order.user.address') }}',
                        method:'post',
                        data:{id: $(this).val(),_token:'{{ csrf_token() }}'},
                        success:function (res) {
                            $('#collapseOne #address').html(res.html);
                        }
                    });
            });
        });

    </script>
@endsection
