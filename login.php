<?php
/**
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'Conectado';
} else {
    $logged = 'Desconectado';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login - Painel de Controle</title>
        <link rel="stylesheet" href="bootstrapAdmin/css/bootstrap.css" />
        <link rel="stylesheet" href="bootstrapAdmin/css/teste.css" />
        <script type="text/JavaScript" src="bootstrapAdmin/js/sha512.js"></script> 
        <script type="text/JavaScript" src="bootstrapAdmin/js/forms.js"></script> 
    </head>
    <body class="corpo">
        <?php
        if (isset($_GET['error'])) {
            echo '<h3 class="text-center">Erro ao logar!</h3>';
        }
        ?>
        <div class="container-fluid">
            <div class="row">                
                <div class="col-sm-4 col-sm-offset-4" style="padding-top: 10%;">
                    <div class="panel panel-default">
                    <div class="panel-body">
                        <legend class="text-center">
                            <h2>Login</h2>
                        </legend>
                        <br>
                        <form action="includes/process_login.php" method="post" name="login_form"> 			
                            <div class="form-group">                        
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input class="form-control" type="text" name="email" placeholder="Email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Senha"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-info center-block" type="submit" value="Login" onclick="formhash(this.form, this.form.password);" />
                            </div>
                        </form>
                        <center>                        
                        <!-- <p>Se você já terminou, por favor <a href="includes/logout.php">desconecte-se</a>.</p> -->
                        <p>Atualmente você está <?php echo $logged ?>.</p>
                        </center>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
