<?php 
/*
public static function png($text, $outfile=false, $level=QR_ECLEVEL_L, $size=3, $margin=4, $saveandprint=false) 
{ 
 $enc = QRencode::factory($level, $size, $margin); 
 return $enc->encodePNG($text, $outfile, $saveandprint=false); 
} 
 phpqrcode.php�ṩ��һ���ؼ���png()���������в���$text��ʾ���ɶ�λ�ĵ���Ϣ�ı�������$outfile��ʾ�Ƿ������ά��ͼƬ �ļ���Ĭ�Ϸ񣻲���$level��ʾ�ݴ��ʣ�Ҳ�����б����ǵ�������ʶ�𣬷ֱ��� L��QR_ECLEVEL_L��7%����M��QR_ECLEVEL_M��15%����Q��QR_ECLEVEL_Q��25%����H��QR_ECLEVEL_H��30%���� ����$size��ʾ����ͼƬ��С��Ĭ����3������$margin��ʾ��ά����Χ�߿�հ�������ֵ������$saveandprint��ʾ�Ƿ񱣴��ά�벢 ��ʾ��
*/
   //include('./phpqrcode/phpqrcode.php'); // ��ά������
   include 'phpqrcode/phpqrcode.php';
   $value = $_GET['url'];//��ά������ 
   $errorCorrectionLevel = 'L';//�ݴ���:L��M��Q��H 
   $matrixPointSize = 6;//����ͼƬ��С// ��Ĵ�С��1��10 
   
   $filename = $errorCorrectionLevel.'|'.$matrixPointSize.'.png'; // ���ɵ��ļ��� 

   QRcode::png($value, $filename, $errorCorrectionLevel, $matrixPointSize, 2); //���ɶ�ά��ͼƬ
   $logo = 'jb51.png';//׼���õ�logoͼƬ 
   $QR = 'qrcode.png';//�Ѿ����ɵ�ԭʼ��ά��ͼ 
   if ($logo !== FALSE) { 
 $QR = imagecreatefromstring(file_get_contents($QR)); 
 $logo = imagecreatefromstring(file_get_contents($logo)); 
 $QR_width = imagesx($QR);//��ά��ͼƬ��� 
 $QR_height = imagesy($QR);//��ά��ͼƬ�߶� 
 $logo_width = imagesx($logo);//logoͼƬ��� 
 $logo_height = imagesy($logo);//logoͼƬ�߶� 
 $logo_qr_width = $QR_width / 5; 
 $scale = $logo_width/$logo_qr_width; 
 $logo_qr_height = $logo_height/$scale; 
 $from_width = ($QR_width - $logo_qr_width) / 2; 
 //�������ͼƬ��������С 
 imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, 
 $logo_qr_height, $logo_width, $logo_height); 
} 
//���ͼƬ 
Header("Content-type: image/png");//imagepng($QR, 'helloweba.png');
ImagePng($QR);//echo '<img src="helloweba.png">'; 
   
   
   # ����һ����ά���ļ�
//QRcode::png('code data text', 'filename.png');

# ����ͼƬ�������
//QRcode::png('some othertext 1234');
?>

