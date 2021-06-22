<?php

function balise($balise, $contenu = null, $attributs = array()){
    $str = '';
    $nom =" ";
    foreach ($attributs as $test => $valeur) {
        $str.= "$nom='$valeur' "; 
    }
        if ($contenu) $str = "<$balise $str>$contenu</$balise>"; 
        else $str = "<$balise $str>";                         
    return $str;
}


function paragraphe($contenu,$attributs=null){ //Variable $contenu
    return balise('p',$contenu,$attributs);//Valeur 'p'
}

function col($contenu,$attributs=array()){
    return balise('tr',$contenu,$attributs);


}
function lig($contenu,$attributs=array()){
    return balise('td',$contenu,$attributs);

}
function titre($contenu,$hauteur=1){
    return balise("hhauteur",$contenu);

}
function nouvelleLigne(){
    return balise('br');
    
}

function ouvrir($tag, $content = null, $attributs = array()){
    $str_att = '';
    foreach ($attributs as $name => $value) {
        $str_att.= "$name='$value' "; //laisser l'espace
    }
        if ($content) $str = "<$tag $str_att>$content"; //si y'a du contenu, on sort
        else $str = "<$tag $str_att>";                         //sinon on sort
    return $str;

function formulaire($content, $action, $method){
    $attributs['action']=$action;
    $attributs['method']=$method;
    return tag('form',$content,$attributs);
}

function select($name,$attributs=array()){
    $attributs['name']=$name;
    return ouvrir('select',$name,$attributs);
}

function input($name, $type="DEFAULT", $value="", $attributs){
    $attributs['name']=$name;
    $attributs['type']=$type;
    $attributs['value']=$value;
    return tag('input',$name,$attributs);

}

}
function fermer($tag, $attributs=array()){
    $str = "</$tag>";
    return $str;
}




?>