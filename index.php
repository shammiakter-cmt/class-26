<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Computer{
        public $RAM;
        public $processor;
        public $mouse;
        public $keyboard;

        function SetRAM($v){
            $this->RAM =$v;

        }
         function Setprocessor($v){
            $this->processor =$v;

            }

             function Setmouse($v){
            $this->mouse =$v;

            }

             function Setkeyboard($v){
            $this->keyboard=$v;

            }

            function GetRAM(){
                return $this->RAM;
            }

             function Getprocessor(){
                return $this->processor;
            }

             function Getmouse(){
                return $this->mouse;
            }

             function Getkeyboard(){
                return $this->keyboard;
            }




        }
        // object
        $HP6400 = new Computer();
        $HP6400->SetRAM("4GB");
        $HP6400->Setprocessor("2.5GHz"); 
        $HP6400->Setmouse("A4TECH"); 
        $HP6400->Setkeyboard("A4TECH");
        
        // another object
        $Dell3211 = new Computer();
        $Dell3211->SetRAM("8GB"); 
        $Dell3211->Setprocessor("3GHz");  
        $Dell3211->Setmouse("DELL"); 
        $Dell3211->Setkeyboard("DELL");

        // object function call
        echo $Dell3211->GetRAM();
        echo "<br>";
        echo $Dell3211->Getprocessor();
        echo "<br>";
        echo $Dell3211->Getmouse();
        echo "<br>";
        echo $Dell3211->Getkeyboard();
        echo "<br>";
        echo $HP6400->GetRAM();
        echo "<br>";
        echo $HP6400->Getprocessor();
        echo "<br>";
        echo $HP6400->Getmouse();
        echo "<br>";
        echo $HP6400->Getkeyboard();

       

    
    ?>
</body>
</html>