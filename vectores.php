<html>

<body>
<h1> ===== Vectores Asociativos ===== </h1>
    <?php

        $vector_alumnos= array(
            "Ana" => array(100,90,80,70,60,50),
            "Luis" => array(100,100,80,68,60,60),
            "Juan" => array(90,90,80,85,94,87),
            "Maria" => array(80,90,80,70,60,84),
            "Jose" => array(64,90,80,70,60,72),
            "Lucia" => array(100,90,80,70,55,85),
            "Carlos" => array(76,90,80,70,60,69),
            "Carmen" => array(99,90,78,77,60,98),
            "Pedro" => array(62,90,80,70,87,50),
            "Consuelo" => array(88,90,80,70,91,92),
            );

        echo "PROMEDIO POR ALUMNO <br>";
        for($i=0; $i<=sizeof($vector_alumnos['Ana']); $i++){
          $sumaAna =  $sumaAna+($vector_alumnos['Ana'][$i]);
        }
        $p_ana = $sumaAna/6;
        echo "Promedio Ana: ".($p_ana);

        for($i=0; $i<=sizeof($vector_alumnos['Luis']); $i++){
            $sumaLuis =  $sumaLuis+($vector_alumnos['Luis'][$i]);
        }
        $p_luis = $sumaLuis/6;
          echo "Promedio Luis: ".($p_luis);

        for($i=0; $i<=sizeof($vector_alumnos['Juan']); $i++){
            $sumaJuan =  $sumaJuan+($vector_alumnos['Juan'][$i]);
        }
        $p_juan = $sumaJuan/6;
          echo "Promedio Juan: ".($p_juan);

        for($i=0; $i<=sizeof($vector_alumnos['Maria']); $i++){
            $sumaMaria =  $sumaMaria+($vector_alumnos['Maria'][$i]);
        }
        $p_maria = $sumaMaria/6;
          echo "Promedio Maria: ".($p_maria);

        for($i=0; $i<=sizeof($vector_alumnos['Jose']); $i++){
            $sumaJose =  $sumaJose+($vector_alumnos['Jose'][$i]);
        }
        $p_jose = $sumaJose/6;
          echo "Promedio Jose: ".($p_jose);

        for($i=0; $i<=sizeof($vector_alumnos['Lucia']); $i++){
            $sumaLucia =  $sumaLucia+($vector_alumnos['Lucia'][$i]);
        }
        $p_lucia =  $sumaLucia/6;
          echo "Promedio Lucia: ".($p_lucia);

          for($i=0; $i<=sizeof($vector_alumnos['Carlos']); $i++){
            $sumaCarlos =  $sumaCarlos+($vector_alumnos['Carlos'][$i]);
        }
        $p_carlos = $sumaCarlos/6;
          echo "Promedio Carlos: ".($p_carlos);

          for($i=0; $i<=sizeof($vector_alumnos['Carmen']); $i++){
            $sumaCarmen =  $sumaCarmen+($vector_alumnos['Carmen'][$i]);
        }
        $p_carmen = $sumaCarmen/6;
          echo "Promedio Carmen: ".($p_carmen);

          for($i=0; $i<=sizeof($vector_alumnos['Pedro']); $i++){
            $sumaPedro =  $sumaPedro+($vector_alumnos['Pedro'][$i]);
        }
        $p_pedro = $sumaPedro/6;
          echo "Promedio Pedro: ".($p_pedro);

          for($i=0; $i<=sizeof($vector_alumnos['Consuelo']); $i++){
            $sumaConsuelo =  $sumaConsuelo+($vector_alumnos['Consuelo'][$i]);
        }
        $p_consuelo = $sumaConsuelo/6;
          echo "Promedio Consuelo: ".($p_consuelo);

        echo "<br>";

        $promedio_general = (($p_ana+$p_carlos+$p_carmen+$p_consuelo+$p_jose+$p_juan+$p_lucia+$p_luis+$p_maria+$p_pedro)/10);
        echo "PROMEDIO GENERAL: ".$promedio_general;
        echo "<br>";

        $vector_promedios = array($p_ana,$p_carlos,$p_carmen,$p_consuelo,$p_jose,$p_juan,$p_lucia,$p_luis,$p_maria,$p_pedro);
        

        echo "PROMEDIO MAS ALTO: ". max($vector_promedios);

        for($i=0; $i<=sizeof($vector_promedios); $i++){
            if($vector_promedios[$i]>$promedio_general){
                $cont++;
            }else{

            }
            
        }
        echo "CANTIDAD DE PROMEDIOS MAYORES AL PROMEDIO GENERAL DEL GRUPO: ".$cont;

        echo "<br>";
        
        

        

        
    ?>
</body>

</html>