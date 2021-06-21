<?php
ob_start();
// include header.php file
include('header.php');
?>

<?php

/*  include banner area  */
include('partial/_banner-area.php');
/*  include banner area  */

/*  include top sale section */
include('partial/_top-sale.php');
/*  include top sale section */

/*  include special price section  */
include('partial/_special-price.php');
/*  include special price section  */

/*  include banner ads  */
include('partial/_banner-ads.php');
/*  include banner ads  */

/*  include new phones section  */
include('partial/_new-phones.php');
/*  include new phones section  */

/*  include blog area  */
include('partial/_blogs.php');
/*  include blog area  */

?>


<?php
// include footer.php file
include('footer.php');
?>