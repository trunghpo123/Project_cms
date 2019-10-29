
<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/19.less', 'css/19.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>17</title>
       <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $url_path?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url_path?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/19.css">
        <script src="<?php echo $url_path ?>/js/19.js"></script>
    </head>
    <body>
        <?php include './19-content.php';?>
    </body>
</html>
