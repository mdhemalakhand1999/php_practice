<?php
include_once 'scramblef.php';
$mode = 'encode';

$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if(isset($_GET['task']) && $_GET['task'] != '') {
    $mode = $_GET['task'];
}
// shuffle key
$key_original = '';
if('key' == $mode) {
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join('', $key_original);
} else if(isset($_POST['key']) && $_POST['key' ] != '') {
    $key = $_POST['key'];
}
// encode data
$scrambled_data = '';
if('encode' == $mode) {
    $data = $_POST['data'] ?? '';
    if(!empty($data)) {
        $scrambled_data = scrambleData($data, $key);
    }
}
// decode data
if('decode' == $mode) {
    $data = $_POST['data'] ?? '';
    if(!empty($data)) {
        $scrambled_data = decodeData($data, $key_original);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="data-scrambler-area pt-5 pb-5">
        <div class="container">
            <div class="scrambler-inner">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h1>Data Scrambler</h1>
                        <p>Use application to scrambler your data</p>
                        <div class="data-scramblar-links">
                            <a href="/scrambler.php/?task=encode">Encode</a> | <a href="/scrambler.php/?task=decode">Decode</a> | <a href="/scrambler.php/?task=key">Generate Key</a>
                        </div>
                        <div class="data-scrambler-form">
                            <form method="POST" action="scrambler.php <?php if('decode' == $mode) { echo "?task=decode"; } ?>">
                                <div class="mb-3">
                                    <label for="key" class="form-label">Key</label>
                                    <input type="text" class="form-control" id="key" aria-describedby="key" name="key" <?php displayKey($key); ?>>
                                </div>
                                <div class="mb-3">
                                    <label for="data" class="form-label">Data</label>
                                    <textarea name="data" id="data" cols="30" rows="10" class="form-control"><?php if(isset($_POST['data'])) { echo $_POST['data'];} ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="result" class="form-label">Result</label>
                                    <textarea name="result" id="result" cols="30" rows="10" class="form-control"><?php echo $scrambled_data; ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">DO IT FOR ME</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>