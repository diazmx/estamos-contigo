
<div id="modal_especialista" class="modal">
    <div class="modal-content">
        <div class="row">
            <form class="col s12" name="send_esp" action="index.php" method="post">
                <div id="paso1">
                    <blockquote><h3>¿Te gustaría ser parte de <b>#EstamosContigo</b>?</h3></blockquote>
                    <p>Para unirte a nuestra red de especialistas, llena el siguiente formulario, nosotros nos podemos en contacto contigo una vez que tu perfil sea evaluado.<br>
                    <b>Nota: </b> este formulario no garatiza la aprobación de tu perfil, nos podremos en contacto contigo en el correo que nos proporcionas.</p>
                    <h5><b>Datos personales:</b></h5>
                    <div class="row">
                        <div class="input-field col s12 m12 l4">
                            <input id="nombres" type="text" class="validate" required>
                            <label for="nombres">Nombres</label>
                        </div>
                        <div class="input-field col s12 m12 l4">
                            <input id="apellido_p" type="text" class="validate" required>
                            <label for="apellido_p">Apellido paterno</label>
                        </div>
                        <div class="input-field col s12 m12 l4">
                            <input id="apellido_m" type="text" class="validate" required>
                            <label for="apellido_m">Apellido Materno</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                        <!--
                        <center>
                            <a class="modal-action modal-close btn red">Cancelar<i class="material-icons right">cancel</i></a>
                            <a class="btn green" OnClick="gotopaso2()">Siguiente<i class="material-icons right">arrow_forward</i></a>
                        </center>
                        -->
                    </div>
                    <blockquote><h4><b>Datos profesionales:</b></h4></blockquote>
                    <p>Te queremos conocer un poco mas ¿puedes regalarnos unos datos de tu trayectoria profesional?</p>
                    <div class="row">
                        <div class="input-field col s12 m12 l8">
                            <input id="profesion" type="text" class="validate" required>
                            <label for="profesion">Profesion</label>
                        </div>
                        <div class="input-field col s12 m12 l4">
                            <input id="exp_anios" type="text" class="validate" required>
                            <label for="exp_anios">Años de experiencia</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="area" type="text" class="validate" required>
                            <label for="area">Area de especialidad</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea placeholder="¿Que te motiva a ayudar las personas en esta situacion?" id="descr" class="materialize-textarea"></textarea>
                        </div>
                    </div>
                    <center>
                        <!-- <a class="btn grey" OnClick="backtopaso1()">Regresar<i class="material-icons left">arrow_back</i></a> -->
                        <a class="modal-action modal-close btn red" OnClick="backtopaso1()">Cancelar<i class="material-icons right">cancel</i></a>
                        <button class="btn green" type="submit" name="guardar">
                            Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </center>                    
                </div>
            </form>
        </div>
    </div>
</div>

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