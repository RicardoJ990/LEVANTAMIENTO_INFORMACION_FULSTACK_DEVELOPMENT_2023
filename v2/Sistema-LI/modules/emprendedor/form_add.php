<?php
require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin-editor.php');

function unique_id($l = 10)
{
    return substr(md5(uniqid(mt_rand(), true)), 0, $l);
}

$id_generate = 'stdt-' . unique_id(5);
?>
<div class="form-data">
    <div class="head">
        <h1 class="titulo">Agregar Emprendedor</h1>
    </div>
    <div class="body">
        <form name="form-add-emprendedor" action="insert.php" method="POST" autocomplete="off" autocapitalize="on">
            <div class="wrap">
                <div class="first">
                    <label for="txtuserid" class="label">Usuario</label>
                    <input id="txtuserid" class="text" type="text" name="txtuserid" value="" placeholder="Usuario"maxlength="50" required />                    
                    <label for="txtusername" class="label">Nombre</label>
                    <input id="txtusername" class="text" type="text" name="txtname" value="" placeholder="Nombre" maxlength="30" required autofocus />
                    <label for="txtusersurnames" class="label">Apellidos</label>
                    <input id="txtusersurnames" class="text" type="text" name="txtsurnames" placeholder="Apellidos" value="" maxlength="60" required />
                    <label for="dateofbirth" class="label">Fecha de nacimiento</label>
                    <input id="dateuseradmission" class="date" type="date" name="dateofbirth" value="<?php echo date('Y-m-d'); ?>" required />

                

                    <label for="selectgender" class="label">Género</label>
                    <select id="selectgender" class="select" name="selectgender" required>
                        <option value="">Seleccione</option>
                        <option value="mujer">Femenino</option>
                        <option value="hombre">Masculino</option>
                        <option value="otro">Otro</option>                        
                    </select>

                </div>
                <div class="last">
                    <label for="txtusercurp" class="label">Cédula</label>
                    <input id="txtusercurp" class="text" type="text" name="txtcurp" value="" placeholder="Cédula de Identidad" pattern="[0-9]{10}" maxlength="10"  required />
                    <label for="txtuserrfc" class="label">Nacionalidad</label>
                    <input id="txtuserrfc" class="text" type="text" name="txtrfc" value="" placeholder="Nacionalidad" maxlength="100"required />
                    <label for="txtuserphone" class="label">Número de teléfono</label>
                    <input id="txtuserphone" class="text" type="text" name="txtphone" value="" placeholder="09999XXXXX" pattern="[0-9]{10}" title="Ingresa un número de teléfono válido." maxlength="10" required />
                    <label for="txtuseraddress" class="label">Correo Electrónico</label>
                    <input id="txtuseraddress" class="text" type="email" name="txtaddress" value="" placeholder="Correo" maxlength="200" required />
                </div>
            </div>
            
            <button id="btnSave" class="btn icon" type="submit">save</button>
        </form>
    </div>
</div>
<div class="content-aside">
    <?php
    include_once "../sections/options-disabled.php";
    ?>
</div>
<script src="/js/modules/emprendedor.js" type="text/javascript"></script>