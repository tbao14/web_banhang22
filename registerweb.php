<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Sign up</title>
</head>
<style>
   

</style>

<body>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
            <form id="form_reg" method="post" action="reg.php" class="col-lg-6 bg-light p-3 my-3">
            <h1 class="text-center h2 py-7">Sign up</h1>
            <div class="form-group">
                <label for="fullname">Full name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control req">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                    <div class="form-check form-check-inline">
                        <label for="male" class="form-check-label">Male</label>
                        <input type="radio" name="Gender" id="male" value="Male" class="form-check-input" required>
                    </div>

                    <div class="form-check form-check-inline">
                        <label for="female" class="form-check-label">Female</label>
                        <input type="radio" name="Gender" id="female" value="Female" class="form-check-input" required>
                    </div>

                    <div class="form-check form-check-inline">
                        <label for="other" class="form-check-label">Other</label>
                        <input type="radio" name="Gender" id="other" value="Other" class="form-check-input" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>
                </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block mt-4 w-100 " name="btn-reg" value="Register"> 
               
            </form>
        </div>
        </div>
    </div>
</body>

</html>