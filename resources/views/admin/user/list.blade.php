@extends('admin.layout.app')
@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Customers List</h4>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>User_name</th>
                            <th>User Phone</th>
                            <th>User Email</th>
                            <th>Registration Date</th>
                            <th>Is Verified?</th>
                            <th class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{$user->first_name.' '.$user->last_name}}</td>
                                <td>{{$user->user_phone}}</td>
                                <td>{{$user->user_email}}</td>
                                <td>{{$user->reg_date}}</td>
                                @if($user->is_verified==0)
                                    <td class="text-danger">Not</td>
                                @else
                                    <td class="text-success">Yes</td>
                                @endif
                                <td class="td-actions text-right">
                                    @if($user->block==1)
                                        <a href="{{ route('userunblock',$user->user_id)}}" rel="tooltip"
                                           class="btn btn-danger">
                                            <i class="fa fa-ban"></i> Blocked
                                        </a>
                                    @else
                                        <a href="{{ route('userblock',$user->user_id)}}" rel="tooltip"
                                           class="btn btn-primary">
                                            <i class="fa fa-active"></i>Active
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No data found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
