<div class="container">

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <a href = "<?= base_url()?>article/nuevo" class = "btn btn-default">crear nuevo post</a>
            <?php
            $content  = "<div class='table-responsive'>";
        		$content .= "<table class='table table-hover table-bordered table-condensed'>";
        		$content .=	"<thead>";
        		$content .=	"<tr>";
        		$content .= "<th style='text-align: center;'>Título</th>";
            $content .= "<th style='text-align: center;'>Modificar</th>";
            $content .= "<th style='text-align: center;'>Eliminar</th>";
        		$content .=	"</tr>";
        		$content .=	"</thead>";
        		$content .=	"<tbody>";
        			foreach ($matriz->result_array() as $row) {
                  $id = $row['id'];
        				$content .= "<tr id= tr$id>";
              	foreach ($row as $key => $value) {
                  if ($key=='post') {
                  $content .= "<td style='text-align: center;'>" . $value . "</td>";
                  $content .= "<td style='text-align: center;'><a href=". base_url("article/modificar")."/".$id." class='btn btn-info btn-xs'>Modificar</a> </td>";
                  $content .= "<td style='text-align: center;'><button class='btn btn-danger btn-xs'name='$value' id='$id'>Eliminar</button></td>";
                  }

        				}
        				$content .= "</tr>";
        			}
        		$content .=	"</tbody>";
        		$content .=	"</table>";
        		$content .= "</div>";
            echo $content;
             ?>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("button").on("click",function (e) {
        var name = $(this).attr('name');
        var id = $(this).attr('id');
        var request;
        if(request==true){
          request.abort();
        }
      request = $.ajax({
        url:"<?php  echo base_url('article/delete')?>",
        type:"Post",
        data:"postname=" + name +"&id=" +id
      });

      request.done(function (response,textStatus,jqXHR) {
        console.log(response);
        $("#tr" + response).html("");
      });
      request.fail(function (jqXHR,textStatus,thrown) {
        console.log("Erros :" + textStatus);
      });

      request.always(function () {
        console.log("termino la ejecucion de ajax");
      });

      e.preventDefault();
    });
  });
</script>
