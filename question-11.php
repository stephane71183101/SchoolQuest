<?php include includes/head.php ?>
<?php include includes/header.php?>
<?php include data-collector.php?>


<!--author: chantal.genoud-->

<form action="question-11.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">       
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container pt-3 col-12">
                    <h5>Frage 11</h5>
                    <h3>Aber Obacht! "Knöpfli" sind keine kleinen Knöpfe oder gar keine kleinen Knoten - sondern?</h3>

                    <p class="spacer"></p>
                </div>

            </div>




            <div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-5 col-12">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="0">
                        <label class="form-check-label" for="single-choice-1">
                        <h3>Nudeln</h3>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-2" value="0">
                        <label class="form-check-label" for="single-choice-2">
                        <h3>Knödel</h3>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-3" value="0">
                        <label class="form-check-label" for="single-choice-3">
                        <h3>Pellkartoffeln</h3>
                        </label>
                    </div>

                    

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-4" value="1">
                        <label class="form-check-label" for="single-choice-4">
                        <h3>Spätzle</h3>
                        </label>
                    </div>


                </div>
                        <input type="hidden" name="lastPageID" value="question-11">
                        <p id="validation-warning" class="warning"></p>
                        <input type="reset" value="Zurücksetzen"><br><br>
                        <a class="btn btn-warning" href="index.php" role="button">❮ Zurück</a>
                        <input class="btn btn-warning" type="submit" value="Weiter ❯">
                        <p class="spacer"></p>
                
            </div>
                
        </form>