@extends('admin.layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 mt-1 font-weight-bold" style="float:left">Pages List
                    </h3>
                    <div style="float:right">
                        <a href="{{ route('admin.page.create') }}" title="Add New"
                           class="btn btn-primary btn-sm font-weight-bold">
                            <i class="fa fa-plus mr-1"></i>Add New
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page['title'] }}</td>
                                <td>{{ $page['slug'] }}</td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="{{ route('page.view',$page->slug) }}" target="_blank"
                                           class="btn btn-sm btn-info action-button">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                        <a href="{{ route('admin.page.edit',$page->id) }}"
                                           class="btn btn-sm btn-success action-button">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="confirmPureDelete('{{ route('admin.page.destroy',$page->id) }}')"
                                           class="btn btn-sm btn-danger action-button text-white">
                                            <i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
