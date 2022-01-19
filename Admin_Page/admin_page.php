<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src = "/Fusion-Matrix/Server/request.js"> </script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-1 col-md-4 col-lg-3 col-xl-2">
      <a class="btn" id="sideMenu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        ☰
      </a>
    </div>
    <div class="col-10 col-sm-12 col-md-4 col-lg-6 col-xl-8">
      <h2 style="width: max-content;">Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    </div>
    <div class="col-2 col-sm-12 col-md-4 col-lg-3 col-xl-2">
      <p id="date" style="font-size: 1.5vw; width: max-content;"></p>
    </div>
  </div>
</div>
      <div id="sidebar">
        
      </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 icon rounded-pill">
          <img src="room.jpeg" alt="">
          <h5 class="mb-0" style="width:max-content;">Rooms Avaliable</h5><span class="text-gray-500">100</span>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 icon rounded-pill">
          <img src="room.jpeg" alt="">
          <h5 class="mb-0" style="width:max-content;">Currently Checked-In</h5><span class="text-gray-500">10</span>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 icon rounded-pill">
          <img src="room.jpeg" alt="">
          <h5 class="mb-0" style="width:max-content;">Customer Visited</h5><span class="text-gray-500">10</span>
        </div>
      </div>
    </div>

    <!-- <div class="line-container">
      <canvas id="line"></canvas>
    </div>
    <div class="donut-container">
      <canvas id="donut"></canvas>
    </div> -->

    <!-- <div class="line-container">
      <canvas id="line"></canvas>
    </div>
    <div class="donut-container">
      <canvas id="donut"></canvas>
    </div> -->


    <script>
        //If requests are cached and we update the sidebar.html file, it won't get updated in our website
        $.ajaxSetup({
            cache: false
        })

      const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      const y = new Date().getFullYear();
      let m = months[new Date().getMonth()];
      const d = new Date().getDate();
      document.getElementById("date").innerText = d + " " + m + " " + y;

      let drop = ['.customer', '.staff', '.room', '.booking', '.ecommerce'];
      let dropSpan = ['.cus', '.sta', '.roo', '.boo', '.eco']
      for(let i=0;i<5;i++){
        function dropdown(i){
      document.querySelector(drop[i]).classList.toggle("show");
      document.querySelector(dropSpan[i]).classList.toggle("bi-caret-left");
    }
    }

    $(document).ready(function () {
        $('#sidebar').load('/Fusion-Matrix/Admin_Page/sidebar.html');
    });

    // Area Chart Code
    (async() => {
        let lineLabels = []
        let amounts = new Array(12);
        for(let i = 0; i < 12; i++)
        {
            lineLabels.push(months[i]);
            await getInvoicesOfMonth(Number(i)+1, y).then((invoices) => {
                let sum = 0;
                for(let i = 0; ; i++)
                    if(i in invoices)
                        sum += Number(invoices[i]['amount']);
                    else
                        break;
                amounts[i] = sum;
            });
        }
        const lineData = {
            labels: lineLabels,
            datasets: [{
            label: 'Revenue Dataset',
            data: amounts,
            backgroundColor: '#fa871b',
            fill: true,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
            }]
            };
            const line = {
                type: 'line',
                data: lineData,
                options: {}
                };
        lineChart = new Chart(document.getElementById('line'), line);
     })();

      //Donut Chart Code
      const donutLabels = [
        'January',
        'February',
        'March',
      ];
    
      const donutData = {
        labels: donutLabels,
        datasets: [{
          label: 'My First Dataset',
          backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
          ],
          borderColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
          ],
          data: [1, 10, 5],
          hoverOffset: 20
        }]
      };
      const donut = {
        type: 'doughnut',
        data: donutData,
        options: {}
      };
      const donutChart = new Chart(
    document.getElementById('donut'),
    donut
  );
    </script>
</body>
</html>