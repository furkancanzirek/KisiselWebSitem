<?php
if(isset($_POST['kullanici_adi'])&&isset($_POST['sifre']))//bunlar tanımlanmış mı diye
{
    $kullaniciAdi=$_POST['kullanici_adi'];
    $Sifre= $_POST['sifre'];
    if(empty($kullaniciAdi)|| empty($Sifre))
    {  
      header("refresh:2;url=http://localhost/test2/index.php");
    }
    else
    {
      if($kullaniciAdi=='b191210373@gmail.com'&&filter_var($kullaniciAdi, FILTER_VALIDATE_EMAIL)&&$Sifre=='123'){
      
          include("aboutme.html");
          
      }
      else{
        echo "
        <script type='text/javascript'>  
        alert('Bilgilerinizde Hata Var 2 Saniye İçerisinde Tekrar Yönlendiriliyorsunuz');
        </script>
        ";
        header("refresh:2;url=http://localhost/test2/index.php");
      }

    }
    
}
else{
   
  header("refresh:2;url=http://localhost/test2/index.php");
}
