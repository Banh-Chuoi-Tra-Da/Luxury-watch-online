<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 360px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }
    </style>
</head>

<body>
    <?php
    // Ket noi CSDL
    require('connect.php');
    $max_date = 30;
    $sql = "SELECT DATE_FORMAT(ngay_hoa_don,'%e-%m') as 'ngay',
     sum(tong_tien) as'doanh_thu' FROM `tbl_hoa_don`
     WHERE DATE(ngay_hoa_don)>=CURDATE() - INTERVAL $max_date DAY
     GROUP BY DATE_FORMAT(ngay_hoa_don,'%e-%m')";
    // die($sql);
    $result = mysqli_query($con, $sql);
    // die($sql);
    $arr = [];
    $today = date('d');
    if ($today < $max_date) {
        $get_day_last_month = $max_date - $today;
        $last_month = date('m', strtotime("-1 month"));
        $last_month_date = date('Y-m-d', strtotime("-1 month"));
        $max_day_last_month = (new DateTime($last_month_date))->format('t');
        $start_day_last_month = $max_day_last_month - $get_day_last_month;
        for ($i = $start_day_last_month; $i <= $max_day_last_month; $i++) {
            $key = $i . '-' . $last_month;
            $arr[$key] = 0;
        }
        $start_day_this_month = 1;
    } else {
        $start_day_this_month = $today - $max_date;
    }
    $this_month = date('m');
    for ($i = $start_day_this_month; $i < $today; $i++) {
        $key = $i . '-' . $last_month;
        $arr[$key] = 0;
    }
    foreach ($result as $each) {
        $arr[$each['ngay']] = (float)$each['doanh_thu'];
    }
    $arrX = array_keys($arr);
    $arrY = array_values($arr);
    // Ket noi CSDL
    ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <!-- <p class="highcharts-description">
        Basic line chart showing trends in a dataset. This chart includes the
        <code>series-label</code> module, which adds a label to each line for
        enhanced readability.
    </p> -->
    </figure>
    <script>
        Highcharts.chart('container', {

            title: {
                text: 'Thống kê doanh thu 30 ngày gần nhất'
            },

            // subtitle: {
            //     text: 'Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>'
            // },

            yAxis: {
                title: {
                    text: ''
                }
            },

            xAxis: {
                categories: <?php echo json_encode($arrX) ?>
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },

                }
            },

            series: [{
                name: 'Doanh thu',
                data: <?php echo json_encode($arrY) ?>
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 700
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>
</body>

</html>