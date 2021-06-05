# File_Rename_Date
 Belirlenen klasör içerisindeki dosyaların son düzenlenme tarihlerini dosya adına işleyen ufak bir Class.

## Kullanımı

```sh
$islemler = new islemler; //Sınıfı değişkene atama.

$klasor = glob('files/*'); //Files klasörü içinde ki tüm dosyalar

$dosyaSayisi = $islemler->sayibul("files"); //Klasör içerisinde ki dosya sayısını buluyoruz
for ($i=0; $i < $dosyaSayisi; $i++) { 
	$isimDuzenle 	= str_replace("files/", "", $klasor[$i]);
	$dosyaSonAd 	= $islemler->tarih($klasor[$i])."-".$isimDuzenle;
	$tarihler 	= $islemler->tarih($klasor[$i]);
	rename($klasor[$i], "files/".$dosyaSonAd);
}
```
