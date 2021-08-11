@extends('customer.layouts.master')
@section('title','Add Address')
@section('header_styles')

@endsection
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
                            <li class="breadcrumb-item active" aria-current="page">Add New Address</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- checkout content -->
    <div class="bg-grey">
        <div class="container">
            @include('customer.layouts.partials.flash_messages')
            <form method="POST" action="{{ route('customer.address.store') }}">
                @csrf
                @method('POST')
                @include('customer.pages.address.form')
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
@endsection
@section('scripts')

@endsection
