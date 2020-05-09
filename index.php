<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    html {
      height: 100%;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100%;
      font-family: "Times New Roman", Times, serif;
      color: #fff;
      background-image: url("https://download.hipwallpaper.com/desktop/1680/1050/55/6/602mEP.jpg");
      background-position: center;
      background-size: cover;
    }

    .indexcontainer2 {
      display: flex;
      flex-direction: row;
    
      align-items: center;
      
    }

    .indexcontainer {
      background: white;
      border-radius: 15px;
      color: black;
      box-shadow: 0 1.5px 0 0 rgba(0, 0, 0, 0.1);
      width: 400px;
      height: 500px;
     position:absolute;
     top:50%;
     left:50%;
    transform:translate(-50%,-50%);
     
    }

    .logo {
      font-family: Impact, Charcoal, sans-serif;
      color: black;
      font-size: 20px;
      text-align: center;
      padding: 20px 20px 0;
      margin: 0;
    }

    .login-item {
      color: black;
      padding: 25px 25px 0;
      margin: 20px 20px 0;
      border-radius: 3px;
    }

    .submitt {
      position: absolute;
      margin-left: 20px;
      margin-top: 15px;

    }

    input[type=text],
    select {
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 50px;
    }

    input[type=password],
    select {
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .divUser {
      text-align: center;
    }

    .passwordd {
      position: relative;
      top: 10px;
      text-align: center;
    }

    .txtUsername {
      position: relative;
      margin-left: 7px;
      margin-top: 50px;
    }

    .txtPassword {
      position: relative;
      margin-left: 10px;
      margin-top: 55px;
    }

 

    input[type=submit] {
      width: 270px;
      color: white;
      font-family: 'Courier New', Courier, monospace;
      background-color: white;
      padding: 14px 20px;
      margin-right: 20px;
      margin-top: 70px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      background-color: grey;
      
    }

    input[type=submit]:hover {
      
      background-color: #DBE46F;

    }



  

    #dikeyBaslik {
      float: left;
      font-size: 16px;
      -webkit-transform: rotate(-90deg);
      -moz-transform: rotate(-90deg);
      filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
      position: absolute;
      left: 15px;
      font-size: 75px;
      color: white;
      font-family: "Comic Sans MS", cursive, sans-serif;
    }
  
    .formm {
      border-radius: 10px;
      height: 350px;
    }
  </style>
</head>

<body>
  <div class="indexcontainer2">
    <div class="indexcontainer">
      <div class="login-item">
        <form action="kontrol.php" method="post" class="formm">
         <h3>Kişisel Web Siteme Hoşgeldin Siteye Girebilmek İçin Kullanıcı Adı Ve Şifreni Girmen Gerek</h3> 
          <div class="divUser">

            <input type="text" name="kullanici_adi" class="txtUsername" placeholder="Kullanıcı Adınızı Giriniz" required>
          </div>

          <div class="passwordd">

            <input type="password" name="sifre" class="txtPassword" placeholder="Şifrenizi Giriniz" required>
          </div>
          <div class="submitt">
            <input type="submit" value="Giriş Yap">
          </div>
        


        </form>
      </div>
    </div>
  </div>
</body>

</html>