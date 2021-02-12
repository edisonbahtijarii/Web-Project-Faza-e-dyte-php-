<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!-- Stil css custom -->
    <link rel="stylesheet" href="../css/Apply.css" </head>

    <body>


        <!-- ------------x----------login forma-------------x--------- -->
        <div class="container">
            <div class="header">
                <h2>Sign in</h2>
            </div>
            <form id="form" class="form">
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" placeholder="username" id="username" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="username">Password</label>
                    <input type="password" placeholder="Password" id="password" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <button>Submit</button>
            </form>
        </div>



        <!---------------login forma-------------->

        <!-- Javascripti custom fajlli -->
        <script src="../js/sign.js ">
        </script>
    </body>

</html>