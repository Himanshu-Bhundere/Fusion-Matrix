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
    <script src = "/Fusion-Matrix/Server/sidebar.js"> </script>
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

    $(document).ready( function () {
    $('.frame').hover( function () {
      $(this).closest('.frame').find('.door').toggleClass('open')
      $(this).closest('.frame').find('.booknow').toggleClass('show')
    })
});

          </script>
</body>
</html>