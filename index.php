<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>แสดงรายชื่อ</title>
    </head>
    <body>
      
        <?php
          $url ='https://script.google.com/macros/s/AKfycbzAGZ6FV5YK0cFqO-OS_nICGpVwdOn29JR1KB7SouLuhlI9XgQT/exec?action=selects&sheet_name=sheet1';
           $data =file_get_contents($url);
          $characters = json_decode($data);
        ?>
      <div style="center";>
      <table style="width:100%;"border="1"align="center">
            <tr>
             <th>num</th>
             <th>id</th>
             <th>ชื่อ</th>
             <th>นามสกุล</th>
 
            </tr>
            <?php foreach ($characters as $character) {
             ?>
           <tr>
             <td><?php  echo $character->num; ?> </td>
             <td><?php  echo $character->id; ?> </td>
              <td><?php  echo $character->name; ?></td>
             <td><?php  echo $character->laslname; ?></td>
            </tr>
              <?php } ?>
 
        </table>
 
 
 
        </div>
    </body>
 </html>
