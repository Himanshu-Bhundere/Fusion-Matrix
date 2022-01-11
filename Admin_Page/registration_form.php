<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hotel Registeration Form</title>
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
    <form class="signup-form" action="/register" method="post">

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
            <input type="text" id="firstname" class="form-input" placeholder="First Name" required="required">
          </div>
          <div class="form-group right">
            <input type="text" id="lastname" class="form-input" placeholder="Last Name" style="margin-top: 9%;">
          </div>
        </div>

        <!-- Address -->
        <div class="form-group">
          <label for="email" class="label-title">Address</label>
          <input type="email" id="email" class="form-input" placeholder="Street Address" required="required">
        </div>
        <div class="horizontal-group">
          <div class="form-group left">
            <input type="text" id="city" class="form-input" placeholder="City" required="required">
          </div>
          <div class="form-group right">
            <input type="text" id="state" class="form-input" placeholder="State" required="required">
          </div>
        </div>
        <div class="horizontal-group">
          <div class="form-group left">
            <input type="text" id="zipcode" class="form-input" placeholder="Postal/Zip Code" required="required">
          </div>
          <div class="form-group right">
            <select class="form-input" id="level">
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
            <input type="text" id="email" class="form-input">
          </div>
          <div class="form-group right">
            <label for="phone" class="label-title">Phone</label>
            <input type="text" id="phone" class="form-input" placeholder="XXX XXX XXXX" required="required">
          </div>
        </div>

        <!-- Id and Gender -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="aadharno" class="label-title">Aadhar Number</label>
            <input type="text" id="aadharno" class="form-input" placeholder="XXXX XXXX XXXX" required="required">
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
            <input type="file" id="choose-file" size="80" style="margin-top: 4%;">
          </div>
          <div class="form-group right">
            <label for="age" class="label-title">Age</label>
            <input type="number" min="1" max="80"  value="1" class="form-input">
          </div>
        </div>

        <!-- Amenities and Satying Days -->
        <div class="horizontal-group">
          <div class="form-group left" >
            <label for="guest" class="label-title">No of Guests</label>
            <input type="number" min="1" max="80"  value="1" class="form-input">
          </div>
          <div class="form-group right">
           <label class="label-title">Room Type </label>
            <select class="form-input" id="level" >
              <option value="D">Deluxe</option>
              <option value="P">Prime</option>
              <option value="S">Suite</option>
              <option value="R" selected>Regular</option>
            </select>
          </div>
        </div>

        <!-- Profile picture and Age -->
        <div class="horizontal-group">
          <div class="form-group left" >
            <label for="checkin" class="label-title">Check-In</label>
            <input type="date" id="checkin" class="form-input" style="width:78%;">
          </div>
          <div class="form-group right">
            <label for="checkout" class="label-title">Check-Out</label>
            <input type="date" id="checkout" class="form-input" style="width:78%;">
          </div>
        </div>

        <!-- Bio -->
        <div class="form-group">
          <label for="choose-file" class="label-title">Special request or requirements</label>
          <textarea class="form-input" rows="4" cols="50" style="width: 97%; height: 195px;"></textarea>
        </div>
      </div>

      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn">Reserve</button>
      </div>

    </form>
  </body>
</html>