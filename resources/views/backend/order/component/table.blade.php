<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tên khách</th>
            <th>Email</th>
            <th>Tên tour</th>
            <th>Ngày đặt</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết Thúc</th>
            <th class="text-center">Đợi Duyệt</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($orders) && is_object($orders))
            @foreach($orders as $order)
            <tr>
                <td>
                    {{ $order->customer_name }}
                </td>
                <td>
                    {{ $order->email }}
                </td>
                <td>
                    {{ $order->tour_name }}
                </td>
                <td>
                    {{ $order->order_date }}
                </td>
                <<td>
                    {{ $order->tours->start_date }}
                </td>
                <td>
                    {{ $order->tours->end_date }}
                </td>
                <td class="text-center">  
                    <a href="{{ route('order.accept', $order->id) }}" class="btn btn-warning">Duyệt</a>
                    <a href="{{ route('order.delete', $order->id) }}" class="btn btn-danger">hủy</i></a>
                </td>
        
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $orders->links('pagination::bootstrap-4') }}