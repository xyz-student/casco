<?php 
$umessage='';
include('./function/function.php'); 
check_session();
if(isset($_POST['addproduct']))
{
	$id=0;
	extract($_POST);
	$type=1;
	$pdo=getPDOObject();
	$sql=$pdo->query("SELECT * FROM `product` where  name LIKE '$name'");
	$num=$sql->rowCount();
	$photos=$_FILES['photo']['name'];
	$Filename='';
	if(!$num)
	{	
		if($photos){
		$Filename=date('dmyhis').basename( $_FILES['photo']['name']);		
				
				$target = "../uploaded_files/product/".$Filename;
				move_uploaded_file($_FILES['photo']['tmp_name'], $target);    //Tells you if its all ok	
		}
				$q=$pdo->prepare("INSERT into `product` values(:id,:name, :photo,:des, :fld_order, :actstat, :subcat,:feature_img)");
				$q->execute(array(':id'=>$id, 
									
									':name' => $name ,
									':photo' => $Filename ,
									':des' => $des ,
									':fld_order' => $fld_order ,
									':actstat' => $actstat,
									':subcat' => $subcat,
									':feature_img'=>$feature_img
									));	
				$affected_rows = $q->rowCount();
				if($affected_rows)
					$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Added Successfully
						   </div>';
	}
	else
	{
		$umessage='<div class="alert alert-danger" role="alert">Duplicate Entry!!! Code Already Exists </div> ';
	}
	
}

if(isset($_POST['deleteall']))
{
	$arr=$_POST['ids'];
	if(count($arr))
	{
	$str_rest_refs=implode(",",$arr);
	
	$data=sqlfetch("select * from `product` where id in ($str_rest_refs)");
		foreach($data as $product)
		{
			$img_path='../uploaded_files/product/'.$product['photo'];
			 if(file_exists($img_path))
			 { 
			   @unlink($img_path);
			 }
		}
	
	$pdo=getPDOObject();
	$q=$pdo->query("DELETE FROM `product` WHERE id in ($str_rest_refs)");
	if($q)
	$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Deleted Successfully
						   </div>';	
	}
	else{
		$umessage='<div class="alert alert-danger" role="alert">
							<strong></strong>Please Select Items to perform this action
						   </div>'; 
	}
}

if(isset($_POST['activate']))
{
	$arr=$_POST['ids'];
	if(count($arr))
	{
		$str_rest_refs=implode(",",$arr);
		$pdo=getPDOObject();
	$q=$pdo->query("UPDATE `product` SET actstat='1' WHERE id in ($str_rest_refs)");
	if($q)
	$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Activated Successfully
						   </div>';	
	}
	else{
		$umessage='<div class="alert alert-danger" role="alert">
							<strong></strong>Please Select Items to perform this action
						   </div>'; 
	}
		
}	

if(isset($_POST['deactivate']))
{
	$arr=$_POST['ids'];
	if(count($arr))
	{
		$str_rest_refs=implode(",",$arr);
		$pdo=getPDOObject();
	$q=$pdo->query("UPDATE `product` SET actstat='0' WHERE id in ($str_rest_refs)");
	if($q)
	$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>DeActivated Successfully
						   </div>';	
	}
	else{
		$umessage='<div class="alert alert-danger" role="alert">
							<strong></strong>Please Select Items to perform this action
						   </div>'; 
	}	
}

if(isset($_POST['feature']))
{
	$arr=$_POST['ids'];
	if(count($arr))
	{
		$str_rest_refs=implode(",",$arr);
		$pdo=getPDOObject();
	$q=$pdo->query("UPDATE `product` SET feature_img='1' WHERE id in ($str_rest_refs)");
	if($q)
	$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Featured Successfully
						   </div>';	
	}
	else{
		$umessage='<div class="alert alert-danger" role="alert">
							<strong></strong>Please Select Items to perform this action
						   </div>'; 
	}
		
}	

