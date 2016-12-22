
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <title>Haber Listesi</title>
    </head> 
    <body>
        <h1>İsim Listesi</h1>
        <ul>
            
            
            <?php
                foreach ($isimListele as $key=>$value){
                    echo "<li>" . $value["baslik"] . "</li>";
                }
            ?>
        </ul>
    </body>
</html>

