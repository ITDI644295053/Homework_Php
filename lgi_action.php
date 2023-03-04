<html>
    <body>
        <head>
        <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
            <style>
                body {                        
                    font-family: 'Prompt';
                    background:#D8BFD8;
                    position: fixed;  
                    top: 50%;  
                    left: 50%;  
                    transform: translate(-50%, -50%);
                }
                form {  
                    border:8px solid #DA70D6;
                    padding:20px 50px; 
                    background:#E6E6FA;
                    width:50%;
                    border-radius:45px;}
                h2{
                    color: MediumOrchid;
                }
                button{
                    font-family: 'Prompt';
                    background-color: Orchid;
                    padding: 14px 20px;
                    border: none;
                    cursor: pointer;
                    width: 50%;
                }
            
            </style>
            <?php
                $email = $_POST['email'];
                $password = $_POST['psw'];
                if (isset($_POST['accept'])) { 
            ?>
                <form  action="uppic.php" method="post" enctype="multipart/form-data">
                    <center><h2>ข้อมูลส่วนตัว</h2></center>
                    ชื่อ : <br><input type="text" name="firstname" ><br><br>
                    นามสกุล : <br><input type="text" name="lastname"><br><br>
                    ที่อยู่ : <br><textarea name="address"></textarea><br><br>
                    รูปบัตรประชาชน : <input type="file" name="id" ><br><br>
                    <center><button type="submit" name="confirm">อัพโหลด</button></center>
                </form>       
            <?php
                } else {
                echo "<center><h2>กรุณายืนยันการเปิดเผยข้อมูล</h2></center>";
                echo "<br>";
            ?>
                <center>
                    <img src="https://static.vecteezy.com/system/resources/previews/012/042/301/original/warning-sign-icon-transparent-background-free-png.png" width="70"> 
                </center>
            <?php
                echo "<br>";
                echo '<center><a href="login.php">กลับ</a></center> ';
                }
            ?>            
    </body>
</html>
