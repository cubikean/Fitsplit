<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitSplit - Register</title>
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'template-parts/header.php'; ?>

    <div class="ft_home_container">
        <section class="ft_register_content">
            <h1 class="ft_register_title">Inscription</h1>
            <div class="ft_register_form">
                <form action="">
                    <input required="required" type="text" name="Nom" id="Nom" placeholder="Nom">
                    <input required="required" type="text" name="Prénom" id="Prenom" placeholder="Prenom">
                    <input required="required" type="mail" name="Mail" id="Mail" placeholder="E-Mail">
                    <input required="required" type="password" name="Password" id="Password" placeholder="Mot de passe">
                    <input required="required" type="password" name="Password_valid" id="Password_valid" placeholder="Confirmer le mot de passe">
                    <div class="ft_register_form_checkbox">
                        <div class="ft_register_form_checkbox_single">
                            <input required="required" type="checkbox" name="CGU" id="CGU">
                            <label for="CGU">CGU</label>
                        </div>
                        <div class="ft_register_form_checkbox_single">
                            <input required="required" type="checkbox" name="CGV" id="CGV">
                            <label for="CGV">CGV</label>
                        </div>
                        <div class="ft_register_form_checkbox_single">
                            <input required="required" type="checkbox" name="PDC" id="PDC">
                            <label for="PDC">Politique de confidentialité</label>
                        </div>
                    </div>
                    <input type="submit" name="Inscription" value="Inscription" id="Inscription" class="ft_btn">
                </form>
            </div>

        </section>




    </div>

    <div class="spacer20"></div>
    <footer>
        <?php include 'template-parts/footer.php'; ?>
    </footer>



    <script src="/assets/js/splide-4.0.1/dist/js/splide.min.js"></script>

    <script src="assets/js/header.js"></script>
    <script src="assets/js/home.js"></script>

</body>

</html>