@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['delete']['title']])

<form action=" {{ route('order.destroy', $order->id) }} " method="post" class="box">
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
                                    <label for="" class="control-label text-left">Tên khách đặt
                                    </label>
                                    <input 
                                        type="text"
                                        name="customer_name"
                                        value="{{ old('customer_name', ($order->customers->name) ?? '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        readonly
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ngày đặt
                                    </label>
                                    <input 
                                        type="date"
                                        name="order_date"
                                        value="{{ old('order_date', ($order->order_date) ?? '') }}"
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