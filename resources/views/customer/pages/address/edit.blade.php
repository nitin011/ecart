@extends('customer.layouts.master')
@section('title','Update Address')

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
                            <li class="breadcrumb-item">
                                <a href="{{ route('customer.index') }}">Edit Address</a></li>
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
                <div class="col-lg-12">
                    @include('customer.layouts.partials.flash_messages')
                </div>
                <div class="col-lg-12">
                    <h2>Update Address</h2>
                </div>
            </div>
            <form method="POST" action="{{ route('customer.address.store') }}">
                @csrf
                @include('customer.pages.address.form')
                <input type="hidden" value="{{ $address->id }}" name="id">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-success">Update Address</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
@endsection
@section('scripts')

@endsection
