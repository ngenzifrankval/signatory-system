var req;
function initReq(){
	if(window.XMLHttpRequest){
		req = new XMLHttpRequest();
		
	}else if(window.ActiveXObject){
		isIE = true;
		req = new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function loadCollege(){
	
	initReq();
	
	
	req.onreadystatechange = function(){
		processCollege();
	};
	
	var id = document.getElementById("university").value;
	var url = "tbaba.php?univ=" + id;
	req.open("GET",url,true);
	req.send(null);
}

function processCollege(){
	if(req.readyState){
		if(req.status){
			document.getElementById("collegeDiv").innerHTML= req.responseText;
		}
	}
}


// function loadSchool(){
	
// 	initReq();
	
	
// 	req.onreadystatechange = function(){
// 		processSchool();
// 	};
	
// 	var id = document.getElementById("collage").value;
// 	var url = "tbaba.php?col=" + id;
// 	req.open("GET",url,true);
// 	req.send(null);
	
// }

// function processSchool(){
// 	if(req.readyState){
// 		if(req.status){
// 			document.getElementById("collegeDiv").innerHTML= req.responseText;
// 		}
// 	}
// }

/*function loadSchool(){
	
	initReq();
	
	req.onreadystatechange = function(){
		processSchool();
	};
	
	var id = document.getElementById("college").value;
	var url = "tbaba.php?col=" + id;
	req.open("GET",url,true);
	req.send(null);
	
}

function processSchool(){
	if(req.readyState){
		if(req.status){
			document.getElementById("schoolDiv").innerHTML= req.responseText;
		}
	}
}

function loadDept(){
	
	initReq();
	
	req.onreadystatechange = function(){
		processDept();
	};
	
	var id = document.getElementById("school").value;
	var url = "tbaba.php?dept=" + id;
	req.open("GET",url,true);
	req.send(null);
	
}*/

/*function processDept(){
	if(req.readyState){
		if(req.status){
			document.getElementById("deptDiv").innerHTML= req.responseText;
		}
	}
}*/
