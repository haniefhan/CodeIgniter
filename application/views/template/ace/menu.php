<style type="text/css">
	ul.nav li{
		text-align: left;
	}
</style>
<div class="sidebar" id="sidebar">
	<script type="text/javascript">try{ace.settings.check('sidebar' , 'fixed')}catch(e){}</script>
	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<a href="<?PHP echo Site_url('biblio')?>/biblio">
				<button class="btn btn-small btn-success">
					<i class="icon-signal"></i>
				</button>
			</a>
			<button class="btn btn-small btn-info">
				<i class="icon-pencil"></i>
			</button>
			<a href="<?PHP echo Site_url('keanggotaan')?>/keanggotaan">
				<button class="btn btn-small btn-warning">
					<i class="icon-group"></i>
				</button>
			</a>
			<a href="<?PHP echo Site_url('setting')?>/sistem">
				<button class="btn btn-small btn-danger">
					<i class="icon-cogs"></i>
				</button>
			</a>
		</div>
		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>
			<span class="btn btn-info"></span>
			<span class="btn btn-warning"></span>
			<span class="btn btn-danger"></span>
		</div>
		<ul class="nav nav-list">
			<?php foreach (get_menu() as $i => $v) {?>
				<li class="open">
					<a href="<?php echo base_url().$v['menu_url'] ?>" class="dropdown-toggle">
						<i class="<?php echo $v['menu_icon'] ?>"></i>
						<span class="menu-text"><?php echo $v['menu_name'] ?></span>
						<?php if(isset($v['menu_child'])){ ?>
							<b class="arrow icon-angle-down"></b>
						<?php } ?>
					</a>
					<?php if(isset($v['menu_child'])){ ?>
						<ul class="submenu">
							<?php foreach ($v['menu_child'] as $j => $w) {?>
								<li>
									<a href="<?php echo base_url().$w['menu_url'] ?>" class="dropdown-toggle">
										<i class="<?php echo $w['menu_icon'] ?>"></i>
										<span class="menu-text"><?php echo $w['menu_name'] ?></span>
										<?php if(isset($w['menu_child'])){ ?>
											<b class="arrow icon-angle-down"></b>
										<?php } ?>
									</a>
									<?php if(isset($w['menu_child'])){ ?>
										<ul class="submenu">
										<?php foreach ($w['menu_child'] as $k => $x) {?>
											<li>
												<a href="<?php echo base_url().$x['menu_url'] ?>" class="dropdown-toggle">
													<i class="<?php echo $x['menu_icon'] ?>"></i>
													<span class="menu-text"><?php echo $x['menu_name'] ?></span>
												</a>
											</li>
										<?php } ?>
										</ul>
									<?php }?>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</li>
			<?php } ?>
		</ul>
	</div><!-- #sidebar-shortcuts -->
</div>