
<html>
   
   <head>
      <title>orders Management | Edit</title>
   </head>
   
   <body>
      <form action = "/edit/<?php echo $orders[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'order_name' 
                     value = '<?php echo$orders[0]->name; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update orders" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>