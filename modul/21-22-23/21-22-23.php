<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/21-22-23.less', 'css/21-22-23.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>21-22-23</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/21-22-23.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="<?php echo $url_path ?>/js/jquery.mobile-1.4.5.min.js"></script>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/css/jquery/node_modules/jquery/dist/jquery.min.js"></script>
        
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <link href="<?php echo $url_path ?>/css/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/21-22-23.less', 'css/21-22-23.css');
        ?>
    </head>
    <body >
        <?php include './21-22-23-content.php'; ?>
    </body>
</html>