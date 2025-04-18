<form action="{{ route('user.index') }}">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <div class="perpage">
                @php
                    $perpage = request('perpage') ?: old('perpage');  
                @endphp
                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                    <select name="perpage" class="form-control input-sm perpage filter mr10">
                        @for($i = 15; $i <= 90; $i+=15)
                        <option {{ $perpage == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }} bản ghi</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    @php
                        $publish = request('publish') ?: old('publish');
                    @endphp
                    <select name="publish" class="form-control mr10">
                        @foreach(config('apps.general.publish') as $key => $val)
                        <option {{ ($publish == $key)  ? 'selected' : '' }} value="{{ $key }}">{{ $val }}</option>
                        @endforeach
                    </select>
                    
                    {{-- Khi nào có thời gian thì làm thêm phần Nhóm Thành Viên hic hic ko biết kịp ko :( series 7 p25 --}}

                    {{-- 
                    @php
                        $user_catalogue_id = request('user_catalogue_id') ?: old('user_catalogue_id');
                    @endphp
                    <select name="user_catalogue_id" class="form-control mr10 setupSelect2">
                        <option value="0" selected="selected">Chọn Nhóm Thành Viên</option>
                        <option {{ ($user_catalogue_id == 1)  ? 'selected' : '' }} value="1">Quản trị viên</option>
                        <option {{ ($user_catalogue_id == 2)  ? 'selected' : '' }} value="2">Cộng trị viên</option>
                    </select> 
                    --}}
                    
                    <div class="uk-search uk-flex uk-flex-middle mr10">
                        <div class="input-group">
                            <input 
                                type="text"
                                name="keyword"
                                value="{{ request('keyword') ?: old('keyword') }}"
                                placeholder="Nhập từ khóa bạn muốn tìm kiếm..."
                                class="form-control"
                            >
                            <span class="input-group-btn">
                                <button type="submit" name="search" value="search"
                                class="btn btn-primary mb0 btn-sm">Tìm Kiếm
                                </button>
                            </span>
                        </div>
                    </div>
                    <a href="{{ route('user.create') }}" class="btn btn-danger"><i class="fa fa-plus mr5">Thêm
                        mới thành viên</i></a>
                </div>
            </div>
        </div>
    </div>
</form>