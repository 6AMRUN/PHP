<!-- 

   Student Name: Alexies Farinas
   File Name: footer.php
   Date: March 5, 2021
   Description: This is for the footer of the main PHP page and user input page
  
-->
<footer>
    
    <?php
    // <hr> tag  requested by the midterm
    echo "<hr>";
    
    // This displays The footer which includes my name and 
    // Today's date in a h3 tag
    echo "<h3>Alexies Farinas "; 
    
    // This displays the date using a php method
    echo date('D jS') ." of ". date('F Y, g:i:s A'); 
    
    // End of h3 tag
    echo "</h3>"; 
    
    ?>
    
</footer>