<?php
    $articulos=[
        ["nombre"=>'var1',"valor"=>150],
        ["nombre"=>'var2',"valor"=>50],
        ["nombre"=>'var3',"valor"=>60],
        ["nombre"=>'var4',"valor"=>200]

    ];
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Proyecto promedio</title>
</head>

<body>
    <table>
        <tr>

            <td>NOMBRE</td>

            <td>PRECIO</td>

        </tr>

        <tr>

            <td>Articulo 1</td>

            <td><?php
                echo $precio1 = 150;

                ?>
            </td>
        </tr>

        <tr>

            <td>Articulo 2</td>

            <td><?php
                echo $precio2 = 50;
                ?>
            </td>
        </tr>

        <tr>

            <td>Articulo 3</td>

            <td><?php
                echo $precio3 = 60;

                ?>
            </td>
        </tr>

        <tr>

            <td>Articulo 4</td>

            <td><?php
                echo $precio4 = 200;

                ?>
            </td>
        </tr>

        <tr>

            <td>TOTAL</td>

            <td><?php


                function total()
                {



                     $precio1 = 150;
                     $precio2 = 50;
                     $precio3 = 60;
                     $precio4 = 200;

                    $promedio = ($precio1+$precio2+$precio3+$precio4)/4;

                    return  $promedio;
                }

                echo total();
                ?>
            </td>
        </tr>

    </table>
</body>

</html>