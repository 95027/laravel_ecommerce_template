@extends('admin.layout.master')
@section('content')
    <button onclick="razorpayHandler()">pay now</button>

    <form action="{{ route('razorpay.refund') }}" method="POST">
        @csrf

        <button type="submit">refund now</button>
    </form>
@endsection

@section('script')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        async function razorpayHandler() {
            try {
                const response = await fetch('{{ route('razorpay.payment') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        amount: 5
                    }),
                });

                const data = await response.json();

                const options = {
                    key: '{{ env('RAZORPAY_KEY') }}',
                    amount: data.amount,
                    currency: data.currency,
                    order_id: data.order_id,
                    handler: async function(res) {
                        try {
                            console.log(res)
                            const success = await fetch(
                                '{{ route('razorpay.success') }}', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    },
                                    body: JSON.stringify({
                                        razorpay_payment_id: res.razorpay_payment_id,
                                        razorpay_order_id: res.razorpay_order_id,
                                        razorpay_signature: res.razorpay_signature,
                                    }),
                                });

                            const result = await success.json();

                            if (result.success) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Payment Successful!',
                                    icon: 'success',
                                    timer: 3000,
                                });
                            } else {
                                alert('Payment Verification Failed!');
                            }
                        } catch (error) {
                            console.error('Error during payment verification:', error);
                            alert('Error during payment verification.');
                        }
                    },
                    prefill: {
                        name: "Customer Name",
                        email: "customer@example.com",
                        contact: "9999999999"
                    }
                };
                const rzp1 = new Razorpay(options);
                rzp1.open();

            } catch (error) {
                console.error('Error initiating payment:', error);
                alert('Error initiating payment.');
            }
        }
    </script>
@endsection
