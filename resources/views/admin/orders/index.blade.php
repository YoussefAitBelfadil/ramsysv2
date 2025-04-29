@extends('layouts.admin')

@section('title', 'Orders')

@section('header', 'Orders')

@section('content')
<div class="card admin-card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">All Orders</h5>
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
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>#{{ $order['id'] }}</td>
                            <td>{{ $order['customer'] }}</td>
                            <td>{{ $order['email'] }}</td>
                            <td>${{ number_format($order['total'], 2) }}</td>
                            <td>
                                @php
                                    $statusClass = '';
                                    switch($order['status']) {
                                        case 'Pending':
                                            $statusClass = 'pending';
                                            break;
                                        case 'Processing':
                                            $statusClass = 'processing';
                                            break;
                                        case 'Completed':
                                            $statusClass = 'completed';
                                            break;
                                        case 'Cancelled':
                                            $statusClass = 'cancelled';
                                            break;
                                        default:
                                            $statusClass = 'pending';
                                    }
                                @endphp
                                <span class="status-badge {{ $statusClass }}">
                                    {{ $order['status'] }}
                                </span>
                            </td>
                            <td>
                                @php
                                    $paymentClass = $order['payment_status'] == 'Paid' ? 'completed' : 'pending';
                                @endphp
                                <span class="status-badge {{ $paymentClass }}">
                                    {{ $order['payment_status'] }}
                                </span>
                            </td>
                            <td>{{ $order['created_at'] }}</td>
                            <td>
                                <a href="{{ route('admin.orders.show', $order['id']) }}" class="btn btn-sm btn-outline-primary">
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
