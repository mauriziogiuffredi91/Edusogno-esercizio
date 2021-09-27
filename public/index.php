<?php
require_once __DIR__ . '/php/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>



</head>

<body>


    <header class="uk-container">
        <h1>Form section</h1>


    </header>
    <main>
        <section class="uk-container">
            <div class="box-info uk-padding">
                <form action="index.php" method="post">
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Utenti</legend>

                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Nome" id="firstName" name="firstName">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Cognome" id="lastName" name="lastName">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="email" id="email" name="email">
                        </div>
                    </fieldset>

                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Eventi</legend>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Nome evento" id="eventName" name="eventName">
                        </div>

                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" placeholder="Descrizione evento" id="eventDesc" name="eventDesc"></textarea>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input uk-form-width-small" type="text" placeholder="data" id="eventDate" name="eventDate">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input uk-form-width-small" type="text" placeholder="ora" id="eventTime" name="eventTime">
                        </div>
                    </fieldset>

                    <button type="submit" name="submit" value="submit" class="uk-button uk-button-default">Submit</button>



                </form>



            </div>
        </section>
    </main>
</body>

</html>