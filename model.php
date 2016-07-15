<?php
class Product{
    var $id;
    var $name;
    var $description;
    var $info;
    var $images;

    function Product($name, $description, $info, $images){
        $this->id = join("-",  explode(" ", strtolower($this->limpiar_caracteres_especiales($name))));
        $this->name = $name;
        $this->description = $description;
        $this->info = $info;
        $this->images = $images;
    }

    function limpiar_caracteres_especiales($s) {
        $s = preg_replace("[áàâãª]","a",$s);
        $s = preg_replace("[ÁÀÂÃ]","A",$s);
        $s = preg_replace("[éèê]","e",$s);
        $s = preg_replace("[ÉÈÊ]","E",$s);
        $s = preg_replace("[íìî]","i",$s);
        $s = preg_replace("[ÍÌÎ]","I",$s);
        $s = preg_replace("[óòôõº]","o",$s);
        $s = preg_replace("[ÓÒÔÕ]","O",$s);
        $s = preg_replace("[úùû]","u",$s);
        $s = preg_replace("[ÚÙÛ]","U",$s);
        $s = str_replace(" ","-",$s);
        $s = str_replace("ñ","n",$s);
        $s = str_replace("Ñ","N",$s);
        return $s;
    }
};

class Products{
    var $products;

    function Products(){
        $dummyInfo = "Commodo ad duis dolor aute est eiusmod occaecat aute voluptate occaecat exercitation dolor esse anim";
        $dummyDescription = "<p>Reprehenderit dolore proident cillum ea nulla eu est officia cillum. Ullamco occaecat sunt do deserunt officia ad ipsum qui nostrud in mollit mollit. Eu exercitation adipisicing commodo quis qui mollit. Ullamco sunt velit commodo aliquip nostrud consectetur occaecat nisi cupidatat.</p><p>Esse minim cupidatat in ipsum. In id exercitation sint consequat adipisicing deserunt voluptate qui proident. Consequat sunt aliquip minim et esse et. Ex aliquip ut magna est occaecat culpa.</p><p>Ea veniam occaecat occaecat consequat eu. Anim ut minim elit enim nisi ut nostrud reprehenderit velit. Ex anim laboris duis eiusmod adipisicing pariatur irure non velit mollit labore voluptate irure. Consectetur fugiat non nulla pariatur cillum ea mollit nulla Lorem. Consectetur occaecat nisi excepteur amet cupidatat nisi sunt.</p>";
        $dummyImages = ["http://lorempixel.com/660/480", "http://lorempixel.com/660/480", "http://lorempixel.com/660/480", "http://lorempixel.com/660/480", "http://lorempixel.com/660/480", "http://lorempixel.com/660/480", "http://lorempixel.com/660/480", "http://lorempixel.com/660/480", ];
        $this->products = array(
            "bebidas-calientes" => new Product("Bebidas calientes", $dummyInfo, $dummyDescription, $dummyImages),
            "bebidas-frias" => new Product("Bebidas frias", $dummyInfo, $dummyDescription, $dummyImages),
            "miel" => new Product("Miel", $dummyInfo, $dummyDescription, $dummyImages),
            "pasteleria-fina" => new Product("Pasteleria fina", $dummyInfo, $dummyDescription, $dummyImages),
            "te-a-granel" => new Product("Te a granel", $dummyInfo, $dummyDescription, $dummyImages),
            "tradicionales" => new Product("Tradicionales", $dummyInfo, $dummyDescription, $dummyImages)
            );
    }

    function getProduct($id){
        return $this->products[$id];
    }
}