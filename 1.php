<?php 
  //连接参数
  $FWCode=$_POST['FWCode'];
  $host="121.40.157.99";
  $user="tbhome";
  $pwd="gg770880";
  $db="tbhome";
   
  $mysqli =new mysqli($host,$user,$pwd,$db); //实例化一个mysqli对象,并打开一个连接
   
  if(mysqli_connect_errno()){ //检查是否可以正确打开数据库
    echo "<font color='red'>数据库连接失败，请稍后再试!</font>";
  }
   
  $SQL_SELECT_SYMBOLS="select used from fwcx where fwcode = '".$FWCode."'";
   
  if($result=$mysqli->query($SQL_SELECT_SYMBOLS)){
     if($result->num_rows>0){
     
        while($arr=$result->fetch_array()){
          echo "恭喜，您购买的是正品！";
            //echo "<td>".$arr[0]."</td>";
            
        }
         //echo "</table>";
    }
   else{
   echo "查找不到该防伪码记录，请谨防假冒！";
   }

      
   
  $result->close(); //释放记录集所占用的内存
  }
  else{
    echo "出错啦！".$mysqli->error;
  }
  $mysqli->close(); //关闭数据库连接
?>