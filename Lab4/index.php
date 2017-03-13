<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CPS530 Lab06 - Jawad Khudadad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" title="Bootstrap" charset="utf-8">
    <link rel="stylesheet" href="style.css" charset="utf-8">
    <script src='/../../../private/info.js'></script>
  </head>
  <body>
    <div class="container">
      <h1>Please provide your information below.</h1><br>
      <form  action="http://www2.scs.ryerson.ca/~jkhudada/cgi-bin/submit.rb" method="post">
        <div class="row form-group">
          <div class="col-xs-6">
            <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control">
            <span class="error" id="fname_error">Invalid first name.</span>
          </div>
          <div class="col-xs-6">
            <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control">
            <span class="error" id="lname_error">Invalid last name.</span>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-8">
            <input type="text" id="address" name="address" placeholder="Address" class="form-control">
            <span class="error" id="address_error">Invalid address.</span>
          </div>
          <div class="col-xs-4">
            <input type="text" id="phone" name="phone" placeholder="Phone Number(XXX-XXX-XXXX)" class="form-control">
            <span class="error" id="phone_error">Invalid phone number.</span>
          </div>
        </div>
        <div class="row center-block">
          <input type="submit" value="Submit" class="btn btn-default center-block">
        </div>
      </form>
    </div>
    <div id="content">
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="lab06.js" charset="utf-8"></script>
  </body>
</html>