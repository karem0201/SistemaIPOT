<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Provincias españolas en pdf</title>

    <style type="text/css">
        body {
         background-color: #fff;
         padding: 0px 10px;
         font-family: Lucida Grande, Verdana, Sans-serif;
         font-size: 14px;
         color: #4F5155;
        }
        .resultado table{
             margin-top: 20px;
             width: 100%;
             font-size: 10pt;
        }

        .resultado th{
             padding: 5px;
        }
        .resultado td{
              padding-left: 15px;
              background: #cff3ef;
        }

        .resultado thead{
                  background: #030825;
                  color:#ffffff;
        }

       .resultado .fila{
             background: #cbecf1;
        }

        .formulario table{
             margin-top: 20px;
              width: 90%;
              font-size: 10pt;
        }
        .titulo{
             text-align: center;
             font-weight: bolder;

        }
        .opciones{
              display: none;
        }
        /* estilos para el footer y el numero de pagina */
        @page { margin: 120px 30px; }
        #header {
            position: fixed;
            left: 0px; top: -120px;
            right: 0px;
            border-bottom: #19901d solid 10px;
            border-bottom-style:groove;
            background-color: transparent;
            color: #0a0552;
            text-align: center;
        }
        #footer {
            position: fixed;
            left: 0px;
            bottom: -90px;
            right: 0px;
            height: 50px;
            text-align: right;


        }
        #footer .page:after {
            content: counter(page);

        }

        #footer table{
              background-color: #333;
              color:#ffffff;
              width: 100%;
             padding: 2px 5px;
             text-align: left;
        }

        p{
              padding: 0px;
              margin: 0px;
        }
    </style>
</head>
<body >


                      <!--header para cada pagina-->
                      <div id="header">
                               <table>
                                     <tr>
                                           <td >
                                                 <img src="C:/xampp/htdocs/SistemaIPOT/plantillas/images/logo.png" alt="" />
                                           </td>
                                           <td style="vertical-align:bottom;">
                                                Instituto Peruano de Ortopedia y Traumatología - CRP
                                           </td>
                                     </tr>
                               </table>
                      </div>

                            <div class="titulo">
                                  REQUERIMIENTO DE MATERIALES
                            </div>
                            <div class="formulario">
                                  <table>
                                        <thead>
                                              <tr>
                                                    <td>
                                                          Paciente: <?= $data->nombre.", ".$data->apPaterno." ".$data->apMaterno?>
                                                    </td>
                                                    <td >
                                                          Fecha: <?= $data->fecProb?>
                                                    </td>
                                              </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                                    <td>
                                                          <?php $datestring = 'Y-m-d' ?>
                                                          Edad: <?= date($datestring,now()) - $data->fecNac?>a
                                                    </td>
                                                    <td >
                                                          Hora: <?=$data->horaProb?>
                                                    </td>
                                              </tr>
                                        </tbody>
                                  </table>
                            </div>
                            <div class="resultado ">
                                  <table >
                                        <thead>
                                             <tr>
                                                    <th>
                                                          Cantidad
                                                    </th>
                                                    <th>
                                                          Categria
                                                    </th>
                                                    <th>
                                                          Material
                                                    </th>
                                                    <th>
                                                          Proveedor
                                                    </th>
                                             </tr>
                                        </thead>
                                       <tbody>
                                             <?php foreach ($material as $key){
                                                   $material=$key->nombre." ".$key->medida;
                                                 echo "<tr>
                                                             <td>".$key->cantidad."</td>
                                                             <td>".$key->tipoMat."</td>
                                                             <td>".$material."</td>
                                                             <td>".$key->marca."</td>
                                                             </tr>";
                                              } ?>
                                       </tbody>

                                  </table>
                            </div>

                      <!--footer para cada pagina-->
                      <div id="footer">
                            <div>Medico: Gustavo Delgado Razuri</div><br>
                            <table>
                                  <tr>
                                        <td>
                                             Cal. Ricardo Angulo 180 - San Isidro <br>
                                             Tlfno: 256 2466
                                        </td>
                                        <td>
                                             <br>
                                              <p class="page"></p>
                                        </td>
                                  </tr>
                            </table>
                      </div>

</body>
</html>
