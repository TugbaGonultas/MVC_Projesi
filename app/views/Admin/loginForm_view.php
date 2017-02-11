<html>
    <head>
    <title>Admin Paneli Girişi</title>
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
       
    </head>
    <body>
        <h1>Lütfen Giriş Yapınız</h1>
        <form action="<?php echo SITE_URL;?>/admin/runLogin" method="POST">
            <label>Kullanıcı Adı:</label>
            <input type ="text" name="username" />
            <label>Parola:</label>
            <input type="password" name="password" />
            <button type="submit">Giriş Yap</button>
        </form>
    </body>
</html>
    
