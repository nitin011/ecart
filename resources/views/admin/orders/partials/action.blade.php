<div class="text-right">
    <div class="btn-group">
        <a href="{{ route('admin.order.show',$data->order_id) }}"
           class="edit btn btn-info action-button">
            <i class="fa fa-eye"></i></a>
        <a onclick="confirmPureDelete('{{ route('admin.order.destroy',$data->order_id) }}');"
           class="trash btn btn-danger action-button text-white">
            <i class="fa fa-trash"></i></a>
    </div>
</div>
