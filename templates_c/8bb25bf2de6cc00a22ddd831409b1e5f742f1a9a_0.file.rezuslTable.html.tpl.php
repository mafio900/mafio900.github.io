<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:34:29
  from 'C:\xampp\htdocs\aeroklub\templates\Rezerwacja\rezuslTable.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e05276523f9c1_53561284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb25bf2de6cc00a22ddd831409b1e5f742f1a9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Rezerwacja\\rezuslTable.html.tpl',
      1 => 1576192733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e05276523f9c1_53561284 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="mt-5">Usługi</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['rezuslugi']->value)) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
rezusluga/usunwiele/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" method="post">
<table id="mainTable" class="display table table-striped table-bordered w-auto text-light">
    <thead>
        <tr>
            <th></th>
            <th>Nazwa</th>
            <th>Ilość</th>
            <th>Samolot</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rezuslugi']->value, 'rezusluga', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['rezusluga']->value) {
?>
            <tr>
                <td class="text-center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="ids[]" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['uslugi']->value[$_smarty_tpl->tpl_vars['rezusluga']->value['IdUsluga']]['UslugaNazwa'];?>
 (<?php echo $_smarty_tpl->tpl_vars['uslugi']->value[$_smarty_tpl->tpl_vars['rezusluga']->value['IdUsluga']]['CenaJedn'];?>
zł za <?php echo $_smarty_tpl->tpl_vars['uslugi']->value[$_smarty_tpl->tpl_vars['rezusluga']->value['IdUsluga']]['JednMiary'];?>
)</td>
                <td><?php echo $_smarty_tpl->tpl_vars['rezusluga']->value['Ilosc'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['rezusluga']->value['IdSamolot'] == null) {?>Brak<?php } else {
echo $_smarty_tpl->tpl_vars['producenci']->value[$_smarty_tpl->tpl_vars['samoloty']->value[$_smarty_tpl->tpl_vars['rezusluga']->value['IdSamolot']]['IdProducent']]['ProducentNazwa'];
echo $_smarty_tpl->tpl_vars['samoloty']->value[$_smarty_tpl->tpl_vars['rezusluga']->value['IdSamolot']]['Model'];
}?></td>
                <td><span class="btn-group"><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
rezusluga/formedytuj/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                    role="button" class="btn btn-primary btn-sm ml-2" title="Pokaż szczegółowe informacje"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
rezusluga/usun/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                        role="button" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a></span></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    <tfoot>
    </tfoot>
</table>
<button type="submit" class="btn btn-danger btn-sm" title="Usuń zaznaczone"><i class="fa fa-times" aria-hidden="true"></i> Usuń zaznaczone</button></br>
</form>
<?php }?>
<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
rezusluga/formularz/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"
role="button" class="btn btn-primary btn-sm mt-2"><i class="fa fa-plus" aria-hidden="true"></i> Dodaj usługę</a>
<?php }
}
