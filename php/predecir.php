<?php

//ejercicio: Al usuario enviar el formulario envia la placa de su carro la fecha y la hora, indicarle con un predicctor de pico y placa si ese dia y a esa hora el vehiculo puede circular.

//Dias segun terminacion de la placa segun Pico y Placa

//Lunes, los automotores cuyo último dígito de la placa termine en 1 y 2
//Martes, los automotores cuyo último dígito de la placa termine en 3 y 4
//Miércoles, los automotores cuyo último dígito de la placa termine en 5 y 6
//Jueves, los automotores cuyo último dígito de la placa termine en 7 y 8
//Viernes, los automotores cuyo último dígito de la placa termine en 9 y 0

//Horas del dia que no debe transitar segun Pico y Placa

//7:00 a las 9:30 en la mañana
//16:00 a 19:30 en la tarde

//funcion para determinar el ultimo numero de la placa

function ultimo_placa($placausuario){
    $placa_pico = substr($placausuario,-1);
    //echo ultimo_placa($_POST["placa"]);
    return $placa_pico;
}


//funcion para saber que dia de la semana es la fecha que ingreso
function dia_fecha($fechadia) {
    $dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
    $fecha_pico = $dias[date('N', strtotime($fechadia))];
    //echo $fecha_pico;
    return $fecha_pico;
}

//funcion para saber si la hora que ingreso esta dentro o fuera de los rangos de hora
function hora_transito($horadia){
    $hora_usuario = strtotime($horadia);
    $hora_transitoinim = strtotime( "07:00" );//inicio de no transitar en la ma;ana
    $hora_transitofinm = strtotime( "09:30" );//fin de no transtitar en la ma;ana
    $hora_transitoinit = strtotime( "16:00" );//inicio de no transitar en la tarde
    $hora_transitofint = strtotime( "19:30" );//fin de no transtitar en la tarde

    if( $hora_usuario >= $hora_transitoinim and $hora_usuario <= $hora_transitofinm or $hora_usuario >= $hora_transitoinit and $hora_usuario <= $hora_transitofint ) {
        return false;
    } else {
        return true;
    }
}

//funcion para derireccionar y enviar el numero del mensaje a imprimir
function redireccionar($msj){
  header('Location: ../index.php?msj='.$msj);
}

//ciclo que evalua y utiliza las funciones dise;adas para predecir si el vehiculo con la placa indicada puede o no transitar en la fecha y horas colocadas por el usuario
switch (dia_fecha($_POST["fecha"])) {
    case 'Lunes':
        if (ultimo_placa($_POST["placa"]) == 1 or ultimo_placa($_POST["placa"]) == 2){
            if (hora_transito($_POST["hora"]) === true){                                
                redireccionar(1);                
            }else if (hora_transito($_POST["hora"]) === false){                
                redireccionar(2);
            }           
        }else if (ultimo_placa($_POST["placa"]) != 1 and ultimo_placa($_POST["placa"]) != 2){                        
            redireccionar(3);            
        }
    break;
    case 'Martes':
        if (ultimo_placa($_POST["placa"]) == 3 or ultimo_placa($_POST["placa"]) == 4){
            if (hora_transito($_POST["hora"]) === true){                
                redireccionar(1);
            }else if (hora_transito($_POST["hora"]) === false){                
                redireccionar(2);
            }           
        }else if (ultimo_placa($_POST["placa"]) != 3 and ultimo_placa($_POST["placa"]) != 4){                            
                redireccionar(3);            
        }
    break;
    case 'Miercoles':
        if (ultimo_placa($_POST["placa"]) == 5 or ultimo_placa($_POST["placa"]) == 6){
            if (hora_transito($_POST["hora"]) === true){                
                redireccionar(1);
            }else if (hora_transito($_POST["hora"]) === false){                
                redireccionar(2);
            }               
        }else if (ultimo_placa($_POST["placa"]) != 5 and ultimo_placa($_POST["placa"]) != 6){                            
                redireccionar(3);            
        }
    break;
    case 'Jueves':
        if (ultimo_placa($_POST["placa"]) == 7 or ultimo_placa($_POST["placa"]) == 8){
            if (hora_transito($_POST["hora"]) === true){                
                redireccionar(1);
            }else if (hora_transito($_POST["hora"]) === false){                
                redireccionar(2);
            }               
        }else if (ultimo_placa($_POST["placa"]) != 7 and ultimo_placa($_POST["placa"]) != 8){                            
                redireccionar(3);            
        }
    break;
    case 'Viernes':
        if (ultimo_placa($_POST["placa"]) == 9 or ultimo_placa($_POST["placa"]) == 0){
             if (hora_transito($_POST["hora"]) === true){                
                redireccionar(1);
            }else if (hora_transito($_POST["hora"]) === false){                
                redireccionar(2);
            }
        }else if (ultimo_placa($_POST["placa"]) != 9 and ultimo_placa($_POST["placa"]) != 0){                            
                redireccionar(3);            
        }    
    break;
    case 'Sabado':        
        redireccionar(4);        
    case 'Domingo':        
        redireccionar(5);
        break;
}

?>