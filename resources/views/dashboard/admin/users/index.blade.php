@extends('dashboard.app.admin.layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Manage Users</h1>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm table-striped" style="white-space: nowrap;">
                    <thead class="table-dark">
                        <tr>
                            <th style="white-space: nowrap;">ID</th>
                            <th style="white-space: nowrap;">Name</th>
                            <th style="white-space: nowrap;">Email</th>
                            <th style="white-space: nowrap;">Password</th>
                            <th style="white-space: nowrap;">Role</th>
                            <th style="white-space: nowrap;">Created At</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="text-muted">************</span>
                            </td>
                            <td>
                                @if($user->is_admin)
                                <span class="badge bg-danger">Admin</span>
                                @else
                                <span class="badge bg-info">User</span>
                                @endif
                            </td>
                            <td>{{ $user->created_at->format('M d, Y') }}</td>
                            <td class="text-nowrap">
                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No users found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection