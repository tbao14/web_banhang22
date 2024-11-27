,<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>login</title>
</head>
<style>
    a{
  display: block;
  text-align: center;
}
    

</style>

<body>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
            <form id="form_reg" method="post" action="./backend/admin/QLSP/acess.php" class="col-lg-6 bg-light p-3 my-3">
            <h1 class="text-center h2 py-7">Login</h1>

        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <input type="submit" class="btn btn-primary btn-block mt-4 w-100 " name="btn-reg" value="Login">
        <a>Don'have an account?</a><br>
        <a href="registerweb.php">Register here</a>
</body>
    
</html>   
