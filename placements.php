<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta charset="utf-8">
    	<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
		<link rel='stylesheet' href='bootstrap1.min.css'> 
<style>html,body,#myChart{height: 100%;width: 100%;}
p,div,label,.ion{
  font-size: 20px;
}
zing-grid[loading]{height:100%;}
#myChart2020 {
  height:200%;
  width:100%;
  min-height:300px;
}
#myChart2021 {
  height:50%;
  width:100%;
  min-height:300px;
}
.zc-ref {
  display:none;
}
zing-grid[loading]{height:100%;}

   
</style>
<style type="text/css">
table, th, td {
  border: 1px solid black;
  
}

table {
  border-collapse: collapse;
  
  width: 85%;
}

th {
  height: 50px;
}


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:nth-child(odd){background-color: #f2f2f2;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.top{
    		color: #ffffff;
    		text-decoration: none; 
    	}
</style>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",

  axisY:{
    includeZero: "True"
  },
    legend: {
    cursor:"pointer",
    itemclick: toggleDataSeries
  },
  data: [{    
      legendText: "DCT",
    color: "blue",
    showInLegend: true,     
    type: "line",
       name: "DCT :",                           //indexLabel: "{y}", //Shows y value on all Data Points

    dataPoints: [
      { x: 1,y: 7.50 },
      { x: 2,y: 8.35},
      {x: 3, y: 8.03 },
      { x: 4,y: 8.40},
      {x: 5, y: 7.71 },
      { x: 6,y: 8.57 },
      { x: 7,y: 8.60},
      { x: 8,y: 9.00}
  
    ]
  },
  {
  	    legendText: "Domain",
    color: "green",
    showInLegend: true, 
 type: "line",
           name: "Domain :",                       //indexLabel: "{y}", //Shows y value on all Data Points

    dataPoints: [
      { x: 1,y: 8.50 },
      { x: 2,y: 3.35},
      {x: 3, y: 6.03 },
      { x: 4,y: 5.40},
      {x: 5, y: 6.71 },
      { x: 6,y: 6.57 },
      { x: 7,y: 3.60},
      { x: 8,y: 8.00},
  
    ]



  },
  {
 type: "line",
   	    legendText: "Coding",
    color: "orange",
    showInLegend: true,                                 //indexLabel: "{y}", //Shows y value on all Data Points
name: "Coding :",

    dataPoints: [
      { x: 1,y: 6.50 },
      { x: 2,y: 4.35},
      {x: 3, y: 5.03 },
      { x: 4,y: 7.40},
      {x: 5, y: 3.71 },
      { x: 6,y: 4.57 },
      { x: 7,y: 5.60},
      { x: 8,y: 6.00},
  
    ]



  }]
});


var chart1 = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
 
  toolTip: {
    shared: true
  },
  legend: {
    cursor:"pointer",
    itemclick: toggleDataSeries
  },
  data: [{
    type: "column",
    name: "Individual Score :",
    legendText: "Individual Analysis",
    color: "#29629F",
    showInLegend: true, 
    dataPoints:[
      { label: "CRT1", y: <?php echo "{$k}"; ?> },
      { label: "CRT2", y: <?php echo "{$k2}"; ?> },
      { label: "CRT3", y: 45 },
      { label: "CRT4", y: 75 },
      { label: "CRT5", y: 75 },
      { label: "TT1", y: 80 },
      { label: "TT2", y: 75 },
      { label: "TT3", y: 36 },
      { label: "TT4", y: 70 },
      { label: "TT4", y: 90 }
    ]
  },
  {
    type: "column", 
    name: "Average Score :",
    legendText: "Average Analysis",
    color: "#a9a9a9",
    showInLegend: true,
    dataPoints:[
      { label: "CRT1", y: <?php echo "{$k1}"; ?> },
      { label: "CRT2", y: <?php echo "{$k3}"; ?> },
      { label: "CRT3", y: 65 },
      { label: "CRT4", y: 75 },
      { label: "CRT5", y: 55 },
      { label: "TT1", y: 85 },
      { label: "TT2", y: 75 },
      { label: "TT3", y: 45 },
      { label: "TT4", y: 85 },
      { label: "TT5", y: 35 }
    ]
  }]
});


function toggleDataSeries(e) {
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else {
    e.dataSeries.visible = true;
  }
  chart1.render();
}





