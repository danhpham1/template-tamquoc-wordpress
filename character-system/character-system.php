<div class="character-system">
	<div class="character-system--container">
		<div class="character-system--info">
			<img class="character-system--hr-left" src="<?php bloginfo('template_url');?>/assets/images/hr-left.png">
			<p>Hệ Thống Nhân Vật</p>
			<img class="character-system--hr-left" src="<?php bloginfo('template_url');?>/assets/images/hr-right.png">
		</div>

		<div class="character-system--top">
			<div class="character-system--items" onclick="onClickSelectCharacterInfo('nguy')">
				<img src="<?php bloginfo('template_url');?>/assets/images/nguy.png">
			</div>
			<div class="character-system--items"  onclick="onClickSelectCharacterInfo('thuc')">
				<img src="<?php bloginfo('template_url');?>/assets/images/thuc.png">
			</div>
			<div class="character-system--items"  onclick="onClickSelectCharacterInfo('ngo')">
				<img src="<?php bloginfo('template_url');?>/assets/images/ngo.png">
			</div>
			<div class="character-system--items"  onclick="onClickSelectCharacterInfo('hung')">
				<img src="<?php bloginfo('template_url');?>/assets/images/hung.png">
			</div>
		</div>

		<div class="character-system--bottom" id="nguy">
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/nguy/quachgia.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/nguy/quachgia-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Choáng</p>
						<p>Bị động : Mỗi đòn tấn công thường có 16% khả năng khiến mục tiêu đóng băng 2s</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/nguy/quachgia-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Quốc Sĩ Vô Song</p>
						<p>Bị động : Khi lên trận cùng với Chân Cơ, Mỗi đòn tấn công thường có 20% khả năng khiến mục tiêu đóng băng 2s</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/nguy/quachgia-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Tuyệt Trí Kỳ Tá</p>
						<p>Gây cho 1 tướng địch có lượng HP thấp nhất và mục tiêu xung quanh 128% ST, và có 80% khả năng triển khai hiệu quả gây choáng đối với mục tiêu, kéo dài 2.2s, nếu trội hơn về trí lực, tăng thêm cho bản thân 100% tấn công, kéo dài 5s Khi mục tiêu bị đánh dấu Sương Hàn, gây thêm 102.6% ST Sương Hàn : Giảm của mục tiêu 20% sát thương thêm, tướng Ngụy gây thêm hiệu quả đối với mục tiêu đánh dấu Sương Hàn.</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Quách Gia
					</p>
					<p>
						Tự Phụng Hiếu , là một nhà chiến lược và mưu sĩ trọng yếu của Tào Tháo. Chính vì thế, ông là một trong những bộ hạ được tin tưởng và yêu quý nhất của Tào Tháo.
					</p>
				</div>
			</div>
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/nguy/taothao.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/nguy/taothao-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Choáng</p>
						<p>Bị động : Mỗi đòn tấn công thường có 15% khả năng khiến bên bị tấn công choáng 2.5s</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/nguy/taothao-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Loạn Thế Gian Hùng</p>
						<p>Gây cho 3 tướng địch có HP thấp nhất và binh sĩ xung quanh 436.8% ST, đồng thời triển khai đánh dấu Sương Hàn đối với mục tiêu trong 10s, và có 80% khả năng gây choáng mục tiêu trong 3.3s； Nếu trội hơn về trí lực, tăng thêm cho bản thân 100% né tránh, kéo dài 5s Sương Hàn : Giảm của mục tiêu 20% sát thương thêm, tướng Ngụy gây thêm hiệu quả đối với mục tiêu đánh dấu Sương Hàn.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/nguy/taothao-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Kiêu Hùng Chiến Quốc</p>
						<p>Bị động : Khi lên trận cùng với Tư Mã Ý, Mỗi đòn tấn công thường có 20% khả năng khiến mục tiêu choáng 2s</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Tào Tháo
					</p>
					<p>
						Tự Mạnh Đức , ông là người đặt cơ sở cho thế lực quân sự ở miền Bắc Trung Quốc, lập nên chính quyền Tào Ngụy thời Tam Quốc. Được con trai truy tôn là Thái Tổ Vũ Hoàng Đế.
					</p>
				</div>
			</div>
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/nguy/tumay.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/nguy/tumay-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Cấm Nhược Hàn Thiền</p>
						<p>Gây cho 1 tướng địch có lượng HP thấp nhất và binh sĩ xung quanh 187.5% ST, và có 80% khả năng đóng băng mục tiêu , kéo dài 4s Nếu trội hơn về trí lực, tăng thêm cho bản thân 100% bạo kích, kéo dài 5s Khi mục tiêu bị đánh dấu Sương Hàn, gây thêm 124.7% ST Sương Hàn : Giảm của mục tiêu 20% sát thương thêm, tướng Ngụy gây thêm hiệu quả đối với mục tiêu đánh dấu Sương Hàn.</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/nguy/tumay-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Đóng Băng</p>
						<p>Bị động : Mỗi đòn tấn công thường có 15% khả năng khiến bên bị tấn công choáng 2.5s</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/nguy/tumay-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Kiêu Hùng Chiến Quốc</p>
						<p>Bị động : Khi lên trận cùng với Tào Tháo, Mỗi đòn tấn công thường có 20% khả năng khiến mục tiêu đóng băng 2s</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Tư Mã Ý
					</p>
					<p>
						Tự Trọng Đạt, ông cũng là người đặt nền móng cho nhà Tây Tấn thay thế nhà Nguỵ. Ông Có công lớn bảo vệ Tào Ngụy trước các cuộc Bắc phạt của Gia Cát Lượng.
					</p>
				</div>
			</div>
			<div class="character-system--button">
				<div class="button--errow-left" onclick="plusDivs(-1,'nguy')">
					<img src="<?php bloginfo('template_url');?>/assets/images/errow.png">
				</div>
				<div class="button--errow-right" onclick="plusDivs(1,'nguy')">
					<img src="<?php bloginfo('template_url');?>/assets/images/errow.png">
				</div>
			</div>
		</div>

		<div class="character-system--bottom" id="thuc">
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/thuc/giacatluong.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/thuc/giacatluong-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Bát Quái Mê Trận</p>
						<p>Gây cho 2 tướng địch có tỷ lệ HP thấp nhất và binh sĩ xung quanh 269.5% ST, và giảm của mục tiêu 4100 điểm nộ khí ; Khi mục tiêu bị đánh dấu Chôn Vùi, gây thêm 763.6% ST, nếu trội hơn về trí lực, giảm thêm của mục tiêu 40% phòng thủ, kéo dài 5s Chôn Vùi：Giảm 20% miễn giảm ST của mục tiêu, võ tướng Thục gây thêm hiệu quả đối với mục tiêu bị đánh dấu Chôn Vùi.</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/thuc/giacatluong-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Giảm Nộ</p>
						<p>Bị động : Mỗi lần tấn công có 20% khả năng giảm của mục tiêu 1000 nộ khí</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/thuc/giacatluong-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Phu Thê Đồng Tâm</p>
						<p>Bị động : Khi lên trận cùng với Hoàng Nguyệt Anh, Mỗi đòn tấn công thường có 20% khả năng giảm của kẻ địch 10% phòng thủ, kéo dài 5s</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title" style="padding:20px 10px;">
						Gia Cát Lượng
					</p>
					<p>
						Tự Khổng Minh, công thần khai quốc, nhà chính trị, nhà ngoại giao, chỉ huy quân sự, nhà giáo dục, và cũng là một nhà phát minh kỹ thuật nổi tiếng của nhà Thục Hán.
					</p>
				</div>
			</div>
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/thuc/trieuvan.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/thuc/trieuvan-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Tăng Công</p>
						<p>Bị động : Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 21.7% tấn công, kéo dài 5s</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/thuc/trieuvan-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Phi Long Tại Thiên</p>
						<p>Phát động 3 lần đột kích, mỗi lần gây cho kẻ địch dọc đường 81.9% ST, và giảm của mục tiêu 16% phòng thủ, kéo dài 5s Nếu võ lực vượt trội hơn, tăng thêm cho bản thân 100% tấn công, kéo dài 5s Khi mục tiêu bị đánh dấu Chôn Vùi, gây thêm 46.1% ST Chôn Vùi：Giảm 20% miễn giảm ST của mục tiêu, võ tướng Thục gây thêm hiệu quả đối với mục tiêu bị đánh dấu Chôn Vùi.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/thuc/trieuvan-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Trung Can Nghĩa Đảm</p>
						<p>Bị động : Khi lên trận cùng với Bàng Thống, Mỗi đòn tấn công thường có 20% khả năng hồi cho bản thân 1200 điểm nộ khí</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Triệu Vân
					</p>
					<p>
						Tự Tử Long, ông là công thần khai quốc nhà Thục Hán, là một vị tướng uy dũng, có mưu lược và tận trung vì nước, được binh sĩ Thục Hán ca ngợi là "Hổ Uy Tướng Quân".
					</p>
				</div>
			</div>
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/thuc/quanvu.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/thuc/quanvu-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Tăng Công</p>
						<p>Bị động : Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 21.7% tấn công, kéo dài 5s</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/thuc/quanvu-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Kết Nghĩa Đào Viên</p>
						<p>Bị động : Khi lên trận cùng với Lưu Bị, Mỗi đòn tấn công thường có 20% khả năng giảm của kẻ địch 10% phòng thủ, kéo dài 5s.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/thuc/quanvu-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Thanh Long Yển Nguyệt</p>
						<p>Gây cho đơn vị địch xung quanh 217.4% ST, cùng lúc tăng cho bản thân và binh sĩ xung quanh 42% tấn công, kéo dài 5s Nếu võ lực vượt trội hơn, tăng thêm cho bản thân 100% ST cộng thêm, kéo dài 5s Khi mục tiêu bị đánh dấu Chôn Vùi, gây thêm 102.6% ST Chôn Vùi：Giảm 20% miễn giảm ST của mục tiêu, võ tướng Thục gây thêm hiệu quả đối với mục tiêu bị đánh dấu Chôn Vùi.</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Quan Vũ
					</p>
					<p>
						Tự Vân Trường, hào hiệp, trượng nghĩa, trung thành là người đứng đầu trong số Ngũ Hổ Tướng của nhà Thục Hán. Ông là người đã góp công lớn vào việc thành lập nhà Thục Hán.
					</p>
				</div>
			</div>
			<div class="character-system--button">
				<div class="button--errow-left" onclick="plusDivs(-1,'thuc')">
					<img src="<?php bloginfo('template_url');?>/assets/images/errow.png">
				</div>
				<div class="button--errow-right" onclick="plusDivs(1,'thuc')">
					<img src="<?php bloginfo('template_url');?>/assets/images/errow.png">
				</div>
			</div>
		</div>

		<div class="character-system--bottom" id="ngo">
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/ngo/chudu.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/ngo/chudu-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Tăng Công</p>
						<p>Bị động : Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 21.7% tấn công, kéo dài 5s.</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/ngo/chudu-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Tâm Phúc Chân Chính</p>
						<p>Bị động : Khi lên trận cùng với Lục Tốn, Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 10% tấn công, kéo dài 5s.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/ngo/chudu-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Hỏa Thiêu Xích Bích</p>
						<p>Triệu hồi lưu tinh hỏa vũ tập kích mặt đất, gây cho quân địch trong phạm vi rộng 196.7% ST Nếu trội hơn về Thống Soái, tăng thêm cho bản thân 100% miễn giảm ST, kéo dài 5s Khi mục tiêu bị đánh dấu Cháy Rực, gây thêm 65% ST Cháy Rực：Giảm của mục tiêu 20% bạo kích, tướng Ngô sẽ gây thêm hiệu quả đối với mục tiêu bị đánh dấu Cháy Rực.</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Chu Du
					</p>
					<p>
						Tự Công Cẩn , là danh tướng và khai quốc công thần của nước Đông Ngô thời Tam Quốc. Chu Du nổi tiếng với chiến thắng ở Xích Bích trước đại quân của Tào Tháo.
					</p>
				</div>
			</div>
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/ngo/lucton.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/ngo/lucton-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Tăng Công</p>
						<p>Bị động : Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 21.7% tấn công, kéo dài 5s.</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/ngo/lucton-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Tâm Phúc Chân Chính</p>
						<p>Bị động : Khi lên trận cùng với Chu Du, Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 10% tấn công, kéo dài 5s.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/ngo/lucton-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Hỏa Thiêu Liên Doanh</p>
						<p>Gây cho 1 tướng địch có lượng HP thấp nhất và mục tiêu xung quanh 147.8% ST, và kèm trạng thái thiêu đốt mỗi giây gây 10.6% ST, kéo dài 6s Nếu trội hơn về Thống Soái, xúi giục mục tiêu trong 5s, khiến kẻ địch tương tàn Khi mục tiêu bị đánh dấu Cháy Rực, gây thêm 76% ST Cháy Rực：Giảm của mục tiêu 20% bạo kích, tướng Ngô sẽ gây thêm hiệu quả đối với mục tiêu bị đánh dấu Cháy Rực.</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Lục Tốn
					</p>
					<p>
						Tự Bá Ngôn , là 1 tướng lĩnh quân sự và chính trị gia của nhà Đông Ngô, ông tham gia trận chiến đã giúp Đông Ngô đánh bại và giết chết được đại tướng Thục Hán là Quan Vũ.
					</p>
				</div>
			</div>
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/ngo/tonsach.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/ngo/tonsach-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Giang Đông Bá Vương</p>
						<p>Gây cho 1 tướng địch và mục tiêu xung quanh 217.4% ST, và tạo cho bản thân và đồng đội binh sĩ xung quanh 1 lớp lá chắn bằng  6% HP tối đa, kéo dài 6s Nếu trội hơn về Thống Soái, tăng thêm cho bản thân 100% miễn giảm ST, kéo dài 5s Khi mục tiêu bị đánh dấu Cháy Rực, gây thêm 102.6% ST Cháy Rực：Giảm của mục tiêu 20% bạo kích, tướng Ngô sẽ gây thêm hiệu quả đối với mục tiêu bị đánh dấu Cháy Rực.</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/ngo/tonsach-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Song Bích Giang Đông</p>
						<p>Bị động : Khi lên trận cùng với Tôn Quyền, Mỗi lần bị tấn công có 20% khả năng nhận được 1 lá chắn bằng 5% HP tối đa của bản thân, kéo dài 5s.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/ngo/tonsach-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Phản Kích Choáng</p>
						<p>Bị động : Mỗi lần bị tấn công có 10% khả năng khiến bên tấn công choáng 2.2s.</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Tôn Sách
					</p>
					<p>
						Tự Bá Phù, ông là người đặt nền móng quan trọng trong việc hình thành nên Đông Ngô, đã được người em trai Tôn Quyền kế thừa và hoàn thiện sau khi ông mất.
					</p>
				</div>
			</div>
			<div class="character-system--button">
				<div class="button--errow-left" onclick="plusDivs(-1,'ngo')">
					<img src="<?php bloginfo('template_url');?>/assets/images/errow.png">
				</div>
				<div class="button--errow-right" onclick="plusDivs(1,'ngo')">
					<img src="<?php bloginfo('template_url');?>/assets/images/errow.png">
				</div>
			</div>
		</div>

		<div class="character-system--bottom" id="hung">
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/hung/dieuthuyen.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/hung/dieuthuyen-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Tăng Bạo</p>
						<p>Bị động : Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 21.7% bạo kích, kéo dài 5s.</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/hung/dieuthuyen-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Phong Tư Yểu Điệu</p>
						<p>Gây cho tướng địch có tấn công mạnh nhất và binh sĩ xung quanh 155.3% ST, và có 80% khả năng triển khai trạng thái Mị Hoặc đối với mục tiêu, kéo dài 3s, nếu trội hơn về trí lực, tăng thêm cho bản thân 100% bạo kích, kéo dài 5s Khi mục tiêu bị đánh dấu Loạn Vũ, gây thêm 102.6% ST Loạn Vũ：Giảm của mục tiêu 20% phản ST, tướng Quần Hùng sẽ gây thêm hiệu quả đối với mục tiêu bị đánh dấu Loạn Vũ.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/hung/dieuthuyen-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Đến Chết Không Đổi</p>
						<p>Bị động : Khi lên trận cùng với Lữ Bố, Mỗi đòn tấn công thường có 20% khả năng giảm của kẻ địch 10% phòng thủ, kéo dài 5s.</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title" style="padding:20px 10px">
						Điêu Thuyền
					</p>
					<p>
						Với sắc đẹp được ví như Bế Nguyệt (khiến trăng phải thẹn mà nấp sau mây), được xem là một trong Tứ đại mỹ nhân Trung Hoa trong văn hóa Trung Quốc thời kỳ đương đại.
					</p>
				</div>
			</div>
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/hung/hoada.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/hung/hoada-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Loạn Thế Cao Nhân</p>
						<p>Bị động : Khi lên trận cùng với Tả Từ, Mỗi đòn tấn công thường có 20% khả năng hồi cho bản thân 1500 điểm nộ khí.</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/hung/hoada-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Huyền Hồ Tế Thế</p>
						<p>Trong 3s, hồi cho 3 võ tướng có lượng HP thấp nhất phe ta 7.8% HP tối đa, và tăng 5% bạo kích, kéo dài 6s Nếu trí lực trội hơn, hồi thêm 2.6% HP tối đa.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/hung/hoada-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Tăng Nộ</p>
						<p>Bị động : Mỗi đòn tấn công có 20% khả năng tăng cho bản thân 900 nộ khí.</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Hoa Đà
					</p>
					<p>
						Tự Nguyên Hóa, là một thầy thuốc nổi tiếng thời cuối Đông Hán và đầu thời Tam Quốc trong lịch sử Trung Quốc.
					</p>
				</div>
			</div>
			<div class="character-system--content character-system-slide">
				<img class="character--logo" src="<?php bloginfo('template_url');?>/assets/images/hung/lubo.png">
				<img class="skill-1" src="<?php bloginfo('template_url');?>/assets/images/hung/lubo-skill-1.png">
				<div class="bg--text-skill text-skill-1">
					<div>
						<p class="skill-title">Tăng Bạo</p>
						<p>Bị động : Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 21.7% bạo kích, kéo dài 5s.</p>
					</div>
				</div>
				<img class="skill-2" style="z-index: 2" src="<?php bloginfo('template_url');?>/assets/images/hung/lubo-skill-2.png">
				<div class="bg--text-skill text-skill-2">
					<div>
						<p class="skill-title">Hoành Tào Thiên Quân</p>
						<p>Gây cho 10 đơn vị địch xung quanh 449% ST, khiến bản thân nhận được trạng thái miễn ST và khống chế, tăng cho bản thân 20.5% bạo kích, kéo dài 5s Nếu võ lực vượt trội hơn, tăng cho bản thân 100% bạo kích, kéo dài 5s Khi mục tiêu bị đánh dấu Loạn Vũ, gây thêm 152.7% ST Loạn Vũ：Giảm của mục tiêu 20% phản ST, tướng Quần Hùng sẽ gây thêm hiệu quả đối với mục tiêu bị đánh dấu Loạn Vũ.</p>
					</div>
				</div>
				<img class="skill-3" src="<?php bloginfo('template_url');?>/assets/images/hung/lubo-skill-3.png">
				<div class="bg--text-skill text-skill-3">
					<div>
						<p class="skill-title">Đến Chết Không Đổi</p>
						<p>Bị động : Khi lên trận cùng với Điêu Thuyền, Mỗi đòn tấn công thường có 20% khả năng tăng cho bản thân 20% bạo kích, kéo dài 5s.</p>
					</div>
				</div>
				<div class="character--info">
					<p class="character--info-title">
						Lữ Bố
					</p>
					<p>
						Tự Phụng Tiên , là một viên tướng lĩnh nổi tiếng vào cuối thời Đông Hán trong lịch sử Trung Quốc. Người thời đó có câu "Nhân trung Lữ Bố, mã trung Xích Thố".
					</p>
				</div>
			</div>
			<div class="character-system--button">
				<div class="button--errow-left" onclick="plusDivs(-1,'hung')">
					<img src="<?php bloginfo('template_url');?>/assets/images/errow.png">
				</div>
				<div class="button--errow-right" onclick="plusDivs(1,'hung')">
					<img src="<?php bloginfo('template_url');?>/assets/images/errow.png">
				</div>
			</div>
		</div>
	</div>
</div>