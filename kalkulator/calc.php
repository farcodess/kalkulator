
<?php
class Calc {
    public $expression;

    public function __construct(string $expression) {
        $this->expression = $expression;
    }

    public function calculator() {
        $this->expression = preg_replace('/(?<=\d)(\()/i', '*$1',  $this->expression  );
        $result = eval('return ' . $this->expression . ';');
        return $result;
    }
}




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calcu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <style>
    .from{
    padding: 10px;
      
     }
     body {
     font-family: Arial, sans-serif;
     margin: 0 auto;
     padding: 2rem;
     } 

    .button{
      padding:10px;
      margin:1px;
      border-radius:10px;
      margin-bottom:10px;
    }
    .input{
      border-radius: 4px;
      font-size: 14px;
      border-radius: 6px;
      line-height: 1.5;
      padding: 5px 5px;
      transition: box-shadow 100ms ease-in, border 100ms ease-in, background-color 100ms ease-in;
      border: 2px solid #dee1e2;
      color: rgb(14, 14, 16);
      background: #dee1e2;
      display: block;
      height: 36px;
                }
      :focus{
      border-color: #9147ff;
      background: #fff;
           }         


    
    </style>
   <script>
  function appendValue(value) {
  var inputField = document.getElementById("expression");
  if (isNaN(value)) { 
    if  (inputField.value.match(/[+\-/*]$/)) { 
      alert("cuman 1 ngab ");
    } else {
      inputField.value += value;
    }
  } else {
    inputField.value += value;
  }
  
  }

  function hidup(char) {
  const inputField = document.getElementById("expression"); 
  inputField.value += char;
}
 
  function clearValue() {
  const inputField = document.querySelector("#expression");
  inputField.value = "";
  }
  

</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=".php">Calcu</a>
  <button class="navbar-toggler" class="button" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Conbin<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <form action="calc.inc.php" method="post" class="from">
       
        <input class="input" type="teks" id="expression" name="expression" required  readonly ><br> 
        <button class="button" type="button" onclick="appendValue('7')">7</button>
        <button class="button" type="button" onclick="appendValue('8')">8</button>
        <button class="button" type="button" onclick="appendValue('9')">9</button>
        <button class="button" type="button" onclick="appendValue('*')">*</button><br>
        <button class="button" type="button" onclick="appendValue('4')">4</button>
        <button class="button" type="button" onclick="appendValue('5')">5</button>
        <button class="button" type="button" onclick="appendValue('6')">6</button>
        <button class="button" type="button" onclick="appendValue('-')">-</button><br>
        <button class="button" type="button" onclick="appendValue('1')">1</button>
        <button class="button" type="button" onclick="appendValue('2')">2</button>
        <button class="button" type="button" onclick="appendValue('3')">3</button>
        <button class="button" type="button" onclick="appendValue('+')">+</button><br>
        <button class="button" type="button" onclick="clearValue('')">C</button>
        <button class="button" type="button" onclick="appendValue('0')">0</button>
        <button class="button" type="button" onclick="hidup('(')">(</button>
        <button class="button" type="button" onclick="hidup(')')">)</button>
        <button class="button" type="button" onclick="appendValue('.')">,</button>
        <button class="button" type="submit" name="submit">=</button><br>
   
        
    </form>


    
</body>
</html>
