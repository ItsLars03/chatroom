<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Lars&Marthijs">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="styles-light.css">
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
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                        <div class="field input">
                            <label>Email Adress</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter new password" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Select Image</label>
                            <input type="file" name="image" required> 
                        </div>
                        <div class="field button">
                            <input id="continue-to-chat-button" type="submit" value="Continue to Chat">
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