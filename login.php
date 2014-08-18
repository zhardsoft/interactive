<?php
	error_reporting(0);
	$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resto Java</title>
<style type="text/css">
.judul {
	font-family: "Times New Roman", Times, serif;
	font-size: 50px;
	color:#FFF;
}
.judul2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 30px;
	color:#999;
}
.judul3 {
	font-family: "Times New Roman", Times, serif;
	font-size: 30px;
	color:#999;
	background-color:#0FF;
}
#cssmenu {
  background: #4cb6ea;
  margin: 0;
  width: auto;
  padding: 0;
  line-height: 1;
  display: block;
  position: relative;
  font-family:"Times New Roman", Times, serif;
}
#cssmenu ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: block;
}
#cssmenu ul:after,
#cssmenu:after {
  content: " ";
  display: block;
  font-size: 0;
  height: 0;
  clear: both;
  visibility: hidden;
}
#cssmenu ul li {
  margin: 0;
  padding: 0;
  display: block;
  position: relative;
}
#cssmenu ul li a {
  text-decoration: none;
  display: block;
  margin: 0;
  -webkit-transition: color .2s ease;
  -moz-transition: color .2s ease;
  -ms-transition: color .2s ease;
  -o-transition: color .2s ease;
  transition: color .2s ease;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu ul li ul {
  position: absolute;
  left: -9999px;
  top: auto;
}
#cssmenu ul li ul li {
  max-height: 0;
  position: absolute;
  -webkit-transition: max-height 0.4s ease-out;
  -moz-transition: max-height 0.4s ease-out;
  -ms-transition: max-height 0.4s ease-out;
  -o-transition: max-height 0.4s ease-out;
  transition: max-height 0.4s ease-out;
  background: #ffffff;
}
#cssmenu ul li ul li.has-sub:after {
  display: block;
  position: absolute;
  content: "";
  height: 10px;
  width: 10px;
  border-radius: 5px;
  background: #000000;
  z-index: 1;
  top: 13px;
  right: 15px;
}
#cssmenu.align-right ul li ul li.has-sub:after {
  right: auto;
  left: 15px;
}
#cssmenu ul li ul li.has-sub:before {
  display: block;
  position: absolute;
  content: "";
  height: 0;
  width: 0;
  border: 3px solid transparent;
  border-left-color: #ffffff;
  z-index: 2;
  top: 15px;
  right: 15px;
}
#cssmenu.align-right ul li ul li.has-sub:before {
  right: auto;
  left: 15px;
  border-left-color: transparent;
  border-right-color: #ffffff;
}
#cssmenu ul li ul li a {
  font-size: 14px;
  font-weight: 400;
  text-transform: none;
  color: #000000;
  letter-spacing: 0;
  display: block;
  width: 170px;
  padding: 11px 10px 11px 20px;
}
#cssmenu ul li ul li:hover > a,
#cssmenu ul li ul li.active > a {
  color: #4cb6ea;
}
#cssmenu ul li ul li:hover:after,
#cssmenu ul li ul li.active:after {
  background: #4cb6ea;
}
#cssmenu ul li ul li:hover > ul {
  left: 100%;
  top: 0;
}
#cssmenu ul li ul li:hover > ul > li {
  max-height: 72px;
  position: relative;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul > li {
  float: none;
  display: inline-block;
}
#cssmenu.align-center > ul {
  text-align: center;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul {
  float: right;
}
#cssmenu.align-right > ul > li:hover > ul {
  left: auto;
  right: 0;
}
#cssmenu.align-right ul ul li:hover > ul {
  right: 100%;
  left: auto;
}
#cssmenu.align-right ul ul li a {
  text-align: right;
}
#cssmenu > ul > li:after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 0;
  top: 0;
  z-index: 0;
  background: #ffffff;
  -webkit-transition: height .2s;
  -moz-transition: height .2s;
  -ms-transition: height .2s;
  -o-transition: height .2s;
  transition: height .2s;
}
#cssmenu > ul > li.has-sub > a {
  padding-right: 40px;
}
#cssmenu > ul > li.has-sub > a:after {
  display: block;
  content: "";
  background: #ffffff;
  height: 12px;
  width: 12px;
  position: absolute;
  border-radius: 13px;
  right: 14px;
  top: 16px;
}
#cssmenu > ul > li.has-sub > a:before {
  display: block;
  content: "";
  border: 4px solid transparent;
  border-top-color: #4cb6ea;
  z-index: 2;
  height: 0;
  width: 0;
  position: absolute;
  right: 16px;
  top: 21px;
}
#cssmenu > ul > li > a {
  color: #ffffff;
  padding: 10px 20px;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 14px;
  z-index: 2;
  position: relative;
}
#cssmenu > ul > li:hover:after,
#cssmenu > ul > li.active:after {
  height: 100%;
}
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li.active > a {
  color: #000000;
}
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li.active > a:after {
  background: #000000;
}
#cssmenu > ul > li:hover > a:before,
#cssmenu > ul > li.active > a:before {
  border-top-color: #ffffff;
}
#cssmenu > ul > li:hover > ul {
  left: 0;
}
#cssmenu > ul > li:hover > ul > li {
  max-height: 72px;
  position: relative;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu > ul > li > a {
  display: block;
}
#cssmenu > ul > li {
  width: auto;
}
#cssmenu > ul > li > ul {
  width: 170px;
  display: block;
}
#cssmenu > ul > li > ul > li {
  width: 170px;
  display: block;
}

