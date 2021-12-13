<?php
require_once('koneksi.php');
require_once('vote.php');
require_once('componen.php');

$con = Createdb();

if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['change'])){
    UpdateData();
}

if(isset($_POST['Delete'])){
    Deletedata();
}

if(isset($_POST['DeleteAll'])){
    deletallitem();
}

function createData(){
    $id = textboxValue(value:"id");
    $name = textboxValue(value:"name");
    $title = textboxValue(value:"vote");
    $reason = textboxValue(value:"alasan");

    if($id && $name && $title && $reason){
        $sql ="INSERT INTO voteses(id,name,title,reason)
        VALUE('$id','$name','$title','$reason')";

        if(mysqli_query($GLOBALS['con'],$sql)){
            $succsess = "<h6 class=\"success\">Data telah di inputkan</h6>";
            echo $succsess;
        }else{
            echo"dorki";}
    }else{
        $error = "<h6 class=\"err\">Error</h6>";
        echo $error;
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}

function getData(){
    $sql="Select*FROM voteses";
    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

function UpdateData(){
    $id = textboxValue(value:"id");
    $name = textboxValue(value:"name");
    $title = textboxValue(value:"vote");
    $reason = textboxValue(value:"alasan");

    
    if($name && $title && $reason){
        $sql ="UPDATE voteses SET name = '$name', title = '$title', reason = '$reason' WHERE id = '$id'";
        if(mysqli_query($GLOBALS['con'],$sql)){
            $succsess = "<h6 class=\"success\">Data telah di ubah</h6>";
            echo $succsess;
        }else{
            echo"dorki";
        }
    }else{
        $error = "<h6 class=\"err\">Error</h6>";
        echo $error;
    }
}

function Deletedata(){
    $id = textboxValue(value:"id");
    $sql = "DELETE FROM voteses WHERE id='$id'";
        if(mysqli_query($GLOBALS['con'],$sql)){
            $succsess = "<h6 class=\"success\">Data telah di hapus</h6>";
            echo $succsess;
        }else{
            $error = "<h6 class=\"err\">Error</h6>";
            echo $error;
        }
}

function deletebtnall(){
    $result = getData();
    $i = 0;
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 1){
                buttonElement(name:"DeleteAll", attr:"data-toggle='tooltip data-placement='bottom' title='Delete All'",styleclass:"btn btn-danger", id:"delete-all", text:"<i class='fas fa-trash'></i>");
                return;
            }
        }
    }
}

function deletallitem(){
    $sql = "DROP TABLE voteses";
    if(mysqli_query($GLOBALS['con'],$sql)){
        $succsess = "<h6 class=\"success\">Semua Data telah di hapus</h6>";
        echo $succsess;
        Createdb();
    }else{
        $error = "<h6 class=\"err\">Error</h6>";
        echo $error;
    }
}
