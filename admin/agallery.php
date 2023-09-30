<?php 
$umessage='';
include('./function/function.php'); 
check_session();
if(isset($_POST['addgallery']))
{
	$fld_id=0;
	extract($_POST);
	$type=1;
	$pdo=getPDOObject();
	$sql=$pdo->query("SELECT * FROM `tbl_gallery` where  fld_name LIKE '$fld_name'");
	$num=$sql->rowCount();
	$photos=$_FILES['fld_image']['name'];
	$Filename='';
	if(!$num)
	{	
		if($photos){
		$Filename=date('dmyhis').basename( $_FILES['fld_image']['name']);
		$f_valid=isFileValid($Filename);
		if($f_valid && $Filename!='')
		{
			$target = "../uploaded_files/gallery/".$Filename;
				move_uploaded_file($_FILES['fld_image']['tmp_name'], $target);    //Tells you if its all ok	
			
		}
				
				
		}
				$q=$pdo->prepare("INSERT into `tbl_gallery` values(:fld_id,:fld_name,:fld_image,:fld_date,:fld_status)");
				$q->execute(array(':fld_id'=>$fld_id,
								  ':fld_name' => $fld_name,
									':fld_image' => $Filename,
									':fld_date' => $fld_date,
									':fld_status' => $fld_status
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
	
	$data=sqlfetch("select * from `tbl_gallery` where fld_id in ($str_rest_refs)");
		foreach($data as $category)
		{
			$img_path='../uploaded_files/gallery/'.$category['photo'];
			 if(file_exists($img_path))
			 { 
			   @unlink($img_path);
			 }
		}
	
	$pdo=getPDOObject();
	$q=$pdo->query("DELETE FROM `tbl_gallery` WHERE fld_id in ($str_rest_refs)");
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
	$q=$pdo->query("UPDATE `tbl_gallery` SET fld_status='1' WHERE fld_id in ($str_rest_refs)");
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
	$q=$pdo->query("UPDATE `tbl_gallery` SET fld_status='0' WHERE fld_id in ($str_rest_refs)");
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

if(isset($_POST['editdone']))
{
	extract($_POST);
	$Filename=$prevphoto;
	$photos=$_FILES['fld_image']['name'];
	if($photos!='')
	{	$Filename='';
		
		$Filename=date('dmyhis').basename( $_FILES['fld_image']['name']);		
				$target = "../uploaded_files/gallery/".$Filename;
				move_uploaded_file($_FILES['fld_image']['tmp_name'], $target);    //Tells you if its all ok	
				$img_path='../uploaded_files/gallery/'.$prevphoto;
			 if(file_exists($img_path))
			 { 
			   @unlink($img_path);
			 }
				
		}
	 
	$pdo=getPDOObject();
		$q=$pdo->prepare("UPDATE `tbl_gallery` SET 
		
		
		fld_name=?,
		fld_image=?,
		fld_date=?,
		fld_status=?
		
		WHERE fld_id=?");
				$q->execute(array( $fld_name, $fld_image,$fld_date,$fld_status, $fld_id));	
				$affected_rows = $q->rowCount();
				if($affected_rows)
					$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Updated Successfully
						   </div>';
	
}

function category_form($fld_id='0',$fld_name='',$fld_image='',$fld_date='0',$fld_status='',$formname='addgallery')
{ ?>
	<form action="agallery.php" method="post" enctype="multipart/form-data">
				 <input type="hidden" name="fld_id" value="<?php echo $fld_id; ?>" />
				  <input type="hidden" name="prevphoto" value="<?php echo $fld_image; ?>" />
			 
			   <br><br>
			   <span class="col-md-3">
			   <label>Name</label>
				<input type="text" name="fld_name" value="<?php echo $fld_name; ?>" required class="form-control" /><br/><br/>
				
				</span>
				<span class="col-md-3">
				<label>Photo</label>
				<input type="file" name="fld_image" >
				<img class="grayscale img-responsive" alt="" src="../uploaded_files/gallery/<?php echo $fld_image; ?>" >
				
				</span>
				<span class="col-md-3">
				<label>Status</label>
					<div class="controls">
						<select name="fld_status" id="selectError" data-rel="chosen">
							<option <?php if(($fld_status)=='1')echo 'selected'; ?> value="1">Active</option>
							<option <?php if(($fld_status)=='0')echo 'selected'; ?> value="0">Inactive</option>
						</select>
					</div>
				</span>
				
				<span class="col-md-3">
				<label>Date</label>
					<div class="controls">
							<input type="text" name="fld_date" value="<?php echo $fld_date; ?>" required class="form-control" /><br/><br/>
				
						</select>
					</div>
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
            <a href="#">category</a>
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
                <h2><i class="glyphicon glyphicon-info-sign"></i> Edit category</h2>
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
			$fld_id=$_GET['pid'];
			$productdata=sqlfetch("SELECT * FROM `tbl_gallery` where fld_id='$fld_id' ");
			foreach($productdata as $product)
			{
				extract($product);
				category_form($fld_id,$fld_name,$fld_image,$fld_date,$fld_status,$formname='editdone');
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
                <h2><i class="glyphicon glyphicon-info-sign"></i> Add Gallery</h2>
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
               <?php category_form(); ?>
               
				</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Gallery</h2>

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
							<td><input type="submit" class="btn btn-success pull-right" name="activate" value="Activate"/></td>
							<td><input type="submit" class="btn label-default pull-right " name="deactivate" value="Deactivate"/></td>
							<td><input type="submit" class="btn btn-danger pull-right" name="deleteall" value="Delete"/></td>
							<td>Select * <input type="checkbox" class="xyz" onclick="toggle(this)" ></td>
						</tr>
						
						<tr>
						
							<th>S. No.</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						<?php 
						$count=1;
						$data=sqlfetch("SELECT * FROM `tbl_gallery`  order by fld_id");
						foreach($data as $menu)
						{ ?>
						<tr>
							<td><?php echo $count++; ?></td>
							<td><?php echo $menu['fld_name']; ?></td>
							<td>
							<img style="max-width:200px; max-height:200px;" src="../uploaded_files/gallery/<?php echo $menu['fld_image']; ?>" class="img-responsive" ><?php echo $menu['fld_image']; ?></td>
							
						
							<td><?php echo get_active_status_text($menu['fld_status']); ?></td>
							<td>
								<input class="xyz" name="ids[]" value="<?php echo $menu['fld_id']; ?>" type="checkbox"/> 
								<a class="ajax-link" href="agallery.php?&pid=<?php echo $menu['fld_id']; ?>&edit=true">
								<button type="button" class="btn btn-xs btn-danger pull-right" name="editcategory">Edit</button>
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
