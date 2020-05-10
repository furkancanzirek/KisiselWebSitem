<?php
 
if(isset($_POST['kullanici_adi'])&&isset($_POST['sifre']))//bunlar tanımlanmış mı diye
{
    $kullaniciAdi=$_POST['kullanici_adi'];
    $Sifre= $_POST['sifre'];
    if(empty($kullaniciAdi)|| empty($Sifre))
    {  
     
      /* Hocam header kodunu ne şekilde yazarsam yazayım localhostta çalışmasına rağman 
      000webhost'ta çalışmadı bu nedenle yönlendirmeyi görebilmeniz için kod içeriğinde include ile yazdım */
      include("index.php");
      
    }
    else
    {
      if($kullaniciAdi=='b191210373@gmail.com'&&filter_var($kullaniciAdi, FILTER_VALIDATE_EMAIL)&&$Sifre=='123'){
        echo "
        <script type='text/javascript'>  
        alert(' $kullaniciAdi Siteme Hoşgeldiniz');
        </script>
        ";
          include("hakkimda.html");
          
          
      }
      else{
        echo "
        <script type='text/javascript'>  
        alert('Bilgilerinizde Hata Var Tekrar Yönlendiriliyorsunuz');
        </script>
        ";
        include("index.php");
      }

    }
    
}
else{
   
  include("index.php");
}
