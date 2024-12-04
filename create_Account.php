
<!DOCTYPE html>
<html>

<head>
    <title>HTML Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<div id="barDiv">

<h2>Organise Your Day-Create Account</h2>
</div>
    <div class="main">
       
        <h3> create account </h3>

        <form action="createAccount.php" method="post">
            <label for="email">
                Email:
            </label>
            <input type="email" id="email" name="txtEmail" 
                placeholder="Enter your Email" required>

            <label for="password">
                Password:
            </label>
            <input type="password" id="password" name="txtPassword" 
                placeholder="Enter your Password" required>

            <div class="wrap">
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
        
        
        </p>
    </div>
</body>

</html>