<?php
/* Smarty version 3.1.30, created on 2022-11-10 18:15:47
  from "C:\xampp1\htdocs\project_nhac\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636d31c3157af3_84279920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36faeb7067260b96a24ba66dcf8f019b4f619e94' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\project_nhac\\views\\v_dang_nhap.tpl',
      1 => 1514976060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636d31c3157af3_84279920 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="container" id="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form method="POST" action="dang_nhap.php">
                    <div class="form-group">
                        <label for="Tài khoản"></label>
                        <input type="text" name="tai_khoan" class="form-control" value="<?php if (isset($_POST['btn_dang_nhap'])) {
echo $_POST['tai_khoan'];
}?>" placeholder="Nhập tài khoản" required>
                    </div>
                    <div class="form-group">
                        <label for="Mật khẩu"></label>
                        <input type="password" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu">
                    </div>
                    <button type="submit" name="btn_dang_nhap" class="btn btn-success">Đăng nhập</button> 
                </form>
            </div>
        </div>
    </div>
<?php }
}
