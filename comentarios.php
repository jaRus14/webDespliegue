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
                $conexion = mysqli_connect("localhost","root","","comentarios");

                if(isset($_POST['submit']))  {
                    $nombre = $_POST['name'];
                    $comentario = $_POST['comentario'];
                    $script = $_POST['script'];
                    $hora = date('H:i d/m/Y');

                    //preparamos stmt
                    $stmt = $conexion->prepare("INSERT INTO coment(nombre, comentario, fecha_hora, script) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $nombre, $comentario, $hora, $script);
                    $stmt->execute();
                    $stmt->close();
                }

                if($resultado = $conexion->query("SELECT * from coment")) {
                    if (mysqli_num_rows($resultado) > 0) {
                        while($row = mysqli_fetch_assoc($resultado)) {
                            echo '<li>';
                                echo '<div class="commentText">';
                                    echo "<p class='nombre'>".$row['nombre']."</p><p>". $row['script']."</p><p>".$row['comentario']."</p><span class='date sub-text'>".$row['fecha_hora']."</span>";
                                echo '</div>';
                            echo '</li>';
                        }
                    }
                }else {
                    echo "Falló la sentencia: (" . $conexion->errno . ") " . $conexion->error; 
                }
                mysqli_close($conexion);
            ?>
        </ul>
        <form class="form-inline" role="form" action="#" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeHolder="Nombre (requerido)" required>
                <input type="text" class="form-control" name="script" placeHolder="lenguaje" required>
                <textarea class="form-control" maxlength="128" name="comentario" placeHolder="Escriba aquí su comentario máximo 128 caracteres"></textarea>
                <input type="submit" class="btn btn-dark" name="submit" value="Añadir">
            </div>
        </form>
    </div>
</div>