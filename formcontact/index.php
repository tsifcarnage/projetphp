<?php
    $name=isset($_POST['name']) && !empty($_POST['name'])?$_POST['name']:'';
    $premess=isset($_POST['name']) && !empty($_POST['name'])?'Merci ':'';
    $message=isset($_POST['name']) && !empty($_POST['name'])?'.Ton message a ete bien ete envoyer':'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form contact</title>
    <style>textarea{
        resize: vertical;
    }</style>
</head>
<body>
    
    <section>
        <div class="bloc"></div>
        <div class="bloc2">
            <h1>Formulaire de contact</h1>
            <form method="POST">
                <div>
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" value="<?php echo $name;?>"required > <!--value php pour que le nom reste-->
                </div>
                <div>
                    <label for="mail">E-mail</label>
                    <input type="email" name="mail" id="mail" required>
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <input type="submit" value="Envoyer">
                <a href="index.php">reset</a>
            </form>
            <div>
                <?= $premess.$name. $message?>
            </div>
        </div>
        <div class="bloc3"></div>
    </section>
</body>
</html>