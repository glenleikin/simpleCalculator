<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Very Simple Calculator</title>
</head>
<body>
        <h1>Calculator</h1>
        <br><br><br>
            <div>
            <form action="index.php" method ="post">
                <input type="number" placeholder="Enter first number" name="firstN" class ="formStyle">
                <br><br>
                <select name="operatorSign" class ="formStyle">
                    <option>Select Operator</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <br><br>
                <input type="number" placeholder="Enter second number" name="secondN" class ="formStyle">
                <br><br>
                <input type="submit" name = "calculate" value="Calculate" class="formButton">
            </form>
            <?php
                if(isset($_POST["calculate"])){
                    $number1 = $_POST['firstN'];
                    $number2 = $_POST['secondN'];
                    $operator = $_POST['operatorSign'];
                    eval("\$result = $number1 $operator $number2;");   
                    ?>           
                    <br>
                    <h1> Result is <?php echo $result?></h1> 
                    <?php
                }
            ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
