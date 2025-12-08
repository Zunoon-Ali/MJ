@extends('dashboard.app.admin.layout')

@section('page-title', 'Product Reviews Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Product Reviews</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Reviewer</th>
                                    <th>Rating</th>
                                    <th>Review</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($reviews as $review)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($review->product && $review->product->image)
                                            <img src="{{ asset('storage/' . $review->product->image) }}"
                                                alt="{{ $review->product->name }}"
                                                class="rounded me-2"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                            @else
                                            <img src="{{ asset('images/product2.png') }}"
                                                alt="Product"
                                                class="rounded me-2"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                            @endif
                                            <div>
                                                <strong>{{ $review->product->name ?? 'N/A' }}</strong><br>
                                                <small class="text-muted">${{ number_format($review->product->price ?? 0, 2) }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <strong>{{ $review->reviewer_name }}</strong><br>
                                        @if($review->reviewer_email)
                                        <small class="text-muted">{{ $review->reviewer_email }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="text-warning">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <=$review->rating)
                                                ★
                                                @else
                                                ☆
                                                @endif
                                                @endfor
                                        </span>
                                        <br>
                                        <small>({{ $review->rating }}/5)</small>
                                    </td>
                                    <td>
                                        <span title="{{ $review->review }}">
                                            {{ Str::limit($review->review, 50) }}
                                        </span>
                                    </td>
                                    <td>
                                        <small>{{ $review->created_at->format('M d, Y') }}</small><br>
                                        <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $review->id }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this review?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{ $review->id }}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Review</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Reviewer Name</label>
                                                        <input type="text" name="reviewer_name" class="form-control" value="{{ $review->reviewer_name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Rating</label>
                                                        <select name="rating" class="form-select" required>
                                                            <option value="5" {{ $review->rating == 5 ? 'selected' : '' }}>★★★★★ (5 Stars)</option>
                                                            <option value="4" {{ $review->rating == 4 ? 'selected' : '' }}>★★★★☆ (4 Stars)</option>
                                                            <option value="3" {{ $review->rating == 3 ? 'selected' : '' }}>★★★☆☆ (3 Stars)</option>
                                                            <option value="2" {{ $review->rating == 2 ? 'selected' : '' }}>★★☆☆☆ (2 Stars)</option>
                                                            <option value="1" {{ $review->rating == 1 ? 'selected' : '' }}>★☆☆☆☆ (1 Star)</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Review</label>
                                                        <textarea name="review" class="form-control" rows="4" required>{{ $review->review }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">No reviews found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $reviews->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection