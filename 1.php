<?php 
  //���Ӳ���
  $FWCode=$_POST['FWCode'];
  $host="121.40.157.99";
  $user="tbhome";
  $pwd="gg770880";
  $db="tbhome";
   
  $mysqli =new mysqli($host,$user,$pwd,$db); //ʵ����һ��mysqli����,����һ������
   
  if(mysqli_connect_errno()){ //����Ƿ������ȷ�����ݿ�
    echo "<font color='red'>���ݿ�����ʧ�ܣ����Ժ�����!</font>";
  }
   
  $SQL_SELECT_SYMBOLS="select used from fwcx where fwcode = '".$FWCode."'";
   
  if($result=$mysqli->query($SQL_SELECT_SYMBOLS)){
     if($result->num_rows>0){
     
        while($arr=$result->fetch_array()){
          echo "��ϲ�������������Ʒ��";
            //echo "<td>".$arr[0]."</td>";
            
        }
         //echo "</table>";
    }
   else{
   echo "���Ҳ����÷�α���¼���������ð��";
   }

      
   
  $result->close(); //�ͷż�¼����ռ�õ��ڴ�
  }
  else{
    echo "��������".$mysqli->error;
  }
  $mysqli->close(); //�ر����ݿ�����
?>