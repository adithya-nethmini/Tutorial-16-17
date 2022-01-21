<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
</head>

<body>
    <p><?= anchor('upload', 'UploadFile') ?></p>

    <?php foreach ($result->getResult() as $image) :
    ?>
            <a target="_blank" href="<?php echo base_url($image->FileName); ?>">
                <img height="100px" width="100px" src="<?php echo base_url($image->FileName); ?>" title="<?php echo $image->Title ?>">
            </a>
            <?php echo $image->Title ?>
            
    <?php endforeach; ?>

</body>

</html>