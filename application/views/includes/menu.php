<div class="aside">
	<div class="aside-header">
		<h3 class="aside-title"><?= $projectTitle ?></h3>
		<div class="aside-addon"><button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside"><i class="fa fa-times aside-icon-minimize"></i> <i class="fa fa-thumbtack aside-icon-maximize"></i></button></div>
	</div>
	<div class="aside-body" data-simplebar="data-simplebar">
		<div class="menu">
			<div class="menu-item"><a href="<?= base_url('AdminDashboard'); ?>" class="menu-item-link">
					<div class="menu-item-icon"><img src="<?= base_url('assets/img/shape/shape-14.png') ?>" style="height:20px;" class="m-2" />
					</div><span class="menu-item-text">Dashboard</span>
					<!-- <div class="menu-item-addon"><span class="badge badge-success">New</span></div> -->
				</a></div>
			<div class="menu-item"><a href="<?= base_url('AdminDashboard/user_details'); ?>" data-menu-path="<?= base_url('AdminDashboard/user_details'); ?>" class="menu-item-link">
					<div class="menu-item-icon"><img src="<?= base_url('assets/img/shape/shape-14.png') ?>" style="height:20px;" class="m-2" />
					</div><span class="menu-item-text">User list</span>
				</a>
			</div>
			<div class="menu-item"><a href="<?= base_url('AdminDashboard/grooming_details'); ?>" data-menu-path="<?= base_url('AdminDashboard/grooming_details'); ?>" class="menu-item-link">
					<div class="menu-item-icon"><img src="<?= base_url('assets/img/shape/shape-14.png') ?>" style="height:20px;" class="m-2" />
					</div><span class="menu-item-text">Grooming History</span>
				</a>
			</div>
			<div class="menu-item"><a href="<?= base_url('AdminDashboard/boarding_details'); ?>" data-menu-path="<?= base_url('AdminDashboard/boarding_details'); ?>" class="menu-item-link">
					<div class="menu-item-icon"><img src="<?= base_url('assets/img/shape/shape-14.png') ?>" style="height:20px;" class="m-2" />
					</div><span class="menu-item-text">Boarding History</span>
				</a>
			</div>
			<div class="menu-item"><a href="<?= base_url('AdminDashboard/day_care_details'); ?>" data-menu-path="<?= base_url('AdminDashboard/day_care_details'); ?>" class="menu-item-link">
					<div class="menu-item-icon"><img src="<?= base_url('assets/img/shape/shape-14.png') ?>" style="height:20px;" class="m-2" />
					</div><span class="menu-item-text">Daycare History</span>
				</a>
			</div>
			<div class="menu-item"><button class="menu-item-link menu-item-toggle">
					<div class="menu-item-icon"><img src="<?= base_url('assets/img/shape/shape-14.png') ?>" style="height:20px;" class="m-2" />
					</div><span class="menu-item-text">Sub admin</span>
					<div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item"><a href="<?= base_url('AdminDashboard/new_sub_admin'); ?>" data-menu-path="<?= base_url('AdminDashboard/new_sub_admin'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Add Sub admin</span></a></div>
					<div class="menu-item"><a href="<?= base_url('AdminDashboard/sub_admin_list'); ?>" data-menu-path="<?= base_url('AdminDashboard/sub_admin_list'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Sub admin list</span></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
