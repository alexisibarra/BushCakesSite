<?php
    class Item{
        var $tag;
        var $id;
        var $subitems;
        var $link;

        function Item($tag){
            $this->subitems = array();
            $this->tag = $tag;
            $this->id = join("-",  explode(" ", strtolower($this->limpiar_caracteres_especiales($tag))));
            $this->link = "/" . $this->id;
        }

        function addSubitem($item){
            $item->link =  "/" . $this->id . "/" . $item->id;
            array_push($this->subitems, $item);
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
    }

    class MenuItems {
        var $items;

        function MenuItems(){

            $tienda_online = new Item("Tienda Online");
            $productos = new Item("Productos");
            $pasteleria_creativa = new Item("Pasteleria Creativa");
            $talleres = new Item("Talleres");
            $nosotros = new Item("Nosotros");
            $contacto = new Item("Contacto");

            foreach ([ "Bebidas calientes", "Bebidas frias", "Miel", "Pasteleria fina", "Te a granel", "Tradicionales"] as $item) {
                $productos->addSubitem(new Item($item));
            }
            foreach ([ "Bodas", "Para ellas", "Para ellos", "Para niñas", "Para niños", "Photo cakes", "Emojis"] as $item) {
                $pasteleria_creativa->addSubitem(new Item($item));
            }
            foreach (["Eventos", "CCI", "Recreo", "Ventura mall", "Regalar una clase", "Haz tu propio pastel", "Regala un cupón"] as $item) {
                $talleres->addSubitem(new Item($item));
            }
            foreach (["Postulate", "Prensa", "Testimonios", "Nuestros pasteles"] as $item) {
                $nosotros->addSubitem(new Item($item));
            }

            $this->items = array(
                $tienda_online->id => $tienda_online,
                $productos->id => $productos,
                $pasteleria_creativa->id => $pasteleria_creativa,
                $talleres->id => $talleres,
                $nosotros->id => $nosotros,
                $contacto->id => $contacto,
            );
        }

        function printItems($subitems){
            foreach ($this->items as $item) {
                echo '<li><a href="' . $item->link . '">' . $item->tag . '</a>';

                if ($item->subitems && $subitems){
                    echo '<ul class="fh5co-sub-menu">';
                    foreach ($item->subitems as $subitem) {
                        echo '<li><a href="' . $subitem->link . '">' . $subitem->tag . '</a></li>';
                    }
                    echo '</ul>';
                }

                echo '</li>';
            }
        }
        function printSubitems($item){
            foreach ($this->items[$item]->subitems as $item) {
                echo '<li><a href="' . $item->link . '">' . $item->tag . '</a></li>';
            }
        }
    }
