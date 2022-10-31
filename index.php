<html>
  <head>
    <meta charset="utf-8">
    <title>belajar PHP</title>
    
  </head>
  <body>

 <h1>Array PHP</h1>

  <?php
    //-------type data array-------
    $angka =[5, 10, 2, 1, 6];
    $kotak = array('anjing', ' kurakura', 'koala','banteng');
    $nama  =['hilma', 'Endy', 'tiqa'];

    //print_r($kotak);
    //echo $name[0]

    //------- metode array -------
    //array_unique,_reverse,shuffle,count,sort

    // sort($angka);
    // print_r($angka);

    //echo count ($nama);

    //------- Associative array --------
    // key => isi

    $data = array ("nama"  =>  "hilman",
                   "umur"  =>   21,
                   "kerja" =>   "pengacara"
             );

    $data2 = array( "jstri"  => " belum ada" ,
                    "laptop" => "chromebook" 
             );

    //print_r($data);
    // $data['nama'] = " hilma ramadhan";
    //echo "nama adalah" . $data['nama'];marge

    //-------methode assosiatif array-------
    //array_values array_keys array_
   //print_r(array_marge_($data, $data2) );

   ///-------multi dimensi array-------

    $data = array(
            array("programmer" , "21" , "males"),
            array("designer" , "24" , "rajin"),
            array("manager" , "34" , "males banget")
          );

    // 00 01 02
   //  10 11 12
   //  20 21 22

     $data[2][0] = "proyek manager";
     echo $data[2][0];

       
  ?>
     
  </body>
</html>   
?>

   
  </body>
</html>