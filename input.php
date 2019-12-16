<?php
	class input{
		//输入判断，封装方法
		function post($content){
			if($content==""){
				return false;
			}
				//判断是否含有敏感关键词
			$notwords = ["政府","中共","共产党"];
			foreach ($notwords as $word) {
				if($content==$word){
					return false;
				}	
			}
			return true;
		}	
	}