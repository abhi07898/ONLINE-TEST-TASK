<?php 
$a = 10;
$count = 0;
if ($count < $a) { ?>
    <tr>    
    <td><label for="option-3">OPTION - 3:</label></td>
    <td><input type="text" name="option-3" ></td>
</tr>
<tr>
    <td><label for="option-4">OPTION - 4:</label></td>
    <td><input type="text" name="option-4" ></span></td>
</tr>

<br><br><input type="submit" value="ADD-OPTION" class="link-css" name='submit'>
<?php }
$count++; 
echo $count;

?>