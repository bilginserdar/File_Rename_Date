<?
/**
 * İşlemler
 */
class islemler
{
	function sayibul($klasor){ //Klasör ve dosya işlemleri
	  $dizi = array(); // dizi oluştur
	  $open = opendir($klasor); // klasör aç (Eğer belirtilen klasör yok ise sistem kendisi oluşturur)
	  while($q=readdir($open)) {
	  	if ($q != "." && $q != "..") {
	  		$dizi[] = $q;
	  	}
	  }
	  $sayi = count($dizi); //Klasörde bulunan dosya sayısı
	  closedir($open);  // klasörü kapat
	  return $sayi; //Dosya sayısını çıktı olarak al
	}

	function tarih ($dosya) { //Tarih düzenleme işlemleri
		$tarih=date("j-M-Y",filectime($dosya)); 
		$months	= array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"); 
		$aylar	= array("01", "02", "03", "04", "05", "06", "07", "08", "08", "10", "11", "12"); 
		$tarih = str_replace($months, $aylar, $tarih); 
		return  $tarih; 
	} 

	function isimDegistir ($ad, $tarih){ //İsim değiştirme işlemleri
		$yeniAd = rename("$ad", "$tarih-$ad");
		return $yeniAd;
	}
}

$islemler = new islemler; //Sınıfı değişkene atama.

$klasor = glob('files/*'); //Files klasörü içinde ki tüm dosyalar

$dosyaSayisi = $islemler->sayibul("files"); //Klasör içerisinde ki dosya sayısını buluyoruz
for ($i=0; $i < $dosyaSayisi; $i++) { 
	$isimDuzenle 	= str_replace("files/", "", $klasor[$i]);
	$dosyaSonAd 	= $islemler->tarih($klasor[$i])."-".$isimDuzenle;
	$tarihler 		= $islemler->tarih($klasor[$i]);
	rename($klasor[$i], "files/".$dosyaSonAd);
}

?>