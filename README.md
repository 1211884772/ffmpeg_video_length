# ffmpeg_video_length
视频长度

前提要安装FFMPEG，windows版本Unix版本
文件地址：支持网络地址http://和本地绝对地址
$ffmpeg_path 必须绝对地址


$ffmpeg_path = 'D:\phpStudy2019\PHPTutorial\WWW\www.zhizhenfinance.com\public\static\admin\ffmpeg\bin\ffmpeg -i "%s" 2>&1';
$ffmpegGetVideoLength = new ffmpegGetVideoLength();
$file= '文件地址';
$length_time = $ffmpegGetVideoLength->getLength($ffmpeg_path,$file);
echo $length_time；


