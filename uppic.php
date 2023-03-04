<html>
    <body>
        <head>
        <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
            <style>
                body {
                    font-family: 'Prompt';
                    background:#E6E6FA;
                    position: fixed;  
                    top: 50%;  
                    left: 50%;  
                    transform: translate(-50%, -50%); 
                }
                h2{
                    color: MediumOrchid;
                }
            </style>
            <?php
                if(move_uploaded_file($_FILES["id"]["tmp_name"],"images/".$_FILES["id"]["name"]))
                {
                    echo "<center><h2>บันทึกข้อมูลแล้ว</h2></center>"; 
                    echo "<center>"."ชื่อ ". $_POST['firstname']." นามสกุล ". $_POST['lastname']."</center>";
                    echo "<br>";    
                    echo "<center>"."ที่อยู่ ". $_POST['address']."</center>";        
                    echo "<br>";   
                }
            ?>
            <center><img src="<?php echo "images/".$_FILES["id"]["name"]; ?>" width="300"></center> 
    </body>
</html>
