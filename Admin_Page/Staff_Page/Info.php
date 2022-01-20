<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="info.css">
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
      <p style="margin-top: 7px;"><a href="/Fusion-Matrix/Admin_Page/admin_page.php">Dashboard</a>/ Staff-info</p>
    </div>
    <div class="col-10 col-sm-12 col-md-4 col-lg-6 col-xl-8">
      <h2 style="width: max-content;">Staff Info</h2>
    </div>
    <div class="col-2 col-sm-12 col-md-4 col-lg-3 col-xl-2">
      <p id="date" style="font-size: 1.5vw; width: max-content;"></p>
    </div>
  </div>
</div>
      <div id="sidebar">
       </div>


      <div class="container" id="staff_container">
        <div class="row" id="row1">
            
        </div>
      </div>

      <script>
          $.ajaxSetup({
              cache: false
          })

          var staffHTML = `<img class="js-s_profile_img" src="avatar.jpeg" alt="">
            <h5 class="mb-0 js-s_firstname" style="width:max-content;">Name</h5>
            <p class="js-staff_type">Designation</p>
            <hr>
            <ul class="employee">
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg>Employee-Id</li>
                  <li class="adjust js-staff_id">XYZ-123</li>
                  <br>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>Phone No.</li>
                  <li class="adjust js-s_phone_no">+91 9999999999</li>
                  <br>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>Email Address</li>
                  <li class="adjust js-s_email_id">xyz@email.address</li>
                  <br>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>Department</li>
                  <li class="adjust js-staff_type">Cook</li>
                  <br>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                  </svg>Date of Joining</li>
                  <li class="adjust js-date">01-01-2022</li>
            </ul>`;

          let numberOfStaff = 0;

          function insertStaff(staff_details) {
              let div = document.createElement('div');
              div.innerHTML = staffHTML.trim();
              div.className = "col-12 col-sm-6 col-md-4 col-lg-4 icon";

              for (detail in staff_details) {
                  element = div.getElementsByClassName('js-' + detail)[0];
                  if (element != null) {
                      if (element.tagName == 'IMG' && staff_details[detail] != "") {
                          element.setAttribute('src', staff_details[detail]);
                      }
                      element.innerHTML = staff_details[detail];
                  }
              }

              document.getElementById('row1').appendChild(div);
          }

          (async () => {
              getAllStaffInformation().then(function (data) {
                  for (staffInfo of data['staff_information']) {
                      insertStaff(staffInfo);
                  }
              });
          })();

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

    // Quick Table Search
        $('#search_name, #search_designation, #search_department').keyup(function() {
          var regex_name = new RegExp($('#search_name').val(), "i");
		  var regex_designation = new RegExp($('#search_designation').val(), "i");
		  var regex_department = new RegExp($('#search_department').val(), "i");
          var rows = $('table tr:gt(0)');
          rows.each(function (index) {
            console.log("Hey")
            name = $(this).children("#name").html()
            designation = $(this).children('#designation').html();
            department = $(this).children('#department').html();
            if (name.search(regex_name) != -1 && designation.search(regex_designation) != -1 && department.search(regex_designation) != -1) {
              $(this).show();
            } else {
              $(this).hide();
            }
          });
        });
	});
      </script>
</body>
</html>