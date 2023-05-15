<div class="bg-white shadow-md rounded-md p-5">
    <h1 class="text-xl font-bold mb-4">Sales Report</h1>
    <p class="text-sm mb-2">Date Range: {{ $sale->created_at }} </p>
    <table class="table table-responsive">
        <thead>
        <tr>
            <th class="text-sm font-bold">Product</th>
            <th class="text-sm font-bold">Quantity</th>
            <th class="text-sm font-bold">Price</th>
            <th class="text-sm font-bold">Subtotal</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->pivot->quantity }}</td>
                <td>{{ $product->pivot->price }}</td>
                <td>{{ $product->pivot->quantity * $product->pivot->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <strong>${{ $sale->total_price }}</strong>
    </div>
</div>
