<div class="sliderSpec">
	<ul class="sliderList">
		<li class="sliderMenuItem <?php if($menu == 'dashboard') { echo 'menuActive'; } ?>">
			<a href="console/index">
				<i class="icon home"></i>
				控制台
			</a>
		</li>
		<li class="sliderMenuItem <?php if($menu == 'manager') { echo 'menuActive'; } ?>">
			<a href="console/manager">
				<i class="icon spy"></i>
				管理員
			</a>
		</li>
		<li class="sliderMenuItem <?php if($menu == 'member') { echo 'menuActive'; } ?>">
			<a href="console/member">
				<i class="icon user"></i>
				會員管理
			</a>
		</li>
		<li class="sliderMenuItem <?php if($menu == 'category') { echo 'menuActive'; } ?>">
			<a href="console/category">
				<i class="icon tags"></i>
				分類管理
			</a>
		</li>
		<li class="sliderMenuItem <?php if($menu == 'product') { echo 'menuActive'; } ?>">
			<a href="console/product">
				<i class="icon shop"></i>
				商品管理
			</a>
		</li>
	</ul>
</div>