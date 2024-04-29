<?php
$datas = array_map('htmlentities', array_map('trim', $_POST));

$errors = [] ;

if(empty($datas["name"])) {
    $errors[] = 'Vous n\'avez pas saisi votre nom';
}

if(empty($datas["email"])) {
    $errors[] = 'Vous n\'avez pas saisi votre email';
}

if(count($errors) >0) {
    require 'errors.php';
    die;
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/_main.css">
    
 
    <title>Thank you</title>
</head>
<body>
<header>
    <?php include '_navbar.php' ?>

</header>
<main>
    <h2>Thank you for your message</h2>

    <section class="container">
        <p>Your message is being processed.</p>
        <p>Our team will get back to you within 48 hours.</p>
        <p>Have a nice day and see you soon. </p>
    </section>
    

</main>
<footer>
<?php include '_footer.php' ?>
</footer>
</body>
</html>