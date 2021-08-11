<div class="text-right">
    @if(Route::currentRouteName() != 'admin.admins.show')
        <a href="{{ route('admin.admins.show',$data->id) }}" class="edit btn btn-info btn-sm action-button"><i
                class="fa fa-eye"></i></a>
    @endif
    <a href="{{ route('admin.admins.edit',$data->id) }}" class="edit btn btn-primary btn-sm action-button"><i
            class="fa fa-edit"></i></a>
    <button onclick="confirmPureDelete('{{ route('admin.admins.destroy',$data->id) }}');"
            @if($data->id== auth()->guard('admin')->user()->id)
                disabled
                data-title="You can't delete to own account."
            @else
                data-title="Delete Admin User."
            @endif
            class="delete btn btn-danger btn-sm action-button">
        <i class="fa fa-trash"></i>
    </button>
</div>
