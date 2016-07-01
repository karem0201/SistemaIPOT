
<?php echo sources(true);?>
<header id ='headerimg' class="intro-header" style="background-image: url('<?= base_url()?>public/imagenes/<?=$imagen?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-8 ">
                <div class="site-heading">
                  <?php
                  $attribs = array('id'=>'changeimg');
                  echo form_open_multipart('article/updateImagen',$attribs);
                  echo form_input_text('id','',array('style'=>'display:none', 'value'=>$row->id));
                  echo form_input_file('Cambiar imagen');
                  echo form_submit('guardar');
                  echo form_close();
                   ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div id='richbox'>
                <?php
                 generate_rich_box("Modifica tu post: "  ,$row->contenido);?>
                <button id='btnGenerate' class='form-control btn-default' type="button" >Continuar</button>
            </div>
            <div id="form" style="display:none;">
                <button id = 'btnEdit' class='form-control btn-default' type="button" >Editar Post</button>
                <?php
                    echo form_open('article/update');
                    $atrib = array('value'=>$row->post);
                    echo form_input_text('id','',array('style'=>'display:none', 'value'=>$row->id));
                    echo form_input_text('nombre','Ingrese el nombre del post ',array('value'=>$row->post));
                    echo form_input_text('descripcion', 'Ingrese breve descripcion',array('value'=>$row->subdescripcion));
                    echo form_input_textarea('contenido', 'Ingrese contenido',array('value'=>$row->imagen));

                    echo form_submit('modificar post');
                    echo form_close();
                 ?>
            <div>

        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function (){
    var request;
    $("#changeimg").submit(function (e) {

        //Abostamos cualquier request en proceso
        if(request){
            request.abort();
        }

        //obtenemos el objeto form
        var $form=$(this);

        //obtenemos todos los inputs de form
        var $inputs= $form.find("input,select,button,textarea");

        //obtenemos la data del form
        var formData = new FormData($(this)[0]); // no es necesario sino se usa multipart

        //serializamos los datos para enviados
        var formDataSerialized = $(this).serialize();

        //DEsactivamos los inputs para que el usuario no haga otro submit
        $inputs.prop("disabled",true);

        //realizamos el submit
      request = $.ajax({
        cache: false, //solo para multipart
        contentType: false,//solo para multipart
        processData:false,//solo para multipart
        url: $form.attr('action'),
        type:$form.attr('method'),
        data: formData
        });

        //Evento Done [se realiza con exito la operacion]
      request.done(function (response,textStatus,jqXHR) {
        console.log(response);
        if(response.indexOf("http") > -1){
            $("#headerimg").attr(
              {'style': 'background-image: url(' + response +')'}
            );
        }else{
          alert("No es posible modificar, intenta con otra imagen");
        }
      });

      //Evento Fail [falla la operacion]
      request.fail(function (jqXHR,textStatus,errorThrown) {
        alert("no es posible modificar");
      });

      request.always(function () {
        $inputs.prop("disabled",false);
        console.log("fuciona" );
      });

      e.preventDefault();
    });
  });

//richtext
$(function(){
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
        $('.dropdown-menu input').click(function() {return false;})
            .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () {
        var overlay = $(this), target = $(overlay.data('target'));
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });
      if ("onwebkitspeechchange"  in document.createElement("input")) {
        var editorOffset = $('#editor').offset();
        //$('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
      } else {
        $('#voiceBtn').hide();
      }
    };
    function showErrorAlert (reason, detail) {
        var msg='';
        if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
        else {
            console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+
         '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
    };
    initToolbarBootstrapBindings();
    $('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
    window.prettyPrint && prettyPrint();
  });

  $("#btnGenerate").click(function () {
    //funcion del boton generate
      $("#form").css("display","initial");
      $("#richbox").css("display","none");
      $("#contenido").val($("#editor").cleanHtml(true));
  });

  $("#btnEdit").click(function () {
    //funcion del boton generate
      $("#form").css("display","none");
      $("#richbox").css("display","initial");
  });

</script>
