<?php
header('Access-Control-Allow-Origin: *');
if($_SERVER["REQUEST_METHOD"]=="GET"){
    if($_GET["st"]=='state'){
        $url="http://104.198.0.197:8080/legislators?apikey=08903a8d41774814810ded56e0212eb8&per_page=all";
        $json = file_get_contents($url,false);
        echo $json;
    }
    else if($_GET["st"]=='house'){
        $url="http://104.198.0.197:8080/legislators?chamber=house&apikey=08903a8d41774814810ded56e0212eb8&per_page=all";
        $json = file_get_contents($url,false);
        echo $json;
    }else if($_GET["st"]=='senate'){
        $url="http://104.198.0.197:8080/legislators?chamber=senate&apikey=08903a8d41774814810ded56e0212eb8&per_page=all";
        $json = file_get_contents($url,false);
        echo $json;
    }else if($_GET["st"]=='active'){
        $url="http://104.198.0.197:8080/bills?apikey=08903a8d41774814810ded56e0212eb8&per_page=50&history.active=true&last_version.urls.pdf__exists=true";
        $json = file_get_contents($url,false);
        
        echo $json;
    }
    else if($_GET["st"]=='new'){
        $url="http://104.198.0.197:8080/bills?apikey=08903a8d41774814810ded56e0212eb8&per_page=50&history.active=false&last_version.urls.pdf__exists=true";
        $json = file_get_contents($url,false);
        
        echo $json;
    }
    else if($_GET["st"]=='hs'){
        $url="http://104.198.0.197:8080/committees?apikey=08903a8d41774814810ded56e0212eb8&per_page=all&chamber=house";
        $json = file_get_contents($url,false);
        
        echo $json;
    }
    else if($_GET["st"]=='sen'){
        $url="http://104.198.0.197:8080/committees?apikey=08903a8d41774814810ded56e0212eb8&per_page=all&chamber=senate";
        $json = file_get_contents($url,false);
        
        echo $json;
    }
    else if($_GET["st"]=='joint'){
        $url="http://104.198.0.197:8080/committees?apikey=08903a8d41774814810ded56e0212eb8&per_page=all&chamber=joint";
        $json = file_get_contents($url,false);
        
        echo $json;
    }
    else if($_GET["st"]=='comit'){
        $url="http://104.198.0.197:8080/committees?apikey=08903a8d41774814810ded56e0212eb8&per_page=all";
        $json = file_get_contents($url,false);   
        echo $json;
    }
    else if($_GET["st"]=='bill' && isset($_GET["id"])){
        $url="http://104.198.0.197:8080/bills?sponsor_id=".$_GET["id"]."&apikey=08903a8d41774814810ded56e0212eb8&per_page=50";
        $json = file_get_contents($url,false);
        
        echo $json;
    }
    else if($_GET["st"]=='bill' && isset($_GET["bid"])){
        $url="http://104.198.0.197:8080/bills?bill_id=".$_GET["bid"]."&apikey=08903a8d41774814810ded56e0212eb8&per_page=50";
        $json = file_get_contents($url,false);
        
        echo $json;
    }
    else if($_GET["st"]=='comit1' && isset($_GET["member_ids"]) && isset($_GET["chamber"])){
        $url="http://104.198.0.197:8080/committees?member_ids=".$_GET["member_ids"]."&chamber=".$_GET["chamber"]."&apikey=08903a8d41774814810ded56e0212eb8";
        $json = file_get_contents($url,false);
        echo $json;
    }
}

?>