if(isset($_POST['unfeature']))
{
	$arr=$_POST['ids'];
	if(count($arr))
	{
		$str_rest_refs=implode(",",$arr);
		$pdo=getPDOObject();
	$q=$pdo->query("UPDATE `product` SET feature_img='0' WHERE id in ($str_rest_refs)");
	if($q)
	$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Unfeatured Successfully
						   </div>';	
	}
	else{
		$umessage='<div class="alert alert-danger" role="alert">
							<strong></strong>Please Select Items to perform this action
						   </div>'; 
	}	
}

if(isset($_POST['editdone']))
{
	extract($_POST);
	$Filename=$prevphoto;
	$photos=$_FILES['photo']['name'];
	if($photos!='')
	{	$Filename='';
		
		$Filename=date('dmyhis').basename( $_FILES['photo']['name']);		
				$target = "../uploaded_files/product/".$Filename;
				move_uploaded_file($_FILES['photo']['tmp_name'], $target);    //Tells you if its all ok	
				$img_path='../uploaded_files/product/'.$prevphoto;
			 if(file_exists($img_path))
			 { 
			   @unlink($img_path);
			 }
				
		}
	 
	$pdo=getPDOObject();
		$q=$pdo->prepare("UPDATE `product` SET 
		
		
		name=?,
		photo=?,
		des=?,
		fld_order=?,
		actstat=?,
		subcat=?,
		feature_img=?
		
		WHERE id=?");
				$q->execute(array( $name, $Filename , $des,$fld_order,$actstat, $subcat,$feature_img, $pid));	
				$affected_rows = $q->rowCount();
				if($affected_rows)
					$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Updated Successfully
						   </div>';
	
}

function product_form($pid='0',$name='',$photo='',$des='',$fld_order='0',$actstat='', $subcat='0',$feature_img='',$formname='addproduct')
{ ?>
	<form action="product.php" method="post" enctype="multipart/form-data">
				 <input type="hidden" name="pid" value="<?php echo $pid; ?>" />
				  <input type="hidden" name="prevphoto" value="<?php echo $photo; ?>" />
			 
			   <br><br>
			   <span class="col-md-4">
					<label>Category</label>
					 <div class="controls">
					<select name="subcat" id="selectError" data-rel="chosen">
					<option>SELECT Category</option>
						<?php 
						$categories=sqlfetch("SELECT * FROM `category` order by fld_order");
						foreach($categories as $category)
						{
							$select='';
							if(($subcat==($category['id'])))
								$select='selected';
							echo '<option '.$select.' value="'.$category['id'].'">'.$category['name'].'</option>';
						}
						?>
					</select>
								</div>	
			   </span>
			   <span class="col-md-4">
			   <label>Name</label>
				<input type="text" name="name" value="<?php echo $name; ?>" required class="form-control" /><br/><br/>
				
				</span>
				<span class="col-md-4">
				<label>Photo</label>
				<input type="file" name="photo" >
				<img class="grayscale img-responsive" alt="" src="../upload/<?php echo $photo; ?>" >
				
				</span>
				<span class="col-md-6">
				<label>Status</label>
					<div class="controls">
						<select name="actstat" id="selectError" data-rel="chosen">
							<option <?php if(($actstat)=='1')echo 'selected'; ?> value="1">Active</option>
							<option <?php if(($actstat)=='0')echo 'selected'; ?> value="0">Inactive</option>
						</select>
					</div>
				</span>
				
				<span class="col-md-6">
				<label>Feature Image</label>
					<div class="controls">
						<select name="feature_img" id="selectError" data-rel="chosen">
							<option <?php if(($feature_img)=='1')echo 'selected'; ?> value="1">Feature</option>
							<option <?php if(($feature_img)=='0')echo 'selected'; ?> value="0">Unfeature</option>
						</select>
					</div>
				</span>
				<span class="col-md-6">
						<label>Sort Order</label>
						<input type="number" class="form-control" name="fld_order" value="<?php echo $fld_order; ?>">
					</span>
				<span class="col-md-12">
				<label>Description</label>	
				<textarea class="summernote" name="des" cols="60" rows="10"><?php echo $des; ?></textarea><br />
					<script>
						$(document).ready(function() {
							$('.summernote').summernote({
								height: "200px"
							});
						});
						var postForm = function() {
						var content = $('textarea[name="des"]').html($('.summernote').code());
						}
					</script>
				</span>
					
				
					<span class="col-md-4">
					<input type="submit" value="Submit" name="<?php echo $formname; ?>" class="btn btn-success" />
					
					</span>
				</form>
	
<?php 
}


?>





<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">product</a>
        </li>
    </ul>
</div>
<?php echo $umessage; ?>
<?php 
if(isset($_GET['edit']) and ($_GET['edit']=='true'))
{ ?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Edit product</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-down"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row" >
				<div class="col-md-12">
               <?php 
			$pid=$_GET['pid'];
			$productdata=sqlfetch("SELECT * FROM `product` where id='$pid' ");
			foreach($productdata as $product)
			{
				extract($product);
				product_form($pid,$name,$photo,$des,$fld_order,$actstat,$subcat,$feature_img,$formname='editdone');
			} ?>
               
				</div>
            </div>
        </div>
    </div>
</div>

	<?php
}
else{
?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Add product</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-down"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row" >
				<div class="col-md-12">
               <?php product_form(); ?>
               
				</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>product</h2>

                <div class="box-icon">
                   
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped responsive">
					<tbody>
						
						<form action="" method="post">
						<tr>
						
						
							
							
							<td></td>
							<td></td>
							<td><input type="submit" class="btn btn-success pull-right" name="activate" value="Activate"/></td>
							<td><input type="submit" class="btn label-default pull-right " name="deactivate" value="Deactivate"/></td>
							<td><input type="submit" class="btn btn-success pull-right" name="feature" value="Feature"/></td>
							<td><input type="submit" class="btn label-default pull-right " name="unfeature" value="Unfeature"/></td>
							<td><input type="submit" class="btn btn-danger pull-right" name="deleteall" value="Delete"/></td>
							<td>Select * <input type="checkbox" class="xyz" onclick="toggle(this)" ></td>
						</tr>
						
						<tr>
						
							<th>S. No.</th>
							<th>Name</th>
							<th>Category</th>
							<th>Photo</th>
							
							
							<th>Sort Order</th>
							<th>Status</th>
							<th>Feature Image</th>
							<th>Action</th>
						</tr>
						<?php 
						$count=1;
						$data=sqlfetch("SELECT * FROM `product`  order by fld_order");
						foreach($data as $menu)
						{ ?>
						<tr>
							<td><?php echo $count++; ?></td>
							<td><?php echo $menu['name']; ?></td>
							<td><?php echo get_category_name($menu['subcat']); ?></td>
							
							<td><img style="max-width:200px; max-height:200px;" src="../uploaded_files/product/<?php echo $menu['photo']; ?>" class="img-responsive" ></td>
							<td><?php echo $menu['fld_order']; ?></td>
						
							<td><?php echo get_active_status_text($menu['actstat']); ?></td>	
							<td><?php echo get_active_status_text1($menu['feature_img']); ?></td>
							<td>
								<input class="xyz" name="ids[]" value="<?php echo $menu['id']; ?>" type="checkbox"/> 
								<a class="ajax-link" href="product.php?&pid=<?php echo $menu['id']; ?>&edit=true">
								<button type="button" class="btn btn-xs btn-danger pull-right" name="editproduct">Edit</button>
								</a>
							</td>
						</tr>
						<?php } ?>
						
						</form>
					</tbody>
				 
				 </table>
            </div>
        </div>
    </div>
    
</div>

<?php } ?>

<?php require('footer.php'); ?>
