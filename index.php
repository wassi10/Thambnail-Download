<?php
  if(isset($_POST['button'])){
    $imgUrl = $_POST['imgurl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $downloadImg = curl_exec($ch);
    curl_close($ch);
    header('Content-type: image/jpg');
    header('Content-Disposition: attachment;filename="download.jpg"');
    echo $downloadImg;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Thumbnail</title>
    <link rel="stylesheet" href="CSS/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <section class="full-content">
        <form action="" method="POST">
            <div class="url-input">
                <span class="title">Paste url<span class="required-mark">*</span></span>
                <div class="field">
                    <input type="text" placeholder="https://www.youtube.com/" required>
                    <input class="hidden-input" type="hidden" name="imgurl">
                </div>
            </div>
            <div class="preview-area">
                <img class="thumbnail" src="" alt="">
                <i class="icon fas fa-cloud-download-alt"></i>
            </div>
            <button class="download-btn" type="submit" name="button">Download Thumbnail</button>
        </form>
    </section>
    <script src="JS/js.js"></script>
</body>

</html>