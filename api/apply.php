<?php
include_once ('../common.php');

// echo print_r($_POST);
// Array ( [token] => 157901435960e9c7036484b [certi] => naver [rsv_region] => 1 [rsv_name] => 1 [rsv_tel1] => 2 [rsv_tel2] => 3 [rsv_tel3] => 4 [rsv_email] => [ride_adult_cnt] => 1 [type_choice] => default [group_name] => [memo] => 5 ) 1

// CREATE TABLE `gongju`.`apply` (
//   `id` INT NOT NULL AUTO_INCREMENT,
//   `token` VARCHAR(45) NULL,
//   `program` VARCHAR(100) NULL,
//   `rsv_region` TINYINT(1) NULL,
//   `rsv_name` VARCHAR(45) NULL,
//   `rsv_tel` VARCHAR(15) NULL,
//   `rsv_email` VARCHAR(100) NULL,
//   `ride_adult_cnt` INT NULL,
//   `memo` VARCHAR(350) NULL,
//   PRIMARY KEY (`id`));

// CREATE TABLE `digital`.`apply` (
//   `id` INT NOT NULL AUTO_INCREMENT,
//   `token` VARCHAR(80) NULL,
//   `program` VARCHAR(80) NULL,
//   `rsv_region` VARCHAR(45) NULL,
//   `rsv_name` VARCHAR(45) NULL,
//   `rsv_tel` VARCHAR(45) NULL,
//   `rsv_email` VARCHAR(80) NULL,
//   `rsv_group` VARCHAR(45) NULL,
//   `rsv_position` VARCHAR(45) NULL,
//   `rsv_types` VARCHAR(45) NULL,
//   `rsv_address` VARCHAR(80) NULL,
//   `rsv_detailAddress` VARCHAR(80) NULL,
//   `ride_adult_cnt` VARCHAR(10) NULL,
//   `agree` VARCHAR(10) NULL,
//   `memo` VARCHAR(150) NULL,
//   `create_time` DATETIME NULL,
//   PRIMARY KEY (`id`));

// token: 157901435960e9c7036484b
// certi: naver
// rsv_region: 1
// rsv_name: 1
// rsv_tel1: 2
// rsv_tel2: 3
// rsv_tel3: 4
// rsv_email: 
// ride_adult_cnt: 1
// type_choice: default
// group_name: 
// csv_file: (binary)
// memo: 5

$result = $_REQUEST;
$token = $_POST['token'];
$program = $_POST['rsv_program'];
$rsv_region = $_POST['rsv_region'];
$rsv_name = trim($_POST['rsv_name']);
$rsv_tel = "";
$rsv_tel .= strval($_POST['rsv_tel1']);
$rsv_tel .= "-";
$rsv_tel .= strval($_POST['rsv_tel2']);
$rsv_tel .= "-";
$rsv_tel .= strval($_POST['rsv_tel3']);
$rsv_email = trim($_POST['rsv_email']);
$rsv_group = trim($_POST['rsv_group']);
$rsv_time = trim($_POST['rsv_time']);
$rsv_date = trim($_POST['rsv_date']);
$rsv_position = $_POST['rsv_position'];
$rsv_types = trim($_POST['rsv_types']);
$rsv_address = $_POST['rsv_address'];
$rsv_detailAddress = $_POST['rsv_detailAddress'];
$ride_adult_cnt = $_POST['ride_adult_cnt'];
$memo = $_POST['memo'];
$agree = $_POST['agree'];

$return = array();

