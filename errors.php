<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/_main.css">
    
 
    <title>Thank you</title>
</head>
<body>
<header>
    <?php include '_navbar.php' ?>

</header>
<main>
    <section class="container">
        <h2>Get in touch</h2>
        <h3>Please fix errors bellow</h3>
        <ul>
            <?php foreach($errors as $error) {
                echo "<li> $error </li>";
                }?>            
        </ul>
        <form action="./treatment.php" method="post">
            <label for="name">Name <span class="red">*</span></label>
            <input type="text" name="name" id="name">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" >

            <select name="subject" id="subject">
                <option value="devis">Demander un devis</option>
                <option value="rdv">Prendre un rendez-vous</option>
                <option value="newsLetter">S'inscrire à la newsLetter</option>
            </select>

            <label for="message">Message</label>
            <input type="text" name="message" id="message">

            <input type="submit" value="SEND">
        </form>
        </section>

</main>
<footer>
<?php include '_footer.php' ?>
</footer>
</body>
</html>