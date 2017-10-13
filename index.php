<Html>
  <Head>
  <title>Practica 12-Variables PHP</title>
  <meta charset="utf-8"/>
  </Head>
  <Body>
   <?php
   $Nombre='Lopez Hernandez Jehovani Alexander';
   $Edad=20;
   $Salario=10000.50;
   $Estatus=true;
   echo "Valores<Br/>";
   echo "Nombre: ".$Nombre.'<Br/>';
   echo "Edad: ".$Edad.'<Br/>';
   echo "Salario: ".$Salario.'<Br/>';
   echo "Estatus: ".$Estatus.'<Br/>';
   ?>
   <H1>Operaciones Aritmeticas</H1>
   <?php
   echo "<H1>Operaciones Aritmeticas</H1>";
   $Valor1=15;
   $Valor2=7;
   $Suma=$Valor1+$Valor2;
   $Resta=$Valor1-$Valor2;
   $Multiplicacion=$Valor1*$Valor2;
   $Divicion=$Valor1/$Valor2;
   echo "Valor1: ".$Valor1.'<Br/>';
   echo "Valor2: ".$Valor2.'<Br/>';
   echo "La Suma Es: ".$Suma.'<Br/>';
   echo "La Resta Es: ".$Resta.'<Br/>';
   echo "La Multiplicacion Es: ".$Multiplicacion.'<Br/>';
   echo "La Divicion Es: ".$Divicion.'<Br/>';
   ?>
  </Body>
</Html>