    <?php  
      
    function getFeed($feed_url) {  
          
        $content = file_get_contents($feed_url);  
        $x = new SimpleXmlElement($content);  
          
        echo "<ul>";  
          
        foreach($x->channel->item as $entry) {  
            echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";  
            echo $entry->description;  

        }  
        echo "</ul>";  
    }  
    ?>  



<div id="content_1">  
<?php getFeed("http://weather.yahooapis.com/forecastrss?w=2295424&u=c"); ?>  
</div>


<?php
$doc = new DOMDocument();
$doc->load('http://www.fema.gov/data/disasters_emergency.rss');
$channel = $doc->getElementsByTagName("channel");
foreach($channel as $chnl)
{
$item = $chnl->getElementsByTagName("item");
foreach($item as $itemgotten)
{
$describe = $itemgotten->getElementsByTagName("description");
$description = $describe->item(0)->nodeValue;
echo $description;
}
}
?>