chart.render();
chart1.render();

}
</script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="sidebar-collapse">
<div class="header1">
		<div class="container"  style="padding: 5px">
			<span class="col-lg-8">
				<span style="color: #ffffff; background-color: #cc0000; padding:5px;"><big><b>GITAM Bengaluru</b></big></span>
				<h1 style="color: #cc0000;">PLACEMENTS</h1>
			</span>
			<span class="col-lg-4">
				<img src="images/gitam.jpeg" width="200px">
			</span>	
		</div>	
		<div class="container2">
			<div class="col-lg-12" style="background-color: #cc0000; padding: 20px">
				<div class="col-lg-1"></div>
				<div class="col-lg-1"><a href="" class="top">Home</a></div>
				<div class="col-lg-1"><a href="" class="top">Logout</a></div>
			</div>
		</div>		
	</div>
	<div class="container2">
		<div class="col-lg-12"></div>




  


   
  
      <div class="container-fluid">
       
       
         




<section class="col-lg-12 connectedSortable">
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Placement Analysis
                </h3>
              </div>
              <br>
               <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            
              <div class="inner">
                <label for="" style="color: black">Total Number of Companies </label>
           <span id="MainContent_lblcampus" class="form-control" readonly="true">75</span>
            <br>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">

             <label for="" style="color: black">Percentage of people eligible </label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true">60</span>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
               <label for="" style="color: black">Number of Companies Attended</label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true">55</span>
        </div>
          </div>
          <!-- ./col -->
        </div>
    </div>
</section>
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            
              <div class="inner">
                <label for="" style="color: black">Number of students are able to Clear Written test</label>
           <span id="MainContent_lblcampus" class="form-control" readonly="true">15</span>
         <br>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
      
              <div class="inner">
               <label for="" style="color: black">Number of students are able to Clear GD</label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true">10</span>
        
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
                 <label for="" style="color: black">Number of students are able to Clear TR</label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true">5</span>
         
            </div>
          </div>

           <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
                 <label for="" style="color: blue;">Total Offers</label>
           <span id="MainContent_lblcampus" class="form-control" readonly="true">2</span>
        <br>
            </div>
          </div>
          <!-- ./col -->

        </div>

    </div>

</section>
</div>
</section>





            <!-- /.card -->
 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

<section class="col-lg-12 connectedSortable">
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Individual Drive Tracks
                </h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>Company logo</th>
                      <th>Company Name</th>
                      <th>CTC</th>
                      <th>Attendance</th>
                      <th>Written Test</th>
                      <th>Group Discussion</th>
                      <th>Tech Round</th>
                      <th>HR Round</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>10/06/2019</td>
                      <td><img src="images/logos/ihs.png" alt="ms image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-success">IHS Markit</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">4.5 LPA</div>
                      </td>
                      <td><?php  echo $row9['Attendance']; ?></td>
    <td><?php  echo $row3['WTC']; ?></td>
    <td><?php  echo $row3['GDC']; ?></td>
    <td><?php  echo $row3['T_HR_Clear']; ?></td>
    <td><?php  echo $row3['Offers']; ?></td>

                    </tr>
                   <tr>
                      <td>20/07/2019</td>
                      <td><img src="images/logos/hashedin.jpg" alt="amazon image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-danger">Hashed IN</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">7 LPA</div>
                      </td>
                      <td><?php  echo $row2['WTA']; ?></td>
    <td><?php  echo $row2['WTC']; ?></td>
    <td><?php  echo $row2['GD']; ?></td>
    <td><?php  echo $row2['TR1A']; ?></td>
    <td><?php  echo $row2['TRC']; ?></td>

                    </tr>
                    <tr>
                      <td>31/07/2019</td>
                     <td><img src="images/logos/musigma.png" alt="google image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-success">Mu-Sigma</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">7 LPA</div>
                      </td>
                      <td>Y</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>

                    </tr>
                   <tr>
                      <td>18/07/2019</td>
                      <td><img src="images/logos/tcs.jpg" alt="ibm image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-success">TCS Digital</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">7 LPA</div>
                      </td>
                     <td><?php  echo $row4['WTA']; ?></td>
    <td><?php  echo $row4['WTC']; ?></td>
    <td><?php  echo $row4['GD']; ?></td>
    <td><?php  echo $row4['TIC']; ?></td>
    <td><?php  echo $row4['TIC']; ?></td>
                    </tr>
                    <tr>
                      <td>23/07/2019</td>
                       <td><img src="images/logos/nineleaps.png" alt="netflix image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-success">Nine Leaps</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">4.5 LPA</div>
                      </td>
                      <td><?php  echo $row6['Attended']; ?></td>
    <td><?php  echo $row6['WTC']; ?></td>
    <td><?php  echo $row6['ARC']; ?></td>
    <td><?php  echo $row6['TC']; ?></td>
    <td><?php  echo $row6['HRC']; ?></td>

                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>

</section>
</html>
