<div class="text-right">
    <div class="btn-group">
        <a href="{{ route('admin.order.download-invoice',$data->order_id) }}"
           class="edit btn btn-success action-button" title="Download Invoice">
            <i class="fa fa-download"></i></a>
        <a href="{{ route('admin.order.show',$data->order_id) }}"
           class="edit btn btn-info action-button">
            <i class="fa fa-eye"></i></a>
        <a onclick="confirmPureDelete('{{ route('admin.order.destroy',$data->order_id) }}');"
           class="trash btn btn-danger action-button text-white">
            <i class="fa fa-trash"></i></a>
        <a href="{{ route('admin.order.resend-invoice',$data->order_id) }}"
           class="edit btn btn-primary action-button" title="Resend Invoice">
            <i class="fa fa-paper-plane"></i></a>
    </div>
</div>
