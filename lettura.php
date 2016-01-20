<?php
$xml = simplexml_load_file("iltuofeedshopping.xml");
$ns = $xml->getNamespaces(true);
foreach($xml->channel->item as $item) {
    $g = $item->children($ns["g"]);
   
    printf(
        "<ul><li><strong>SKU:</strong> %s - <strong>IMG:</strong> <img src='%s' height='80' width='80' /> - <strong>NOME PRODOTTO:</strong> %s - <strong>LINK:</strong> %s</li></ul>",
        $g->id,
        $g->image_link,
        $item->title,
        $item->link
        
    );
}
?>
