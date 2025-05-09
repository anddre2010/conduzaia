<!--begin::Chart widget 14-->
<div class="card card-flush h-xl-100">
	<!--begin::Header-->
	<div class="card-header pt-7">
		<!--begin::Title-->
		<h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-900">Departments</span>
			<span class="text-gray-500 pt-2 fw-semibold fs-6">Performance & achievements</span>
		</h3>
		<!--end::Title-->
		<!--begin::Toolbar-->
		<div class="card-toolbar">
			<!--begin::Menu-->
			<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true"><?php echo getIcon('dots-square', 'fs-1 text-gray-300 me-n1'); ?></button>
			<?php echo $__env->make('partials/menus/_menu-3', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
			<!--end::Menu-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body pt-5">
		<!--begin::Chart container-->
		<div id="kt_charts_widget_14_chart" class="w-100 h-350px"></div>
		<!--end::Chart container-->
	</div>
	<!--end::Body-->
</div>
<!--end::Chart widget 14-->
<?php /**PATH /home/metronic/8/v8.2.9/laravel/starterkit/resources/views/partials/widgets/charts/_widget-14.blade.php ENDPATH**/ ?>