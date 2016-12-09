<aside id="left-panel">

	<!-- User info -->
	<div class="login-info">
		<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
			
			<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
				<img src="{{ asset('sa/img/avatars/sunny.png') }}" alt="me" class="online" /> 
				<span>
					@if (Auth::user())
					{{ Auth::user()->name }}
					@elseif (isset($survey_expert))
					{{ $survey_expert->expert->name }}
					@endif
				</span>
				<i class="fa fa-angle-down"></i>
			</a> 
			
		</span>
	</div>
	<nav>
		<ul>
		@if (Auth::user())
			@if (Auth::user()->hasRole("admin"))
				<li class="@yield('sidemenu_company')">
					<a href="{{ url('admin/company') }}" title="Company">
						<i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">{{ trans('sidebar.company.list') }}</span>
					</a>
				</li>
				<li class="@yield('sidemenu_user')">
					<a href="{{ url('admin/user') }}" title="User">
						<i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">{{ trans('sidebar.user.list') }}</span>
					</a>
				</li>
				<li class="@yield('sidemenu_technology')">
					<a href="{{ url('admin/technology') }}" title="User">
						<i class="fa fa-lg fa-fw fa-wrench"></i> <span class="menu-item-parent">{{ trans('sidebar.technology.list') }}</span>
					</a>
				</li>
				<li class="@yield('sidemenu_expert')">
					<a href="{{ url('admin/expert') }}" title="User">
						<i class="fa fa-lg fa-fw fa-star"></i> <span class="menu-item-parent">{{ trans('sidebar.expert.list') }}</span>
					</a>
				</li>
				<li class="@yield('sidemenu_survey')">
					<a href="{{ url('admin/survey') }}" title="User">
						<i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">{{ trans('sidebar.survey.list') }}</span>
					</a>
				</li>
				<li class="@yield('sidemenu_master')">
					<a href="#" title="Master table"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">{{ trans('sidebar.master.title') }}</span></a>
					<ul>
						<li class="@yield('sidemenu_master_technology_code')">
							<a href="{{ url('admin/technology_code') }}" title="Technology code"><span class="menu-item-parent">{{ trans('sidebar.master.technology_code') }}</span></a>
						</li>
						<li class="@yield('sidemenu_master_facility_code')">
							<a href="{{ url('admin/facility_code') }}" title="Facility code"><span class="menu-item-parent">{{ trans('sidebar.master.facility_code') }}</span></a>
						</li>
						<li class="@yield('sidemenu_master_technology_target')">
							<a href="{{ url('admin/technology_target') }}" title="Facility code"><span class="menu-item-parent">{{ trans('sidebar.master.technology_target') }}</span></a>
						</li>
						<li class="@yield('sidemenu_master_technology_experience')">
							<a href="{{ url('admin/technology_experience') }}" title="Facility code"><span class="menu-item-parent">{{ trans('sidebar.master.technology_experience') }}</span></a>
						</li>
						<li class="@yield('sidemenu_master_technology_status')">
							<a href="{{ url('admin/technology_status') }}" title="Facility code"><span class="menu-item-parent">{{ trans('sidebar.master.technology_status') }}</span></a>
						</li>
						<li class="@yield('sidemenu_master_technology_propose')">
							<a href="{{ url('admin/technology_propose') }}" title="Facility code"><span class="menu-item-parent">{{ trans('sidebar.master.technology_propose') }}</span></a>
						</li>
						<li class="@yield('sidemenu_master_technology_instruction')">
							<a href="{{ url('admin/technology_instruction') }}" title="Facility code"><span class="menu-item-parent">{{ trans('sidebar.master.technology_instruction') }}</span></a>
						</li>
						<li class="@yield('sidemenu_master_evaluation')">
							<a href="{{ url('admin/evaluation') }}" title="Facility code"><span class="menu-item-parent">{{ trans('sidebar.master.evaluation') }}</span></a>
						</li>
					</ul>	
				</li>
				<li class="@yield('sidemenu_deeppermission')">
					<a href="#" title="Deep permission"><i class="fa fa-lg fa-fw fa-check"></i> <span class="menu-item-parent">{{ trans('sidebar.deep_permission.title') }}</span></a>
					<ul>
						<li class="@yield('sidemenu_deeppermission_user_role')">
							<a href="{{ url('user_role') }}" title="user_role"><span class="menu-item-parent">{{ trans('sidebar.deep_permission.user_role') }}</span></a>
						</li>
						<li class="@yield('sidemenu_deeppermission_role')">
							<a href="{{ url('role') }}" title="role"><span class="menu-item-parent">{{ trans('sidebar.deep_permission.role') }}</span></a>
						</li>
						<li class="@yield('sidemenu_deeppermission_group_permission')">
							<a href="{{ url('permission/group') }}" title="group_permission"><span class="menu-item-parent">{{ trans('sidebar.deep_permission.group_permission') }}</span></a>
						</li>
						<li class="@yield('sidemenu_deeppermission_permission')">
							<a href="{{ url('permission') }}" title="Permission"><span class="menu-item-parent">{{ trans('sidebar.deep_permission.permission') }}</span></a>
						</li>
						<li class="@yield('sidemenu_deeppermission_setting')">
							<a href="{{ url('permission/setting') }}" title="setting"><span class="menu-item-parent">{{ trans('sidebar.deep_permission.setting') }}</span></a>
						</li>
					</ul>	
				</li>
			@elseif (Auth::user()->hasRole("drvn"))
			@else
				@if (Auth::user()->companies()->count() == 0)
				<li class="@yield('sidemenu_company')">
					<a href="{{ url('company/create') }}" title="Company">
						<i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">{{ trans('sidebar.company.registernewcompany') }}</span>
					</a>
				</li>
				@else
				<li class="@yield('sidemenu_company')">
					<a href="{{ url('company/create') }}" title="Company">
						<i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">{{ trans('sidebar.company.company_info') }}</span>
					</a>
				</li>
				<li class="@yield('sidemenu_technology')">
					<a href="{{ url('technology') }}" title="Technology">
						<i class="fa fa-lg fa-fw fa-wrench"></i> <span class="menu-item-parent">{{ trans('sidebar.company.technology_list') }}</span>
					</a>
				</li>
				@endif
			@endif
		@else

		@endif
		</ul>
	</nav>
	

	<span class="minifyme" data-action="minifyMenu"> 
		<i class="fa fa-arrow-circle-left hit"></i> 
	</span>

</aside>