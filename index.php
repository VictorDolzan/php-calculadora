<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="calculadora.php" method="POST">
        <input name="n1" type="number" placeholder="Primeiro Numero">
        <input name="n2" type="number" placeholder="Segundo Numero">
        <select name="operadores" id="1">
            <option value="vazio"></option>
            <option value="soma">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="mult">*</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
</body>

</html>