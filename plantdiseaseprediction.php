<?php
        
        {
          $curl=curl_init();
          curl_setopt($curl, CURLOPT_URL, 'http://localhost:5000/');
          curl_exec($curl);
        } 
        ?>