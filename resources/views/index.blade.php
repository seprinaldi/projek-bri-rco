@extends('main.main')

@section('title')
    Portal RCO | Home
@endsection

@section('sub-title')
    Dashboard
@endsection
@section('next')
<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
@endsection
@section('next-sub-title')
    Home
@endsection


@section('content')
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-fluid">
								<!--begin::Products-->
								<div class="card card-flush">
									<!--begin::Card header-->
									<div class="card-header align-items-center py-5 gap-2 gap-md-5">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<input type="text" data-kt-ecommerce-product-filter="search"
													class="form-control form-control-solid w-250px ps-12"
													placeholder="Search Product" />
											</div>
											<!--end::Search-->
										</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
											<div class="w-100 mw-150px">
												<!--begin::Select2-->
												<select class="form-select form-select-solid" data-control="select2"
													data-hide-search="true" data-placeholder="Status"
													data-kt-ecommerce-product-filter="status">
													<option></option>
													<option value="all">All</option>
													<option value="published">Published</option>
													<option value="scheduled">Scheduled</option>
													<option value="inactive">Inactive</option>
												</select>
												<!--end::Select2-->
											</div>
											<!--begin::Add product-->
											<a href="#" class="btn btn-primary">Add Product</a>
											<!--end::Add product-->
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5"
											id="kt_ecommerce_products_table">
											<thead>
												<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div
															class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox"
																data-kt-check="true"
																data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
																value="1" />
														</div>
													</th>
													<th class="min-w-200px">Product</th>
													<th class="text-end min-w-100px">SKU</th>
													<th class="text-end min-w-70px">Qty</th>
													<th class="text-end min-w-100px">Price</th>
													<th class="text-end min-w-100px">Rating</th>
													<th class="text-end min-w-100px">Status</th>
													<th class="text-end min-w-70px">Actions</th>
												</tr>
											</thead>
											<tbody class="fw-semibold text-gray-600">
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/1.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	1</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04588004</span>
													</td>
													<td class="text-end pe-0" data-order="34">
														<span class="fw-bold ms-3">34</span>
													</td>
													<td class="text-end pe-0">57</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/2.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	2</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03307007</span>
													</td>
													<td class="text-end pe-0" data-order="11">
														<span class="fw-bold ms-3">11</span>
													</td>
													<td class="text-end pe-0">194</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/3.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	3</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03391001</span>
													</td>
													<td class="text-end pe-0" data-order="48">
														<span class="fw-bold ms-3">48</span>
													</td>
													<td class="text-end pe-0">246</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/4.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	4</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04928003</span>
													</td>
													<td class="text-end pe-0" data-order="4">
														<span class="badge badge-light-warning">Low stock</span>
														<span class="fw-bold text-warning ms-3">4</span>
													</td>
													<td class="text-end pe-0">74</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/5.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	5</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02942001</span>
													</td>
													<td class="text-end pe-0" data-order="20">
														<span class="fw-bold ms-3">20</span>
													</td>
													<td class="text-end pe-0">66</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/6.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	6</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04767008</span>
													</td>
													<td class="text-end pe-0" data-order="21">
														<span class="fw-bold ms-3">21</span>
													</td>
													<td class="text-end pe-0">31</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/7.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	7</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04170002</span>
													</td>
													<td class="text-end pe-0" data-order="15">
														<span class="fw-bold ms-3">15</span>
													</td>
													<td class="text-end pe-0">66</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/8.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	8</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02375006</span>
													</td>
													<td class="text-end pe-0" data-order="38">
														<span class="fw-bold ms-3">38</span>
													</td>
													<td class="text-end pe-0">15</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/9.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	9</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04132007</span>
													</td>
													<td class="text-end pe-0" data-order="28">
														<span class="fw-bold ms-3">28</span>
													</td>
													<td class="text-end pe-0">267</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/10.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	10</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03562001</span>
													</td>
													<td class="text-end pe-0" data-order="21">
														<span class="fw-bold ms-3">21</span>
													</td>
													<td class="text-end pe-0">188</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/11.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	11</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03157001</span>
													</td>
													<td class="text-end pe-0" data-order="39">
														<span class="fw-bold ms-3">39</span>
													</td>
													<td class="text-end pe-0">243</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/12.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	12</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03584003</span>
													</td>
													<td class="text-end pe-0" data-order="16">
														<span class="fw-bold ms-3">16</span>
													</td>
													<td class="text-end pe-0">257</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/13.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	13</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03377006</span>
													</td>
													<td class="text-end pe-0" data-order="3">
														<span class="badge badge-light-warning">Low stock</span>
														<span class="fw-bold text-warning ms-3">3</span>
													</td>
													<td class="text-end pe-0">151</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/14.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	14</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01514006</span>
													</td>
													<td class="text-end pe-0" data-order="31">
														<span class="fw-bold ms-3">31</span>
													</td>
													<td class="text-end pe-0">279</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/15.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	15</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04778001</span>
													</td>
													<td class="text-end pe-0" data-order="28">
														<span class="fw-bold ms-3">28</span>
													</td>
													<td class="text-end pe-0">221</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/16.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	16</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01776004</span>
													</td>
													<td class="text-end pe-0" data-order="34">
														<span class="fw-bold ms-3">34</span>
													</td>
													<td class="text-end pe-0">212</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/17.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	17</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02601003</span>
													</td>
													<td class="text-end pe-0" data-order="0">
														<span class="badge badge-light-danger">Sold out</span>
														<span class="fw-bold text-danger ms-3">0</span>
													</td>
													<td class="text-end pe-0">86</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/18.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	18</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02319006</span>
													</td>
													<td class="text-end pe-0" data-order="28">
														<span class="fw-bold ms-3">28</span>
													</td>
													<td class="text-end pe-0">246</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/19.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	19</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01788005</span>
													</td>
													<td class="text-end pe-0" data-order="24">
														<span class="fw-bold ms-3">24</span>
													</td>
													<td class="text-end pe-0">210</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/20.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	20</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03925002</span>
													</td>
													<td class="text-end pe-0" data-order="19">
														<span class="fw-bold ms-3">19</span>
													</td>
													<td class="text-end pe-0">245</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/21.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	21</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02822004</span>
													</td>
													<td class="text-end pe-0" data-order="13">
														<span class="fw-bold ms-3">13</span>
													</td>
													<td class="text-end pe-0">86</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/22.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	22</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04222003</span>
													</td>
													<td class="text-end pe-0" data-order="23">
														<span class="fw-bold ms-3">23</span>
													</td>
													<td class="text-end pe-0">50</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/23.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	23</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02358009</span>
													</td>
													<td class="text-end pe-0" data-order="3">
														<span class="badge badge-light-warning">Low stock</span>
														<span class="fw-bold text-warning ms-3">3</span>
													</td>
													<td class="text-end pe-0">19</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/24.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	24</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01898005</span>
													</td>
													<td class="text-end pe-0" data-order="48">
														<span class="fw-bold ms-3">48</span>
													</td>
													<td class="text-end pe-0">222</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/25.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	25</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03383007</span>
													</td>
													<td class="text-end pe-0" data-order="26">
														<span class="fw-bold ms-3">26</span>
													</td>
													<td class="text-end pe-0">238</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/26.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	26</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04535003</span>
													</td>
													<td class="text-end pe-0" data-order="10">
														<span class="fw-bold ms-3">10</span>
													</td>
													<td class="text-end pe-0">211</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/27.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	27</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02632001</span>
													</td>
													<td class="text-end pe-0" data-order="11">
														<span class="fw-bold ms-3">11</span>
													</td>
													<td class="text-end pe-0">161</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/28.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	28</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02207001</span>
													</td>
													<td class="text-end pe-0" data-order="18">
														<span class="fw-bold ms-3">18</span>
													</td>
													<td class="text-end pe-0">105</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/29.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	29</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02611009</span>
													</td>
													<td class="text-end pe-0" data-order="49">
														<span class="fw-bold ms-3">49</span>
													</td>
													<td class="text-end pe-0">253</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/30.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	30</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02615003</span>
													</td>
													<td class="text-end pe-0" data-order="16">
														<span class="fw-bold ms-3">16</span>
													</td>
													<td class="text-end pe-0">185</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/31.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	31</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01703008</span>
													</td>
													<td class="text-end pe-0" data-order="16">
														<span class="fw-bold ms-3">16</span>
													</td>
													<td class="text-end pe-0">33</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/32.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	32</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02963009</span>
													</td>
													<td class="text-end pe-0" data-order="46">
														<span class="fw-bold ms-3">46</span>
													</td>
													<td class="text-end pe-0">296</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/33.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	33</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03585001</span>
													</td>
													<td class="text-end pe-0" data-order="30">
														<span class="fw-bold ms-3">30</span>
													</td>
													<td class="text-end pe-0">134</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/34.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	34</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03149006</span>
													</td>
													<td class="text-end pe-0" data-order="43">
														<span class="fw-bold ms-3">43</span>
													</td>
													<td class="text-end pe-0">259</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/35.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	35</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03138001</span>
													</td>
													<td class="text-end pe-0" data-order="0">
														<span class="badge badge-light-danger">Sold out</span>
														<span class="fw-bold text-danger ms-3">0</span>
													</td>
													<td class="text-end pe-0">150</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/36.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	36</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02737001</span>
													</td>
													<td class="text-end pe-0" data-order="48">
														<span class="fw-bold ms-3">48</span>
													</td>
													<td class="text-end pe-0">74</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/37.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	37</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01239003</span>
													</td>
													<td class="text-end pe-0" data-order="19">
														<span class="fw-bold ms-3">19</span>
													</td>
													<td class="text-end pe-0">165</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/38.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	38</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02912004</span>
													</td>
													<td class="text-end pe-0" data-order="47">
														<span class="fw-bold ms-3">47</span>
													</td>
													<td class="text-end pe-0">287</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/39.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	39</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01234004</span>
													</td>
													<td class="text-end pe-0" data-order="8">
														<span class="badge badge-light-warning">Low stock</span>
														<span class="fw-bold text-warning ms-3">8</span>
													</td>
													<td class="text-end pe-0">110</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/40.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	40</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01258004</span>
													</td>
													<td class="text-end pe-0" data-order="8">
														<span class="badge badge-light-warning">Low stock</span>
														<span class="fw-bold text-warning ms-3">8</span>
													</td>
													<td class="text-end pe-0">207</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/41.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	41</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02201008</span>
													</td>
													<td class="text-end pe-0" data-order="46">
														<span class="fw-bold ms-3">46</span>
													</td>
													<td class="text-end pe-0">298</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/42.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	42</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">04795007</span>
													</td>
													<td class="text-end pe-0" data-order="14">
														<span class="fw-bold ms-3">14</span>
													</td>
													<td class="text-end pe-0">289</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/43.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	43</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02808009</span>
													</td>
													<td class="text-end pe-0" data-order="29">
														<span class="fw-bold ms-3">29</span>
													</td>
													<td class="text-end pe-0">167</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/44.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	44</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02604003</span>
													</td>
													<td class="text-end pe-0" data-order="13">
														<span class="fw-bold ms-3">13</span>
													</td>
													<td class="text-end pe-0">42</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/45.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	45</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02495004</span>
													</td>
													<td class="text-end pe-0" data-order="18">
														<span class="fw-bold ms-3">18</span>
													</td>
													<td class="text-end pe-0">105</td>
													<td class="text-end pe-0" data-order="rating-4">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/46.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	46</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01591005</span>
													</td>
													<td class="text-end pe-0" data-order="8">
														<span class="badge badge-light-warning">Low stock</span>
														<span class="fw-bold text-warning ms-3">8</span>
													</td>
													<td class="text-end pe-0">206</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/47.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	47</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">02774003</span>
													</td>
													<td class="text-end pe-0" data-order="13">
														<span class="fw-bold ms-3">13</span>
													</td>
													<td class="text-end pe-0">280</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Published</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/48.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	48</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">01660004</span>
													</td>
													<td class="text-end pe-0" data-order="22">
														<span class="fw-bold ms-3">22</span>
													</td>
													<td class="text-end pe-0">258</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/49.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	49</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03450006</span>
													</td>
													<td class="text-end pe-0" data-order="30">
														<span class="fw-bold ms-3">30</span>
													</td>
													<td class="text-end pe-0">231</td>
													<td class="text-end pe-0" data-order="rating-3">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Scheduled">
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Scheduled</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="#" class="symbol symbol-50px">
																<span class="symbol-label"
																	style="background-image:url(assets/assets/media//stock/ecommerce/50.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="#"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold"
																	data-kt-ecommerce-product-filter="product_name">Product
																	50</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="fw-bold">03108005</span>
													</td>
													<td class="text-end pe-0" data-order="21">
														<span class="fw-bold ms-3">21</span>
													</td>
													<td class="text-end pe-0">49</td>
													<td class="text-end pe-0" data-order="rating-5">
														<div class="rating justify-content-end">
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
															<div class="rating-label checked">
																<i class="ki-duotone ki-star fs-6"></i>
															</div>
														</div>
													</td>
													<td class="text-end pe-0" data-order="Inactive">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Inactive</div>
														<!--end::Badges-->
													</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
											</tbody>
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Products-->
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
					<!--begin::Footer-->
					
@endsection