
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>Libros</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Libros</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">



          <div class="box">
            <div class="box-header">

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarLibros">
              
              Agregar Libros  

              </button>


           
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table  class="table table-bordered table-striped tablas">
                <thead>
                <tr>
                  <th>#</th>
                  <th>titulo</th>
                  <th>autor</th>
                  <th>genero</th>
                  <th>anio_publicacion</th>
                  <th>disponibilidad</th>
                  <th>stock</th>
                  <th>Acciones</th>


                </tr>
                </thead>
                <tbody>


                  <?php

                    $item = null;
                    $valor = null;

                    $libros = ControladorLibros::ctrMostrarLibros($item,$valor);


                    foreach($libros as $key => $valores){

                      echo "

                      <tr>

                      <td>".($key+1)."</td>
                      <td>".$valores["titulo"]."</td>
                      <td>".$valores["autor"]."</td>
                      <td>".$valores["genero"]."</td>
                      <td>".$valores["anio_publicacion"]."</td>
                      <td>" .($valores['disponibilidad'] == 1 ? 'Si' : 'No') . "</td>
                      <td>".$valores["stock"]."</td>



                      <td>

                      <button class='btn btn-primary btnEditarLibro' idLibro=".$valores["id_libros"]." data-toggle='modal' data-target='#modalEditarLibros'>Editar</button>


                      <button class='btn btn-danger btnEliminarLibro' idLibro=".$valores["id_libros"].">Eliminar</button>

                      </td>



                      </tr>

                      ";


                      
                    }


                  ?>


               
              


                </tbody>


               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>



  <div id="modalAgregarLibros" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form rool="form" method="post" action="">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Libros</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="titulo" placeholder="Ingresar el Titulo">
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" name="autor" placeholder="Ingresar Autor">
                  
                </div>
                
              </div>


              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" name="genero" placeholder="Ingresar Genero">
                  
                </div>
                
              </div>

              <div class="form-group">

                  <div class="input-group">

                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                      <input type="date" class="form-control input-lg" name="anio_publicacion" placeholder="Fecha de publicación">
                  </div>
              </div>
              

                 <div class="form-group">

                  <div class="form-check form-check-lg">

                    <input class="form-check-input" type="checkbox" id="disponibilidad" name="disponibilidad">
                      <label class="form-check-label d-block" for="disponibilidad"><strong style="font-size: 19px;"><br> Disponibilidad</strong></label>

                    </div>
                  </div>

               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="number" class="form-control input-lg" name="stock" placeholder="Ingresar stock">
                  
                </div>
                
              </div>



              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Libro</button>
            
          </div>
          

        </form>


        <?php

        $crearLibros = new ControladorLibros();
        $crearLibros->ctrCrearLibros();


        ?>
        
      </div>
      
    </div>
    
  </div>






  <div id="modalEditarLibros" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form rool="form" method="post" action="">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Libros</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">


              <div class="form-group">

                <div class="input-group">


                  <input type="hidden" class="form-control input-lg" name="id_libros" id="id_libros">
                  
                </div>
                
              </div>




              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="editarTitulo" id="editarTitulo">
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" name="editarAutor" id="editarAutor">
                  
                </div>
                
              </div>


               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" name="editarGenero" id="editarGenero">
                  
                </div>



              <div class="form-group">

                  <div class="input-group">

                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                      <input type="date" class="form-control input-lg" name="editarAnio_publicacion" id="editarAnio_publicacion">
                  </div>
              </div>



              <div class="form-group">

                  <div class="form-check form-check-lg">

                    <input class="form-check-input" type="checkbox" id="editarDisponibilidad" name="editarDisponibilidad">
                      <label class="form-check-label d-block" for="disponibilidad"><strong style="font-size: 19px;"><br> Disponibilidad</strong></label>

                    </div>
                  </div>

                


               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="text" class="form-control input-lg" name="editarStock" id="editarStock">
                  
                </div>
              </div>



              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Editar Libros</button>
            
          </div>
          

        </form>


        <?php

        $crearLibros = new ControladorLibros();
        $crearLibros->ctrEditarLibros();


        ?>
        
      </div>
      
    </div>
    
  </div>


        <?php

        $borrarLibros = new ControladorLibros();
        $borrarLibros->ctrBorrarLibros();

        ?>
