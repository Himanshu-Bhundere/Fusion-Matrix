<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Employee Form</title>
    <link rel="stylesheet" href="Add.css">
  </head>
  <style>
    .avatar {
      
      width: 80px;
      height: 80px;
      border-radius: 90%;
      display: block;
  margin-left: auto;
  margin-right: auto;
    }
    </style>
  <body>
    <form class="signup-form" action="/register" method="post">


      <div class="form-header">
        <h1>Add Employee</h1>
      </div>
      
      <center>   
<h3 style="color:green;">&nbspENTER DETAILS OF NEW EMPLOYEE</h3>
      </center>

<img src="avatar.jpeg" alt="Avatar" class="avatar">
            <center>
                <br>
          <label for="choose-file" class="label-title">Upload Profile Picture<br><br></label>
          <input type="file" id="choose-file" size="80">
        </center>
    <div class="form-body">
          <div class="form-group left">
            <label for="firstname" class="label-title">First name </label>
            <input type="text" id="firstname" class="form-input" placeholder="enter your first name" required="required">
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" id="lastname" class="form-input" placeholder="enter your last name">
          </div>  
        <div class="form-group left ">
          <label for="email" class="label-title">Personal Email</label>
          <input type="email" id="email" class="form-input" placeholder="enter your email" required="required">
        </div>

        <div class="form-group right">
            <label for="dob" class="label-title">Date Of Birth</label>
            <input type="dob" id="dob" class="form-input" placeholder="enter your Date Of Birth" required="required" style="width: ;">
        </div>
          <div class="form-group left">
            <label for="password" class="label-title">LinkedIn Profile </label>
            <input type="text" id="Firstname" class="form-input" placeholder="enter your linkedin ID" required="not required">
          </div>
          <div class="form-group right">
            <label for="Description" class="label-title">Description</label>
            <input type="text" class="form-input" id="last name" placeholder="Why the person wants to join ?" required="required">
          </div>
          <div class="form-group left">
            <label class="label-title">Gender</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
          </div>
          <div class="form-group right">
            <label class="label-title">Department</label>
            <div >
              <select class="form-input" id="level">
                <option value="D">Design</option>
                <option value="M">Marketing</option>
                <option value="C">Quality Assurance</option>
                <option value="De">Development</option></select>
              <br>
            </div>
          </div>
            <div class="form-group left">
              <label class="label-title">Type Of Employee</label>
              <div class="input-group">
                <label for="Part Time"><input type="radio" > Part Time</label>
                <label for="Full time"><input type="radio" > Full Time</label>
              </div>
            </div>
            <div class="form-group right">
                <label for="Designation" class="label-title">Designation</label>
                <input type="text" class="form-input" id="last name" placeholder="Designation" required="required">
              </div>
            <div class="form-group left">
              <label for="text" class="label-title">Address Line 1 </label>
              <input type="text" id="Firstname" class="form-input" placeholder="Address" required=" required">
            </div>
            <div class="form-group right">
              <label for="Description" class="label-title">Address Line 2</label>
              <input type="text" class="form-input" id="last name" placeholder="Address" required=" not required">
            </div>
            
            <div class="form-group left">
                <label for="Description" class="label-title">State</label>
                <input type="text" class="form-input" id="last name" placeholder="Address" required="  required">
            </div>
      
            <div class="form-group right">
                <label for="Description" class="label-title">PIN Code</label>
                <input type="text" class="form-input" id="last name" placeholder="Address" required=" not required">
            </div>
            <div class="form-group  left">
              <label for="text" class="label-title">Education</label>
              <div class="input-group">
                <label for="Full time"><input type="radio" > Graduate</label>
                <label for="Full time"><input type="radio" > Post Graduate</label>
            </div>
          </div>
              <div class="form-group right">
                <label for="text" class="label-title">Specialization</label>
                <input type="text" id="Firstname" class="form-input" placeholder="Address" required=" required">
              </div>
              <div class="form-group left">
                <label for="Description" class="label-title">Institute</label>
                <input type="text" class="form-input" id="last name" placeholder="Address" required="  required">
              </div>
          <div class="form-group right">
            <label for="experience" class="label-title">Age</label>
            <input type="number" min="18" max="80"  value="18" class="form-input">
          </div>
          <div class="form-group left">
            <label for="firstname" class="label-title">Organization </label>
            <input type="text" id="firstname" class="form-input" placeholder="Latest Organization  name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Designation</label>
            <input type="text" id="lastname" class="form-input" placeholder="Designation" />
          </div>
          <div class="form-group left">
            <label for="firstname" class="label-title">Start Date</label>
            <input type="text" id="firstname" class="form-input" placeholder="Starting Date of working" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">End Date</label>
            <input type="text" id="lastname" class="form-input" placeholder="Last Date of working" />
          </div>
              <div class="form-group left">
                <label for="firstname" class="label-title">Starting Salary</label>
                <input type="text" id="firstname" class="form-input" placeholder="Enter start salary" required="required" />
              </div>
              <div class="form-group right">
                <label for="lastname" class="label-title">End Salary</label>
                <input type="text" id="lastname" class="form-input" placeholder="Enter last salary" />
              </div>
                  <div class="form-group">
                    <label for="firstname" class="label-title">Reason</label>
                    <input type="text" id="firstname" class="form-input" placeholder="Enter Leaving Reason" required="required" />
                  </div>

        <div class="form-group" style="clear: both;">
          <label for="choose-file" class="label-title">Any Further Information</label>
          <textarea class="form-input" rows="4" cols="50" style="height:auto"></textarea>
        </div>
      <!-- form-footer -->
      <div class="form-footer">
        <center>
        <button type="submit" class="btn">Add</button></center>
      </div>
    </form>

    <!-- Script for range input label -->
    <script>
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
    </script>

  </body>
</html>