<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Fontawesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
    <title>Form Validation</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <h1 class="text-center title">PHP Form Validation</h1>
            <div class="col-lg-6 col-md-12 col-sm-12 card ">
                <h1 class="text-center">Input</h1>

                <form action="" method="post">

                    <input type="text" name="first-name" id="" placeholder="First Name" class="form-control mb-3">
                    <input type="text" name="last-name" id="" placeholder="Last Name" class="form-control mb-3">

                    <input type="radio" name="gender" value="male" id="male" class="mb-5">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="female" id="female" class="mb-5">
                    <label for="female">Female</label>

                    <input type="email" name="email" id="" placeholder="Email" class="form-control mb-3">
                    <input type="password" name="password" id="" placeholder="Password" class="form-control mb-3">

                    <button name="clicked" type="submit" class="btn btn-danger py-10">
                        Submit
                    </button>
                </form>
            </div>

            <div class="col-lg-5 col-md-12 col-sm-12 card">
                <h1 class="text-center">Validated Output</h1>
                <span class="text-center">
                    <?php
                    if (isset($_POST['clicked'])) {

                        $first_name =  $_POST['first-name'];
                        $last_name =  $_POST['last-name'];
                        $email =  $_POST['email'];
                        $password = $_POST['password'];
                        $gender = $_POST['gender'];

                        echo $first_name . "<br>"
                            . $last_name . "<br>"
                            . $gender . "<br>"
                            . $email .  "<br>"
                            . $password;
                    }
                    ?>
                </span>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <span> Develop With &nbsp;
                        <a href="http://github.com/ArnobMahmud" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-github" aria-hidden="true"></i> Arnob Mahmud
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>