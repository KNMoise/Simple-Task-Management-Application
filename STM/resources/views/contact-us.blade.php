<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="contact-us">
        <h2>Contact Us</h2>
        <form action="/send_email" method="post">
            @csrf
            <label for="name">Name: </label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email: </label><br>
            <input type="text" id="email" name="email"><br>
            <label for="message">Message: </label><br>
            <textarea id="message" name="message"></textarea><br>
            <button type="submit">Send Message</button>
        </form>
    </div>

</body>
</html>