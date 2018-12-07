<?php
    require("../includes/init.php");
    error_reporting(E_ALL); 
ini_set('display_errors', 1);

    // TODO
    /*if($argc != 2 )
    {
        printf(" Usage: ./import path");
        return 1;
    }
    else
    {*/
        $path = "colgusers.csv";
        if(file_exists($path))
        {
            if(is_readable($path))
            {
                $no_course = 0;
                $failed = 0;
                $fp = fopen($path, "r");
                while($fp != NULL)
                {
                    $arr = [];
                    $arr = fgetcsv($fp,200,",");
                    if($arr != NULL)
                    {    echo "<br>";
                        echo $arr["0"];
                       echo "-";
                        $col_code = $arr['0'];
                        
                        
                        $sql1 = "SELECT * FROM col_login WHERE col_code =  '$col_code'";
                        $rows = mysqli_query($con, $sql1);
                        if(count($rows) == 1)
                        {
                            $row = mysqli_fetch_array($rows);
                            $col_id = $row["id"];
                            echo $col_id;
                             echo "-";
                            $courses =  $arr['1'];
                            //split the courses 
                            $cou_arr = str_split($courses);
                            
                            for( $i =2; $i < sizeof($cou_arr) ; $i++)
                            {
                                
                                if($cou_arr[$i] != NULL)
                                {
                                    $single_course = $cou_arr[$i+1];
                                    echo "  ";
                                     if($single_course == '1' || $single_course == '5' ){
                                        $single_course = $single_course . $cou_arr[$i +2];
                                        //echo $cou_arr[$i+2];
                                        //echo $single_course;
                                        //echo "<br>";
                                        $i++;
                                    }
                                    echo $single_course;
                                    
                                    
                                    $sql2 = "SELECT * FROM course WHERE cou_code = '$single_course'";
                                    $rows1 = mysqli_query($con,$sql2);
                                    if($rows1 != NULL)
                                    {
                                        $row = mysqli_fetch_array($rows1);
                                        $cou_id = $row["id"];
                                        $sql3 = "INSERT INTO col_courses(col_id, cou_id) VALUES('$col_id','$cou_id')"; 
                                        if(mysqli_query($con,$sql3))
                                        {
                                           
                                        }
                                        else  $failed = $failed +1;
                                        echo $cou_id;
                                        $i++;
                                    }
                                    else echo $no_course = $no_course + 1; 
                                }

                            }
                            //print_r($cou_arr);

                        }
                    //$sql = "INSERT IGNORE INTO places(country_code , postal_code,place_name,admin_name1,admin_code1,admin_name2,admin_code2,admin_name3,admin_code3,latitude,longitude,accuracy) VALUES('$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]','$arr[5]','$arr[6]','$arr[7]','$arr[8]','$arr[9]','$arr[10]','$arr[11]')";
                    //mysqli_query($con,$sql);
                    }
                    else
                        break;

                }
                echo "<br>";
                echo $failed;
                echo $no_course;
                fclose($fp);
                //return 0;
            }
            else
                printf("File is not readable");
            
        }
        else 
            printf("File is not exists");
        return 0;
    //}

?>