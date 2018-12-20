<?php require_once("../Include/connection.php"); ?>
<?php
	// Lấy 16 bài viết mới nhất đã được phép public ra ngoài từ bảng posts
	$sql = "select * from posts where is_public = 1 order by createdate desc limit 16";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$query = mysqli_query($conn,$sql);
?>
					<?php
						// Khởi tạo biến đếm $i = 0
						$id = 0;
						// Lặp dữ liệu lấy data từ cơ sở dữ liệu
						while ( $data = mysqli_fetch_array($query) ) {
							// Nếu biến đếm $i =1, tức là vòng lặp chạy tới bài viết thứ tư thì ta thực hiện xuống hàng cho bài viết kế tiếp
							// Vì mỗi dòng hiển thị, ta chỉ hiển thị 1 bài viết
							if ($id == 1) {
								echo "</tr>";
								$id = 0;
							}
					?>
												<?php
							$id ++;
						}?>
						<?php 
						if ($id == $data["id"])
						{
							echo $data["title"];	
							echo $data["content"]; 
}


					?>