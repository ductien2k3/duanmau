<div class="row2">
    <div class="row2 font_title">
    <h1>Biểu đồ</h1>
    </div>
    <div class="row2 form_content ">
    <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center"></div>
      
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

// Set Data
        const data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số Lượng'],
            <?php
            $tongdm =count($listtk);
            $i =1;
            foreach($listtk as $tk){
                extract($tk);
                if($i == $tongdm){
                    $dauphay = "";
                } else {
                    $dauphay = ",";
                }
                echo "['$tendm', $count],";
                $i++;

                }
            
            ?>
        ]);

// Set Options
          const options = {
            title:'Thống kê sản phẩm theo danh sách',
            is3D:true
          };

// Draw
          const chart = new google.visualization.PieChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
      </script>

    </div>
  </div>