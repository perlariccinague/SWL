


<?php
$files = scandir('files/assets/layout/burgs');
$files_count = count((array)($files))-2;
/*echo"$files_count";
echo "$files";*/

function getRandoms($quant=1, $min=0, $max=1){
    $randary = array();
    while(!(count($randary) >= $quant || count($randary) > $max-$min))
        $randary[mt_rand($min,$max)] = true;
    return array_keys($randary);
}

$randoms = getRandoms(1, 1, $files_count);
/*echo "$randoms";*/

$dir = "files/assets/layout/burgs";
$file_array = Array();
if (is_dir($dir)) {
    $handle = opendir($dir);
    if (is_resource($handle)) {
        while ($file = readdir($handle)) {
            if ($file != "." && $file != ".." && $file != ".public")
                array_push($file_array, $file);
        }
    } else {
        echo "Das Öffnen des Verzeichnisses ist fehlgeschlagen";
    }
} else {
    echo "Das Verzeichnis existiert nicht";
}

?>

<div class="burg">
    <div class="image">
        <img src="/files/assets/layout/burgs/<?php echo $file_array[$randoms[0]] ?>" alt="">
    </div>
</div>






