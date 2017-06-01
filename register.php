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
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/teste.css"/>
    </head>
    <body class="corpo">
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <div class="container-fluid">
            <div class="col-sm-4 col-sm-offset-4" style="padding-top: 2%;">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <legend class="text-center">Crie uma conta</legend>
                    <?php
                    if (!empty($error_msg)) {
                        echo $error_msg;
                    }
                    ?>
                    <ol>
                        <li>Nome de usuário deve conter somente digitos, letras maiúsculas e minúsculas e underlines</li>
                        <li>Emails devem estar em um formato válido de email</li>
                        <li>Senhas devem ter no mínimo 6 caracteres</li>
                        <li>Senhas devem conter
                            <ul>    
                                <li>Pelo menos uma letra maiúscula (A..Z)</li>
                                <li>Pelo menos uma letra minúscula (a..z)</li>
                                <li>Pelo menos um número (0..9)</li>
                            </ul>
                        </li>
                        <li>Sua senha e confirmação de senha devem bater corretamente</li>
                    </ol>
                    <br>
                    <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input class="form-control" type='text' name='username' id='username' placeholder="Nome de usuário"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Senha"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input class="form-control" type="password" name="confirmpwd" id="confirmpwd" placeholder="Confirmar senha"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-info center-block" type="submit" value="Registrar" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.confirmpwd);" />
                        </div>
                    </form>
                    <br><p class="text-center">Retornar à página de <a href="index.php">login</a>.</p>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
