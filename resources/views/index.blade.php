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