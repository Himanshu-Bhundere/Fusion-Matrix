<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Employee Removing  Form</title>
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

      <!-- form header -->
      <div class="form-header">
        <h1>Remove Employee Form</h1>
      </div>
      <center>   
        <h3 style="color:green;">&nbspENTER DETAILS OF THE EMPLOYEE</h3>
              </center>
        
        <img src="avatar.jpeg" alt="Avatar" class="avatar">
              <div class="horizontal-group">
              
                    <center>
                        <br>
                  <label for="choose-file" class="label-title">Upload Profile Picture<br><br></label>
                  <input type="file" id="choose-file" size="80">
                  <br>
                  <br>
                </center>
                </div>
      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First name </label>
            <input type="text" id="firstname" class="form-input" placeholder="enter your first name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" id="lastname" class="form-input" placeholder="enter your last name" />
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email</label>
          <input type="email" id="email" class="form-input" placeholder="enter your email" required="required">
        </div>


        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
          </div>
          <div class="form-group right">
            <label class="label-title">&nbsp;REASON</label>
            <div >
              <label><input type="checkbox" value="Web">&nbsp;&nbsp;Malfunctioning with system</label>
              <br>
              <label><input type="checkbox" value="iOS">&nbsp;&nbsp;Outsourcing Data</label>
              <br>
              <label><input type="checkbox" value="Andriod">&nbsp;&nbsp;Money Related</label>
              <br>
              <label><input type="checkbox" value="Game">&nbsp;&nbsp;Irregular</label>
              <br>
              <label><input type="checkbox" value="Game">&nbsp;&nbsp;Resignation</label>
            </div>
          </div>
        </div>

     
        <div class="horizontal-group">
        
            
          <div class="form-group ">
             
             
            <label for="experience" class="label-title">Age</label>
            <br>
            <input type="number" min="18" max="80"  value="18" style="color: #666; border: 1px solid #d6d6d6;"  maxlength="4" size="4">
          </div>
        </div>

        <!-- Bio -->
        <div class="form-group right">
            <br>
            <br>
          <label for="choose-file" class="label-title">Any Further Information</label>
          <textarea class="form-input" rows="4" cols="50" style="height:auto"></textarea>
        </div>
      </div>

      <!-- form-footer -->
      <div class="form-footer">
        <button type="reset" class="btn">Generate Leaving Letter</button>
        <button type="submit" class="btn">Remove Employee</button>
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