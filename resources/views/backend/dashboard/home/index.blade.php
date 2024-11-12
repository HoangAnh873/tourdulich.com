<div class="wrapper wrapper-content">
    @include('backend.dashboard.component.statistic')

    <div class="row">
        {{-- phần biểu đồ --}}
        @include('backend.dashboard.component.chart' )
        {{-- phần tin nhắn chờ --}}
        @include('backend.dashboard.component.message' )
    </div>
</div>