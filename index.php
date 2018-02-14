<?php
require 'logic.php';
?>

<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Age Calculator</title>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
        crossorigin='anonymous'>
    <link rel='stylesheet' href='assets/css/styles.css'>
</head>
<body>
    <h1>Age Calculator</h1>
    <p>Will calculate your age in various time scales. In seconds to months, because you should already know years. Dates are limited to between 1900/01/01 and 2018/02/01.</p>
    <form method='GET' action='index.php'>
        <div class='form-group'>
            <label for="day">Your Date of Birth:</label>
            <input type='date' class='form-control' id='day' name='day' min='1900-01-01' max='2018-02-01'>
        </div>
        <div class='form-group'>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio1' value='secs'>
                <label class="form-check-label" for="radio1">
                    Seconds
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name="timeScale" id='radio2' value='mins'>
                <label class="form-check-label" for="radio2">
                    Minutes
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio3' value='hours'>
                <label class="form-check-label" for="radio3">
                   Hours
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio4' value='days'>
                <label class="form-check-label" for="radio4">
                    Days
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio5' value='weeks'>
                <label class="form-check-label" for="radio5">
                    Weeks
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio6' value='months'>
                <label class="form-check-label" for="radio6">
                    Months
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio6' value='all' checked>
                <label class="form-check-label" for="radio6">
                    Combined
                </label>
            </div>
        </div>
        <div class='form-group'>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="check1">
                <label class="form-check-label" for="check1">
                    Calculate number of leap years passed?
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
</body>
</html>