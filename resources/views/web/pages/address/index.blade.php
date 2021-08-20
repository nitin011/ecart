@extends('web.layout.app')
@section('title','Address')
@section('page','index')
@section('content')
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div class="breadcrumb_section bg_gray page-title-mini">
                <div class="container">
                    <!-- STRART CONTAINER -->
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title">
                                <h1>Manage Address</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb d-flex justify-content-md-end">
                                <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Manage Address</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END CONTAINER-->
            </div>
            <section id="content" class="page-home pagehome-two">
                <div class="container">
                    <!-- my account page section start -->
                    <div class="row">
                        <div class="nov-row page-home-right product-list-section col-lg-cus-12 col-lg-12 col-xs-12" style="padding-bottom: 43px">
                            <div class="nov-row-wrap row">
                                <div class="col-12 text-right" style="margin-top: -30px">
                                    <a href="{{ route('customer.address.create') }}" class="btn btn-default">Add New
                                        Address</a>
                                </div>
                                @foreach(auth()->guard('web')->user()->addresses as $address)
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{ route('customer.address.default',$address->id) }}"
                                                   class="btn float-right {{ ($address->is_default ==1)?'bg-primary text-white disabled':'bg-secondary text-white' }}">
                                                    {{ ($address->is_default ==1)?'Primary':'Make Primary' }}
                                                </a>
                                                @include('web.pages.address.partials.full_address')

                                                <a href="{{ route('customer.address.edit',$address->id ) }}"
                                                   class="btn btn-sm btn-success rounded-0 text-white">Update</a>
                                                @if($address->is_default == 0)
                                                    <a class="btn btn-sm btn-danger rounded-0 text-white"
                                                       onclick="confirmPureDelete('{{ route('customer.address.destroy',$address->id) }}');">
                                                        {{ __('Delete') }}
                                                    </a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');
        });
    </script>
@endpush
