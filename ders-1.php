<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Açıklama Satırı -->
    <?php
    // Açıklama Satırı
    /* Açıklama Satırı Bloğu
       Shift+alt+a
     */  
    /*  Kullanılan Komutlar
    echo: Ekrana yazdırma işlemi yapar.İçerisinde html
    etiketleri kullanılabilir. 
    Çift veya tek tırnak ile kullanılabilir.
    Çift tırnak içerisinde değişken içerikleri gösterilir.
    Nokta işareti ile birleştirme yapılabilir.
    \ Kaçış karakteridir.Özel ifaderlerden önce kullanılır.


    */
    echo "<h4>Aydın Adnan Menderes Üniversitesi</h3>"; 
    echo '<h4>Aydın Meslek Yüksekokulu</h4>';
    echo "Bilgisayar Programcılığı "." Web Teknolojileri" . "<br>";
    echo "Bilgisayar Programcılığı"."<br>". "Web Teknolojileri";

    echo "<hr> <h4> Değişken Tanımlama Kuralları</h4>";
    echo "<ol>
              <li>Değişken isimleri $ ile başlar. </li>
              <li>Değişken isimleri sayısal bir ifade ile başlayamaz. </li>
              <li>Değişken isimlerinde boşluk kullanılmaz.İki kelime varsa birinci_sinif birincisinif birinci-sinif örneklerdeki kullanımlar önerilir. </li>
              <li>Değişken ve dosya isimlerinde Türkçe karakter kullanılmamalıdır. </li>
              <li>Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. \$sayi != \$sayi </li>
              <li>Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak (\") veya tek tırnak (') kullanılır.</li>
              <li>Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır. </li>
              <li>Değişken ismi, değişkenin içeriğini ifade etmelidir.</li>
              <li>Değişkenler ekrana echo komutu ile yazdırılır.</li>
    </ol>";

     echo "<hr> <h4> Değişken Tanımlama Örnekleri</h4>";

     $isim = "Bora";
     $soyisim = "Mavili";
     $yas = 20;
    $numara =216001053;
     echo $isim ." ". $soyisim;
     echo "<br>";
     echo "$isim $soyisim";
     
    /* Uygulama:
        Üniversite-Myo-Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
        Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz.

    */
    
    $ad = "Ayberk Bora ";
    $soyad = "Mavili";
    $universite = "Aydın Adnan Menderes Üniversitesi";
    $MYO= "Aydın Adnan Menderes Üniversitesi Meslek Yüksekokulu";
    $numara = "216001053";




    
    ?>
    <form action="">
     <label for="isim">İsim</label>   
    <input type="text" name="" value="<?php echo $isim; ?>" id="isim">
    <label for="soyisim">soyisim</label> 
    <input type="text" name="" value="<?php echo $soyisim; ?>" id="soyisim">
    <label for="yas">yas</label> 
    <input type="text" name="" value="<?php echo $yas; ?>" id="yas">
    <label for="numara">numara</label> 
    <input type="text" name="" value="<?php echo $numara; ?>" id="numara">


    
    
</body>
</html>