.font1 {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 14px;
	font-style: italic;
	color: #00F;
}
.font11 {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 16px;
	font-style: italic;
	color: #00F;
	background:#0F0
}
.font12 {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 20px;
	font-style: italic;
	color: #CCC;
}
.font13 {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 20px;
	font-style: italic;
	color: #0CF;
}
</style>
</head>

<body>
	<?php
			if($id==2){
				echo"<script>alert('Login Gagal, Username Atau Password Salah ..!! ');history.go(-1)</script>";
			}
	?>
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="90" colspan="5" align="center" valign="middle" bgcolor="#CCCCCC"class="judul"><strong>LOGIN</strong></td>
    <td width="40%" height="90" align="center" valign="middle" bgcolor="#CCCCCC"><form id="form1" name="form1" method="post" action="masuk/login.php">
      <table width="95%" border="0">
        <tr>
          <th width="41%" height="52" align="left" valign="bottom" class="font1" scope="col">Username</th>
          <th width="3%" align="left" valign="bottom" scope="col">&nbsp;</th>
          <th width="39%" align="left" valign="bottom" class="font1" scope="col">Password</th>
          <th width="3%" scope="col">&nbsp;</th>
          <th width="14%" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td><label for="user"></label>
            <input name="user" type="text" id="user" size="30" /></td>
          <td>&nbsp;</td>
          <td><label for="pass"></label>
            <input name="pass" type="password" id="pass" size="30" /></td>
          <td>&nbsp;</td>
          <td><input name="button" type="submit" class="font1" id="button" value="Login" /></td>
        </tr>
      </table>
    </form></td>
    <td height="90" align="center" valign="middle" bgcolor="#CCCCCC"class="judul">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">
    <div id="cssmenu">
      <ul id="strike">
        <li><a href="#"></a></a></li>
        </ul></li></div>
    </td>
  </tr>
  <tr height="auto">
    <td height="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td height="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="1%" height="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td height="34">&nbsp;</td>
  </tr>
  <tr height="auto">
    <td width="0%" height="56">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="41%" height="56">&nbsp;</td>
    <td width="12%">&nbsp;</td>
    <td height="56" class="judul2">&nbsp;</td>
    <td height="56" class="judul2"><strong> PERUBAHAN</strong></td>
    <td width="0%" height="56">&nbsp;</td>
  </tr>
  <tr height="auto">
    <td width="0%" height="197">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="41%" height="197">&nbsp;</td>
    <td valign="top"></td>
    <td valign="top">&nbsp;</td>
    <td valign="top"><form id="form3" name="form3" method="post" action="masuk/welcome.php">
      <table width="99%" height="332" border="0">
        <tr>
          <th height="32" colspan="3" align="left" valign="bottom" scope="col"><label for="namaa"></label>
            <input name="namaa"type="text" class="font12" id="namaa" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue;" value="Last Name" size="25" /></th>
        </tr>
        <tr>
          <th height="29" colspan="3" align="left" scope="col"><input name="email" type="text" class="font12" id="email" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue;" value="Email" size="50" /></th>
        </tr>
        <tr>
          <td height="24" colspan="3"><input name="textfield5" type="text" class="font12" id="textfield5" value="Retry Email" size="50" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue;" /></td>
        </tr>
        <tr>
          <td height="24" colspan="3"><input name="passw" type="text" class="font12" id="passw" value="New Password" size="50" onfocus="if(this.value==this.defaultValue)this.value='';this.type='password';" onblur="if(this.value==''){this.value=this.defaultValue;this.type='text';}" /></td>
        </tr>
        <tr>
          <td width="23%" height="45" valign="bottom"> Tanggal lahir</td>
          <td width="28%">&nbsp;</td>
          <td width="49%">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="tanggal"></label>
            <select name="tanggal" id="tanggal">
              <option>Tanggal</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select></td>
          <td><select name="bulan" id="bulan">
            <option>Bulan</option>
            <option>Januari</option>
            <option>februari</option>
            <option>Maret</option>
            <option>April</option>
            <option>Mei</option>
            <option>Juni</option>
            <option>Juli</option>
            <option>Agustus</option>
            <option>September</option>
            <option>Oktober</option>
            <option>November</option>
            <option>Desember</option>
          </select></td>
          <td><select name="tahun" id="tahun">
            <option>Tahun</option>
            <option>1985</option>
            <option>1986</option>
            <option>1987</option>
            <option>1988</option>
            <option>1989</option>
            <option>1990</option>
            <option>1991</option>
            <option>1992</option>
            <option>1993</option>
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
            <option>1997</option>
            <option>1998</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2006</option>
            <option>2007</option>
            <option>2008</option>
            <option>2009</option>
            <option>2010</option>
            <option>1011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
          </select></td>
        </tr>
        <tr>
          <td><input name="radio1" type="radio" id="radio_0" value="L" />
            <label for="radio1">Laki-Laki</label></td>
          <td><input type="radio" name="radio1" id="radio_1" value="P" />
            <label for="radio1">Perempuan</label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="34" align="center" valign="bottom" class="font1"><input name="button2" type="submit" class="font13" id="button2" value="Register" /></td>
          <td height="34" align="center" valign="bottom" class="font1">&nbsp;</td>
          <td height="34" align="center" valign="bottom" class="font1">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
    <td width="0%" height="197">&nbsp;</td>
  </tr>
   <tr height="auto">
   <td width="0%" height="86">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="41%" height="86">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td width="0%" height="86">&nbsp;</td>
  </tr>
  <tr>
    <td height="26" colspan="7" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
</body>
</html>