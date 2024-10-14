<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tên khách</th>
            <th>Email</th>
            <th>Tên tour</th>
            <th>Giá tour</th>
            <th>Ngày lập</th>
            <th>Đã Thanh Toán</th>
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
                <td>
                    {{ $bill->invoice_date }}
                </td>
                <td class="text-center js-switch-{{ $bill->id }}">  
                    <input type="checkbox" value="{{ $bill->publish }}" class="js-switch
                    status" data-field="publish" data-model="Bill" {{  ($bill->publish == 
                    2) ? 'checked' : ''}} data-modelId="{{ $bill->id }}"  />
                </td>
        
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $bills->links('pagination::bootstrap-4') }}