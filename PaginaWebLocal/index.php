<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PaginaWeb</title>
    </head>
    <body>

        <style>
            .cuadro{
            background-color:red;

            }
            #b{
                border: 2px solid;
            }
       
            #p{
                border: 5px solid;
            }
            #h1{
                font-size: 18px;
                font-family: "Arial";
            }
        </style>
        <form>
            <label>ID</label>
            <input type="text" oneclick="Alerta1" class="cuadro"><br>
            <label>Nombre</label>
            <input type="text" oneclick="alerta2" class="cuadro"><br>
            <label>Edad</label>
            <input type="text" oneclick="alerta3" class="cuadro"><br>
            <input type="submit" id="p" value="Aceptar">
        </form>
       <script>
        Alerta1();
        function Alerta1(){
            alert("HOLAAAA");
        }
        </script> 
    </body>
</html>
