@extends('client.layout.master')
@section('content')
    <x-breadcrumb section="Pages" page="My Account" />
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard"
                                            role="tab" aria-controls="dashboard" aria-selected="false"><i
                                                class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders"
                                            role="tab" aria-controls="orders" aria-selected="false"><i
                                                class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address"
                                            role="tab" aria-controls="address" aria-selected="true"><i
                                                class="fi-rs-marker mr-10"></i>My Address</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                            href="#account-detail" role="tab" aria-controls="account-detail"
                                            aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                    </li>
                                    <li class="nav-item">
                                        @if (auth()->user())
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <a type="submit" :href="route('logout')"
                                                    onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                                    {{ __('Log Out') }}><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                            </form>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content account dashboard-content pl-50">
                                <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                    aria-labelledby="dashboard-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="mb-0">Hello {{ auth()->user()->name }}</h3>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                From your account dashboard. you can easily check &amp; view your <a
                                                    href="#">recent orders</a>,<br />
                                                manage your <a href="#">shipping and billing addresses</a> and <a
                                                    href="#">edit your password and account details.</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="mb-0">Your Orders</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($orders->isEmpty())
                                                            <tr>
                                                                <td colspan="5" class="text-center"
                                                                    style="text-align: center;">
                                                                    <div
                                                                        style="display: flex; flex-direction: column; align-items: center;">
                                                                        <img src="{{ asset('assets/client/assets/imgs/gif/magnyfir.gif') }}"
                                                                            alt="No Orders" width="50">
                                                                        <p>No orders placed</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @else
                                                            @foreach ($orders as $order)
                                                                <tr>
                                                                    <td>{{ $order->id }}</td>
                                                                    <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                                                    <td>{{ $order->status }}</td>
                                                                    <td>{{ $order->total }}</td>
                                                                    <td>
                                                                        <a href="{{ route('orders.show', $order->id) }}"
                                                                            class="btn btn-primary">View</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                    <div class="row">
                                        <div class="d-flex justify-content-end">
                                            <a aria-label="Add Address" data-bs-toggle="modal"
                                                data-bs-target="#addAddressModal" class="btn btn-xs"><i
                                                    class="fi-rs-plus me-2 fs-6"></i>Add
                                                Address</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card mb-3 mb-lg-0">
                                                <div class="card-header">
                                                    <h3 class="mb-0">Billing Address</h3>
                                                </div>
                                                <div class="card-body">
                                                    @foreach ($addresses as $address)
                                                        @if ($address->addressType === 'billing')
                                                            <address>
                                                                {{ $address->name }}<br />
                                                                {{ $address->street }},
                                                            </address>
                                                            <p>{{ $address->phone }}</p>
                                                            <p>{{ $address->city }}</p>
                                                            <p>{{ $address->state }}</p>
                                                            <p>{{ $address->country }}, {{ $address->postal }}</p>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">Shipping Address</h3>
                                                </div>
                                                <div class="card-body">
                                                    @foreach ($addresses as $address)
                                                        @if ($address->addressType === 'shipping')
                                                            <address>
                                                                {{ $address->name }}<br />
                                                                {{ $address->street }},
                                                            </address>
                                                            <p>{{ $address->phone }}</p>
                                                            <p>{{ $address->city }}</p>
                                                            <p>{{ $address->state }}</p>
                                                            <p>{{ $address->country }}, {{ $address->postal }}</p>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-detail" role="tabpanel"
                                    aria-labelledby="account-detail-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Account Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('profile.update') }}" method="post" name="enq">
                                                @csrf
                                                @method('patch')
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Full Name <span class="required">*</span></label>
                                                        <input class="form-control" name="name" type="text"
                                                            value="{{ auth()->user()->name }}" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email Address <span class="required">*</span></label>
                                                        <input class="form-control" name="email" type="email"
                                                            value="{{ auth()->user()->email }}" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Mobile <span class="required">*</span></label>
                                                        <input class="form-control" name="phone" type="number"
                                                            value="{{ auth()->user()->phone }}" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit"
                                                            class="btn btn-fill-out submit font-weight-bold"
                                                            name="submit" value="Submit">Save Change</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Add Address Modal --}}
    <div class="modal fade custom-modal" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row mx-auto">
                        <h4 class="text-center mb-5">Add Address</h4>
                        <form action="{{ route('address.store') }}" method="post" class="mt-5">
                            @csrf
                            <div class="row">
                                <div class="custome-radio col-lg-6">
                                    <input class="form-check-input" required="" type="radio" name="addressType"
                                        id="exampleRadios3" value="billing">
                                    <label class="form-check-label" for="exampleRadios3">Billing Address</label>
                                </div>
                                <div class="custome-radio col-lg-6">
                                    <input class="form-check-input" required="" type="radio" name="addressType"
                                        id="exampleRadios4" value="shipping">
                                    <label class="form-check-label" for="exampleRadios4">Shipping Address</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" placeholder="Full name *">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="number" name="phone" placeholder="9876543210">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="street" placeholder="Address *">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" name="city" placeholder="City / Town *">
                                </div>
                            </div>
                            <div class="row shipping_calculator">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="postal" placeholder="Postcode / ZIP *">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" name="country" placeholder="India">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-fill-out btn-block mt-30">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
