<?php
    require("../includes/init.php");
    // TODO
    /*if($argc != 2 )
    {
        printf(" Usage: ./import path");
        return 1;
    }
    else
    {*/
        $path = "College_List.csv";
        if(file_exists($path))
        {
            if(is_readable($path))
            {
                $fp = fopen($path, "r");
                while($fp != NULL)
                {
                    $arr = [];
                    $arr = fgetcsv($fp,200,",");
                    if($arr != NULL)
                    {    
                        //echo $arr["0"];
                        //echo $arr['1'];
                    $sql = "INSERT IGNORE INTO college_list(cc, colg_address, district) VALUES('$arr[1]','$arr[2]','$arr[3]')";
                    mysqli_query($con,$sql);
                    }
                    else
                        break;
                }
                echo "success";
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