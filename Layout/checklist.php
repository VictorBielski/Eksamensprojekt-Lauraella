<?php
                require_once('dbcon.php');
                $sql = 'SELECT id, name FROM images';
                $stmt = $link->prepare($sql);
                $stmt->execute();
                $stmt->bind_result($imgid, $name);
                
                while($stmt->fetch()){
                    echo '<option value="'.$imgid.'">'.$name.'</option>'.PHP_EOL;
                } 
                