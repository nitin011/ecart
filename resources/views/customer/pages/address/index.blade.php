@extends('customer.layouts.master')
@section('title','Addresses')

@section('content')
    <!-- border bottom -->
    <div class="border-bottom"></div>
    <!-- ee Breadcfumb -->
    <div class="ee-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Addresses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- checkout content -->
    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('customer.layouts.partials.flash_messages')
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-10">
                    <h4 class="text-green mb-0">Manage Address</h4>
                </div>
                <div class="col-2 text-right">
                    <a href="{{ route('customer.address.create') }}" class="site-btn site-btn-sm">Add New
                        Address</a>
                </div>
            </div>
            <hr>
            <div class="row">
                @foreach(auth()->guard('web')->user()->addresses as $address)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('customer.address.default',$address->id) }}"
                                   class="btn float-right {{ ($address->is_default ==1)?'bg-primary text-white disabled':'bg-secondary text-white' }}">
                                    {{ ($address->is_default ==1)?'Primary':'Make Primary' }}
                                </a>
                                @include('customer.pages.address.partials.full_address')

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
    <!-- Contact Form End -->
@endsection
@section('scripts')

@endsection
