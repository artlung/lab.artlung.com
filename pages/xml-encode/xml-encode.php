<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('xml_encode() in PHP');

?>

    <p class="date-attribution"><i>Updated: June/2009</i></p>

    <h1>xml_encode()<br>

        <h2>Source:</h2>

        <pre>
function xml_encode($mixed,$domElement=null,$DOMDocument=null){
    if(is_null($DOMDocument)){
        $DOMDocument=new DOMDocument;
        $DOMDocument->formatOutput=true;
        xml_encode($mixed,$DOMDocument,$DOMDocument);
        echo $DOMDocument->saveXML();
    }
    else{
        if(is_array($mixed)){
            foreach($mixed as $index=>$mixedElement){
                if(is_int($index)){
                    if($index==0){
                        $node=$domElement;
                    }
                    else{
                        $node=$DOMDocument->createElement($domElement->tagName);
                        $domElement->parentNode->appendChild($node);
                    }
                }
                else{
                    $plural=$DOMDocument->createElement($index);
                    $domElement->appendChild($plural);
                    $node=$plural;
                    if(rtrim($index,'s')!==$index){
                        $singular=$DOMDocument->createElement(rtrim($index,'s'));
                        $plural->appendChild($singular);
                        $node=$singular;
                    }
                }
                xml_encode($mixedElement,$node,$DOMDocument);
            }
        }
        else{
            $domElement->appendChild($DOMDocument->createTextNode($mixed));
        }
    }
}
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
