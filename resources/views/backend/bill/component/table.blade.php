<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tên khách</th>
            <th>Email</th>
            <th>Tên tour</th>
            <th>Giá tour</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($bills) && is_object($bills))
            @foreach($bills as $bill)
            <tr>
                <td>
                    {{ $bill->customer_name }}
                </td>
                <td>
                    {{ $bill->email }}
                </td>
                <td>
                    {{ $bill->tour_name }}
                </td>
                <td>
                    {{ $bill->price }}
                </td>
        
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $bills->links('pagination::bootstrap-4') }}