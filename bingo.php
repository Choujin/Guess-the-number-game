<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Raad het getal</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css" />
   <script src="main.js"></script>

   <style>
   body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  font-size: 16px;
  letter-spacing: 2px;
  justify-content: center;
  text-align: center;
}

h1 {
    font-family: "Courier New", Courier, monospace;
    font-size: 30px;
    color: #275873;
}

button {
  text-transform: uppercase;
  padding: 20px;
  margin: 80px;
  background: green;
  color: white;
  border-radius: 15px;
}

button:hover{
  color: green;
  border: 1px solid green;
  background: white;
}

input{
 min-width: 75px;
 min-height: 75px;
 font-size: 2em;
 border-radius: 15px;
}


input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
 -webkit-appearance: none;
 margin: 0;
}




   </style>
</head>

<body>

<h1>Raad het getal tussen de 0 en 10</h1>

   <form action="bingo.php" method="post">
       <input name="ingevoerdeGetal" type="number" min=1 max=10>
       <button type="submit">Check</button>
   </form>


<?php
$teRadenGetal = 7;
if ($_SERVER["REQUEST_METHOD"] == "POST"){

if (!isset($_SESSION["score"]))
   $_SESSION["score"] = 0;

$ingevoerdeGetal = $_POST["ingevoerdeGetal"];

if ($teRadenGetal == $ingevoerdeGetal) {
   echo "Goed geraden";
   $_SESSION["score"] += 1;

}
echo "<br>Score: " . $_SESSION["score"];
}
?>

</body>

</html>


