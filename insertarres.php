<html>

<head>
    <title> Insertando Registro </title>
</head>

<body>
    <?php 
   if (isset($_POST["clave_empleado"])) {
         $clave_empleado =$_POST["clave_empleado"];
         $nombre =$_POST["nombre"];
         $APPAT =$_POST["APPAT"];
         $APMAT =$_POST["APMAT"];
         $telefono =$_POST["telefono"];
         $domicilio =$_POST["domicilio"];
         $sueldo_semanal =$_POST["sueldo_semanal"];

         $enlace = mysqli_connect("b95aiisinualn12r5pox-mysql.services.clever-cloud.com","upefegklpz4qi65q","4XxaVUS1kABWQsPpruKP","b95aiisinualn12r5pox");
         if (!$enlace)
         {	 
            echo "Error no existe la BD ";
            exit;
         }
         mysqli_query ($enlace, "INSERT INTO minisuper VALUES ('$clave_empleado','$nombre','$APPAT','$APMAT','$telefono','$domicilio','$sueldo_semanal')");
         echo "<script language='javascript'> alert ('REGISTRO AGREGADO CON EXITO ')</script>";
         header ("refresh:1;url=index.html");
         mysqli_close($enlace);  
   } else {
       echo "<script language='javascript'> alert ('NO SE HA ENVIADO INFORMACION')</script>";
         header ("refresh:1;url=index.html");
   }
  ?>
</body>

</html>