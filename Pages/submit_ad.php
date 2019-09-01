
<?php
session_start();
require_once("../includes/functions.php");
if(!isset($_SESSION['user_id']))
    header("Location: login.php");
$user_id = $_SESSION['user_id'];

if(isset($_POST['submit'])){
    extract($_POST);
    $table = "cars";
    $columns = "car_brand,car_model,car_purchase_year,car_fuel,car_cng,car_km_driven,car_insurance,car_number,car_description,car_price";
    $values = "'$car_brand','$car_model','$car_purchase_year','$car_fuel','$car_cng','$car_km_driven','$car_insurance','$car_number','$car_description','$car_price'";
    insert($table,$columns,$values);
    $verified = "0";
    $car_id = mysqli_insert_id($connection);
    $query = "insert into ads(user_id,car_id,ad_city,ad_state,ad_verified)values('$user_id','$car_id','$ad_city','$ad_state','$verified')";
    $result = mysqli_query($connection,$query);
    $ad_id=mysqli_insert_id($connection);
	
//    echo"before";
    for($i = 0; $i<count($_FILES['car_img']['name']); $i++)
	{
		$filetmp = $_FILES["car_img"]["tmp_name"][$i];
	 	$filename = $_FILES["car_img"]["name"][$i];
		$filetype = $_FILES["car_img"]["type"][$i];
        $filetmp2="user".$user_id."ad".$ad_id."image".$i.".jpg";
		$filepath = "../assets/Images/".$filetmp2;
		
		if(move_uploaded_file($filetmp,$filepath )){
		
		
		if($i==0){
			$query="INSERT INTO ad_images(car_id,img_name,main_img) VALUES('$car_id','$filetmp2',1)";
        $result=mysqli_query($connection,$query);
        if(!$result)
            die("Query Failed Due to".mysqli_error($connection));
		} else{
			$query="INSERT INTO ad_images(car_id,img_name,main_img) VALUES('$car_id','$filetmp2',0)";
        $result=mysqli_query($connection,$query);
        if(!$result)
            die("Query Failed Due to".mysqli_error($connection));
		}
		
    
        }
    }
	//echo $ad_id;
//    echo"success";
    header("location:../index.php");
}
?>
    <!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="../assets/CSS/Custom.css">
    <link rel="stylesheet" href="../assets/CSS/styles.css">

    <body>
        <div class="container">
            <form action="" method="POST" role="form" enctype="multipart/form-data">
                <legend>Car Ad</legend>

                <div class="form-group">
                    <label for="">Enter Brand</label>
                    <input type="" class="form-control" id="car_brand" name="car_brand" placeholder="Enter">
                </div>

                <div class="form-group">
                    <label for="">Enter Model</label>
                    <input type="" class="form-control" id="car_model" name="car_model" placeholder="Enter">
                </div>

                <div class="form-group">
                    <label for="">Enter Purchase year</label>
                    <input type="" class="form-control" id="" name="car_purchase_year" placeholder="Enter">
                </div>
                <div class="form-group" id="add-imgs-div">
                    <label for="">Add Images</label>
                    <input type="file" class="form-control" id="" name="car_img[]" placeholder="Please Select Multiple Images" multiple>
                </div>
                <div class="form-group">
                    <label for="">Enter Fuel</label>
                    <select name="car_fuel" id="" class="form-control">
                   <option selected disabled>Select Fuel</option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="">Is It CNG?</label>
                    <label>YES
                <input type="radio" class="form-control" id="" name="car_cng" value="1">
                </label>
                    <label>NO
                <input type="radio" class="form-control" name="car_cng" value="0">
                </label>
                </div>
                <div class="form-group">
                    <label for="">Owner</label>
                    <select name="car_owner" id="" class="form-control">
                   <option selected disabled>Select Owner</option>
                    <option value="1">First Owner</option>
                    <option value="2">Second Owner</option>
                     <option value="3">Third Owner</option>
                </select>
                </div>

                <div class="form-group">
                    <label for="">Enter Km Driven</label>
                    <input type="" class="form-control" id="" name="car_km_driven" placeholder="Enter KMS">
                </div>
                <div class="form-group">
                    <label for="">Enter Insurance</label>
                    <label>YES
                <input type="radio" class="form-control" id="" name="car_insurance" value="1">
                </label>
                    <label>NO
                <input type="radio" class="form-control" name="car_insurance" value="0">
                </label>
                </div>
                
                <div class="form-group">
                <label for="">Enter Price
                <input type="text" class="form-control" placeholder="Enter Price" name="car_price"></label>
                </div>

                <div class="form-group">
                    <label for="">Enter Car Number</label>
                    <input type="" class="form-control" id="" name="car_number" placeholder="Enter">
                </div>

                <div class="form-group">
                    <label for="">Enter Car Description</label>
                    <input type="" class="form-control" id="" name="car_description" placeholder="Enter">
                </div>

                <div class="form-group">
                    <label for="">Enter State</label>
                    <input type="" class="form-control" id="" name="ad_state" placeholder="Enter">
                </div>

                <div class="form-group">
                    <label for="">Enter City</label>
                    <input type="" class="form-control" id="" name="ad_city" placeholder="Enter">
                </div>


                <button type="submit" class="btn btn-primary" name="submit">Submit Ad</button>
            </form>
        </div>
            <?php
    include_once("../includes/footer.php");
    ?>
    </body>
    <script src="../assets/scripts/jquery.3.2.1.min.js"></script>
    <script src="../assets/scripts/scripts.js"></script>
