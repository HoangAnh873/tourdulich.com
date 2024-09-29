@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])

<form action=" {{ route('tour.destroy', $tour->id) }} " method="post" class="box">
    @csrf
    @method('DELETE')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin tour</div>
                    <div class="panel-description">
                        <p>-Bạn đang muốn xóa tour</p>
                        <p>-Lưu ý: Xóa xong sẽ không thể hoàn tác</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Tên tour
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="text"
                                        name="name"
                                        value="{{ old('name', ($tour->name) ?? '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        readonly
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
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
                                        readonly
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mb15">
            <button class="btn btn-danger" type="submit" name="send" value="send">Xóa</button>
        </div>
    </div>
</form>