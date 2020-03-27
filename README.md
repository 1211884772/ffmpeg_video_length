# ffmpeg_video_length
视频长度

前提要安装FFMPEG，windows版本Unix版本<br>  
文件地址：支持网络地址http://和本地绝对地址<br>  
$ffmpeg_path 必须绝对地址<br>  


$ffmpeg_path = 'D:\phpStudy2019\PHPTutorial\WWW\www.zhizhenfinance.com\public\static\admin\ffmpeg\bin\ffmpeg -i "%s" 2>&1';<br>  
$ffmpegGetVideoLength = new ffmpegGetVideoLength();<br>  
$file= '文件地址';<br>  
$length_time = $ffmpegGetVideoLength->getLength($ffmpeg_path,$file);<br>  
echo $length_time;<br>  


