<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if (isset($params['title']) && $params['title']) {echo $params['title'];} else {echo 'Notre application';} ?></title>
</head>
<?php if (isset($params['message'])) { ?>
<div id="message" class="<?php echo $params['message']->getCode(); ?>"><?php echo $params['message']->getMessage(); ?></div>
<?php } ?> 


<style>
    #message {
        width: 80%;
        padding: 15px;
        margin: auto;
        color: white;
        border-radius: 5px;
    }

    .success {
        background-color: green;
    }

    .error {
        background-color: red;
    }

    .notice {
        background-color: blue;
    }
</style>