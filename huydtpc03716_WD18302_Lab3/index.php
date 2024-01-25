//<?php
require_once "vendor\autoload.php";

// use  App\Core\Database;
// use App\Core\Route;
// use App\Controller\BaseController;
// use App\Model\BaseModel;
//use App\Core\Form;

require_once 'App/Core/Route.php';
require_once 'App/Home.php';
require_once 'App/Invoices.php';

// Lấy action từ tham số truyền vào hoặc mặc định là 'home'
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

// Xử lý yêu cầu bằng class Route
\app\core\Route::handleRequest($action);


// $data = new Database();
// echo $data->age;

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create an account</h1>
        <?php $form=form::begin('','post');?>
        <div class="row">
            <div class="col">
                <?php echo $form->field('firstname')->_toString();?>        
            </div>
            <div class="col">
                <?php echo $form->field('lastname')->_toString();?>        
            </div>
        </div>
        <?php echo $form->field('email')->_toString();?>
        <?php echo $form->field('password')->passwordField()->_toString();?>
        <?php echo $form->field('confirmPassword')->passwordField()->_toString();?>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form::end();?>          
    </div>
</body>
</html> -->
