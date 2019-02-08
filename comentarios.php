<div class="detailBox">
    <div class="titleBox">
      <label>Comentarios</label>
    </div>
    <div class="commentBox">
        <p class="taskDescription">Últimos comentarios.</p>
    </div>
    <div class="actionBox">
        <ul class="commentList">
            <?php
                //preguntar si se ha pulsado el boton annadir ...
                $conexion = mysqli_connect("localhost","root","","comentarios");
                //query para buscar comentarios
                if($resultado = $conexion->query("SELECT * from coment")) {
                    if (mysqli_num_rows($resultado) > 0) {
                        while($row = mysqli_fetch_assoc($resultado)) {
                            echo '<li>';
                                echo '<div class="commentText">';
                                    echo "<p class=''>".$row['nombre']."</p><p>".$row['comentario']."</p><span class='date sub-text'>".$row['fecha_hora']."</span>";
                                echo '</div>';
                            echo '</li>';
                        }
                    }
                }else {
                    echo "Falló la sentencia: (" . $conexion->errno . ") " . $conexion->error; 
                }
                mysqli_close($conexion);
            ?>
            <li>
                <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                </div>
            </li>
            <li>
                <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                </div>
            </li>
            <li>
                <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                </div>
            </li>
            <li>
                <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                </div>
            </li>
            <li>
                <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                </div>
            </li>
            <li>
                <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                </div>
            </li>
        </ul>
        <form class="form-inline" role="form">
            <div class="form-group">
                <form action="#" method="POST"> 
                    <input type="text" class="form-control" id="nombre" placeHolder="Nombre (requerido)" required>
                    <textarea class="form-control" maxlength="128" placeHolder="Escriba aquí su comentario máximo 128 caracteres"></textarea>    
                    <input type="submit" class="btn btn-dark" id="annadir" value="Añadir">
                </form>
            </div>
        </form>
    </div>
</div>