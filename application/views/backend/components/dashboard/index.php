<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<?php
$d = getdate();
$year = $d['year'];
$total = 0;
$cost = 0;
for ($i = 1; $i <= 12; $i++) {
    $list_orrders = $this->Morders->order_follow_month($year, $i);
    $sum = 0;
    foreach ($list_orrders as $row_orrder) {
        $order_detail = $this->Morderdetail->orderdetail_orderid($row_orrder['id']);
        foreach ($order_detail as $value) {
            $sum += $value['count'];
        }
        $total += $row_orrder['money'];
    }
}
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="color:red; font-size:20px; font-weight:700">
            <i class="icon-plus"></i> Statistical
        </div>
        <div class="card-body">


            <!-- Content Row -->
            <div class="row">




                <!-- User Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text font-weight-bold text-warning text-uppercase mb-1">
                                        List of products (<?php echo $total1; ?>) </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="<?php echo base_url() ?>admin/product" class="btn btn-sm btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Doanh thu tháng -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                        List of posts (<?php echo $total2; ?>) </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="<?php echo base_url() ?>admin/content" class="btn btn-sm btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Doanh thu năm-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text font-weight-bold text-success text-uppercase mb-1">
                                        List of users (<?php echo $total3; ?>)</div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="<?php echo base_url() ?>admin/customer" class="btn btn-sm btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Category Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text font-weight-bold text-info text-uppercase mb-1">
                                        List of orders (<?php echo $total4; ?>)
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="<?php echo base_url() ?>admin/orders" class="btn btn-sm btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </div>
    <!-- Content Row -->
    <section class="content">
        <div class="row">
            <!-- /.col (LEFT) -->
            <div class="col-md-12">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" style="font-size:20px">Sales and Revenue</h6>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <div id="chart_div" style="width: 100%; height: 500px;"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="m-0 font-weight-bold " style="font-size:20px; color:red">Total revenue : <?php echo number_format($total); ?> VNĐ</div>
                            <div class="row" style="padding-top:30px">
                                <?php
                                $d = getdate();
                                $year = $d['year'];
                                for ($i = 1; $i <= 12; $i++) {
                                    $list_orrders = $this->Morders->order_follow_month($year, $i);
                                    $total_month = 0;
                                    foreach ($list_orrders as $row_orrder) {
                                        $total_month += $row_orrder['money'];
                                    }
                                    echo '<div class="col-xl-4 col-md-6 mb-4">
                <div  style="display: inline-flex;padding-left:60px">
                  <span >Revenue month  '  . $i . ' : </span> <span style="color:red" ;>&ensp; ' . number_format($total_month) . ' VND</span>
                </div>
               
              </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>


                    <!-- /.box-body -->
                </div>
            </div>
    </section>
</div>


<!-- /.content-wrapper -->
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Sold out ', 'Order '],
            <?php
            $d = getdate();
            $year = $d['year'];
            for ($i = 1; $i <= 12; $i++) {
                $list_orrders = $this->Morders->order_follow_month($year, $i);
                $sum = 0;
                foreach ($list_orrders as $row_orrder) {
                    $order_detail = $this->Morderdetail->orderdetail_orderid($row_orrder['id']);
                    foreach ($order_detail as $value) {
                        $sum += $value['count'];
                    }
                }
                if ($i >= 1 && $i <= 9) {
                    echo "['0" . $i . '/' . $year . "'," . $sum . "," . count($list_orrders) . "],";
                } else {
                    echo "['" . $i . '/' . $year . "'," . $sum . "," . count($list_orrders) . "],";
                }
            }
            ?>

        ]);

        var options = {
            title: 'Quantity sold from 01/2021 - 12/2021',
            seriesType: 'bars'
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>