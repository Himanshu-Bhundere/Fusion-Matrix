<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="room.css">
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
            <p style="margin: 7px 0 1rem -34px;"><a href="/Fusion-Matrix/Admin_Page/admin_page.php">Dashboard</a>/ Room-Available</p>
          </div>
          <div class="col-10 col-sm-12 col-md-4 col-lg-6 col-xl-8">
            <h2 style="width: max-content;">Room Avaliablility</h2>
          </div>
          <div class="col-2 col-sm-12 col-md-4 col-lg-3 col-xl-2">
            <p id="date" style="font-size: 1.2vw; width: max-content;"></p>
          </div>
        </div>
      </div>
            <div id="sidebar">
              <header style="color: #adb5bd;">Menu</header>
              <ul>
                <a href="/Fusion-Matrix/Admin_Page/admin_page.php"><li class="opacity"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>Home</li></a>
                <a href="#" onclick="dropdown(0)"><li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                </svg>Customer</li><i class="bi bi-caret-down cus"></i></a>
                <ul class="customer">
                <a href=""><li>Information</li></a>
                <a href=""><li>Complaints/Request</li></a></ul>
                <a href="#" onclick="dropdown(1)"><li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>Staff</li><i class="bi bi-caret-down sta"></i></a>
                <ul class="staff">
                <a href="/Fusion-Matrix/Admin_Page/Staff_Page/Add.php"><li>Staff Registration</li></a>
                <a href="/Fusion-Matrix/Admin_Page/Staff_Page/Remove.php"><li>Staff Removal</li></a>
                <a href="/Fusion-Matrix/Admin_Page/Staff_Page/Info.php"><li>Information/Records</li></a></ul>
      
                <a href="#" onclick="dropdown(2)"><li><img src="../room.jpg" alt="">Room</li><i class="bi bi-caret-down roo"></i></a>
                <a href="" class="room"><li>Avaliablility</li></a>
      
                <a href="#" onclick="dropdown(3)"><li><img src="../bill.png" alt="" style="margin-left: -2%;">Billing/Booking</li><i class="bi bi-caret-down boo"></i></a>
                <ul class="booking">
                <a href="/Fusion-Matrix/Admin_Page/Booking_Page/registration_form.php"><li>Customer Registration</li></a>
                <a href=""><li>Customer Invoice</li></a>
                <a href=""><li>Booking Cancellation</li></a></ul>
      
                <a href="#" onclick="dropdown(4)"><li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>E-Commerce</li><i class="bi bi-caret-down eco"></i></a>
                <ul class="ecommerce">
                <a href=""><li>Cash Inflow/Outflow</li></a>
                <a href=""><li>Financial Charts</li></a></ul>
      
                <a href=""><li><img src="../log out.png" onclick="logout().then(log)" alt="">Log out</li></a>
              </ul>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
              <div class="offcanvas-header">
                <h6 class="offcanvas-title" id="offcanvasExampleLabel" style="color: #adb5bd;">Menu</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body sidebar">
                <ul>
                  <a href="admin_page.php"><li class="opacity"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg>Home</li></a>
                  <a href="#" onclick="dropdown(0)"><li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                  </svg>Customer</li><i class="bi bi-caret-down cus"></i></a>
                  <ul class="customer">
                  <a href=""><li>Information</li></a>
                  <a href=""><li>Complaints/Request</li></a></ul>
        
                  <a href="#" onclick="dropdown(1)"><li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>Staff</li><i class="bi bi-caret-down sta"></i></a>
                  <ul class="staff">
                  <a href="/Fusion-Matrix/Admin_Page/Staff_Page/Add.php"><li>Staff Registration</li></a>
                  <a href="/Fusion-Matrix/Admin_Page/Staff_Page/Remove.php"><li>Staff Removal</li></a>
                  <a href="/Fusion-Matrix/Admin_Page/Staff_Page/Info.html"><li>Information/Records</li></a></ul>
        
                  <a href="#" onclick="dropdown(2)"><li><img src="../room.jpg" alt="">Room</li><i class="bi bi-caret-down roo"></i></a>
                  <a href="" class="room"><li>Avaliablility</li></a>
        
                  <a href="#" onclick="dropdown(3)"><li><img src="../bill.png" alt="" style="margin-left: -2%;">Billing/Booking</li><i class="bi bi-caret-down boo"></i></a>
                  <ul class="booking">
                  <a href="/Fusion-Matrix/Admin_Page/Booking_Page/registration_form.php"><li>Customer Registration</li></a>
                  <a href=""><li>Customer Invoice</li></a>
                  <a href=""><li>Booking Cancellation</li></a></ul>
        
                  <a href="#" onclick="dropdown(4)"><li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>E-Commerce</li><i class="bi bi-caret-down eco"></i></a>
                  <ul class="ecommerce">
                  <a href=""><li>Cash Inflow/Outflow</li></a>
                  <a href=""><li>Financial Charts</li></a></ul>
        
                  <a href=""><li><img src="../log out.png" onclick="logout().then(log)" alt="">Log out</li></a>
                </ul>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg><input type="search" id="search_name" placeholder="Filter by Room No" style="border: 0px; width: 94%;">
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <select name="" id="search_designation" style="width: 100%;">
                  <option value="" disabled selected>Select Room Type</option>
                  <option value="">None</option>
                  <option value="A">Deluxe</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                </select>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <select name="" id="search_department" style="width: 100%;">
                  <option value="" disabled selected>Select Status</option>
                  <option value="">None</option>
                  <option value="B">Booked</option>
                  <option value="A">Available</option>
                  <option value="S">Service</option>
                </select>
              </div>
            </div>
          </div>

          <div class="container">
              <div class="row">
                  <h6>Floor-1</h6>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                        <div class='container'>
                          <div class='frame'>
                            <div class='door booked'>11</div>
                          </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                    <div class='container'>
                        <div class='frame'>
                          <div class='door available' style="z-index: 1;">12</div>
                          <a href="/Fusion-Matrix/Admin_Page/Booking_Page/registration_form.php"><div class="booknow">Book Now</div></a>
                        </div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                    <div class='container'>
                        <div class='frame'>
                          <div class='door service'>13</div>
                        </div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                    <div class='container'>
                        <div class='frame'>
                          <div class='door available'>14</div>
                        </div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                    <div class='container'>
                        <div class='frame'>
                          <div class='door booked'>15</div>
                        </div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                    <div class='container'>
                        <div class='frame'>
                          <div class='door service'>16</div>
                        </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <h6>Floor-2</h6>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-201
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-202
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-203
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-204
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-205
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-206
              </div>
            </div>
            <div class="row">
                <h6>Floor-3</h6>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-301
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-302
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-303
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-304
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-305
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-306
              </div>
            </div>
            <div class="row">
                <h6>Floor-4</h6>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-401
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-402
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-403
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-404
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-405
              </div>
              <div class="col-6 col-sm-6 col-md-2 col-lg-2">
                  <div class="rooms"></div>
                  Room-406
              </div>
            </div2
          </div>

          <script>
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

    $(document).ready(function() {
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

    $(document).ready( function () {
    $('.frame').hover( function () {
      $(this).closest('.frame').find('.door').toggleClass('open')
      $(this).closest('.frame').find('.booknow').toggleClass('show')
    })
});

</script>
</body>
</html>