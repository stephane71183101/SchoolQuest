<!--author: Stéphane-->
<?php include "includes/head.php"; ?>

<?php include "includes/header.php";?>
<main>
    <!-- Hier kommt noch der Data-Collector-->
    <div>
        <div class="container-fluid bg-warning text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h1 id="questionTitle">Frage 1</h1>
                        <p id="questionWording">Du bist neu in der Schweiz und hast Papierkram zu erledigen. Wonach erkundigt sich das Amt, wenn es fragt: "Werden Sie betrieben?"<p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="question-02.php" method="post" onsubmit="return validateQuestion();">       
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10" id="answerPanel">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-1"><p>Haben Sie Schulden?</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-2"name="single-choice"value="1">
                            <label class="form-check-label" for="single-choice-2"><p>Sind Sie selbstständig?</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-3"><p>Haben Sie eine Festanstellung?</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-4"><p>Sind sie haftpflichtversichert?</p></label>
                        </div>
                        </div> 
                        <div class="col-1"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div>
                                    <input type="hidden" name="lastPageID" value="question-01">
                                    <input type="hidden" id="achivedPoints" name="achivePoints">
                                    <p id="validation-warning" class="warning"></p>
                                    <button type="submit" id=startButton class="btn btn-outline-danger buttons">Weiter</button>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include "includes/footer.php"; ?>