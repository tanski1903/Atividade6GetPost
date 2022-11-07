<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Atividade 6</title>
</head>
<body>
    <Form action="atividade6.php" method="get">
        <h1>Cálculo Salário</h1>
        <br><br>
        <label for="a">Valor da Hora R$:</label>
        <input type="number_format(double)" id="vh" name="vh"/>
        <br><br>
        <label for="b">Horas de Aulas por Mês:</label>
        <input type="number_format(int)" id="hm" name="hm"/>
        <br><br>
        <input type="submit" value="Calcular">
    </Form>
    
</body>
</html>