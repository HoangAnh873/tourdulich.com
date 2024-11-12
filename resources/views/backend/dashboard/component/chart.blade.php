
    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Biểu đồ tăng trưởng theo từng tháng</h5>
                <div class="pull-right">
                    {{-- <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-white active">Buổi đồ năm</button>
                        <button type="button" class="btn btn-xs btn-white">Tháng hiện tại</button>
                        <button type="button" class="btn btn-xs btn-white">7 ngày gần nhất</button>
                    </div> --}}
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-dashboard-chart">
                                <canvas id="myChart"></canvas>
                                {{-- Biểu đồ tăng trưởng theo tháng --}}
                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                <script>
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar', // Hoặc 'line' tùy theo loại biểu đồ bạn muốn
                                        data: {
                                            labels: <?php echo json_encode( $billStatistic['chartMonth'] ); ?>,
                                            datasets: [{
                                                label: 'Số lượng phiếu đặt tour',
                                                data: <?php echo json_encode( $billStatistic['chartValue'] ); ?>,
                                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                                borderColor: 'rgba(54, 162, 235, 1)',
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true   
                                            
                                                }
                                            }
                                        }
                                    });
                                </script>    
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
