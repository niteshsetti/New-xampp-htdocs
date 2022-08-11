<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css" />
  <script src="../js/loginpagevalidation.js"></script>
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
          <a href="register.php" class="float-right btn btn-outline-primary mt-1">Register</a>
          <img src="../assets/logo.jpg" width="150" height="150"><span class="card-title mt-2" style="font-size: 20px;font-family: cursive;">Yarri No-1</span>
        </header>
        <article class="card-body">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
              <br>
              <label for="validationCustom03" class="form-label">Enter Contest-ID</label>
              <input type="text" class="form-control" id="contest" onkeyup="check()" placeholder="Enter last 4 Digits of Contest-ID">
              <h6 id="error"></h6>
            </div>
          </form>
          <div class="col-12">
            <br>
            <button class="btn btn-primary" onclick="enroll()" type="submit">Enter Contest</button>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>

</html>