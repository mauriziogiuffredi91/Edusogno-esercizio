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
            <div class="box-info">
                <form>
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Utenti</legend>

                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Nome">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Cognome">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="email">
                        </div>
                    </fieldset>

                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Eventi</legend>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Nome evento">
                        </div>

                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" placeholder="Descrizione evento"></textarea>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input uk-form-width-small" type="text" placeholder="data">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input uk-form-width-small" type="text" placeholder="ora">
                        </div>
                    </fieldset>



                </form>



            </div>
        </section>
    </main>
</body>

</html>