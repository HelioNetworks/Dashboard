<?php 
if ($_SERVER['SERVER_NAME'] != 'jjeadmin.heliohost.org') {
	$switchserver = 'You are using Stevie; <a href="http://jjeadmin.heliohost.org/heliohost/">switch to Johnny</a>.';
}else{
	$switchserver = 'You are using Johnny; <a href="http://jjeadmin.co.cc/heliohost/">switch to Stevie</a>.';
}
?>

<table class="footer"><tr>
<td>&copy; Copyright Helio Networks 2011. All trademarks and copyrights are property of their respective owners.</td>
<td><div style="text-align:right;"><?php echo $switchserver; ?></div></td>
</tr></table>

</body>

</html>