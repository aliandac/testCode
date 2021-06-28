<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = "Üst";
        $l = "Sol";
        $r = "Sağ";
        $h = "Slayt";
        $d = "Alt";
        $a = "Reklam";
        $c = "Kategori";

        $advertisements = [
            "AUS"   => [ 
                        "title"     => "Anasayfa $u $h $a",
                        "price"     => 300,
                    ],

            "AUL"   => [ 
                    "title"     => "Anasayfa $u $l $a",
                    "price"     => 300,
                ],

            "AUR"   => [ 
                    "title"     => "Anasayfa $u $r $a",
                    "price"     => 300,
                ],

            "AKA"   => [ 
                    "title"     => "Anasayfa Kategori $d $a",
                    "price"     => 300,
                ],

            "AAL"   => [ 
                    "title"     => "Anasayfa $d $l $a",
                    "price"     => 300,
                ],

            "AAR"   => [ 
                    "title"     => "Anasayfa $d $r $a",
                    "price"     => 300,
                ],

            "FUL"   => [ 
                    "title"     => "Firma $u $a",
                    "price"     => 300,
                ],

            "FUR"   => [ 
                    "title"     => "Firma $u $r $a",
                    "price"     => 300,
                ],

            "FAL"   => [ 
                    "title"     => "Firma $d $l $a",
                    "price"     => 300,
                ],

            "FAR"   => [ 
                    "title"     => "Firma $d $r $a",
                    "price"     => 300,
                ],

            "FHS"   => [ 
                    "title"     => "Firma $h $a",
                    "price"     => 300,
                ],

            "IHS"   => [ 
                    "title"     => "İhale $h $a",
                    "price"     => 300,
                ],

            "IUL"   => [ 
                    "title"     => "İhale $u $a",
                    "price"     => 300,
                ],

            "IUR"   => [ 
                    "title"     => "İhale $r $a",
                    "price"     => 300,
                ],

            "IAL"   => [ 
                    "title"     => "İhale $d $l $a",
                    "price"     => 300,
                ],

            "IAL"   => [ 
                    "title"     => "İhale $d $l $a",
                    "price"     => 300,
                ],

            "IAR"   => [ 
                    "title"     => "İhale $d $r $a",
                    "price"     => 300,
                ],

            "THS"   => [ 
                    "title"     => "Talep $h $r $a",
                    "price"     => 300,
                ],

            "TUL"   => [ 
                    "title"     => "Talep $u $l $a",
                    "price"     => 300,
                ],

            "TUR"   => [ 
                    "title"     => "Talep $u $r $a",
                    "price"     => 300,
                ],

            "TAL"   => [ 
                    "title"     => "Talep $d $l $a",
                    "price"     => 300,
                ],

            "TAR"   => [ 
                    "title"     => "Talep $d $r $a",
                    "price"     => 300,
                ],

            "FHHS"   => [ 
                    "title"     => "Firma Haber $h $a",
                    "price"     => 300,
                ],

            "FHUL"   => [ 
                    "title"     => "Firma Haber $u $l $a",
                    "price"     => 300,
                ],

            "FHUR"   => [ 
                    "title"     => "Firma Haber $u $r $a",
                    "price"     => 300,
                ],

            "FHKA"   => [ 
                    "title"     => "Firma Haber $c $a",
                    "price"     => 300,
                ],

            "EHS"   => [ 
                    "title"     => "Etkinlik $h $a",
                    "price"     => 300,
                ],

            "EKA"   => [ 
                    "title"     => "Etkinlik $c $a",
                    "price"     => 300,
                ],

            "MDAL"   => [ 
                    "title"     => "Makine Detay $d $l $a",
                    "price"     => 300,
                ],

            "MDAR"   => [ 
                    "title"     => "Makine Detay $d $r $a",
                    "price"     => 300,
                ],

            "FUSKA"   => [ 
                    "title"     => "Fuar Sektör $c $d $a",
                    "price"     => 300,
                ],

            "FUSUL"   => [ 
                    "title"     => "Fuar Sektör $u $l $a",
                    "price"     => 300,
                ],

            "FUSUR"   => [ 
                    "title"     => "Fuar Sektör $u $r $a",
                    "price"     => 300,
                ],

            "FUHS"   => [ 
                    "title"     => "Fuar Anasayfa $h $a",
                    "price"     => 300,
                ],

            "FUUS"   => [ 
                    "title"     => "Fuar Anasayfa $u $a",
                    "price"     => 300,
                ],

            "FUUL"   => [ 
                    "title"     => "Fuar Anasayfa $u $l $a",
                    "price"     => 300,
                ],

            "FUUR"   => [ 
                    "title"     => "Fuar Anasayfa $u $r $a",
                    "price"     => 300,
                ],

            "FUOL"   => [ 
                    "title"     => "Fuar Anasayfa Orta $l $a",
                    "price"     => 300,
                ],

            "FUOR"   => [ 
                    "title"     => "Fuar Anasayfa Orta $r $a",
                    "price"     => 300,
                ],

            "FUKA"   => [ 
                    "title"     => "Fuar Anasayfa $c $a",
                    "price"     => 300,
                ],

            "MHS"   => [ 
                    "title"     => "Makine Anasayfa $h $a",
                    "price"     => 300,
                ],

            "MUS"   => [ 
                    "title"     => "Makine Anasayfa $u $a",
                    "price"     => 300,
                ],

            "MUL"   => [ 
                    "title"     => "Makine Anasayfa $l $a",
                    "price"     => 300,
                ],

            "MUR"   => [ 
                    "title"     => "Makine Anasayfa $r $a",
                    "price"     => 300,
                ],

            "MKA"   => [ 
                    "title"     => "Makine Anasayfa $c $d $a",
                    "price"     => 300,
                ],

            "FKHS"   => [ 
                    "title"     => "Firma $c $h $a",
                    "price"     => 300,
                ],

            "FKUL"   => [ 
                    "title"     => "Firma $c $u $l $a",
                    "price"     => 300,
                ],

            "FKUR"   => [ 
                    "title"     => "Firma $c $u $r $a",
                    "price"     => 300,
                ],

            "FKAL"   => [ 
                    "title"     => "Firma $c $d $l $a",
                    "price"     => 300,
                ],

            "FKAR"   => [ 
                    "title"     => "Firma $c $d $r $a",
                    "price"     => 300,
                ],

            "UUL"   => [ 
                    "title"     => "Ülkeler $u $l $a",
                    "price"     => 300,
                ],

            "UUR"   => [ 
                    "title"     => "Ülkeler $u $r $a",
                    "price"     => 300,
                ],

            "UAL"   => [ 
                    "title"     => "Ülkeler $d $l $a",
                    "price"     => 300,
                ],

            "UAR"   => [ 
                    "title"     => "Ülkeler $d $r $a",
                    "price"     => 300,
                ],

            "UKA"   => [ 
                    "title"     => "Ülkeler $c $d $a",
                    "price"     => 300,
                ],

            "IDAL"   => [ 
                    "title"     => "İhale Detay $d $l $a",
                    "price"     => 300,
                ],

            "IDAR"   => [ 
                    "title"     => "İhale Detay $d $r $a",
                    "price"     => 300,
                ],
                
            "TDKA"   => [ 
                    "title"     => "Talep Detay $c $d $a",
                    "price"     => 300,
                ],

            "TDKA"   => [ 
                    "title"     => "Talep Detay $c $d $a",
                    "price"     => 300,
                ],

            "BKA"   => [ 
                    "title"     => "Blog $c $d $a",
                    "price"     => 300,
                ],

            "BDKA"   => [ 
                    "title"     => "Blog Detay $c $d $a",
                    "price"     => 300,
                ],

            "FHDKA"   => [ 
                    "title"     => "Firma Haber Detay $c $d $a",
                    "price"     => 300,
                ],

            "EDOL"   => [ 
                    "title"     => "Etkinlik Detay Orta $l $a",
                    "price"     => 300,
                ],

            "EDOR"   => [ 
                    "title"     => "Etkinlik Detay Orta $r $a",
                    "price"     => 300,
                ],

            "FUKKA"   => [ 
                    "title"     => "Fuar $c - $c $d $a",
                    "price"     => 300,
                ],

            "FUKUL"   => [ 
                    "title"     => "Fuar $c $u $l $a",
                    "price"     => 300,
                ],

            "FUKUR"   => [ 
                    "title"     => "Fuar $c $u $r $a",
                    "price"     => 300,
                ],
        ];

        foreach ($advertisements as $key => $code ) {
            DB::table('advertisements')->insert(
                [
                    'code' => $key ,
                    'price' => $code['price'] ,
                    'title' => $code['title'] ,
                    'image' => strtolower($key).'.png' ,
                ],
            );
        }

    }
}
