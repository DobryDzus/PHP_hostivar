<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="jmeno">Jméno</label>
        <input type="text">

        <label for="prijmeni">Příjmění</label>
        <input type="text">
        <br>

        <label for="heslo">Heslo</label>
        <input type="password" required>

        <label for="email">Email</label>
        <input type="email" required>

        <br>
        <label for="pohlavi">Muž</label>
        <input type="radio" value="muz" name="pohlavi">
        <label for="pohlavi">Žena</label>
        <input type="radio" value="zena" name="pohlavi">

        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>