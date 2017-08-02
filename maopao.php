<?php
header("content-type:text/html;charset=UTF-8");
function maopao($arr){
	$len = count($arr);
	for($i=0;$i<$len-1;$i++)
	{
		for($j=$i+1;$j<$len;$j++)
		{
			if($arr[$j]<$arr[$i])
			{
				$nice = $arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$nice;	
			}
		}
	}
	return $arr;
}
var_dump(maopao(array(12,53,54,21,58,541,12,55,01,2)));