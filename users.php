<?php

session_start();
if(!isset($_SESSION['unique_id'])){
    header("location: ../login.php");
}
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="users">
        <header>
        <?php
        include dat
            include_once "php/config.php"
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
        ?>
            <div class="content">
            <img src="profile.png" alt="">
            <div class="details">
                <span><?php echo $row['fname']?></span>
                <p>Active</p>
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
            <a href="#">
                <div class="content">
                    <img src="" alt="">
                    <div class="details">
                    <span>User 1</span>
                    <p>This is a test message</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>
            <hr>
            <div class="div-users-list">
                <a href="#">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                        <span>User 2</span>
                        <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <hr>
            </div>
            <div class="div-users-list">
                <a href="#">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                        <span>User 3</span>
                        <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <hr>
            </div>
            <div class="div-users-list">
                <a href="#">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                        <span>User 4</span>
                        <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <hr>
            </div>
        </div>
    </section>
 </div>

 <script src="Javascript/users.js"></script>

</body>
</html>