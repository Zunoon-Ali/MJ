@extends('dashboard.app.admin.layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1><i class="fa-solid fa-envelope me-2"></i>Contact Submissions</h1>
            </div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm table-striped" style="white-space: nowrap;">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($submissions as $submission)
                        <tr>
                            <td>{{ $submission->id }}</td>
                            <td>{{ $submission->name }}</td>
                            <td>{{ $submission->email }}</td>
                            <td>
                                <div style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                    {{ $submission->message }}
                                </div>
                            </td>
                            <td>
                                @if($submission->status === 'new')
                                <span class="badge bg-primary">New</span>
                                @elseif($submission->status === 'read')
                                <span class="badge bg-info">Read</span>
                                @else
                                <span class="badge bg-success">Replied</span>
                                @endif
                            </td>
                            <td>{{ $submission->created_at->format('M d, Y') }}</td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal{{ $submission->id }}">
                                    <i class="fa fa-eye"></i> View
                                </button>
                                <form action="{{ route('contact-submissions.destroy', $submission->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this submission?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- View/Edit Modal -->
                        <div class="modal fade" id="viewModal{{ $submission->id }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="{{ route('contact-submissions.update', $submission) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title">Contact Submission Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Name</label>
                                                <p class="form-control-plaintext">{{ $submission->name }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Email</label>
                                                <p class="form-control-plaintext">{{ $submission->email }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Message</label>
                                                <p class="form-control-plaintext border p-3 rounded" style="white-space: pre-wrap;">{{ $submission->message }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Date Submitted</label>
                                                <p class="form-control-plaintext">{{ $submission->created_at->format('F d, Y \a\t h:i A') }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Status</label>
                                                <select name="status" class="form-select">
                                                    <option value="new" {{ $submission->status === 'new' ? 'selected' : '' }}>New</option>
                                                    <option value="read" {{ $submission->status === 'read' ? 'selected' : '' }}>Read</option>
                                                    <option value="replied" {{ $submission->status === 'replied' ? 'selected' : '' }}>Replied</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Status</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No contact submissions yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection