<div id="modal_sesion" class="modal">
    <div class="modal-content">
        <blockquote><h3>Inicia sesión</h3></blockquote>
        <form action="ini_ses.php" method="post">
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <input id="email" type="text" class="validate">
                    <label for="email">Correo</label>
                </div>
                <div class="input-field col s12 m12 l12">
                    <input id="pass" type="text" class="validate">
                    <label for="pass">Contraseña</label>
                </div>
                <p><b>Nota: </b> la contraseña le fue asignada el día que fue aprovado en la plataforma. <br>
                En caso de haber olvidado la contraseña contactese con el administrador.</p>
                <center>
                    <a class="modal-action modal-close btn red">Cancelar<i class="material-icons right">cancel</i></a>
                    <button class="btn green" type="submit" name="ini_ses">
                        Iniciar Sesión
                        <i class="material-icons right">check</i>
                    </button>
                </center>
            </div>
        </form>
    </div>
</div>