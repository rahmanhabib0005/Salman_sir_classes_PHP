<!doctype html>
<html lang="en">

<head>
  <title>Login With Json file</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
     <div class="container">
          <div class="row">
               <div class="col-md-6 d-block mx-auto">
                    <h1 class="text-center">Login Form</h1>
                    <form action="handleLogin.php" method="post">
                         <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Enter Your E-mail">
                         </div>
                         <div class="mb-3">
                              <label for="" class="form-label">Password</label>
                              <input type="password" class="form-control" name="password" id="" placeholder="">
                         </div>
                         <button class="btn btn-primary">Submit</button>
                    </form>
               </div>
          </div>
     </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>