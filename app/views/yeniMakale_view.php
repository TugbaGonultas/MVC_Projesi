
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <title>Yeni Makale</title>
    </head> 
    <body>
    <?php
    if(isset($mesaj)){
        echo "<h3>".$mesaj["mesaj"]."</h3>";
    }
    ?>
        <h1>Yeni Makale</h1>
        <form action="http://localhost/MVC_Projesi/index/makaleKaydet" method="POST">
            <label>Başlık</label><br/>
            <input type="text" name="baslik"/><br/><br/>
            <label>İçerik</label><br/>
            <textarea name="icerik"></textarea><br/><br/>
            <label>Etiketler</label><br/>
            <input type="text" name="etiket"/><br/><br/>
            <button type="submit">Kaydet</button>
        </form>
    </body>
</html>

