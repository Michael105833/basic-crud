<?php


function add(){
    $add = new crud();
    $add->addData();
}

function delete(){
    $crud = new crud(); 
    $crud->deleteData();
}

function update(){
    $crud = new crud();
    $crud->updateData();
}
?>
