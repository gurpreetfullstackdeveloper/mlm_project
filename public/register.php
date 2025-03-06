<?php
require_once '../includes/functions.php';
require_once '../views/header.php';
?>

<h2>Register a User</h2>
<?php require_once '../views/register_form.php'; ?>

<?php
if (isset($_POST['register'])) {
    registerUser($_POST['sponsor_id'], $_POST['name'], $_POST['email'], $_POST['password']);
}
require_once '../views/footer.php';
?>