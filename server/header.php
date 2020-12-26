<!DOCTYPE html>
<head>
    <title>
    <?php
    if(isset($title))
    {
        echo $title . " - Flag";
    }else{
        echo "Flag - Bite Size Videos";
    }
    ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
</head>
<?php
if(isset($title) && isset($desc) && isset($thumb) && isset($route))
{
    echo "<meta name='title' content='${title} - Flag'>";
    echo "<meta name='description' content='${desc}'>";
    echo "<meta name='og:description' content='${desc}'>";
    echo "<meta name='og:title' content='${title}'>";
    echo "<meta name='twitter:title' content='${title}'>";
    echo "<meta name='twitter:description' content='${desc}'>";
    echo "<meta name='twitter:image' content='${thumb}'>";
    echo "<meta name='og:image' content='${thumb}'>";
    echo "<meta name='og:url' content='https://flag.riverside.rocks/${route}'>";
    echo "<meta name='twitter:url' content='https://flag.riverside.rocks/${route}'>";
}else{
    echo "<meta name='title' content='Flag'>";
    echo "<meta name='description' content='Bite size videos for the masses'>";
    echo "<meta name='og:description' content='Bite size videos for the masses'>";
    echo "<meta name='og:title' content='flag'>";
    echo "<meta name='twitter:title' content='flag'>";
    echo "<meta name='twitter:description' content='Bite size videos for the masses'>";
    echo "<meta name='twitter:image' content='https://cdn.riverside.rocks/a/begonia-botany-skipjack.png'>";
    echo "<meta name='og:image' content='https://cdn.riverside.rocks/a/begonia-botany-skipjack.png'>";
    echo "<meta name='og:url' content='https://flag.riverside.rocks'>";
    echo "<meta name='twitter:url' content='https://flag.riverside.rocks'>";
}
?>
<meta property="og:type" content="website">
<meta property="twitter:card" content="summary_large_image">