<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hotel Registeration Form</title>
    <link rel="stylesheet" href="invoice.css">
	 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
  </head>
  <body>
    <form class="signup-form" id="booking-form" action="/register" method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Check-Out Form</h1>
      </div>

      <!-- form body -->
      <div class="form-body">
        <div class="horizontal-group" style="margin-bottom: 10%;">
          <div class="form-group left">
            
          </div>
          <div class="form-group right">
            <label for="customer_id" class="label-title">Customer-Id</label>
            <input type="text" name="customerid" id="customer_id" class="form-input" placeholder="Last Name">
          </div>
        </div>
        <h2 style="color: #1BBA93;">Billing Details</h2>
        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left" style="margin-bottom: 15px;">
            <label for="firstname" class="label-title">Name</label>
            <input type="text" name="firstname" id="firstname" class="form-input" placeholder="First Name" required="required">
          </div>
          <div class="form-group right">
            <input type="text" name="lastname" id="lastname" class="form-input" placeholder="Last Name" style="margin-top: 9%;">
          </div>
        </div>

        <!-- Email-Id and Guests -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="email" class="label-title">Email-Id</label>
            <input type="text" name="email_id" id="email" class="form-input">
          </div>
          <div class="form-group right">
            <label for="guest" class="label-title">No of Guests</label>
            <input type="number" name="no_of_guests" min="1" max="80"  value="1" class="form-input">
          </div>
        </div>

        <!-- Room Details -->
        <div class="horizontal-group">
          <div class="form-group" style="margin-bottom: 8%;">
            <label class="label-title" style="margin-left: 43%;">Room Type </label>
            <select class="form-input" id="level" style="margin-left: 35%; width: 31%;">
              <option value="Deluxe">Deluxe</option>
              <option value="Prime">Prime</option>
              <option value="Suite">Suite</option>
              <option value="Standard" selected>Standard</option>
            </select>
          </div>
        </div>

        <!-- Payment type and Status -->
        <div class="horizontal-group">
          <h2 style="margin-left: 42%; color: #1BBA93;">Payment</h2>
            <div class="form-group left" >
              <label for="guest" class="label-title">Room Price</label>
              <input type="text" name="no_of_guests" class="form-input">
        </div>
          <div class="form-group right">
            <label class="label-title">Payment Type </label>
            <select class="form-input" id="level" >
              <option value="Cash" selected>Cash</option>
              <option value="Card">Card</option>
              <option value="Cheque">Cheque</option>
              <option value="Online">Online</option>
            </select>
        </div>
          </div>

          <!-- Total Amount -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Amount </label>
            <div class="input-group">
            <input type="radio" name="Payment" value="Paid" id="recieved">
            <label for="recieved">Recieved</label>
            <input type="radio" name="Payment" value="Paid" id="notrecieved">
            <label for="notrecieved">Not- Recieved </label>
          </div>
        </div>
      <div class="form-group right">
        <label for="totalamount" class="label-title">Total Amount</label>
        <input name="totalamount" style="width: 81%; height: 20px;" id="totalamount">
      </div>
    
        </div>

      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn">Check-Out</button>
      </div>
    </form>
  </body>
</html>