<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasboard</title>
    <link rel="stylesheet" href="styles.css">
    </head>
<body>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    </div>

<div class="triple1">
    <section class="card_container">
    <p class="list-group-item1">profit</p>
    <p class="list-group-item2">+14% since last week</p>
    <p class="list-group-item3">$ 12,000</p>
</div>
   
</div>



<div class="triple2">
    <section class="line_header">
    <h1>analytical ai<h1>
    </section>
    <section class="line_body">
    <canvas id="lineChart" width="850" height="550"></canvas>
        </div>

<div class="triple3">
    <section class="bar_header">
    <h1>Sales report<h1>
    </section>
    <section class="bar_body">
    <canvas id="myChart" width="1000" height="550"></canvas>
    </div>

<div class="container-table">
    <section class="table_header">
    <h1>Invoices<h1>          
    </section>
    <section class="table_body">
    <table>
    <thead>
    <tr>
    <th> customer name</th>
    <th> date</th>
    <th> amount </th>
    <th> product id</th>
    <th> status</th>
    <th> option</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td><img src="image/pic.jpeg" alt="">varon</td>
    <td>feb 22,2002</td>
    <td><strong>123</strong></td>
    <td>1234</td>
    <td>
    <p class="status paid">paid</td>
    <td><p class="more">more</td>
    </tr>
    <tr>
    <td><img src="image/pic.jpeg" alt="">andrew</td>
    <td>feb 23,2002</td>
    <td><strong>123</strong></td>
    <td>12345</td>
    <td><p class="status unpaid">unpaid</td>
     <td><p class="more">more</td>
    </tr>
    <tr>
    <td><img src="image/pic.jpeg" alt="">hotdogkomalaki</td>
    <td>feb 23,2002</td>
    <td><strong>123</strong></td>
    <td>12342</td>
    <td>
    <p class="status paid">paid</td>
    <td><p class="more">more</td>
    </tr>
    <tr>
    <td><img src="image/pic.jpeg" alt="">paul</td>
    <td>feb 25,2002</td>
    <td><strong>123</strong></td>
    <td>1212334</td>
    <td><p class="status unpaid">unpaid</td>
    <td><p class="more">more</td>
    </tr>
    </tbody>
    </table>
    </section>
    </div>

<div class=chart_table >    
    <section class="chart_header">
    <h1>Activity<h1>
    </section>
    <section class="chart_body">
    <div class="programming-stats">
    <div class="chart-container"> 
     <canvas class="my-chart"></canvas>
    </div>  
    <div class="details">
    <ul></ul>
    </div>
    </section>
    </div>
    </div>
      
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
<script src="chart.js"></script>
<script src="line.js"></script>
  
</html>