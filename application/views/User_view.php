<!DOCTYPE html>
<html>
<head>
    <title>USER DETAILS</title>
</head>
<body>
    <table>
        <tr>
            <th>SID</th>
            <th>NAME</th>
            <th>UNAME</th>
            <th>PWD</th>
            <th>EMAIL</th>
            <th>MOBILE</th>
        </tr>
       <?php
       foreach($userarray as $key=>$value)
       {           
           echo "<tr>
           <td>".$value['SID']."</td>
           <td>".$value['NAME']."</td>
           <td>".$value['UNAME']."</td>
           <td>".$value['PWD']."</td>
           <td>".$value['EMAIL']."</td>
           <td>".$value['MOBILE']."</td>
           </tr>";
          /* echo "<tr>
           <td>".$value->SID."</td>
           <td>".$value->NAME."</td>
           <td>".$value->UNAME."</td>
           <td>".$value->PWD."</td>
           <td>".$value->EMAIL."</td>
           <td>".$value->MOBILE."</td>
           </tr>";*/
       }
       ?>
    </table>
</body>
</html>
