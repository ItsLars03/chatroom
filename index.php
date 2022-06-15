<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Lars&Marthijs">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Chattry</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chattry</header> 
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="field input">
                            <label>Email Adress</label>
                            <input type="text" placeholder="Enter your email">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" placeholder="Enter new password">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Select Image</label>
                            <input type="file"> 
                        </div>
                        <div class="field button">
                            <input type="submit" value="Continue to Chat">
                        </div>
                        </form>
                    </div>
                    <div class="link">Already signed up? <a href="login.php">Login now</a></div>
                </div>
                
            
                   
        </section>
    </div>

    <script src="Javascript/pass-show-hide.js"></script>
    <script src="Javascript/sign.js"></script>


</body>
</html>