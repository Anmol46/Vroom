$(document).ready(function(){	
        $.ajax({
            type:"POST",
            url:"/Vroom-IntegratedFinal/automobile.php",
            data:{fetch: 'all'},
            success:function(data){
				if(data!="" && data!=null){
					appendAds(data);
					registerSearchEventAndFilter(data);
					registerStateEventAndFilter(data);
				} else {
					alert("Couldn't retrieve ads!");
				}
            }
        });
		
		//Fetching BMW TOP CARS from FUEL API
		$.ajax({
            type:"GET",
            url:"https://api.fuelapi.com/v1/json/models/1/?api_key=daefd14b-9f2b-4968-9e4d-9d4bb4af01d1",
            data:{fetch: 'all'},
            success:function(data){
				if(data!="" && data!=null){
					populateBWMData(data);
				} else {
					alert("Couldn't retrieve ads!");
				}
            }
        });
		
		$.ajax({
            type:"GET",
            url:"https://api.fuelapi.com/v1/json/models/2/?api_key=daefd14b-9f2b-4968-9e4d-9d4bb4af01d1",
            data:{fetch: 'all'},
            success:function(data){
				if(data!="" && data!=null){
					populateChevData(data);
				} else {
					alert("Couldn't retrieve ads!");
				}
            }
        });
		
		$.ajax({
            type:"GET",
            url:"https://api.fuelapi.com/v1/json/models/6/?api_key=daefd14b-9f2b-4968-9e4d-9d4bb4af01d1",
            data:{fetch: 'all'},
            success:function(data){
				if(data!="" && data!=null){
					populateAudiData(data);
				} else {
					alert("Couldn't retrieve ads!");
				}
            }
        });
		
		$.ajax({
            type:"GET",
            url:"https://api.fuelapi.com/v1/json/models/14/?api_key=daefd14b-9f2b-4968-9e4d-9d4bb4af01d1",
            data:{fetch: 'all'},
            success:function(data){
				if(data!="" && data!=null){
					populateHondaData(data);
				} else {
					alert("Couldn't retrieve ads!");
				}
            }
        });
		
		
		
		$.ajax({
            type:"GET",
            url:"https://api.fuelapi.com/v1/json/models/15/?api_key=daefd14b-9f2b-4968-9e4d-9d4bb4af01d1",
            data:{fetch: 'all'},
            success:function(data){
				if(data!="" && data!=null){
					populateHyundaiData(data);
				} else {
					alert("Couldn't retrieve ads!");
				}
            }
        });
});


function populateBWMData(data) {
	
	for(var i=0; i<3; i++){
		$('#topBMW').append('<li style="margin-left:0px;">'+data[i].name+'</li>');
	}
	
	
} 

function populateChevData(data) {
	for(var i=0; i<3; i++){
		$('#topChevrolet').append('<li style="margin-left:0px;">'+data[i].name+'</li>');
	}
}

function populateAudiData(data) {
	for(var i=0; i<3; i++){
		$('#topAudi').append('<li style="margin-left:0px;">'+data[i].name+'</li>');
	}
}  

function populateHondaData(data) {
	for(var i=0; i<3; i++){
		$('#topHonda').append('<li style="margin-left:0px;">'+data[i].name+'</li>');
	}
} 

function populateHyundaiData(data) {
	for(var i=0; i<3; i++){
		$('#topHyundai').append('<li style="margin-left:0px;">'+data[i].name+'</li>');
	}
} 

function registerStateEventAndFilter(data){

	$('#select').on('change', function() {
		
		var adArray = JSON.parse(data);
		
		if("All".search($("#select").val())==0){
			for(var i=0; i<adArray.length; i++){
				$("#ad"+adArray[i].car_id).parents('a').css('display', 'block');
			}
			return;
		}
		
		
		for(var i=0; i<adArray.length; i++){
		if((adArray[i].ad_state).toLowerCase().search($("#select").val().toLowerCase())==0){
			$("#ad"+adArray[i].car_id).parents('a').css('display', 'block');
		} else {
			$("#ad"+adArray[i].car_id).parents('a').css('display', 'none');
		}
	}
    });

}



function registerSearchEventAndFilter(data){
	$("#search-input").on("keyup", function() {
    
	//FOR KEY PRESS
	//console.log($("#search-input").val());
	var adArray = JSON.parse(data);
	for(var i=0; i<adArray.length; i++){
		
		if((adArray[i].car_brand).toLowerCase().search($("#search-input").val().toLowerCase())==0){
			//console.log(adArray[i].car_brand);
			//console.log((adArray[i].car_brand).toLowerCase().search($("#search-input").val().toLowerCase()));
			$("#ad"+adArray[i].car_id).parents('a').css('display', 'block');
		} else {
			$("#ad"+adArray[i].car_id).parents('a').css('display', 'none');
		}
	}
  });
  
  //FOR BACKSPACE || Not needed now because we've put else condition.
  /* $('#search-input').keyup(function(e){if(e.keyCode == 8){
	   var adArray = JSON.parse(data);
		for(var i=0; i<adArray.length; i++){
		
		if((adArray[i].car_brand).toLowerCase().search($("#search-input").val().toLowerCase())>-1){
			//console.log(adArray[i].car_brand);
			//console.log((adArray[i].car_brand).toLowerCase().search($("#search-input").val().toLowerCase()));
			//$("#ad"+adArray[i].car_id).hide();
			$("#ad"+adArray[i].car_id).parents('a').css("display", "block");
		} else {
			//$("#ad"+adArray[i].car_id).show();
			$("#ad"+adArray[i].car_id).parents('a').css("display", "none");
		};
			
		//$('#adCon').append('<div id="ad'+adArray[i].car_id+'" class="grid-item">'+ adArray[i].car_brand + '-' + adArray[i].car_model + '</br> Rs. ' + adArray[i].price +'</div>');
	}
	   
   }}) */
}

function appendAds(data){

	var adArray = JSON.parse(data);
	
	for(var i=0; i<adArray.length; i++){
		console.log(adArray[0]);
		$('#adCon').append('<div style="padding:20px 20px" id="ad'+adArray[i].car_id+'" class="grid-item">'+ adArray[i].car_brand + '-' + adArray[i].car_model + '</br> <i class="fa fa-rupee-sign "></i> ' + adArray[i].car_price + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-road fa-2x""></i>' + adArray[i].ad_city +  '</div>');
	}	
	
	fetchAdImages();
	
}

function fetchAdImages(){
	$.ajax({
            type:"POST",
            url:"/Vroom-Integrated/automobileImage.php",
            data:{fetch: 'all'},
            success:function(data){
				if(data!="" && data!=null){
					appendImages(data);
				} else {
					alert("Couldn't retrieve ad images!");
				}
            }
			});
	}

function appendImages(data){
	console.log(JSON.parse(data));
	
	var adImageArray = JSON.parse(data);
	
	for(var i=0; i<adImageArray.length; i++){
		$('#ad'+adImageArray[i].car_id).prepend('<img style="height:250px; width=100%" id="img'+adImageArray[i].img_id+'" src="assets/Images/'+adImageArray[i].img_name+'"/></br>')
		$("#ad"+adImageArray[i].car_id).wrap($('<a>',{href: 'carDetails.php?car_id=' + adImageArray[i].car_id}));
	}	
}

