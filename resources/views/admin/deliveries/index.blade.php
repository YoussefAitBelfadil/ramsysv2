@extends('layouts.admin')

@section('title', 'Deliveries')

@section('header', 'Deliveries')

@section('content')
<div class="card admin-card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">All Deliveries</h5>
        <div>
            <button class="btn btn-outline-primary me-2">
                <i class="fas fa-filter me-1"></i> Filter
            </button>
            <button class="btn btn-outline-secondary">
                <i class="fas fa-download me-1"></i> Export
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Tracking Number</th>
                        <th>Est. Delivery</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deliveries as $delivery)
                        <tr>
                            <td>{{ $delivery['id'] }}</td>
                            <td>#{{ $delivery['order_id'] }}</td>
                            <td>{{ $delivery['customer'] }}</td>
                            <td>
                                @php
                                    $statusClass = '';
                                    switch($delivery['status']) {
                                        case 'Processing':
                                            $statusClass = 'pending';
                                            break;
                                        case 'In Transit':
                                            $statusClass = 'in-transit';
                                            break;
                                        case 'Delivered':
                                            $statusClass = 'delivered';
                                            break;
                                        default:
                                            $statusClass = 'pending';
                                    }
                                @endphp
                                <span class="status-badge {{ $statusClass }}">
                                    {{ $delivery['status'] }}
                                </span>
                            </td>
                            <td>{{ $delivery['tracking_number'] }}</td>
                            <td>{{ $delivery['estimated_delivery'] }}</td>
                            <td>{{ $delivery['created_at'] }}</td>
                            <td>
                                <a href="{{ route('admin.deliveries.show', $delivery['id']) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
