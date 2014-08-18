<?php
error_reporting(0);
$kdc=$_GET['kdc'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--        Script by hscripts.com          -->
<!--        copyright of HIOX INDIA         -->
<!-- Free javascripts @ http://www.hscripts.com -->
<script type="text/javascript">
function fnSelect(objId)
{
   fnDeSelect();
   if (document.selection) 
   {
      var range = document.body.createTextRange();
      range.moveToElementText(document.getElementById(objId));
      range.select();
   }
   else if (window.getSelection) 
   {
      var range = document.createRange();
      range.selectNode(document.getElementById(objId));
      window.getSelection().addRange(range);
   }
}
function fnDeSelect() 
{
   if (document.selection)
             document.selection.empty();
   else if (window.getSelection)
              window.getSelection().removeAllRanges();
} 
</script>
<!-- Script by hscripts.com -->

<style type="text/css">
<!--
.usrnm {
	background-color:#0CF;
	cursor:pointer;
}
.psswrd {
	background-color:#F96;
	cursor:pointer;
}
.eml {
	background-color:#0CF;
	cursor:pointer;
}
.table_header {
	color: #FFF;
}
.usrnm:hover{
	text-align:center;
}
.psswrd:hover{
	text-align:center;
}
.eml:hover{
	text-align:center;
}

-->
</style>
</head>

<body>
    <?php
			include("config.php");
			$sql="SELECT * from category where kd_category='$kdc'";
			$hasil=mysql_query($sql,$koneksi);
			$rcrd=mysql_fetch_array($hasil);
	?>
<h2>
<strong>
<?php 
	if ($kdc==''){
		echo "ZHARDSOFT  ACCOUNT";
	}else{
		echo "ZHARDSOFT  ACCOUNT - ". $rcrd['category'];
	}
?>

</strong>
</h2>
<table width="690" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="437" align="left">
    <?php
			$sql="SELECT * from category";
			$hasil=mysql_query($sql,$koneksi);
	?>Group Account 
    <label>
      <select name="select" id="select" onchange="location = 'index.php?kdc='+document.getElementById('select').value;">
      <option name="cty" id="cty" value="" >Choose Category</option>
		<?php
                while($record=mysql_fetch_array($hasil)){  
        ?>
         <option name="cty" id="cty" value="<?php echo $record['kd_category'];?>" ><?php echo $record['category'];?></option>
		<?php
				  }
		?>
      </select>
      <input type="submit" name="button2" id="button2" value="ADD ACCOUNT" onclick="location='add_account.php';" />
    </label>
    </td>
    <td width="253"><label>
      <input type="submit" name="button" id="button" value="ADD KATEGORI" onclick="location='add_category.php';"/>
    </label></td>
  </tr>
</table>
<p>
<?php
include("config.php");
$sql="SELECT * from account where kd_category='$kdc'";
$hasil=mysql_query($sql,$koneksi);
?>
<table width="500" border="0" cellspacing="5" cellpadding="0">
  <tr bgcolor="#0099FF" class="table_header">
    <td bgcolor="#0099FF">NO</td>
    <td align="center">USERNAME</td>
    <td align="center">PASSWORD</td>
    <td align="center">EMAIL</td>
  </tr>
  <?php
  $no=1;
  while($record=mysql_fetch_array($hasil)){  
 ?>
<tr>
	<td bgcolor="#0099FF"><?php echo $no;?></td>
    <td><div id="usr<?php echo $no;?>" class="usrnm" onmouseover="fnSelect('usr<?php echo $no;?>');">
		<?php echo $record['username'];?></div>
    </td>
    <td><div id="psw<?php echo $no;?>" class="psswrd" onmouseover="fnSelect('psw<?php echo $no;?>');">
		<?php echo $record['password'];?></div>
    </td>
    <td><div id="eml<?php echo $no;?>" class="eml" onmouseover="fnSelect('eml<?php echo $no;?>');">
		<?php echo $record['email'];?></div>
    </td>
    </tr>
    <?php
	$no++;
  }
  ?>
</table>
<?php
mysql_close($koneksi);
?>
</p>
</body>
</html>