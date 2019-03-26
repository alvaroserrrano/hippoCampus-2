<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <main>
        <p class="paragraph">Your opinion matters!</p>
        <form class="contactForm" action="contactform.php" method="post" class="form">
            <div class="form__group">
                <input type="text" name="name" class="form__input" id="">
                <label for="name" class="form__label"></label>
            </div>
            <div class="form__group">
                <input type="text" name="mail" class="form__input" id="">
                <label for="mail" class="form__label"></label>
            </div>
            <div class="form__group">
                <input type="text" name="subject" class="form__input" id="">
                <label for="subject" class="form__label"></label>
            </div>
            <div class="form__group">
                <input type="text" name="message" class="form__input" id="">
                <label for="message" class="form__label"></label>
            </div>
            <div class="form__group">
                <button type="submit" class="btn btn--green">Send mail &rarr;</button>
            </div>
        </form>
    </main>
</body>
</html>