<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hotel Registeration Form</title>
    <link rel="stylesheet" href="register.css">
	 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src = "/Fusion-Matrix/Server/request.js"> </script>
  </head>
  <body>
    <form class="signup-form" id="booking-form" action="/register" method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Registeration Form</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">Name</label>
            <input type="text" name="firstname" id="firstname" class="form-input" placeholder="First Name" required="required">
          </div>
          <div class="form-group right">
            <input type="text" name="lastname" id="lastname" class="form-input" placeholder="Last Name" style="margin-top: 9%;">
          </div>
        </div>

        <!-- Address -->
        <div class="form-group">
          <label for="address" class="label-title">Address</label>
          <input type="text" name="address" id="address" class="form-input" placeholder="Street Address" required="required">
        </div>
        <div class="horizontal-group">
          <div class="form-group left">
            <input type="text" name="address" id="city" class="form-input" placeholder="City" required="required">
          </div>
          <div class="form-group right">
            <input type="text" name="address" id="state" class="form-input" placeholder="State" required="required">
          </div>
        </div>
        <div class="horizontal-group">
          <div class="form-group left">
            <input type="text" name="address" id="zipcode" class="form-input" placeholder="Postal/Zip Code" required="required">
          </div>
          <div class="form-group right">
            <select class="form-input" id="level" name="address">
              <option value="A">Afghanistan</option>
              <option value="B">Bangladesh</option>
              <option value="C">Canada</option>
              <option value="D">Denmark</option>
              <option value="E">Egypt</option>
              <option value="F">France</option>
              <option value="G">Germany</option>
              <option value="H">Hungary</option>
              <option value="I" selected>India</option>
              <option value="J">Japan</option>
              <option value="K">Kenya</option>
              <option value="L">Liberia</option>
              <option value="M">Malaysia</option>
            </select>
          </div>
        </div>

        <!-- Email-Id and Phone -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="email" class="label-title">Email-Id</label>
            <input type="text" name="email_id" id="email" class="form-input">
          </div>
          <div class="form-group right">
            <label for="phone" class="label-title">Phone</label>
            <input type="text" name="phone_no" id="phone" class="form-input" placeholder="XXX XXX XXXX" required="required">
          </div>
        </div>

        <!-- Id and Gender -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="aadharno" class="label-title">Aadhar Number</label>
            <input type="text" name="aadhar_no" id="aadharno" class="form-input" placeholder="XXXX XXXX XXXX" required="required">
          </div>
          <div class="form-group right">
            <label class="label-title">Gender</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
              <label for="other"><input type="radio" name="gender" value="other" id="other"> Other</label>
            </div>
          </div>
        </div>

        <!-- Proof and Age -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="choose-file" class="label-title">Upload Aadhar Card</label>
            <input type="file" name="aadhar_file" id="choose-file" size="80" style="margin-top: 4%;">
          </div>
          <div class="form-group right">
            <label for="age" class="label-title">Age</label>
            <input type="number" name="age" min="1" max="80"  value="1" class="form-input">
          </div>
        </div>

        <!-- Amenities and Satying Days -->
        <div class="horizontal-group">
          <div class="form-group left" >
            <label for="guest" class="label-title">No of Guests</label>
            <input type="number" name="no_of_guests" min="1" max="80"  value="1" class="form-input">
          </div>
          <div class="form-group right">
           <label class="label-title">Room Type </label>
            <select class="form-input" id="level" >
              <option value="Deluxe">Deluxe</option>
              <option value="Prime">Prime</option>
              <option value="Suite">Suite</option>
              <option value="Standard" selected>Standard</option>
            </select>
          </div>
        </div>

        <!-- Profile picture and Age -->
        <div class="horizontal-group">
          <div class="form-group left" >
            <label for="checkin" class="label-title">Check-In</label>
            <input type="date" name="check_in" id="checkin" class="form-input" style="width:78%;">
          </div>
          <div class="form-group right">
            <label for="checkout" class="label-title">Check-Out</label>
            <input type="date" name="check_out" id="checkout" class="form-input" style="width:78%;">
          </div>
        </div>

        <!-- Bio -->
        <div class="form-group">
          <label for="choose-file" class="label-title">Special request or requirements</label>
          <input class="form-input" name="special_request" rows="4" cols="50" style="width: 97%; height: 195px;">
        </div>
      </div>

      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn">Reserve</button>
      </div>
	  
    <script>
       $(document).ready(function() {
            $('#booking-form').submit(function() {
                let formData = objectifyForm($(this).serializeArray());
                registerCustomer(301, formData).then(log);   
				console.log(formData);
                return false; //Don't let html do anything if user submits form. We want jquery to do the work
            });
        });
    </script>

    </form>
  </body>
</html>