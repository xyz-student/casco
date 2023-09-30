<?php 

include('./function/function.php'); 
check_session();
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php echo get_category_count(); ?> Categories." class="well top-block" href="./category.php">
            <i class="glyphicon glyphicon-hdd blue"></i>

            <div>Categories</div>
            <div><?php echo get_category_count(); ?></div>
            <span class="notification"></span>
        </a>
    </div>
	
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php echo get_product_count(); ?> Products." class="well top-block" href="./product.php">

		<i class="glyphicon glyphicon-star green"></i>
            <div>Products</div>
            <div><?php echo get_product_count(); ?></div>
            <span class="notification green"></span>
        </a>
    </div>
	
</div>


<?php require('footer.php'); ?>
