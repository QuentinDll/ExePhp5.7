<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="firstname">Nom: </label>
            <input type="text" name="firstname" id="firstname" />
            
            <label for="lastname">Prénom: </label>
            <input type="text" name="lastname" id="lastname" />
            
            <label for="gender">Genre</label>
            <select name="gender" id="gender">
                <option selected disabled>Veuillez selectionner une option</option>
                <option value="M">M</option>
                <option value="Mme">Mme</option>
            </select>
            
            <button type="submit" name="send">Submit</button>
        </form>
        <?php
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['gender'])){
            echo $_POST['firstname'] ." ". $_POST['lastname'] ." ". $_POST['gender'];
        } else {
            echo 'Saisie Invalide';
        }
        ?>
    </body>
</html>
