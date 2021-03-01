<?php


        // Report all errors
        // Dit is nu handig bij het testen
        // In een productie omgeving doe je dit niet of anders
        error_reporting(E_ALL);



        // my API reageert op GET en POST requests
        print "<h3>hello from myAPI !!</h3>"; // say hello to client


        $myTime = time(); // get the server time

		if (!empty($_GET['data'])){
            $dataFromGet= $_GET['data'];
            print "<h4>GET request ontvangen</h4>";
            print "de data uit het GET request is: " . $dataFromGet;
            switch($dataFromGet){
                case "server":
                        print "<pre>my server variables are:  " ;
                        print_r($_SERVER);  // show server data
                        print "</pre>";
                    break;
                case "tijd":
                        print "<br>server tijd: " . date("h:i:s",$myTime);
                    break;

                case "css keuze":
                    print " <br> hier moet jij zelf code schrijven";
                    ?>
                    <style type="text/css">
                    body {
                      background-color: #333;
                      color: white;
                      margin: 25px 25px 25px 25px;
                      font-size: 40px;
                    }
                    </style>
                    <?php

                    echo '<script language="javascript">';
                    echo 'alert("Dit is een alert")';
                    echo '</script>';

                    break;

                case "easter egg":
                    print " <br> hier moet jij zelf code schrijven";
                    break;

                case "bedenk zelf een code":

                $firstday = date('l - d/m/Y', strtotime("this week"));

                echo "<br><br>De dag van vandaag is: ", $firstday;
                    break;
                  // einde eigen code
                default:
                    print "<h3>please read the manual for valid requests &#128540;</h3>";


            }
        }
?>
