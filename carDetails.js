$(document).ready(function(){	

	let urlParams = new URLSearchParams(window.location.search);
	let car_id = urlParams.get('car_id');
	console.log(car_id);

        $.ajax({
            type:"POST",
            url:"/Vroom-IntegratedFinal/fetchCarDetails.php",
            data:{car_id: car_id},
            success:function(data){
				if(data!="" && data!=null){
					console.log(data);
					populateCarDetailsTable(data);
					getAdImages();
				} else {
					alert("Couldn't retrieve ad details!");
				}
            }
        });
});
//[{"car_id":"3","car_brand":"Audi","car_model":"A8","price":"4500000","ad_state":"Maharashtra","ad_city":"Thane","car_description":"Brand new condition",
//"car_purchase_year":"2017","car_km_driven":"2000",
//"car_insurance":"2022","car_fuel":"Petrol","car_cng":"1","car_number":"MH04-BX-2233","ad_verified":"1","ad_status":"1","car_sold":"0"}]
function populateCarDetailsTable(data){
	
	var carDetails = JSON.parse(data);
	console.log(carDetails);
	$("#car_brand").text(carDetails[0].car_brand);
	$("#car_model").text(carDetails[0].car_model);
	$("#price").text(carDetails[0].car_price);
	$("#car_description").text(carDetails[0].car_description);
	$("#car_purchase_year").text(carDetails[0].car_purchase_year);
	$("#car_km_driven").text(carDetails[0].car_km_driven);
	$("#car_insurance").text(carDetails[0].car_insurance);
	$("#car_fuel").text(carDetails[0].car_fuel);
	$("#car_number").text(carDetails[0].car_number);
}

function getAdImages(){
	let urlParams = new URLSearchParams(window.location.search);
	let car_id = urlParams.get('car_id');
	
	 $.ajax({
            type:"POST",
            url:"/Vroom-IntegratedFinal/fetchCarImages.php",
            data:{car_id: car_id},
            success:function(data){
				if(data!="" && data!=null){
					populateImageSlider(data);
				} else {
					alert("Couldn't retrieve ad details!");
				}
            }
    });
	
	
}

function populateImageSlider(data){
	console.log(data);
	var imageNames = JSON.parse(data);
	
	for(var i=0; i<imageNames.length; i++){
		$('#car-image-'+i).attr('src',"assets/Images/"+imageNames[i].img_name);
	}
	
	
	
	
}