if ($token == "basic") {
  $cnt1 = sql_fetch("
    SELECT count(id) as cnt FROM apply WHERE token = '$token' AND rsv_tel = '$rsv_tel' AND rsv_date = '$rsv_date'
  ");
  if($cnt1['cnt'] > 0) {
    $return["result"] = "fail";
    echo json_encode( $return );
    exit;
  };
  $cnt11 = sql_fetch("
  SELECT count(id) as cnt FROM apply WHERE token = '$token'
  ");
  if($cnt11['cnt'] > 99) {
    $return["result"] = "full";
    $return["msg"] = "참여 제한 인원 100명 초과로 예약이 마감되었습니다.";
    echo json_encode( $return );
    exit;
  }
}
if ($token == "tutorial") {
  $cnt2 = sql_fetch("
    SELECT count(id) as cnt FROM apply WHERE token = '$token' AND rsv_tel = '$rsv_tel'
  ");
  if($cnt2['cnt'] > 0) {
    $return["result"] = "fail";
    echo json_encode( $return );
    exit;
  };
  $cnt21 = sql_fetch("
  SELECT count(id) as cnt FROM apply WHERE token = '$token'
  ");
  if($cnt21['cnt'] > 19) {
    $return["result"] = "full";
    $return["msg"] = "참여 제한 인원 20명 초과로 예약이 마감되었습니다.";
    echo json_encode( $return );
    exit;
  }
}
if ($token == "education") {
  $cnt3 = sql_fetch("
    SELECT count(id) as cnt FROM apply WHERE token = '$token' AND rsv_tel = '$rsv_tel' AND rsv_time = '$rsv_time' 
  ");
  if($cnt3['cnt'] > 0) {
    $return["result"] = "fail";
    echo json_encode( $return );
    exit;
  };
  if($rsv_time == "da10" || $rsv_time == "da11" || $rsv_time == "da13" || $rsv_time == "da14" || $rsv_time == "da15" || $rsv_time == "da16" || $rsv_time == "da17" || $rsv_time == "edu10" || $rsv_time == "edu11" || $rsv_time == "edu13" || $rsv_time == "edu14" || $rsv_time == "edu15" || $rsv_time == "edu16" || $rsv_time == "edu17") {
    $cnt31 = sql_fetch("
      SELECT count(id) as cnt FROM apply WHERE token = '$token' AND rsv_time = '$rsv_time' AND rsv_date = '$rsv_date'
    ");
    if($cnt31['cnt'] > 3) {
      $return["result"] = "full";
      $return["msg"] = "참여 제한 인원 3명 초과로 예약이 마감되었습니다.";
      echo json_encode( $return );
      exit;
    }
  }
  if($rsv_time == "davin10" || $rsv_time == "davin11" || $rsv_time == "davin13" || $rsv_time == "davin14" || $rsv_time == "davin15" || $rsv_time == "davin16" || $rsv_time == "davin17") {
    $cnt32 = sql_fetch("
      SELECT count(id) as cnt FROM apply WHERE token = '$token' AND rsv_time = '$rsv_time' AND rsv_date = '$rsv_date'
    ");
    if($cnt32['cnt'] > 7) {
      $return["result"] = "full";
      $return["msg"] = "참여 제한 인원 8명 초과로 예약이 마감되었습니다.";
      echo json_encode( $return );
      exit;
    }
  }
  if($rsv_time == "science10" || $rsv_time == "science11" || $rsv_time == "science13" || $rsv_time == "science14" || $rsv_time == "science15" || $rsv_time == "science16" || $rsv_time == "science17") {
    $cnt32 = sql_fetch("
      SELECT count(id) as cnt FROM apply WHERE token = '$token' AND rsv_time = '$rsv_time' AND rsv_date = '$rsv_date'
    ");
    if($cnt32['cnt'] > 3) {
      $return["result"] = "full";
      $return["msg"] = "참여 제한 인원 4명 초과로 예약이 마감되었습니다.";
      echo json_encode( $return );
      exit;
    }
  }
}
// $cnt2 = sql_fetch("
// SELECT sum(ride_adult_cnt) as cnt FROM apply WHERE token = '$token'
// ");
// $cnt3 = sql_fetch("
// SELECT count(id) as cnt FROM apply WHERE token = '$token'
// ");


// if($cnt2['cnt'] > 99) {
//   $return["result"] = "full";
//   $return["msg"] = "참여 제한 인원 100명 초과로 예약이 마감되었습니다.";
//   echo json_encode( $return );
//   exit;
// };

// if ($program == "천문대관측프로그램") {
//   if(($cnt2['cnt'] + $ride_adult_cnt) > 15) {
//     $return["result"] = "full";
//     $return["msg"] = "참여 제한인원 초과로 " . $ride_adult_cnt . "명은 예약하실 수 없습니다. 죄송합니다.";
//     echo json_encode( $return );
//     exit;
//   }
// }

// if ($program == "1박2일숙박프로그램") {
//   if(($cnt2['cnt'] + $ride_adult_cnt) > 19) {
//     $return["result"] = "full";
//     $return["msg"] = "참여 제한인원 초과로 " . $ride_adult_cnt . "명은 예약하실 수 없습니다. 죄송합니다.";
//     echo json_encode( $return );
//     exit;
//   }
//   if ($cnt3['cnt'] > 4) {
//     $return["result"] = "full";
//     $return["msg"] = "참여 제한 가족 초과로 예약하실 수 없습니다. 죄송합니다.";
//     echo json_encode( $return );
//     exit;
//   }
// }

$sql = "
insert into apply
  set
    token     	= '$token',
    program     	= '$program',
    rsv_region     		= '$rsv_region',
    rsv_name            = '$rsv_name',
    rsv_tel          = '$rsv_tel',
    rsv_email    = '$rsv_email',
    rsv_group    = '$rsv_group',
    rsv_position    = '$rsv_position',
    rsv_types    = '$rsv_types',
    rsv_time    = '$rsv_time',
    rsv_date    = '$rsv_date',
    rsv_address  = '$rsv_address',
    rsv_detailAddress  = '$rsv_detailAddress',
    ride_adult_cnt		= '$ride_adult_cnt',
    agree = '$agree',
    memo  			= '$memo',
    create_time  = current_timestamp()
  ";

sql_query( $sql );

$return["result"] = "success";
$return["username"] = $rsv_name;

echo json_encode( $return );

// goto_url($_SERVER['HTTP_REFERER']);


