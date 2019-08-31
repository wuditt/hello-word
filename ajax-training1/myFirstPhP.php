<?php                                                                                                 
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$news = array(
        array('title'=>'wwwwwwwwwwwwwwwwwwwwww','data'=>'234'),
        array('title'=>'wwwwwwwwwwwwwwwwwwwwww','data'=>'234'),
        array('title'=>'wwwwwwwwwwwwwwwwwwwwww','data'=>'234'),
        array('title'=>'wwwwwwwwwwwwwwwwwwwwww','data'=>'234'),
        array('title'=>'wwwwwwwwwwwwwwwwwwwwww','data'=>'234'),
        array('title'=>'wwwwwwwwwwwwwwwwwwwwww','data'=>'234'),
        array('title'=>'wwwwwwwwwwwwwwwwwwwwww','data'=>'234'),
        array('title'=>'wwwwwwwwwwwwwwwwwwwwww','data'=>'234'),
);

  echo json_encode($news);
  setcookie('name','st',time(),'/01/ajax-training1/');
  setcookie('user_id','12345',time(),'/01/ajax-training1/');
?>