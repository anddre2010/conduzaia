<!--begin::Chart widget 24-->
<div class="card card-flush overflow-hidden h-xl-100">
	<!--begin::Header-->
	<div class="card-header py-5">
		<!--begin::Title-->
		<h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-900">Human Resources</span>
			<span class="text-gray-500 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
		</h3>
		<!--end::Title-->
		<!--begin::Toolbar-->
		<div class="card-toolbar">
			<!--begin::Menu-->
			<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true"><?php echo getIcon('dots-square', 'fs-1'); ?></button>
			<?php echo $__env->make('partials/menus/_menu-2', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
			<!--end::Menu-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header-->
	<!--begin::Card body-->
	<div class="card-body pt-0">
		<!--begin::Chart-->
		<div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"></div>
		<!--end::Chart-->
	</div>
	<!--end::Card body-->
</div>
<!--end::Chart widget 24-->
<?php /**PATH /home/metronic/8/v8.2.9/laravel/starterkit/resources/views/partials/widgets/charts/_widget-24.blade.php ENDPATH**/ ?>