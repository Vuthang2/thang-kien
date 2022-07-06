<td valign="top" class="tdmain">
	<b style="color: red;">[Kết quả tìm kiếm !]</b><br />
	<?php
	$title = $_POST['title'];
	$str = mysqli_query($conn, "SELECT * FROM tbl_news WHERE title LIKE '%$title%'");
	$tongsodong = mysqli_num_rows($str);
	if ($tongsodong == 0) {
	?>
		Không tìm thấy tin tức nào !

	<?php
	}
	if ($tongsodong > 0) {
	?>
		<table width="100%" border="0">
			<tr>
				<?php
				$d = 0;
				while ($rows = mysqli_fetch_array($str)) {
					$d = $d + 1;
				?>
					<td width="150" align="center">
						<a href="index.php?mod=news&act=detail&id=<?php echo $rows['id']; ?>">
							<img src="<?php echo $rows['photo']; ?>" width="100" height="100">
							<br />
							<b><?php echo truncateString($rows['title'], 30, true); ?></b>
							<br />
						</a>
						<br />
					</td>
				<?php
					if ($d % 4 == 0)
						echo "</tr>";
				}
				?>
		</table>
</td>
<?php } ?>
}