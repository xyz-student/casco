<?php
error_reporting(0);
$siteTitle='shriram Admin Panel';
session_start();
function getPDOObject() {
$dsn = 'mysql:host=localhost;dbname=cascoco_casco;charset=utf8mb4';
$user = 'cascoco_casco';
$pass = '-buCR&DYJQ}O';
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_PERSISTENT, true);

   return $pdo;
}
function sqlfetch($query)
{
	$row=array();
	$pdo=getPDOObject();
	$sql=$pdo->query($query);
	
	$datas = $sql->fetchAll(PDO::FETCH_ASSOC);
	foreach($datas as $data)
	$row[]=$data;
	return $row;
}

function get_active_status_text($num)
{
	$status='';
	if($num==0)
		$status='<span class="label label-default">Deactive</span>';
	if($num==1)
		$status='<span class="label label-success">Active</span>';
	return $status;
}

function get_active_status_text1($num)
{
	$status='';
	if($num==0)
		$status='<span class="label label-default">Unfeature</span>';
	if($num==1)
		$status='<span class="label label-success">Feature</span>';
	return $status;
}


function check_session()
{
	if(!isset($_SESSION['admin_id']))
	{
		header('location:alogin.php');
	}
}

function check_login()
{
	if(isset($_SESSION['admin_id']))
	{
		header('location:./index.php');
	}
}

function login_me()
{	

	$pdo=getPDOObject();
	if(($_POST['email']=='') || ($_POST['pass']==''))
		$message='
	<div class="alert alert-danger">
		Please enter Username and Password
	</div>';
	else
	{
		


		$user=$_POST['email'];
		$pass=$_POST['pass'];
		
		
			
		
$stmt = $pdo->prepare("SELECT * FROM admin where username=? and password=? order by id limit 1");
$stmt->execute(array($user,$pass));
$num=$stmt->rowCount();
	
		if($num>0)
		{
			$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			foreach($row as $admin)
			{
			
			session_start();
			$_SESSION['admin_id']=$admin['id'];
			$message='<div class="alert alert-success">Login Successful ,Please Refresh page if not redirected.</div>';
			header('location:./index.php');
			}
			
		}
		else
		{
			$message='
			<div class="alert alert-danger">
			Invalid Credentials, Please check Your Username and Password
			</div>';
			
		}
	}
	return $message;
}

function get_total_student_count()
{
	$pdo=getPDOObject();
	$sql=$pdo->query("SELECT * from student");
	$num=$sql->rowCount();
	return $num;
}
function get_total_student_active_count()
{
	$pdo=getPDOObject();
	$sql=$pdo->query("SELECT * from student where actstat='1'");
	$num=$sql->rowCount();
	return $num;
}
function get_total_public_count()
{
	$pdo=getPDOObject();
	$sql=$pdo->query("SELECT * from public_register");
	$num=$sql->rowCount();
	return $num;
}
function get_total_public_active_count()
{
	$pdo=getPDOObject();
	$sql=$pdo->query("SELECT * from public_register where actstat='1'");
	$num=$sql->rowCount();
	return $num;
}

function get_new_member_count()
{
	$pdo=getPDOObject();
	$sql=$pdo->query("SELECT * from seller where actstat='0'");
	$num=$sql->rowCount();
	return $num;
}


function get_test_name($id)
{
	
	$name='';
	
		$query="SELECT * from test where id='$id'";
	$sql=sqlfetch($query);
	foreach($sql as $data)
	$name=$data['name'];
	return $name;
}

function get_admin_id()
{
	$mid=$_SESSION['admin_id'];
	return $mid;
}

function get_category_name($id)
{
	
	$name='';
	$sql=sqlfetch("SELECT * FROM category where id='$id'");
	if(count($sql))
		foreach($sql as $category)
	$name=$category['name'];
	return $name;
}
function get_product_name($id)
{
	$name='';
	$sql=sqlfetch("SELECT * FROM product where id='$id'");
	if(count($sql))
		foreach($sql as $product)
	$name=$product['name'];
	return $name;
}

function get_category_count()
{
	$count=0;
	$data=sqlfetch("SELECT id from category");
	$count=count($data);
	return $count;
}

function get_product_count()
{
	$count=0;
	$data=sqlfetch("SELECT id from product");
	$count=count($data);
	return $count;
}


// function get_category_nameby_subcatid($id)
// {
	
	
	// $sql=mysql_query("SELECT * FROM subcat where id='$id'");
	// $data=mysql_fetch_array($sql);
	// echo $catid=$data['cat_id'];
	
	// $name=$catid;
	// return $name;
// }
function isFileValid($filename)
{
	$ext = substr($filename, strrpos($filename, '.') + 1);
	$file=strtolower($ext);
	if($file=='jpg' || $file=='gif' || $file=='jpeg' || $file=='png' || $file=='pdf')
	{
			return $file;
	}
	else
	{
		exit();
	}
}

?>