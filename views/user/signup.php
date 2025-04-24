<?php
use models\helpers\ViewHelper;

echo '<h3 class="mt-5">Sign Up</h3>';
//Instantiate an object of the ViewHelper class
$viewHelper = new ViewHelper();
echo $viewHelper->uiMessage($data->uiMessage);
echo $viewHelper->form($data->form);
?>