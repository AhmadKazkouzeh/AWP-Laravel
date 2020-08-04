//search and filter function
function search(){
    var title=document.getElementById('title').value; //title value
    var status=document.getElementById('status').value; // status value
    var sDate = new Date(document.getElementById('sDate').value).getTime(); //start date value
    var eDate = new Date(document.getElementById('eDate').value).getTime(); //end date value
	var x = document.getElementsByClassName("card");
	var x_len = x.length;
	for(var i = 0; i < x_len; i++){
        var sdate = new Date(x[i].getElementsByClassName("startDate")[0].innerText).getTime();
        var edate = new Date(x[i].getElementsByClassName("endDate")[0].innerText).getTime();
        if(
            x[i].getElementsByClassName("status")[0].innerText.includes(status) &&
            x[i].getElementsByClassName("card-title")[0].innerText.includes(title) &&
            (isNaN(sDate) || sdate >= sDate) &&
            (isNaN(eDate) || edate <= eDate)
            ){
            x[i].style.opacity="1";
            x[i].style.pointerEvents="all";
		}
		else{
            x[i].style.opacity="0.2";
            x[i].style.pointerEvents="none";
        }
    }
}
var filterOpen = false;
//  view search function
function viewSearch(){
    if (!filterOpen) {
        document.getElementsByClassName('search_tem')[0].style.display="block";
        filterOpen = true;
    }
    else{
        document.getElementsByClassName('search_tem')[0].style.display="none";
        filterOpen = false;
    }
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
