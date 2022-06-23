<?php

session_start();
if(!isset($_SESSION['unique_id'])){
    header("location: ../chatapp/login.php");
}
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="users">
        <header>
        <?php
            include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
        ?>
            <div class="content">
            <img src="php/images/<?php echo $row['img'] ?>" alt="">
            <div class="details">
                <span><?php echo $row['fname'] ." ". $row['lname']?></span>
                <p><?php echo $row['status']?></p>
            </div>
            </div>  
            <a href="login.php" class="logout">Logout</a>
        </header>
        <hr>
        <div class="search">
            <span class="text">Select a user to start a conversation with</span>   
             <input type="text" placeholder="Enter name">
             <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">
        <hr>
        </div>
    </section>
 </div>

 <script src="Javascript/users.js"></script>

</body>
</html>