<?php
header('Content-Type: application/json');
$array = array();

$data = (object) [];
$data->id = "22145";
$data->url = 'https://media.cdkeys.com/500x706/media/catalog/product/m/e/metro_exodus_pc.jpg';
$data->nimi = "Metro Exodus";
$data->kategoria = "pelit";
$data->hinta = "40.00";
$data->paino = "0,30";
array_push($array,$data);

$data = (object) [];
$data->id = "22155";
$data->url = 'https://images-na.ssl-images-amazon.com/images/I/8144g7bZBaL._SL1500_.jpg';
$data->nimi = "Sims4";
$data->kategoria = "pelit";
$data->hinta = "99.00";
$data->paino = "0,30";
array_push($array,$data);

$data = (object) [];
$data->id = "22165";
$data->url = 'http://cdn.supersoluce.com/file/docs/docid_4f719b558f152f5d66011267/elemid_4ee9d6ec0a2fe93f0e00000c/counter-strike-global-offensive-pc.jpg';
$data->nimi = "Counter-Strike: Global Offensive";
$data->kategoria = "pelit";
$data->hinta = "18.90";
$data->paino = "0,30";
array_push($array,$data);

$data = (object) [];
$data->id = "22245";
$data->url = 'https://www.thomann.de/pics/bdb/424676/12584971_800.jpg';
$data->nimi = "Led lensser";
$data->kategoria = "Led-lamppu";
$data->hinta = "09.00";
$data->paino = "0,60";
array_push($array,$data);
 
$data = (object) [];
$data->id = "22246";
$data->url = 'https://cdn.instructables.com/F0A/PNVB/FXXPKOBW/F0APNVBFXXPKOBW.LARGE.jpg';
$data->nimi = "Mag-lite";
$data->kategoria = "Led-lamppu";
$data->hinta = "09.00";
$data->paino = "0,80";
array_push($array,$data);

$data = (object) [];
$data->id = "22345";
$data->url = 'https://www.halpahalli.fi/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/2/9/291011004.jpg';
$data->nimi = "Punainen ämpäri";
$data->kategoria = "Ämpäri";
$data->hinta = "03.00";
$data->paino = "0,30";
array_push($array,$data);

$data = (object) [];
$data->id = "22346";
$data->url = 'https://www.kariteam.fi/image_view.php?name=1/laajakuva_Sanko-5-l-138941-1.jpg';
$data->nimi = "Sininen ämpäri";
$data->kategoria = "Ämpäri";
$data->hinta = "04.00";
$data->paino = "0,30";
array_push($array,$data);

$data = (object) [];
$data->id = "22346";
$data->url = 'https://res.cloudinary.com/tokmanni/image/upload/c_pad,b_white,f_auto,h_800,w_800/d_default.png/6430048772074.jpg';
$data->nimi = "Muumi ämpäri";
$data->kategoria = "Ämpäri";
$data->hinta = "90.00";
$data->paino = "0,30";
array_push($array,$data);

$data = (object) [];
$data->id = "22346";
$data->url = 'https://www.ak24.fi/product_images/99281/o/puhdistustarvike-ampari-10l-punainen-sonax-logolla-so-999-102.jpg';
$data->nimi = "Sonax ämpäri";
$data->kategoria = "Ämpäri";
$data->hinta = "40.90";
$data->paino = "0,30";
array_push($array,$data);

$data = (object) [];
$data->id = "22346";
$data->url = 'https://www.oldschoollifestyle.fi/2252-home_default/sanko-galvanoitu-3-l.jpg';
$data->nimi = "Metalli ämpäri";
$data->kategoria = "Ämpäri";
$data->hinta = "05.00";
$data->paino = "1,00";
array_push($array,$data);


$getKriteeri = $_GET['kriteeri'];
$getHakuString = $_GET['hakusana'];
 
if($getKriteeri == "byId"){
    foreach ($array as $key => $value ) {   
    $id = $value -> id;
    if($id == $getHakuString){
        echo json_encode($array[$key]);
        break; 
    }
    }
}
elseif ($getKriteeri == "kategoria") {
    $arrayData = array();

    foreach ($array as $key => $value ) {   
        $kategoria = $value -> kategoria;
        if($kategoria == $getHakuString){
            array_push($arrayData,$array[$key]);
        }
    }
         echo json_encode($arrayData);
}elseif ($getKriteeri == "hinta") {
    $arrayData = array();

    foreach ($array as $key => $value ) {   
        $hinta = $value -> hinta;
        if($hinta < $getHakuString){
           array_push($arrayData,$array[$key]);
        }
    }
    echo json_encode($arrayData);

} else{
     echo json_encode($array);

}

?>