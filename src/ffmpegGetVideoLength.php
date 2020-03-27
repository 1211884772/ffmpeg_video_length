<?php
namespace ffmpeg_video_length\ffmpeg_get_video_length;
class ffmpegGetVideoLength
{
    /**
     *
     * 前提要安装FFMPEG，windows版本Unix版本
     * 文件地址：支持网络地址http://和本地绝对地址
     * FFMPEG_PATH 必须绝对地址
     * @param $ffmpeg_path
     * @param $file
     * @return array|string
     */
	function getLength($ffmpeg_path,$file)
	{
        ob_start();
        passthru(sprintf($ffmpeg_path, $file));  //passthru()类似exec()
        $info = ob_get_contents();
        ob_end_clean();
        // 通过使用输出缓冲，获取到ffmpeg所有输出的内容。
        $ret = array();
        // Duration: 01:24:12.73, start: 0.000000, bitrate: 456 kb/s
        if (preg_match("/Duration: (.*?), start: (.*?), bitrate: (\d*) kb\/s/", $info, $match)) {
            $ret['duration'] = $match[1]; // 提取出播放时间
            return $ret['duration'];
        }
        return "";
	}
}
 ?>