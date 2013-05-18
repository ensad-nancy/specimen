<?
function fontize($txt,$font,$size,$def,$class) {
  
  global $site;
  $pages = $site->pages();
  
  $res ="";
  $word="";
  
  $txt = strtolower(preg_replace("/[^a-z !,'.'\-]+/i", "", $txt));
  $txt = str_split($txt);
  
  foreach($txt as $key => $char){
    
    $c = $pages->find("fonts/".$font."/".$char);
    
    if($c->hasImages()){
      
      $ratio = round($c->images()->last()->width()/$c->images()->last()->height(),4);      
      
      $word .= '<div class="'.$class.' '.$char.'">
        <img height="'.($size).'" width="'.(($size*$ratio)).'"src="'.thumb($c->images()->last(), array('height' => $size*$def), false).'" alt=""></div>';
    
    }else {
      if($char == " "){
        $word  .= '<div class="'.$class.' '.$char.' space" style="width:'.(($size/$def)*0.4).'px">&nbsp;</div>';
        $res   .= '<div class="word">'.$word.'</div>';
        $word   = "";
      }else{
        $word .= '<div class="'.$class.' '.$char.' missing">'.$char.'</div>';
      }
    }
  }
  $res .= $word;
   
  return '<div class="phrase">'.$res.'</div>';
}
function getFonts(){
  global $site;
  
  $pages = $site->pages();
  $fonts = $pages->find("fonts")->children()->visible();
  
  foreach($fonts as $key => $font) $uids[] = $font->uid();
  
  return $uids;
}
function randFont(){
  $fonts = getFonts();
  shuffle($fonts);
  
  return $fonts[0];
}
?>