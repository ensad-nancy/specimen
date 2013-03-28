<?
function fontize($txt,$font,$size,$class) {
  global $site;
  $pages = $site->pages();
  
  $res ="";  
  
  // /[^a-z0-9 \-]+/i
  $txt = strtolower(preg_replace("/[^a-z \-]+/i", "", $txt));
  $txt = str_split($txt);
  
  foreach($txt as $key => $char){
    
    $c = $pages->find("fonts/".$font."/".$char);
    
    if($c->hasImages()){
      $res .= '<div class="'.$class.' '.$char.'">'.thumb($c->images()->last(), array('height' => $size)).'</div>';
    }else {
      if($char == " "){
        $res .= '<div class="'.$class.' '.$char.' space" style="width:'.($size*0.6).'px">&nbsp;</div>';
      }else{
        $res .= '<div class="'.$class.' '.$char.' missing">'.$char.'</div>';
      }
    }

  }
  return $res;
}
function getFonts(){
  
  global $site;
  $pages = $site->pages();
  
  $fonts = $pages->find("fonts")->children()->visible();
  
  foreach($fonts as $key => $font){
    $uid[] = $font->uid();
  }
  
  return $uid;
}
function randFont(){
  $fonts = getFonts();
  shuffle($fonts);
  
  return $fonts[0];
}
?>