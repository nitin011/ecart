<div class="row">
    @foreach($user->addresses as $address)
        <div class="col-3">
            <div class="card"
                 style="padding: 5px; background-color: #f8f9fa; border: 0.5px solid #000">
                <div class="card-body p-0">
                    <input type="radio"
                           name="address"
                           value="{{$address->id}}"
                           @if($address->is_default) checked @endif>
                    @if($address->is_default)
                        <a href="javascript:void(0)"
                           class="btn btn-info btn-sm pull-right"
                           style="width: 100%">Primary</a>
                    @endif
                    <br><br><br>
                    @include('web.pages.address.partials.full_address')
                </div>
            </div>
        </div>
    @endforeach
</div>
