<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="input-box">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required>
                        <label for="text">Email</label>
                    </div>
                    <div class="input-box">
                        <ion-icon name="eye-off-outline"></ion-icon>
                        <input type="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="forget">
                         <label for="">
                            <input type="checkbox" name="" id="">Remeber me
                            <a href="#">Forget Password</a>
                         </label>
                    </div>
                    <button>Login</button>
                    <div class="register">
                        <label for="">
                            Don't have an account <a href="#">Register</a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>