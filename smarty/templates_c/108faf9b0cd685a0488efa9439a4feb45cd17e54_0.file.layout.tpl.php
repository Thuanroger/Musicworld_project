<?php
/* Smarty version 3.1.30, created on 2022-11-10 18:14:12
  from "C:\xampp1\htdocs\project_nhac\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636d3164795ea4_01759276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108faf9b0cd685a0488efa9439a4feb45cd17e54' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\project_nhac\\smarty\\templates\\layout.tpl',
      1 => 1514976060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_636d3164795ea4_01759276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
