// JavaScript Document

            $(document).ready(function(){
                   var $registrar = $('#registrar');
                   var $listaMat;
				fn_cantidad();

                        function fn_cantidad(){
      				cantidad = $("#grilla tbody").find("tr").length;
      				$("#span_cantidad").html(cantidad);
                              return cantidad;
      			};

                  $("#agregar").click(function fn_agregar(){
                        if($("#idMaterial").val() !=0){
                              $('#agregar').removeAttr("title");
                            cadena = "<tr>";
                            cadena = cadena + "<td>" + $("#idMaterial").val() + "</td>";
                            cadena = cadena + "<td>" + $("#idCategoria option:selected").text() + "</td>";
                            cadena = cadena + "<td>" + $("#idMaterial option:selected").text() + "</td>";
                            cadena = cadena + "<td>" + $("#Cant").val() + "</td>";
                            cadena = cadena + "<td><a class='elimina fa fa-times-circle'></a></td>";
                            $("#grilla tbody").append(cadena);
                            /*
                                aqui puedes enviar un conunto de tados ajax para agregar al usuairo
                                $.post("agregar.php", {ide_usu: $("#valor_ide").val(), nom_usu: $("#valor_uno").val()});
                            */

                            fn_dar_eliminar();
            				cantidad = fn_cantidad();

                                    var $registrar = $('#registrar');
                                    if(cantidad > 0){
                                          $registrar.removeAttr('disabled','disabled');
                                    }
                              }else{
                                    // $(this).attr({
                                    //   'data-toggle':"popover",
                                    //   'data-trigger':"focus",
                                    //   title:"karem", 'data-content':"And here's some amazing content. It's very engaging. Right?"

                              //   });
                              }
                });

                  function fn_dar_eliminar(){
                      $("a.elimina").click(function(){
                          id = $(this).parents("tr").find("td").eq(0).html();

                              $(this).parents("tr").fadeOut("normal", function(){
                                  $(this).remove();
                                  cantidad = fn_cantidad();
                                  /*
                                      aqui puedes enviar un conjunto de datos por ajax
                                      $.post("eliminar.php", {ide_usu: id})
                                  */

                                  if (cantidad==0)
                                  {
                                        $registrar.attr('disabled','disabled');
                                  }
                              })


                      });
                  };


//pruebas para realizar typeahead
                  var auto = $("#k")
                  // $.get('mostrarPacientes?name='+$(auto).val(), function(data){
                  //
                  //       $(auto).typeahead({ source:data });
                  //       console.log(data);
                  //    },'json');
                     //example_collection.json
                     // ["item1","item2","item3"]

                  $(auto).change({
                         source : function (query, process){
                              return $.get( 'mostrarPacientes?name='+$(auto).val(),  function(data){console.log(data);
                                  $(auto).typeahead({ source:data });
                           });
                     }
                     //    source: function(auto,process){
                     //          return $.post( 'mostrarPacientes?name='+$(auto).val(),  function  ( data )  {console.log(data);
                     //                return data;
                     //          });
                     //   }
                  });

            });
