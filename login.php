<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
        <style>
            body {
                font-family: 'Prompt';
                background:#D8BFD8;
                position: fixed;  
                top: 50%;  
                left: 50%;  
                margin-top: -170px;  
                margin-left: -180px; }
            h2{
                color: MediumOrchid;
            }
            form{
                border:8px solid #DA70D6;
                padding:30px 20px; 
                background:#E6E6FA;
                width:100%;
                border-radius:45px; } 
            button{
                font-family: 'Prompt';
                background-color: Orchid;
                padding: 14px 20px;
                border: none;
                cursor: pointer;
                width: 30%;
            }
        </style>
    </head>
    <body>
        <div>
            <form align="center"action="lgi_action.php" method="POST" enctype="multipart/form-data">       
                <p>
                    <h2>สมัครสมาชิก</h2> 
                    <b>Email : </b><input type="text" name="email" required><br><br>
                    <b>Password : </b><input type="password" name="psw" required><br><br>
                    <input type="checkbox" name="accept"> ยืนยันการเปิดเผยข้อมูล  <br><br>
                    <button type="submit">เข้าสู่ระบบ</button>
                </p>      
            </form>
        </div>
    </body>
</html>

