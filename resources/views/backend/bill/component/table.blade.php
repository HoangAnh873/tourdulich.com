<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                <input type="checkbox" value="" id="checkAll" class="input-checkbox">
            </th>
            <th>Tên khách</th>
            <th>Email</th>
            <th>Tên tour</th>
            <th>Giá tour</th>
            <th class="text-center">Đã thanh toán</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($bills) && is_object($bills))
            @foreach($bills as $bill)
            <tr>
                <td>
                    <input type="checkbox" value="{{ $bill->id }}" class="input-checkbox checkBoxItem">
                </td>
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