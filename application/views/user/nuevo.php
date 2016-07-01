
<?php echo sources(true);?>
<div class="container">

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div id='richbox'>
                <?php generate_rich_box("crea tu post: ");?>
                <button id='btnGenerate' class='form-control btn-default' type="button" >Continuar</button>
            </div>
            <div id="form" style="display:none;">
                <button id = 'btnEdit' class='form-control btn-default' type="button" >Editar Post</button>
                <?php
                    echo form_open_multipart('article/insert');

                    echo form_input_text('nombre','Ingrese el nombre del post');

                    echo form_input_text('descripcion', 'Ingrese breve descripcion');
                    echo form_input_textarea('contenido', 'Ingrese contenido');
                    echo form_input_file('selecciona imagen para post');
                    echo form_submit('guardar post');
                    echo form_close();
                 ?>
            <div>

        </div>
    </div>
</div>
<script type="text/javascript">
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
