
<?php

 permintaan fungsi ( $ url , $ token = null , $ data = null , $ pin = null , $ otpsetpin = null , $ uuid = null ){

$ header [] = "Host: api.gojekapi.com" ;
$ header [] = "User-Agent: okhttp/3.10.0" ;
$ header [] = "Terima: aplikasi/json" ;
$ header [] = "Bahasa Terima: ID-ID" ;
$ header [] = "Jenis Konten: application/json; charset=UTF-8" ;
$ header [] = "Versi X-App: 3.30.2" ;
$ header [] = "X-UniqueId: " . waktu (). "57" . mt_rand ( 1000 , 9999 );
$ header [] = "Koneksi: tetap hidup" ;
$ header [] = "X-User-Locale: id_ID" ;
$ header [] = "Lokasi X: -6.917464,107.619122" ;
$ header [] = "X-Location-Accuracy: 3.0" ;
jika ( $ pin ):
$ header [] = "pin: $pin" ;
    endif ;
jika ( $ token ):
$ header [] = "Otorisasi: Pembawa $token" ;
endif ;
jika ( $ otpsetpin ):
$ header [] = "otp: $otpsetpin" ;
endif ;
jika ( $ uuid ):
$ header [] = "User-uuid: $uuid" ;
endif ;
$ c = curl_init ( "https://api.gojekapi.com" . $ url );
    curl_setopt ( $ c , CURLOPT_FOLLOWLOCATION , benar );
    curl_setopt ( $ c , CURLOPT_SSL_VERIFYPEER , salah );
    jika ( $ data ):
    curl_setopt ( $ c , CURLOPT_POSTFIELDS , $ data );
    curl_setopt ( $ c , CURLOPT_POST , benar );
    endif ;
    curl_setopt ( $ c , CURLOPT_SSL_VERIFYHOST , 0 );
    curl_setopt ( $ c , CURLOPT_RETURNTRANSFER , 1 );
    curl_setopt ( $ c , CURLOPT_HEADER , benar );
    curl_setopt ( $ c , CURLOPT_HTTPHEADER , $ header );
    $ respons = curl_exec ( $ c );
    $ httpcode = curl_getinfo ( $ c );
    jika (! $ httpcode )
        kembali  salah ;
    lain {
        $ header = substr ( $ respons , 0 , curl_getinfo ( $ c , CURLINFO_HEADER_SIZE ));
        $ body    = substr ( $ respons , curl_getinfo ( $ c , CURLINFO_HEADER_SIZE ));
    }
    $ json = json_decode ( $ body , true );
    kembalikan  $ tubuh ;
}
fungsi  simpan ( $ nama file , $ konten )
{
    $ simpan = fopen ( $ namafile , "a" );
    fputs ( $ simpan , "$konten\r\n" );
    tutup ( $ simpan );
}
 nama fungsi ()
    {
    $ ch = curl_init ();
    curl_setopt ( $ ch , CURLOPT_URL , "http://ninjaname.horseridersupply.com/indonesian_name.php" );
    curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
    curl_setopt ( $ ch , CURLOPT_SSL_VERIFYHOST , 0 );
    curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
    curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , 1 );
    $ ex = curl_exec ( $ ch );
    // $rand = json_decode($rnd_get, benar);
    preg_match_all ( '~(• (.*?)<br/>• )~' , $ ex , $ name );
    kembalikan  $ nama [ 2 ][ mt_rand ( 0 , 14 ) ];
    }
fungsi  getStr ( $ a , $ b , $ c ){
	$ a = @ meledak ( $ a , $ c )[ 1 ];
	kembali @ meledak ( $ b , $ a )[ 0 ];
}
fungsi  getStr1 ( $ a , $ b , $ c , $ d ){
        $ a = @ meledak ( $ a , $ c )[ $ d ];
        kembali @ meledak ( $ b , $ a )[ 0 ];
}
fungsi  warna ( $ warna = "default" , $ teks )
    {
        $ arrayWarna = array (
            'abu-abu'       => '1;30' ,
            'merah'        => '1;31' ,
            'hijau'      => '1;32' ,
            'kuning'     => '1;33' ,
            'biru'       => '1;34' ,
            'ungu'     => '1;35' ,
            'nevy'       => '1;36' ,
            'putih'      => '1;0' ,
        );  
        kembali  "\033[" . $ arrayColor [ $ warna ]. "m" . $ teks . "\033[0m" ;
    }
fungsi  fetch_value ( $ str , $ find_start , $ find_end ) {
	$ mulai = @strpos ( $ str , $ cari_start );
	if ( $ mulai === salah ) {
		kembali  "" ;
	}
	$ panjang = strlen ( $ cari_start );
	$ end     = strpos ( substr ( $ str , $ start + $ length ), $ find_end );
	kembali  trim ( substr ( $ str , $ start + $ length , $ end ));
}
?>
