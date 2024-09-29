<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                <input type="checkbox" value="" id="checkAll" class="input-checkbox">
            </th>
            <th>Tên tour</th>
            <th>mô tả</th>
            <th>ngày bắt đầu</th>
            <th>ngày kết thúc</th>
            <th>giá tour</th>
            <th class="text-center">Trạng Thái</th>
            <th class="text-center">Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($tours) && is_object($tours))
            @foreach($tours as $tour)
            <tr>
                <td>
                    <input type="checkbox" value="{{ $tour->id }}" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    {{ $tour->name }}
                </td>
                <td>
                    {{ $tour->description }}
                </td>
                <td>
                    {{ $tour->start_date }}
                </td>
                <td>
                    {{ $tour->end_date }}
                </td>
                <td>
                    {{ $tour->price }}
                </td>
                <td class="text-center js-switch-{{ $tour->id }}">  
                    <input type="checkbox" value="{{ $tour->publish }}" class="js-switch
                    status" data-field="publish" data-model="Tour" {{  ($tour->publish == 
                    2) ? 'checked' : ''}} data-modelId="{{ $tour->id }}"  />
                    
                </td>
                <td class="text-center">  
                    <a href="{{ route('tour.edit', $tour->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('tour.delete', $tour->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $tours->links('pagination::bootstrap-4') }}