<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio - PHP [Arreglos y Funciones]</title>
    </head>
    <body>
        <?php
            echo "<h1> EJERCICIO ARREGLOS ASOCIATIVOS Y FUNCIONES PHP </h1>";
        
            $vectorAlumnos = array("David"=> $calificaciones=array(80, 80, 63, 61, 86, 88),
            "Luis"=> $calificaciones=array(73, 68, 98, 53, 100, 91),
            "Gerardo"=> $calificaciones=array(50, 63, 76, 57, 68, 61),
            "Marco"=> $calificaciones=array(94, 100, 91, 66, 78, 77),
            "Deysi"=> $calificaciones=array(72, 81, 88, 98, 95, 66),
            "Edgar"=> $calificaciones=array(71, 93, 79, 89, 73, 68,),
            "Jessica"=> $calificaciones=array(68, 61, 52, 80, 93, 79),
            "Lucero"=> $calificaciones=array(54, 100, 95, 66, 91, 66),
            "Vivi"=> $calificaciones=array(86, 78, 77, 75, 54, 100),    
            "Geras"=> $calificaciones=array(79, 73, 79, 60, 66, 84));
        
            echo "<table style='border: 1px solid gray;'>";
            echo "<tr>";
            echo "<th style='border: 1px solid grey;'> Nombre </th>"; 
            echo "<th style='border: 1px solid grey;'> Materia 1 </th>";
            echo "<th style='border: 1px solid grey;'> Materia 2 </th>";
            echo "<th style='border: 1px solid grey;'> Materia 3 </th>";
            echo "<th style='border: 1px solid grey;'> Materia 4 </th>";
            echo "<th style='border: 1px solid grey;'> Materia 5 </th>";
            echo "<th style='border: 1px solid grey;'> Materia 6 </th>";
            echo "<th style='border: 1px solid grey;'> Promedio Alumno </th>";
            echo "</tr>";
        
            $arrayPromedioAlumnos = obtenerPromedioAlumnos($vectorAlumnos);    
        
            obtenerPromedioMaterias($vectorAlumnos);
            
            echo "<td style='border: 1px solid grey;'>";
            $promedioGeneral = obtenerPromedioGeneral($vectorAlumnos);
            echo $promedioGeneral;
            echo "</td>";
            
            echo "</table>";
        
            obtenerMejorPromedio($arrayPromedioAlumnos);
            obtenerPromediosSuperioresAlGeneral($arrayPromedioAlumnos, $promedioGeneral);
            
        
            function obtenerPromedioAlumnos($vectorAlumnos) {
                $promedioAlumno = 0;
                $contadorCalificacionesAlumnos = 0;
                $sumatoriaAlumno = 0;
                $arrayPromedioAlumnos = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $alumno = 0;
                
                foreach ($vectorAlumnos as $key => $value) {
                    echo "<tr> <td style='border: 1px solid grey;'> ";
                    echo $key;
                    echo "</td>";
                
                    foreach ($value as $calificaciones) {
                        echo "<td style='border: 1px solid grey;'> ";
                        echo $calificaciones;
                        echo "</td>";
                        $sumatoriaAlumno += $calificaciones;
                        $contadorCalificacionesAlumnos++;
                    } 

                    $promedioAlumno = $sumatoriaAlumno/$contadorCalificacionesAlumnos;
                    $arrayPromedioAlumnos[$alumno] = $promedioAlumno;

                    $contadorCalificacionesAlumnos = 0;
                    $sumatoriaAlumno = 0;
                    $alumno++;

                    echo "<td style='border: 1px solid grey;'> ";
                    echo $promedioAlumno;
                    echo "</td>";

                    echo "</tr>";
                }
                
                return $arrayPromedioAlumnos;
            }    
        
            function obtenerPromedioMaterias($vectorAlumnos) {
                $materia = 0;
                $arraySumatoriaMaterias = array(0, 0, 0, 0, 0, 0);

                foreach ($vectorAlumnos as $clave => $valor) {
                    foreach ($valor as $calificaciones) {
                        $arraySumatoriaMaterias[$materia] += $calificaciones;
                        $materia++;
                    }

                    $materia = 0;
                }

                echo "<tr> <td style='border: 1px solid grey;'> Promedio Materia </td>";
                $arrayPromedioMaterias = array(0, 0, 0, 0, 0, 0);

                foreach ($arraySumatoriaMaterias as $sumatorias) {
                    $promedioMateria = $sumatorias/sizeof($vectorAlumnos);
                    $arrayPromedioMaterias[$materia] = $promedioMateria;
                    echo "<td style='border: 1px solid grey;'>";
                    echo $promedioMateria;
                    echo "</td>";
                    $materia++;
                }
            }
        
            function obtenerPromedioGeneral($vectorAlumnos) {
                $promedioGeneral = 0;
                $sumatoriaTotal = 0;
                $contadorCalificaciones = 0;
                
                foreach ($vectorAlumnos as $key => $value) {
                    foreach ($value as $calificaciones) {
                        $sumatoriaTotal += $calificaciones;
                        $contadorCalificaciones++;
                    }
                }
                $promedioGeneral = $sumatoriaTotal/$contadorCalificaciones;
                
                return $promedioGeneral;
            }
        
            function obtenerMejorPromedio($arrayPromedioAlumnos) {
                sort($arrayPromedioAlumnos);
                echo "<br> Mejor Promedio alumnos: " . $arrayPromedioAlumnos[sizeof($arrayPromedioAlumnos)-1];
            }
        
            function obtenerPromediosSuperioresAlGeneral($arrayPromedioAlumnos, $promedioGeneral) {
                $promedioSuperiorAlGeneral = 0;
        
                for ($i=0; $i<sizeof($arrayPromedioAlumnos); $i++) {
                    if ($arrayPromedioAlumnos[$i]>$promedioGeneral) {
                        $promedioSuperiorAlGeneral++;
                    }
                }
                
                echo "<br> Promedios superiores al general: " . $promedioSuperiorAlGeneral;
            }
        ?>
        
        <table>
            <tr>
                <th></th>
            </tr>
        </table>
    </body>
</html>