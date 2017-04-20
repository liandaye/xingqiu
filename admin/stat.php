<?php
include ("src/jpgraph.php");						//载入类库文件
include ("src/jpgraph_bar.php");
$lmbs=$_GET['lmbs'];								//获取超级链接传递的参数值
$das=$_GET['das'];
$datay=explode(",",$lmbs);     							//按照","分隔字符串 $data为获取的数据变量
$datax=explode(",",$das);     							//按照","分隔字符串 $data为获取的数据变量
$graph = new Graph(1000,200,"auto");		//创建图像	
$graph->img->SetMargin(60,20,30,50);	//设置图像边框间距
$graph->SetScale("textlin");			//定义坐标刻度类型
$graph->SetMarginColor("lightblue");	//定义图像颜色
$graph->title->Set('注册人数统计');		//定义标题
$graph->title->SetFont(FF_SIMSUN, FS_BOLD);     //设置标题字体
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,10);	//设置X轴的字体
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,10);	//设置Y轴的字体
$graph->xaxis->SetTickLabels($datax);		//设置X轴输出的数据
$graph->xaxis->SetLabelAngle(50);			//设置输出文字大小
$bplot = new BarPlot($datay);		//实例化图像创建类
$bplot->SetWidth(0.6);			//设置柱形图的输出大小
$bplot->SetFillGradient("navy","#FFFF00",GRAD_LEFT_REFLECTION);	//设置图像的类型和填充颜色
$bplot->SetColor("white");	//设置图像边框颜色
$graph->Add($bplot);		//添加数据
$graph->Stroke();			//生成图像
?>
