<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Relevancy Profile Matching System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
        }
        .logo-section {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-section {
            background-color: #3498db;
            color: white;
        }
        .btn-login {
            background-color: #2980b9;
            border: none;
        }
        .btn-login:hover {
            background-color: #2573a7;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row login-container">
            <div class="col-md-6 logo-section">
                <img src="./logo.png" alt="ERMS Logo" class="img-fluid" style="max-width: 80%;">
            </div>
            <div class="col-md-6 form-section d-flex align-items-center">
                <div class="w-100 p-4 p-md-5">
                    <b><h2 class="mb-4 text-center fw-bold">Welcome to ERMS</h2></b>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username / Email</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-login btn-lg w-100 mb-3">Login</button>
                        <div class="text-center">
                            <a href="#" class="text-white">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
