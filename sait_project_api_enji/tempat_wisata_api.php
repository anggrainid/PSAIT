<?php
require_once "koneksi.php";
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            get_tw($id);
         }
         else
         {
            get_tws();
         }
         break;
   case 'POST':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            update_tw($id);
         }
         else
         {
            insert_tw();
         }     
         break; 
   case 'DELETE':
          $id=intval($_GET["id"]);
            delete_tw($id);
            break;
   default:
      // Invalid Request Method
         header("HTTP/1.0 405 Method Not Allowed");
         break;
      break;
 }



   function get_tws()
   {
      global $mysqli;
      $query="SELECT * FROM daftar_harga";
      $data=array();
      $result=$mysqli->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Berhasil mendapatkan semua data tempat wisata.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   function get_tw($id=0)
   {
      global $mysqli;
      $query="SELECT * FROM daftar_harga";
      if($id != 0)
      {
         $query.=" WHERE id=".$id." LIMIT 1";
      }
      $data=array();
      $result=$mysqli->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Berhasil mendapatkan data tempat wisata.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
        
   }
 
   function insert_tw()
      {
         global $mysqli;
         if(!empty($_POST["tempat_wisata"])){
            $data=$_POST;
         }else{
            $data = json_decode(file_get_contents('php://input'), true);
         }

         $arrcheckpost = array('tempat_wisata' => '','jam_buka' => '', 'harga' => '');
         $hitung = count(array_intersect_key($data, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($mysqli, "INSERT INTO daftar_harga SET
               tempat_wisata = '$data[tempat_wisata]',
               jam_buka = '$data[jam_buka]',
               harga = '$data[harga]'"); 
                               
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Tempat Wisata Berhasil Ditambahkan.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Tempat Wisata Gagal Ditambahkan.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Tidak Sesuai'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function update_tw($id)
      {
         global $mysqli;
         if(!empty($_POST["tempat_wisata"])){
            $data=$_POST;
         }else{
            $data = json_decode(file_get_contents('php://input'), true);
         }

         $arrcheckpost = array('tempat_wisata' => '','jam_buka' => '', 'harga' => '');
         $hitung = count(array_intersect_key($data, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
              $result = mysqli_query($mysqli, "UPDATE daftar_harga SET
               tempat_wisata = '$data[tempat_wisata]',
               jam_buka = '$data[jam_buka]',
               harga = '$data[harga]' WHERE id='$id'"); 
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Tempat Wisata Berhasil Diperbaharui.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Tempat Wisata Gagal Diperbaharui.'
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Tidak Sesuai'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function delete_tw($id)
   {
      global $mysqli;
      $query="DELETE FROM daftar_harga WHERE id=".$id;
      if(mysqli_query($mysqli, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Tempat Wisata Berhasil Dihapus.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Tempat Wisata Gagal Dihapus.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }

 
?> 
