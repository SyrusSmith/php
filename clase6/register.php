<?PHP

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50"/><br/>

                    <?php if (!array_key_exists ('versionCorta', $_GET)) :?>
                    <label for='password'>Confirmar Contraseña*</label><br/>
                    <input type='password' name='confpassword' id='confpassword' maxlength='50'/><br/>
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                    <?php endif; ?>

                    <?php $paises = ["Argentina", "Brasil", "Chile", "Dinamarca", "Ecuador", "Francia", "Ghana", "Holanda", "Islandia", "Japón"]; ?>
                    <br>
                    <select>
                        <?php foreach ($paises as $key => $value): ?>
                            <option value="<?php echo $paises[$key]?>"><?php echo $paises[$key]?></option>
                        <?php endforeach;?>
                    </select>

                </div>
                <br>
                <br>
                <br>
                <br>
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
