<?php


function check_animation($t)
{
    if ($t !== "no-animation" && $t->isNotEmpty()) {
        return $t . " has_animation";
    }
    return;
}

function rsm_image($image, $class = "", $nocaption = true, $toFile=true){

    if($image->isNotEmpty() && $image->toFile() !== null){

        if($toFile){
            $imagefile = $image->toFile();
        }else{
            $imagefile = $image;
        }
        $link = $imagefile->link();
        $caption= "";
        if( !$nocaption ){
            $caption = "<span class='image-caption'>" . $imagefile->caption(). "</span>" ;
        }
        $sizes = "(min-width: 1200px) 1200,
        (min-width: 900px) 900,
        (min-width: 600px) 600,
        300";
        $picture = '
            <picture class="'.$class. '">
                <source
                srcset="' . $imagefile->srcset('webp') . '"
                sizes="'. $sizes .'"
                type="image/webp"
            >
            <source
                srcset="' . $imagefile->srcset('avif') . '"
                type="image/avif"
                sizes="'. $sizes .'"
            >
            <img
                alt="' . $imagefile->alt() . '"
                src="' . $imagefile->resize(600)->url() . '"
                srcset="' . $imagefile->srcset() . '"
                width="' . $imagefile->resize(1800)->width() . '"
                height="' . $imagefile->resize(1800)->height() . '"
                sizes="'. $sizes .'"
            >
        </picture>
        ';

        if( $link->isNotEmpty()){
            $picture = '<a title="'. $imagefile->alt() .'" href="' .  $link . '" class="image-link">' . $picture . '</a>';
        }

        echo $picture . $caption;
    }
    return;

}
