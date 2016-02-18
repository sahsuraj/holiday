<?php
$_SESSION['contest']['desc_doc']=array(0=>'test',1=>'test1');
$_REQUEST['indx_value']=0;

$value=$_REQUEST['indx_value'];
$desc_doc_array= implode(',',$_SESSION['contest']['desc_doc']); echo "<pre>";print_R($value);die; 
//$new_desc_doc_array= unset($desc_doc_array[$value]);
//$_SESSION['contest']['desc_doc']=@implode(",",$new_desc_doc_array);
?>

