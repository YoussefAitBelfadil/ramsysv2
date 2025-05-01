@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Reviews</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">All Reviews</h6>
            <div>
                <a href="{{ route('admin.reviews.pending') }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-clock mr-1"></i> Pending Reviews
                </a>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>User</th>
                            <th>Rating</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reviews as $review)
                            <tr>
                                <td>{{ $review->id }}</td>
                                <td>
                                    <a href="{{ route('product.show', $review->product_id) }}" target="_blank">
                                        {{ $review->product->name }}
                                    </a>
                                </td>
                                <td>{{ $review->user->name }}</td>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $review->rating)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-warning"></i>
                                        @endif
                                    @endfor
                                </td>
                                <td>{{ Str::limit($review->comment, 50) }}</td>
                                <td>
                                    @if($review->status == 'approved')
                                        <span class="badge badge-success">Approved</span>
                                    @elseif($review->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @else
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>{{ $review->created_at->format('M d, Y') }}</td>
                                <td>
                                    <div class="btn-group">
                                        @if($review->status != 'approved')
                                            <form action="{{ route('admin.reviews.approve', $review->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm" title="Approve">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                        @endif

                                        @if($review->status != 'rejected')
                                            <form action="{{ route('admin.reviews.reject', $review->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-warning btn-sm" title="Reject">
                                                    <i class="fas fa-ban"></i>
                                                </button>
                                            </form>
                                        @endif

                                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No reviews found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $reviews->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Confirm delete
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                if (confirm('Are you sure you want to delete this review?')) {
                    this.submit();
                }
            });
        });
    });
</script>
@endsection
