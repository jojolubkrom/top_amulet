<x-admin-layout>

    <!-- Page Heading -->
    <div class="flex w-[1200px]">
        <!-- Page Heading -->
        <div class="flex justify-between py-5 w-[851px]">
            <div class="flex flex-col justify-center">
                <h1 class="text-4xl font-bold text-center">
                    ภาพรวมร้านค้า
                </h1>
            </div>

            <!-- Search -->
            <div class="flex flex-col justify-center z-10">
                <form action="#" method="get">
                    <select name="" id="" class="h-[41px] w-[166px] text-sm border-0 rounded-lg">
                        <option value="">30 วันล่าสุด</option>
                        <option value="">30 วันล่าสุด</option>
                        <option value="">30 วันล่าสุด</option>
                    </select>
                </form>
            </div>

        </div>

        <!-- Page Content -->
        <div
            class="absolute justify-between items-center top-5 py-5 w-[27%] bg-white right-0 rounded-lg drop-shadow-[4px_4px_4px_rgba(0,0,0,0.20)]">
            <div class="flex flex-col justify-center mx-2">
                <h1 class="text-2xl font-bold">
                    ความนิยม
                </h1>
                <h1 class="flex items-end text-2xl font-bold my-3">
                    1000 &nbsp
                    <p class="text-base font-medium bottom-0">การเข้าชม/ วัน</p>
                </h1>
                <h5 class="text-[12px] font-bold">
                    มากกว่าเดือนที่แล้ว : 85%
                </h5>
            </div>
        </div>
        <!-- Card -->

    </div>

    <!-- Statistics -->
    <div class="flex justify-between py-5 w-[851px]">
        <div class="w-full">
            <div class="flex justify-between items-center">

                <!-- Sales -->
                <div class="w-1/4 bg-white py-2 rounded-lg drop-shadow-[4px_4px_4px_rgba(0,0,0,0.20)]">
                    <h2 class="text-3xl font-semibold flex mb-9 ml-3">ยอดขาย</h2>
                    <p class="text-xl ml-28">123 ฿</p>
                </div>

                <!-- Average -->
                <div class="w-1/4 ml-5 bg-white py-2 rounded-lg drop-shadow-[4px_4px_4px_rgba(0,0,0,0.20)]">
                    <h2 class="text-3xl font-semibold flex mb-9 ml-3">เฉลี่ย</h2>
                    <p class="text-xl ml-28">123 ฿</p>
                </div>

                <!-- Visits -->
                <div class="w-1/4 ml-5 bg-white py-2 rounded-lg drop-shadow-[4px_4px_4px_rgba(0,0,0,0.20)]">
                    <h2 class="text-3xl font-semibold flex mb-9 ml-3">การเข้าชม</h2>
                    <p class="text-xl ml-20">123 คน/วัน</p>
                </div>

                <!-- Followers -->
                <div class="w-1/4 ml-5 bg-white py-2 rounded-lg drop-shadow-[4px_4px_4px_rgba(0,0,0,0.20)]">
                    <h2 class="text-3xl font-semibold flex mb-9 ml-3">ผู้ติดตาม</h2>
                    <p class="text-xl ml-28">123 คน</p>
                </div>

            </div>
        </div>


    </div>

    <!-- Graph -->
    <div class="w-[851px]">
        <div class="flex justify-between items-center">
            <div class="h-1/5 z-10 bg-white py-2 rounded-lg drop-shadow-[4px_4px_4px_rgba(0,0,0,0.20)]">
                <div id="piechart"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work', 8],
          ['Friends', 2],
          ['Eat', 2],
          ['TV', 2],
          ['Gym', 2],
          ['Sleep', 8]
        ]);
        
          // Optional; add a title and set the width and height of the chart
          var options = {'title':'ยอดขาย', 'width':850, 'height':400};
        
          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
        </script>
</x-admin-layout>
