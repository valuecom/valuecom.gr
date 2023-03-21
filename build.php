<?php


$search_results = glob('src/*.php');
$raw_base_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$base_url = str_replace('build.php','',$raw_base_url);



foreach ($search_results as $file){
    if ( substr($file, 0, 5)=="src/_" ) continue;
 
    $file_url = $base_url.$file;
    $file_name = './public/'.substr($file, 4, -4).'.html';
    $file_new_url = str_replace('.php','.html',$file_url);
    $file_new_url = str_replace('src','public',$file_new_url);

    $html = file_get_contents($file_url);
    $s = file_put_contents($file_name, $html);

    if ($s) {
        echo $file_name." - created !!! -> <a href='".$file_new_url."' target='_blank' >".$file_new_url."</a><br/>";
    }else{
        echo $file_name."not created<br/>";
    }
}
// $html = file_get_contents('http://localhost/GitHubVC/valuecom.gr/src/index.php');
// file_put_contents('./public/index.html', $html);

// $html = file_get_contents('http://localhost/GitHubVC/valuecom.gr/src/we-believe.php');
// file_put_contents('./public/we-believe.html', $html);