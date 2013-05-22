<?php
require_once('VimHighlight.php');

$hl = new VimHighlight();
$hl->caching = true;
$hl->color_scheme = "jellybeans";
$hl->show_lines = true;
$hl->file_type = "php";
$hl->div_css = "padding: 30px;";
$hl->use_css = true;
$hl->setVimCommand("vim");
echo $hl->processFile('VimHighlight.php', true);

$colo = VimHighlight::GetAvailableColorSchemes();
$ft = VimHighlight::GetAvailableFileTypes();

echo count($ft) . "\n" . count($colo);

//var_dump(scandir("/usr/local/share/vim/vim73/colors"));
?>
