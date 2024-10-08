@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@php
    $url = ($config['method'] == 'create') ? route('tour.store') : route('tour.update', $tour->id);
@endphp
<form action="{{ $url }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin tour mới</div>
                    <div class="panel-description">
                        <p>-Nhập thông tin của tour</p>
                        <p>-Lưu ý: Những phần đánh dấu <span class="text-danger">*</span>
                        là bắt buộc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Tên Tour
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="text"
                                        name="name"
                                        value="{{ old('name', ($tour->name) ?? '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Mô tả
                                    </label>
                                    <input 
                                        type="text"
                                        name="description"
                                        value="{{ old('description', ($tour->description) ?? '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ngày bắt đầu
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="date"
                                        name="start_date"
                                        value="{{ old('start_date', (isset($tour->start_date)) ? date('Y-m-d', strtotime($tour->start_date)) : '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ngày kết thúc
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="date"
                                        name="end_date"
                                        value="{{ old('end_date', (isset($tour->end_date)) ? date('Y-m-d', strtotime($tour->end_date)) : '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Giá tour
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="numeric"
                                        name="price"
                                        value="{{ old('price', ($tour->price) ?? '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">hình ảnh
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="text"
                                        name="img"
                                        value="{{ old('img', ($tour->img) ?? '') }}"
                                        class="form-control upload-image"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu</button>
        </div>
    </div>
</form>