
<!DOCTYPE html>
<html lang="pl">
<?PHP
	// write data from weather station into txt file
	
	$path = "/home/dariusz/Sainlogic/";

	$fp = fopen("update.txt", "w");
	$n="update.txt";
	fwrite($fp,$n);
	fclose($fp);

	
	$weather_prefix= "WeatherStation_";
	$id_station = "123";
	$password = "789";


	foreach ($_GET as $key => $value) {

	   switch ($key) {
	   	
        	case    "indoorhumidity":
        		   $fp = fopen($path."indoorhumidity.txt", "w");
            		   fwrite($fp,$value);
	    		   fclose($fp);
            		   break;

		case "indoortempf" :
			   $new_value = round( (5.0 / 9 * (floatval($value) - 32 )), 1);
		    	   $fp = fopen($path."indoortempf.txt", "w");		    		
	    		   fwrite($fp,$new_value);
	    		   fclose($fp);
	    		   break; 
	    		   

        	case "tempf": $new_value = round( (5.0 / 9 * (floatval($value) - 32 )), 1);
        		   $fp = fopen($path."tempf.txt", "w");
            		   fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;


        	case  "dewptf":$new_value = round( (5.0 / 9 * (floatval($value) - 32 )), 1);
        		   $fp = fopen($path."dewptf.txt", "w");
            		   fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;
            		   
        	case    "windchillf":$new_value = round( (5.0 / 9 * (floatval($value) - 32 )),1); 
        	           $fp = fopen($path."windchillf.txt", "w");
            	           fwrite($fp,$new_value);
	    		   fclose($fp);
            	           break;


        	case    "humidity": 
        		   $fp = fopen($path."humidity.txt", "w");
            		   fwrite($fp,$value);
	    		   fclose($fp);
            		   break;
        	case    "windspeedmph": 
        		   $new_value = round( floatval($value) * 1.60934, 1);
        		   $fp = fopen($path."windspeedmph.txt", "w");
	                   fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;
        	case    "windgustmph":
        		   $new_value =round( floatval($value) * 1.60934, 1); 	
        		   $fp = fopen($path."windgustmph.txt", "w");
                           fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;
         
         	case    "winddir": 
         	           $fp = fopen($path."winddir.txt", "w");
                           fwrite($fp,$value);
	    		   fclose($fp);
            		   break;
        	case    "absbaromin":  
        		   $new_value = round( floatval($value) * 33.8639 , 1); 
        		   $fp = fopen($path."absbaromin.txt", "w");
                           fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;
        	case    "baromin":     
        	           $new_value = round( floatval($value) * 33.8639 , 1);
        	           $fp = fopen($path."baromin.txt", "w");
                           fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;
        	case    "rainin":
        	           $new_value = round( floatval($value) * 2.54, 1);
        		   $fp = fopen($path."rainin.txt", "w");
                           fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;
        	case    "dailyrainin":
        		   $new_value = round( floatval($value) * 2.54, 1);
        		   $fp = fopen($path."dailyrainin.txt", "w");
                           fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;
        	case    "weeklyrainin":
        		   $new_value = round( floatval($value) * 2.54, 1); 
        		   $fp = fopen($path."weeklyrainin.txt", "w");
                           fwrite($fp,$new_value);
	    		   fclose($fp);
            		   break;
        	case    "monthlyrainin":
        		   $new_value = round( floatval($value) * 2.54, 1);
        		   $fp = fopen($path."monthlyrainin.txt", "w");
                           fputs($fp,$new_value);
	    		   fclose($fp);
            		   break;
        	case    "solarradiation":
        		   $fp = fopen($path."solarradiation.txt", "w");
                           fwrite($fp,$value);
	    		   fclose($fp);
            		   break;
        	case    "UV":          
        		   $fp = fopen($path."uv.txt", "w");
            	           fwrite($fp,$value);
	    		   fclose($fp);
            		   break;            		   
  	
  	   }
	
	} 
	

	

	


?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>weather station</title>
</head>
<body>
	<h1>  weather station  </h1>
</body>
</html>
