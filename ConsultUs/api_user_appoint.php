<?php  // this is serverside page === api key 
 error_reporting(0);
 include("indexDB.php");
// $user = $_GET['user']; 
$status=$_GET['status'];
$id='';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}






if(empty($id)){
        // showing admin added from database
        $sql = "SELECT * FROM `new_apointment`";
        $res = mysqli_query($conn,$sql);
        header('Content-Type:application/json');


        //checking whether query is excuted or not
        if($res){
            // count that data is there or not in database
            $count= mysqli_num_rows($res);
            $sno =1;
            if($count>0){
                // we have data in database
                while($row = mysqli_fetch_assoc($res))
                {

                    $arr[] = $row;   // making array of data
                 
                }
               echo json_encode(['status'=>'success','data'=>$arr,'result'=>'found']);
               //echo json_encode(['status'=>'success','result'=>'found']);


            }
            else{
                echo json_encode(['status'=>'fail','msg'=>"NO DATA FOUND"]);
            }
        }

    }
                    // displaying value in table

if($id && $status=='Active' ){
    date_default_timezone_set("Asia/Kolkata");
    $date2=strtotime(date("Y-m-d h:i:sa"));
        // showing admin added from database
        $sql = "SELECT * FROM `new_apointment` WHERE `c_id` = '$id' ";
        $res = mysqli_query($conn,$sql);
        header('Content-Type:application/json');
   

        //checking whether query is excuted or not
        if($res  ){
           
            
            // count that data is there or not in database
            $count= mysqli_num_rows($res);
            $sno =1;
            if($count>0){
                function add_time($time,$plusMinutes){

                    $endTime = strtotime("+{$plusMinutes} minutes", strtotime($time));
                    return date('Y-m-d h:i:s', $endTime);
                 }
                // we have data in database
                while($row = mysqli_fetch_assoc($res))
                {
               $time1=  $row['end_time'];
            
                   //echo  $time1;
                      $total= add_time(date("Y-m-d h:i:sa"), $time1);
                     $str=strtotime($total);
                    
 
             
                
                if(strtotime($row['b_time'],strtotime("+{$plusMinutes} minutes")    )> $date2){

                       $arr[] = $row;  
                      }



                 
                }
                
               echo json_encode(['status'=>'success','data'=>$arr,'result'=>'found']);
               //echo json_encode(['status'=>'success','result'=>'found']);


            }
            else{
                echo json_encode(['status'=>'fail','msg'=>"NO DATA FOUND"]);
            }
        }

    }
           
    if($id && $status=='All' ){
        // echo "inside";
             // showing admin added from database
             $sql = "SELECT * FROM `new_apointment` WHERE `c_id` = '$id' or `u_id`='$id' ";
             $res = mysqli_query($conn,$sql);
             header('Content-Type:application/json');
     
     
             //checking whether query is excuted or not
             if($res  ){
               
                 // count that data is there or not in database
                 $count= mysqli_num_rows($res);
                 $sno =1;
                 if($count>0){
                     // we have data in database
                     while($row = mysqli_fetch_assoc($res))
                     {

     
                         $arr[] = $row;   // making array of data
    
                      
                     }
                    echo json_encode(['status'=>'success','data'=>$arr,'result'=>'found']);
                    //echo json_encode(['status'=>'success','result'=>'found']);
     
     
                 }
                 else{
                     echo json_encode(['status'=>'fail','msg'=>"NO DATA FOUND"]);
                 }
             }
     
         }
   

         if(isset($_POST['c_id']) && isset($_POST['u_id'])){
             $c_id=$_POST['c_id'];
             $u_id=$_POST['u_id'];
            // echo "inside";
                 // showing admin added from database
                 $sql = "SELECT DISTINCT spaceece.users.u_name,spaceece.users.u_image,consultant_app.new_apointment.booking_id,consultant_app.new_apointment.b_time 
                 FROM spaceece.users JOIN consultant_app.new_apointment WHERE spaceece.users.u_id IN('$c_id','$u_id') 
                 AND consultant_app.new_apointment.u_id ='$u_id' AND consultant_app.new_apointment.c_id='$c_id' ";
                 $res = mysqli_query($conn,$sql);
                 header('Content-Type:application/json');
         
         
                 //checking whether query is excuted or not
                 if($res  ){
                   
                     // count that data is there or not in database
                     $count= mysqli_num_rows($res);
                     $sno =1;
                     if($count>0){
                         // we have data in database
                         while($row = mysqli_fetch_assoc($res))
                         {
    
         
                             $arr[] = $row;   // making array of data
        
                          
                         }
                        echo json_encode(['status'=>'success','data'=>$arr,'result'=>'found']);
                        //echo json_encode(['status'=>'success','result'=>'found']);
         
         
                     }
                     else{
                         echo json_encode(['status'=>'fail','msg'=>"NO DATA FOUND"]);
                     }
                 }
         
             }
       
 
            ?>
