<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css" />
  <script src="../js/registerpagevalidations.js"></script>
  <script src="../js/routes.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
</head>
<div class="container">
  <br>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <header class="card-header" style="background-color:white;">
          <a href="login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
          <img src="../assets/logo.jpg" width="150" height="150"><span class="card-title mt-2" style="font-size: 20px;font-family: cursive;">Yarri No-1</span>
        </header>
        <article class="card-body">
          <form class="row g-3" id="cool" autocomplete="off">
            <div class="col-md-6">
              <br>
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstname" onkeyup="fname()">
              <h6 id="error"></h6>
            </div>
            <div class="col-md-6">
              <br>
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastname" onkeyup="lname()">
              <h6 id="error1"></h6>
            </div>
            <div class="col-md-12">
              <br>
              <label for="validationCustom03" class="form-label">Redgno</label>
              <input type="text" class="form-control" id="redgno" onkeyup="rno()">
              <h6 id="error2"></h6>
            </div>
            <div class="col-md-12">
              <br>
              <label for="validationCustom04" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" onkeyup="ema()">
              <h6 id="error3"></h6>
            </div>
          </form>
          <div class="col-12">
            <br>
            <button class="btn btn-primary" type="submit" id="register" onclick="register()">Register</button>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>

</html>
<script>
  document.getElementById('register').disabled = true;
</script>