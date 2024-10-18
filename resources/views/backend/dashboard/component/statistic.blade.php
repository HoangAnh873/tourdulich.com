<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right">Tháng {{  now()->month }}</span>
                <h5>PHIẾU ĐÃ DUYỆT</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $billStatistic['billCurrentMonth'] }}</h1>
                {!! $billStatistic['growHtml'] !!}
                <small>Tăng trưởng </small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">đợi duyệt</span>
                <h5>PHIẾU ĐỢI DUYỆT</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $orderStatistic['totalOrders'] }}</h1>
                {{-- <div class="stat-percent font-bold text-danger">10% <i class="fa fa-level-down"></i></div> --}}
                <small>Số phiếu đợi duyệt</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">Total</span>
                <h5>TỔNG DOANH THU</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $billStatistic['revenueBills'] }}VNĐ</h1>
                <small>Tổng doanh thu</small>  
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">Customer</span>
                <h5>TỔNG SỐ KHÁCH</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $billStatistic['customerQuantity'] }}</h1>
                <small>Tổng số khách</small>
            </div>
        </div>
    </div>
</div>