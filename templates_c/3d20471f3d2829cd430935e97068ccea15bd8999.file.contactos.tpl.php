<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 20:55:05
         compiled from "./templates/contactos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52939885856044709856d89-94713587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d20471f3d2829cd430935e97068ccea15bd8999' => 
    array (
      0 => './templates/contactos.tpl',
      1 => 1443033436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52939885856044709856d89-94713587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560447098dd379_36698509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560447098dd379_36698509')) {function content_560447098dd379_36698509($_smarty_tpl) {?><form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre/Nickname</label>
    <input type="text" class="form-control" placeholder="Identidad" id="nickname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-Mail</label>
	<input type="email" class="form-control" id="email" placeholder="Puntero">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Comentarios</label>
    <textarea class="form-control" rows="3" placeholder="Imaginacion"></textarea>
  <div>
  <button type="submit" class="btn btn-default">Submit</button>
</form><?php }} ?>
