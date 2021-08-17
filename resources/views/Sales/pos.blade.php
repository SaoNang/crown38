<style>
#is_print_invoice {
opacity: 0;
}

</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!-- CSRF Token -->
<meta name="csrf-token" content="BHMcWVietLKrR8D5fXdKfChaF4FgLmiH7vGNh2uA">

<title>PLB POS</title>
<!-- summernote -->
<link rel="stylesheet" href="https://pos.eocambo.com/summernote/summernote-bs4.min.css">

<link rel="stylesheet" href="https://pos.eocambo.com/css/vendor.css?v=6">



<!-- app css -->
<link rel="stylesheet" href="https://pos.eocambo.com/css/app.css?v=6">

<style type="text/css">
.content {
padding-bottom: 0px !important;
}

</style>


</head>

<body class=" hold-transition lockscreen ">
<div id="app"></div>
<div class="wrapper thetop">
<script type="text/javascript">
if (localStorage.getItem("upos_sidebar_collapse") == 'true') {
var body = document.getElementsByTagName("body")[0];
body.className += " sidebar-collapse";
}
</script>
<!-- default value -->

<input type="hidden" name="transaction_sub_type" id="transaction_sub_type" value="">
<div class="col-md-12 no-print pos-header">
<input type="hidden" id="pos_redirect_url" value="https://pos.eocambo.com/pos/create">
<div class="row header_add_color">

<div class="col-12 col-sm-12 col-xs-12 col-md-6">
<span class="logo">
	PLB
	{{-- <img src="" alt=""> --}}
</span>
&nbsp;
<button class="btn-alert_draff">



</button>

</div>
<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-xl-6 ul-right">
<div class="row">
	<div class="col-6 col-xs-8 col-sm-8 col-md-8 col-xl-10">
		<div class="search-btn">


			<div class="form-group">
				<div class="input-group">
					<div class="input-group-btn">
						<button type="button" class="barcode  btn btn-default bg-white btn-flat"
							data-toggle="modal" data-target="#configure_search_modal"
							title="Configure product search"><i class="fa fa-barcode"></i></button>
					</div>

					<input class="form-control" id="search_product"
						placeholder="Enter Product name / SKU / Scan bar code" autofocus
						name="search_product" type="text">

					<span class="input-group-btn">
						<button type="button"
							class="btn btn-default bg-white btn-flat pos_add_quick_product"
							data-href="https://pos.eocambo.com/products/quick_add"
							data-container=".quick_add_product_modal"><i
								class="fa fa-plus-circle text-primary fa-lg"></i></button>
					</span>
				</div>
			</div>





		</div>
	</div>
	<div class="col-md-2 col-xl-2">
		<div class="h-btn-max">
			<button type="button" title="Press F11 to go Full Screen"
				class="btn btn-primary btn-flat m-6 hidden-xs btn-xs m-5 pull-right"
				id="full_screen">
				<i class="fa fa-expand fa-lg"></i>
			</button>
		</div>
	</div>


	<div class="col-3 col-xs-2 col-sm-2 col-md-2 col-xl-2">
		<div class="h-btn-back">
			<a href="https://pos.eocambo.com/pos" title="Go Back"
				class="btn btn-back btn-flat m-6 btn-xs m-5 pull-right">
				<button>
					<i class="fas fa-arrow-circle-left"></i>
				</button>
			</a>
		</div>
	</div>

</div>




</div>
</div>
</div>





<!-- Content Wrapper. Contains page content -->
<div class="">

<!-- Add currency related field-->
<input type="hidden" id="__code" value="USD">
<input type="hidden" id="__symbol" value="$">
<input type="hidden" id="__thousand" value=",">
<input type="hidden" id="__decimal" value=".">
<input type="hidden" id="__symbol_placement" value="before">
<input type="hidden" id="__precision" value="2">
<input type="hidden" id="__quantity_precision" value="2">
<!-- End of currency related field-->


<section class="content no-print">
<input type="hidden" id="amount_rounding_method" value="">
<form method="POST" action="https://pos.eocambo.com/pos" accept-charset="UTF-8" id="add_pos_sell_form">
<input name="_token" type="hidden" value="BHMcWVietLKrR8D5fXdKfChaF4FgLmiH7vGNh2uA">
<div class="row mb-12">
	<div class="col-md-12 h-hold">
		<div class="row hold-bg">
			<div class=" left-sidebar col-md-6  no-padding pr-12">
				<div class="box box-solid mb-12" style="position: relative;">
					<div class="box-body pb-0">
						<input id="is_print_invoice" name="is_print_invoice" type="text" value="1">
						<input id="location_id" data-receipt_printer_type="browser"
							data-default_accounts="{&quot;cash&quot;:{&quot;is_enabled&quot;:&quot;1&quot;},&quot;card&quot;:{&quot;is_enabled&quot;:&quot;1&quot;},&quot;cheque&quot;:{&quot;is_enabled&quot;:&quot;1&quot;},&quot;bank_transfer&quot;:{&quot;is_enabled&quot;:&quot;1&quot;},&quot;other&quot;:{&quot;is_enabled&quot;:&quot;1&quot;},&quot;custom_pay_1&quot;:{&quot;is_enabled&quot;:&quot;1&quot;},&quot;custom_pay_2&quot;:{&quot;is_enabled&quot;:&quot;1&quot;},&quot;custom_pay_3&quot;:{&quot;is_enabled&quot;:&quot;1&quot;}}"
							name="location_id" type="hidden" value="11">
						<!-- sub_type -->
						<input name="sub_type" type="hidden">
						<input type="hidden" id="item_addition_method" value="1">
						<style>
							.h-price-group .form-group .input-group {
								left: 0px;
							}

							.sidenav {
								height: 100%;
								width: 0;
								position: fixed;
								z-index: 1;
								top: 0;
								left: 0;
								background-color: #ececec;
								overflow-x: hidden;
								transition: 0.5s;
								padding-top: 60px;
							}

							.sidenav a {
								/* padding: 8px 8px 8px 32px; */
								text-decoration: none;
								font-size: 25px;
								color: #818181;
								display: block;
								transition: 0.3s;
							}

							.sidenav a:hover {
								color: #818181;
							}

							.sidenav .closebtn {
								position: absolute;
								top: 0;
								right: 25px;
								font-size: 36px;
								margin-left: 50px;
							}

							#main {
								transition: margin-left .5s;
								padding: 16px;
							}

							.left_side_form .btn-open {
								font-size: 24px;
								cursor: pointer
							}

							.left_side_form .btn-open .txt-open {
								font-size: 18px;
								margin-left: 14px;
							}

							.left_side_form ul {
								list-style-type: none;
								padding-left: 15px !important;
								display: inline-flex;
							}

							.left_side_form ul li {
								color: #ffff;
							}

							.btn-open {
								z-index: 100 !important;
							}

							.select2-container--default {
								width: 100% !important;
							}

						</style>
						<div class="left_side_form">
							<div class="row">
								<div
									class="col-sm-12 col-xs-12 col-12 col-md-1 col-xl-1 my-btnOpen">
									<div class="btn-open" onclick="openNav()">&#9776;</div>
								</div>
								<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-xl-6">
									<div class="form-group" style="width: 100% !important">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-user"></i>
											</span>
											<input type="hidden" id="default_customer_id"
												value="98">
											<input type="hidden" id="default_customer_name"
												value="Walk-In Customer">
											<select class="form-control mousetrap" id="customer_id"
												required style="width: 100%;" name="contact_id">
												<option selected="selected" value="">Enter Customer
													name / phone</option>
											</select>
											<span class="input-group-btn">
												<button type="button"
													class="btn btn-default bg-white btn-flat add_new_customer"
													data-name=""><i
														class="fa fa-plus-circle text-primary fa-lg"></i></button>
											</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-xs-12 col-sm-12 col-md-5 col-xl-5">
									<!-- Call restaurant module if defined -->
									<span id="restaurant_module_span">

									</span>
								</div>
							</div>
							<div id="mySidenav" class="sidenav">
								<a href="javascript:void(0)" class="closebtn"
									onclick="closeNav()">&times;</a>
								<input type="hidden" name="pay_term_number" id="pay_term_number"
									value="">
								<input type="hidden" name="pay_term_type" id="pay_term_type"
									value="">

								<div class="col-md-12 h-price-group">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fas fa-money-bill-alt"></i>
											</span>
											<input id="hidden_price_group" name="hidden_price_group"
												type="hidden" value="0">
											<select class="form-control select2" id="price_group"
												style="width: 100%;" name="price_group">
												<option value="0">Default Selling Price</option>
												<option value="4">Whole Sale</option>
												<option value="5">Retail</option>
											</select>
											<span class="input-group-addon">
												<i class="fa fa-info-circle text-info hover-q no-print "
													aria-hidden="true" data-container="body"
													data-toggle="popover"
													data-placement="auto bottom"
													data-content="Selling Price Group in which you want to sell"
													data-html="true" data-trigger="hover"></i>
											</span>
										</div>
									</div>
								</div>

								<div class="col-md-12 col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i
													class="fa fa-external-link-square-alt text-primary service_modal_btn"></i>
											</span>
											<select class="form-control" id="types_of_service_id"
												style="width: 100%;" name="types_of_service_id">
												<option selected="selected" value="">Select types of
													service</option>
											</select>

											<input id="types_of_service_price_group"
												name="types_of_service_price_group" type="hidden">

											<span class="input-group-addon">
												<i class="fa fa-info-circle text-info hover-q no-print "
													aria-hidden="true" data-container="body"
													data-toggle="popover"
													data-placement="auto bottom"
													data-content="Type of service means services like dine-in, parcel, home delivery, third party delivery etc."
													data-html="true" data-trigger="hover"></i>
											</span>
										</div>
										<small>
											<p class="help-block hide" id="price_group_text">Price
												Group: <span></span></p>
										</small>
									</div>
								</div>
								<div class="modal fade types_of_service_modal" tabindex="-1"
									role="dialog" aria-labelledby="gridSystemModalLabel"></div>

								<!-- Show button for weighing scale modal -->
							</div>
						</div>

						<!-- include module fields -->


						<div class="row">
							<div class="col-sm-12 pos_product_div">
								<input type="hidden" name="sell_price_tax" id="sell_price_tax"
									value="includes">

								<!-- Keeps count of product rows -->
								<input type="hidden" id="product_row_count" value="0">
								<table
									class="table table-condensed table-bordered table-striped table-responsive"
									id="pos_table">
									<thead>
										<tr>
											<th class="tex-center  col-md-4 ">
												Product <i
													class="fa fa-info-circle text-info hover-q no-print "
													aria-hidden="true" data-container="body"
													data-toggle="popover"
													data-placement="auto bottom"
													data-content="Click <i>product name</i> to edit price, discount & tax. <br/>Click <i>Comment Icon</i> to enter serial number / IMEI or additional note.<br/><br/>Click <i>Modifier Icon</i>(if enabled) for modifiers"
													data-html="true" data-trigger="hover"></i> </th>
											<th class="text-center col-md-3">
												Quantity </th>
											<th class="text-center col-md-2 hide">
												Price inc </th>
											<th class="text-center col-md-2">
												Subtotal </th>
											<th class="text-center"><i class="fas fa-times"
													aria-hidden="true"></i></th>
										</tr>
									</thead>
									<tbody></tbody>
								</table>
							</div>
						</div>
						<script>
							function openNav() {
								document.getElementById("mySidenav").style.width = "270px";
							}

							function closeNav() {
								document.getElementById("mySidenav").style.width = "0";
							}
						</script>
						<div class="row order-wrap">
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 ">
								<div class="order-detail">
									<p>ORDER DETAILS</p>
								</div>
							</div>
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 h-total">

								<table class="table h-table table-condensed">
									<tr>
										<td><b>Items:</b>&nbsp;</td>
										<td class="td-val">
											<span class="total_quantity"
												id="total_quantity_h">0</span>
										</td>
									</tr>
									<tr>
										<b>
											<td>
												<!-- <Button type="button" class=" btn bg-info text-white btn-default btn-flat " id="pos-edit-discount" title="Edit Discount" aria-hidden="true" data-toggle="modal" data-target="#posEditDiscountModal"> Discount / Cut Point</Button> -->
												<b>Discount / Cut Point:</b>
											</td>
											<td class="td-val">
												<span id="total_discount">0</span>
												<input type="hidden" name="discount_type"
													id="discount_type" value="percentage"
													data-default="percentage">

												<input type="hidden" name="discount_amount"
													id="discount_amount" value=" 0.00 "
													data-default="0.00">

												<input type="hidden" name="rp_redeemed"
													id="rp_redeemed" value="0">

												<input type="hidden" name="rp_redeemed_amount"
													id="rp_redeemed_amount" value="0">
											</td>
										</b>
									</tr>
									<tr class="" style="display: none !important;">
										<td>
											<!-- <b>Order Tax(+): <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
data-container="body" data-toggle="popover" data-placement="auto bottom" 
data-content="Set 'Default Sale Tax' for all sales in Business Settings. Click on the edit icon below to add/update Order Tax." data-html="true" data-trigger="hover"></i></b> -->

											<b>Order Tax</b>
										</td>
										<!-- <i class="fas fa-edit cursor-pointer" title="Edit Order Tax" aria-hidden="true" data-toggle="modal" data-target="#posEditOrderTaxModal" id="pos-edit-tax" ></i>  -->
										<td class="td-val">
											<span id="order_tax">
												0
											</span>
											<input type="hidden" name="tax_rate_id" id="tax_rate_id"
												value="  " data-default="">

											<input type="hidden" name="tax_calculation_amount"
												id="tax_calculation_amount" value=" 0.00 "
												data-default="">
										</td>
									</tr>

									<tr class="">
										<span>
											<!-- <b>Shipping(+): <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
data-container="body" data-toggle="popover" data-placement="auto bottom" 
data-content="Set shipping details and shipping charges. Click on the edit icon below to add/update shipping details and charges." data-html="true" data-trigger="hover"></i></b>  -->
											<td>
												<b>Shipping:</b>
											</td>
											<td class="td-val">

												<span id="shipping_charges_amount">0</span>
												<input type="hidden" name="shipping_details"
													id="shipping_details" value="" data-default="">

												<input type="hidden" name="shipping_address"
													id="shipping_address" value="">

												<input type="hidden" name="shipping_status"
													id="shipping_status" value="">

												<input type="hidden" name="delivered_to"
													id="delivered_to" value="">

												<input type="hidden" name="shipping_charges"
													id="shipping_charges" value="0.00 "
													data-default="0.00">
											</td>
										</span>
									</tr>



									<tr>
										<td id="td-packing">
											Packing Charge(+):
										</td>
										<td class="td-val">
											<span id="packing_charge_text">
												0
											</span>
										</td>
									</tr>
									<tr>
										<td id="td-total">
											Total :
										</td>
										<td class="td-val total-val">
											<input type="hidden" name="final_total"
												id="final_total_input" value=0>
											<span id="total_payable"
												class="text-success lead text-bold">0</span>
										</td>
									</tr>
								</table>
							</div>
						</div>


						<div class="modal fade" tabindex="-1" role="dialog" id="modal_payment">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span
												aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Payment</h4>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-9">
												<div class="row">
													<div id="payment_rows_div">


														<div class="col-md-12">
															<div class="box box-solid payment_row"
																style="background: #0073b724; border: 4px solid #0073b7;">


																<div class="box-body">
																	<div class="row">
																		<input type="hidden"
																			class="payment_row_index"
																			value="0">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label
																					for="amount_0">Receive
																					Amount (Riel
																					រៀល):*</label>
																				<div
																					class="input-group">
																					<span
																						class="input-group-addon">
																						<i
																							class="fa fa-money"></i>
																					</span>
																					<input
																						class="form-control payment-amount-riel input_number"
																						id="amount_riel"
																						placeholder="Amount"
																						name="amount_riel"
																						type="text"
																						value="0.00">
																					<input
																						id="focus_field"
																						name="focus_field"
																						type="hidden"
																						value="payment-amount">
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label
																					for="amount_0">Receive
																					Amount (Dolla
																					$):*</label>
																				<div
																					class="input-group">
																					<span
																						class="input-group-addon">
																						<i
																							class="fa fa-money"></i>
																					</span>
																					<input
																						class="form-control payment-amount input_number"
																						required
																						id="amount_0"
																						placeholder="Amount"
																						name="payment[0][amount]"
																						type="text"
																						value="0.00">
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label
																					for="method_0">Payment
																					Method:*</label>
																				<div
																					class="input-group">
																					<span
																						class="input-group-addon">
																						<i
																							class="fa fa-money"></i>
																					</span>
																					<select
																						class="form-control col-md-12 payment_types_dropdown"
																						required
																						id="method_0"
																						style="width:100%;"
																						name="payment[0][method]">
																						<option
																							value="cash"
																							selected="selected">
																							Cash
																						</option>
																						<option
																							value="card">
																							Card
																						</option>
																						<option
																							value="cheque">
																							Cheque
																						</option>
																						<option
																							value="bank_transfer">
																							Bank
																							Transfer
																						</option>
																						<option
																							value="other">
																							Other
																						</option>
																						<option
																							value="custom_pay_1">
																							Custom
																							Payment
																							1
																						</option>
																						<option
																							value="custom_pay_2">
																							Custom
																							Payment
																							2
																						</option>
																						<option
																							value="custom_pay_3">
																							Custom
																							Payment
																							3
																						</option>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																		<div class="payment_details_div  hide "
																			data-type="card">
																			<div class="col-md-4">
																				<div
																					class="form-group">
																					<label
																						for="card_number_0">Card
																						Number</label>
																					<input
																						class="form-control"
																						placeholder="Card Number"
																						id="card_number_0"
																						name="payment[0][card_number]"
																						type="text"
																						value="">
																				</div>
																			</div>
																			<div class="col-md-4">
																				<div
																					class="form-group">
																					<label
																						for="card_holder_name_0">Card
																						holder
																						name</label>
																					<input
																						class="form-control"
																						placeholder="Card holder name"
																						id="card_holder_name_0"
																						name="payment[0][card_holder_name]"
																						type="text"
																						value="">
																				</div>
																			</div>
																			<div class="col-md-4">
																				<div
																					class="form-group">
																					<label
																						for="card_transaction_number_0">Card
																						Transaction
																						No.</label>
																					<input
																						class="form-control"
																						placeholder="Card Transaction No."
																						id="card_transaction_number_0"
																						name="payment[0][card_transaction_number]"
																						type="text"
																						value="">
																				</div>
																			</div>
																			<div class="clearfix">
																			</div>
																			<div
																				class="col-md-3 hide">
																				<div
																					class="form-group">
																					<label
																						for="card_type_0">Card
																						Type</label>
																					<select
																						class="form-control"
																						id="card_type_0"
																						name="payment[0][card_type]">
																						<option
																							value="credit">
																							Credit
																							Card
																						</option>
																						<option
																							value="debit">
																							Debit
																							Card
																						</option>
																						<option
																							value="visa">
																							Visa
																						</option>
																						<option
																							value="master">
																							MasterCard
																						</option>
																					</select>
																				</div>
																			</div>
																			<div
																				class="col-md-3 hide">
																				<div
																					class="form-group">
																					<label
																						for="card_month_0">Month</label>
																					<input
																						class="form-control"
																						placeholder="Month"
																						id="card_month_0"
																						name="payment[0][card_month]"
																						type="text"
																						value="">
																				</div>
																			</div>
																			<div
																				class="col-md-3 hide">
																				<div
																					class="form-group">
																					<label
																						for="card_year_0">Year</label>
																					<input
																						class="form-control"
																						placeholder="Year"
																						id="card_year_0"
																						name="payment[0][card_year]"
																						type="text"
																						value="">
																				</div>
																			</div>
																			<div
																				class="col-md-3 hide">
																				<div
																					class="form-group">
																					<label
																						for="card_security_0">Security
																						Code</label>
																					<input
																						class="form-control"
																						placeholder="Security Code"
																						id="card_security_0"
																						name="payment[0][card_security]"
																						type="text"
																						value="">
																				</div>
																			</div>
																			<div class="clearfix">
																			</div>
																		</div>
																		<div class="payment_details_div  hide "
																			data-type="cheque">
																			<div class="col-md-12">
																				<div
																					class="form-group">
																					<label
																						for="cheque_number_0">Cheque
																						No.</label>
																					<input
																						class="form-control"
																						placeholder="Cheque No."
																						id="cheque_number_0"
																						name="payment[0][cheque_number]"
																						type="text"
																						value="">
																				</div>
																			</div>
																		</div>
																		<div class="payment_details_div  hide "
																			data-type="bank_transfer">
																			<div class="col-md-12">
																				<div
																					class="form-group">
																					<label
																						for="bank_account_number_0">Bank
																						Account
																						No</label>
																					<input
																						class="form-control"
																						placeholder="Bank Account No"
																						id="bank_account_number_0"
																						name="payment[0][bank_account_number]"
																						type="text"
																						value="">
																				</div>
																			</div>
																		</div>
																		<div class="payment_details_div  hide "
																			data-type="custom_pay_1">
																			<div class="col-md-12">
																				<div
																					class="form-group">
																					<label
																						for="transaction_no_1_0">Transaction
																						No.</label>
																					<input
																						class="form-control"
																						placeholder="Transaction No."
																						id="transaction_no_1_0"
																						name="payment[0][transaction_no_1]"
																						type="text"
																						value="">
																				</div>
																			</div>
																		</div>
																		<div class="payment_details_div  hide "
																			data-type="custom_pay_2">
																			<div class="col-md-12">
																				<div
																					class="form-group">
																					<label
																						for="transaction_no_2_0">Transaction
																						No.</label>
																					<input
																						class="form-control"
																						placeholder="Transaction No."
																						id="transaction_no_2_0"
																						name="payment[0][transaction_no_2]"
																						type="text"
																						value="">
																				</div>
																			</div>
																		</div>
																		<div class="payment_details_div  hide "
																			data-type="custom_pay_3">
																			<div class="col-md-12">
																				<div
																					class="form-group">
																					<label
																						for="transaction_no_3_0">Transaction
																						No.</label>
																					<input
																						class="form-control"
																						placeholder="Transaction No."
																						id="transaction_no_3_0"
																						name="payment[0][transaction_no_3]"
																						type="text"
																						value="">
																				</div>
																			</div>
																		</div>
																		<style>
																			.mult_calculate_container button {
																				border-radius: 0px;
																				background: white;
																				border: 1px solid #8080805e !important;
																				width: 52px !important;
																			}

																			.btn-success {
																				background: #398439 !important;
																			}

																		</style>

																		<div class="col-md-6">
																			<div id="calculator"
																				class="mult_calculate_container">
																				<div class="row text-center"
																					id="calc">
																					<div
																						class="calcBG col-md-12 text-center">


																						<div
																							class="row">
																							<button
																								id="7"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">7</button>
																							<button
																								id="8"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">8</button>
																							<button
																								id="9"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">9</button>
																							<button
																								id="100"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">100</button>
																							<button
																								id="500"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">500</button>


																						</div>
																						<div
																							class="row">
																							<button
																								id="4"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">4</button>
																							<button
																								id="5"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">5</button>
																							<button
																								id="6"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">6</button>

																							<button
																								id="50"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">50</button>
																							<button
																								id="1000"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">1000</button>

																						</div>
																						<div
																							class="row">
																							<button
																								id="1"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">1</button>
																							<button
																								id="2"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">2</button>
																							<button
																								id="3"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">3</button>
																							<button
																								id="20"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">20</button>
																							<button
																								id="2000"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">2000</button>


																						</div>
																						<div
																							class="row">
																							<button
																								id="0"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">0</button>
																							<button
																								id="."
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">.</button>
																							<button
																								id="clear"
																								type="button"
																								class="btn btn-warning"
																								onclick="mult_clearScreen()">x</button>
																							<button
																								id="10"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">10</button>
																							<button
																								id="5000"
																								type="button"
																								class="btn"
																								onclick="mult_calEnterVal(this.id)">5000</button>


																						</div>
																						<div
																							class="row">
																							<button
																								id="equals"
																								type="button"
																								class="btn btn-primary bg-blue"
																								onclick="mult_calculate()"
																								style="width: 109px !important;box-shadow: none !important;"><b>Final</b></button>
																							<button
																								type="submit"
																								class="btn btn-success"
																								id="pos-save"
																								style="width: 109px !important;"><b>Finish</b></button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-6">
																			<div class="form-group">
																				<label
																					for="note_0">Payment
																					note:</label>
																				<textarea
																					class="form-control"
																					rows="3"
																					id="note_0"
																					name="payment[0][note]"
																					cols="50"></textarea>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<input type="hidden" id="payment_row_index"
														value="1">
												</div>


												<div class="row">
													<div class="col-md-12">
														<input type="hidden" id="exchange_to_riel"
															value="4000">
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<button type="button"
															class="btn btn-primary btn-block"
															id="add-payment-row">Add Payment
															Row</button>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="sale_note">Sell
																note:</label>
															<textarea class="form-control" rows="3"
																placeholder="Sell note"
																name="sale_note" cols="50"
																id="sale_note"></textarea>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="staff_note">Staff
																note:</label>
															<textarea class="form-control" rows="3"
																placeholder="Staff note"
																name="staff_note" cols="50"
																id="staff_note"></textarea>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="box box-solid bg-blue">
													<div class="box-body">
														<div class="col-md-12">
															<strong>
																Total Due </strong>
															<br />
															<span class="lead text-bold total_due"
																style="font-size: 30px;color: #df1686;">0</span>
														</div>
														<div class="col-md-12">
															<strong>
																Total Items:
															</strong>
															<br />
															<span
																class="lead text-bold total_quantity">0</span>
														</div>

														<div class="col-md-12">
															<hr>
															<strong>
																Total Amount:
															</strong>
															<br />
															<span
																class="lead text-bold total_payable_span">0</span><br />
															<span
																class="lead text-bold total_payable_span_rial"
																style="font-size: 18px;">0</span>
														</div>

														<div class="col-md-12">
															<hr>
															<strong>
																Receive Amount:
															</strong>
															<br />
															<span
																class="lead text-bold total_paying"
																style="color: #9dff2e;font-size: 30px;">0</span><br />
															<span
																class="lead text-bold total_paying_riel"
																style="color: #9dff2e;font-size: 18px;">0</span>

															<input type="hidden"
																id="total_paying_input">
														</div>

														<div class="col-md-12">
															<hr>
															<strong>
																Change Return:
															</strong>
															<br />
															<span
																class="lead text-bold change_return_span"
																style="color: #f9fa7b;font-size: 30px;">0</span><br />
															<span
																class="lead text-bold change_return_span_riel"
																style="color: #f9fa7b;font-size: 18px;">Riel
																0</span>
															<input
																class="form-control change_return input_number"
																required id="change_return"
																placeholder="Amount" readonly
																name="change_return" type="hidden"
																value="0">
															<!-- <span class="lead text-bold total_quantity">0</span> -->
														</div>

														<div class="col-md-12">
															<hr>
															<strong>
																Balance:
															</strong>
															<br />
															<span class="lead text-bold balance_due"
																style="color: #ffb972;font-size: 30px;">0</span><br />
															<span
																class="lead text-bold balance_due_riel"
																style="color: #ffb972;font-size: 18px;">Riel
																0</span>
															<input type="hidden" id="in_balance_due"
																value=0>
														</div>



													</div>
													<!-- /.box-body -->
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary"
											id="pos-save">Finalize Payment</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

						<!-- Used for express checkout card transaction -->
						<div class="modal fade" tabindex="-1" role="dialog" id="card_details_modal">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span
												aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Card transaction details</h4>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">

												<div class="col-md-4 hide">
													<div class="form-group">
														<label for="card_number">Card Number</label>
														<input class="form-control"
															placeholder="Card Number"
															id="card_number" autofocus name=""
															type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="card_holder_name">Card holder
															name</label>
														<input class="form-control"
															placeholder="Card holder name"
															id="card_holder_name" name=""
															type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="card_transaction_number">Card
															Transaction No.</label>
														<input class="form-control"
															placeholder="Card Transaction No."
															id="card_transaction_number" name=""
															type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="card_type">Card Type</label>
														<br />
														<select class="form-control select2"
															style="width:150px;" id="card_type"
															name="">
															<option value="visa"
																selected="selected">Visa</option>
															<option value="master">MasterCard
															</option>
														</select>
													</div>
												</div>
												<div class="clearfix"></div>

												<div class="col-md-3 hide">
													<div class="form-group">
														<label for="card_month">Month</label>
														<input class="form-control"
															placeholder="Month" id="card_month"
															name="" type="text">
													</div>
												</div>
												<div class="col-md-3 hide">
													<div class="form-group">
														<label for="card_year">Year</label>
														<input class="form-control"
															placeholder="Year" id="card_year"
															name="" type="text">
													</div>
												</div>
												<div class="col-md-3 hide">
													<div class="form-group">
														<label for="card_security">Security
															Code</label>
														<input class="form-control"
															placeholder="Security Code"
															id="card_security" name="" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-primary"
											id="pos-save-card">Finalize Payment</button>
									</div>

								</div>
							</div>
						</div>
						<style>
							.modal-lg {
								width: 90% !important;
							}

						</style>
						<div class="modal fade" tabindex="-1" role="dialog"
							id="confirmSuspendModal">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span
												aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Suspend Sale</h4>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label for="additional_notes">Suspend
														Note:</label>
													<textarea class="form-control" rows="4"
														name="additional_notes" cols="50"
														id="additional_notes"></textarea>
													<input id="is_suspend" name="is_suspend"
														type="hidden" value="0">
													<input id="is_print_to_kitchen"
														name="is_print_to_kitchen" type="hidden"
														value="0">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<div class="h-suspend-btn-group">
											<div class="row">
												<div class="col-md-12">
													<button type="button"
														class="btn btn-primary h-suspend-btn"
														id="pos-suspend">Save & Print
														Invoice</button>


													<button type="button"
														class="btn btn-primary h-suspend-btn"
														id="pos-suspend-no-print-invoice">Save</button>

													<button type="button"
														class="btn btn-default h-suspend-btn h-close-suspend"
														data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Edit discount Modal -->
						<div class="modal fade" tabindex="-1" role="dialog"
							id="recurringInvoiceModal">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span
												aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Subscribe </h4>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="recur_interval">Subscription
														Interval:*</label>
													<div class="input-group">
														<input class="form-control" required
															style="width: 50%;"
															name="recur_interval" type="number"
															id="recur_interval">

														<select class="form-control" required
															style="width: 50%;"
															id="recur_interval_type"
															name="recur_interval_type">
															<option value="days"
																selected="selected">Days</option>
															<option value="months">Months</option>
															<option value="years">Years</option>
														</select>

													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="recur_repetitions">No. of
														Repetitions:</label>
													<input class="form-control"
														name="recur_repetitions" type="number"
														id="recur_repetitions">
													<p class="help-block">If blank invoice will be
														generated infinite times</p>
												</div>
											</div>
											<div class="subscription_repeat_on_div col-md-6  hide ">
												<div class="form-group">
													<label for="subscription_repeat_on">Repeat
														on:</label>
													<select class="form-control"
														id="subscription_repeat_on"
														name="subscription_repeat_on">
														<option selected="selected" value="">Please
															Select</option>
														<option value="1">1st</option>
														<option value="2">2nd</option>
														<option value="3">3rd</option>
														<option value="4">4th</option>
														<option value="5">5th</option>
														<option value="6">6th</option>
														<option value="7">7th</option>
														<option value="8">8th</option>
														<option value="9">9th</option>
														<option value="10">10th</option>
														<option value="11">11th</option>
														<option value="12">12th</option>
														<option value="13">13th</option>
														<option value="14">14th</option>
														<option value="15">15th</option>
														<option value="16">16th</option>
														<option value="17">17th</option>
														<option value="18">18th</option>
														<option value="19">19th</option>
														<option value="20">20th</option>
														<option value="21">21st</option>
														<option value="22">22nd</option>
														<option value="23">23rd</option>
														<option value="24">24th</option>
														<option value="25">25th</option>
														<option value="26">26th</option>
														<option value="27">27th</option>
														<option value="28">28th</option>
														<option value="29">29th</option>
														<option value="30">30th</option>
													</select>
												</div>
											</div>

										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Close</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					</div>
				</div>
			</div>
			<!-- <div class="col-md-2 wr-list-categoryx">
<ul>
<li>Cat one</li>
<li>Cat one</li>
<li>Cat one</li>
<li>Cat one</li>
<li>Cat one</li>
</ul>
</div> -->
			<div class="col-md-6 no-padding">


				<style>
					.btn_cat_h {
						background-color: #ffffff;
						height: 71px;
						padding: 2px 4px;
						min-width: 88px;
						text-align: center;
						margin: 12px 5px;
						border-style: none;
						border-radius: 5px;
						border: 1px solid #ffffff;
						box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
					}

					.btn_cat_h .cat_name_h {
						color: #110e0e;
						font-size: 16px;
					}

					.cat_h {
						overflow-x: auto;
						white-space: nowrap;
						align-items: center;
						/* background-color: #ffffff; */
						border-radius: 5px;
						box-sizing: border-box;
						margin-top: 10px;
					}

					.cat_h::-webkit-scrollbar-thumb {
						background: rgb(104, 104, 104) !important;
					}

					.cat_h::-webkit-scrollbar {
						height: 5px;
					}

					.cat_name_h .cat_img,
					.no-img {
						width: 40px;
						height: 40px;
						margin: 0 auto;
					}

					.cat_name_h .cat_img img,
					.no-img img {
						width: 100%;
						height: 100%;
						object-fit: cover;
						border-radius: 39px;
					}

					.hidden {
						display: none;
					}

					.show_sub {}

				</style>


				<div class="row">
					<div class=" col-md-12 " id="product_category_div">


						<div class="cat_h">
							<button type="button" class="btn_cat_h" id="all">
								<div class="cat_name_h">
									<div class="no-img">
										<img src="https://pos.eocambo.com/uploads/no-image.png"
											alt="">
									</div>
									<div class="name">
										All
									</div>
								</div>
							</button>


							<button type="button" class="btn_cat_h " id="68">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/pharmacy_old.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Pharmacy
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="69">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/Grocery-Staples.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Grocery &amp; Staples
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="82">
								<div class="cat_name_h">
									<div class="cat_img">

										<div class="no-img">
											<img src="https://pos.eocambo.com/uploads/no-image.png"
												alt="">
										</div>
									</div>
									<div class="name">
										Oil
									</div>
								</div>
							</button>

							<button type="button" class="btn_cat_h " id="83">
								<div class="cat_name_h">
									<div class="cat_img">

										<div class="no-img">
											<img src="https://pos.eocambo.com/uploads/no-image.png"
												alt="">
										</div>
									</div>
									<div class="name">
										Sale
									</div>
								</div>
							</button>

							<button type="button" class="btn_cat_h " id="84">
								<div class="cat_name_h">
									<div class="cat_img">

										<div class="no-img">
											<img src="https://pos.eocambo.com/uploads/no-image.png"
												alt="">
										</div>
									</div>
									<div class="name">
										Sugar
									</div>
								</div>
							</button>

							<button type="button" class="btn_cat_h " id="70">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/Noodles Sauces Frozen Foods.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Noodles, Sauces &amp; Frozen Foods
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="71">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/Beverages.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Beverages
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="85">
								<div class="cat_name_h">
									<div class="cat_img">

										<div class="no-img">
											<img src="https://pos.eocambo.com/uploads/no-image.png"
												alt="">
										</div>
									</div>
									<div class="name">
										Soft Drink
									</div>
								</div>
							</button>

							<button type="button" class="btn_cat_h " id="86">
								<div class="cat_name_h">
									<div class="cat_img">

										<div class="no-img">
											<img src="https://pos.eocambo.com/uploads/no-image.png"
												alt="">
										</div>
									</div>
									<div class="name">
										Juice
									</div>
								</div>
							</button>

							<button type="button" class="btn_cat_h " id="72">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/Home &amp; Kitchen.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Home &amp; Kitchen
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="73">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/Pet Care.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Pet Care
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="75">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/Biscuits, Snacks  &amp; Chocolates.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Biscuits, Snacks &amp; Chocolates
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="78">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/Baby &amp; Kids.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Baby &amp; Kids
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="79">
								<div class="cat_name_h">
									<div class="cat_img">
										<img src="https://pos.eocambo.com/uploads/category/Personal Care.jpg"
											alt=""
											onerror="this.src='https://pos.eocambo.com/uploads/no-image.png'" />
									</div>
									<div class="name">
										Personal Care
									</div>
								</div>
							</button>
							<button type="button" class="btn_cat_h " id="93">
								<div class="cat_name_h">
									<div class="cat_img">

										<div class="no-img">
											<img src="https://pos.eocambo.com/uploads/no-image.png"
												alt="">
										</div>
									</div>
									<div class="name">
										Drinks
									</div>
								</div>
							</button>
						</div>





					</div>



					<!-- used in repair : filter for service/product -->
					<div class="col-md-6 hide" id="product_service_div">
						<select id="is_enabled_stock" class="select2" name="is_enabled_stock"
							style="width:100% !important">
							<option value="" selected="selected">All</option>
							<option value="product">Product</option>
							<option value="service">Service</option>
						</select>
					</div>


				</div>
				<br>

				<div class="row">

					<input type="hidden" id="suggestion_page" value="1">
					<div class="col-md-12">
						<div class="eq-height-row" id="product_list_body"></div>
					</div>
					<div class="col-md-12 text-center" id="suggestion_page_loader"
						style="display: none;">
						<i class="fa fa-spinner fa-spin fa-2x"></i>

					</div>
				</div> <!-- default value -->

				<style>
					.h-group-action-btn {
						overflow: auto;
						white-space: nowrap;
						align-items: center;
						background-color: #ffffff;
						border-radius: 5px;
						box-sizing: border-box;
					}

					.add-form-action .h-btn-action {
						background-color: #f87233 !important;
						color: #ffffff !important;
						/* width: fit-content; */
						height: 62px;
						padding: 5px 10px;
						min-width: 94px;
						/* overflow-x: scroll; */
						text-align: center;
						margin: 12px 5px;
						border-style: none;
						border-radius: 5px;
						border: 1px solid #ffffff;
						box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
					}

					.add-form-action .h-btn-action i {
						font-size: 20px;
					}

					.add-form-action .h-btn-action span {
						text-transform: uppercase;
					}

					.h-group-action-btn::-webkit-scrollbar-thumb {
						background: rgb(104, 104, 104) !important;
					}

					.h-group-action-btn::-webkit-scrollbar {
						height: 5px;
					}

				</style>
				<div class="pos-form-actions">
					<div class="add-form-action">
						<div class="row">
							<div class="col-md-12">
								<div class="h-group-action-btn">
									<button type="button"
										class=" h-btn-action btn bg-red btn-default btn-flat no-print pos-express-finalize"
										id='btn_suspend' data-pay_method="suspend"
										title="Suspend Sales (pause)">
										<i class="fas fa-pause-circle"></i><br>
										<span>
											Suspend </span>
									</button>
									<button type="button" id="view_suspended_sales"
										title="View Susp."
										class="btn   h-btn-action  btn-flat btn-success bg-navy btn-modal"
										data-container=".view_modal"
										data-href="https://pos.eocambo.com/sells?suspended=1">
										<i class="fas fa-eye"></i><br>
										<span>
											View Susp.
										</span>
									</button>
									<button type="button"
										class="btn btn-primary h-btn-action  btn-flat "
										data-toggle="modal" data-target="#recent_transactions_modal"
										id="recent-transactions">
										<i class="fas fa-external-link-alt"></i><br>
										<span>
											Recently
										</span>
									</button>

									<button type="button"
										class="btn h-btn-action bg-navy btn-default   btn-flat no-print  "
										id="pos-finalize"
										title="Checkout using multiple payment methods">
										<i class="fas fa-money-check-alt"></i><br>
										<span>

											Pay
										</span>
									</button>

									<Button type="button"
										class="h-btn-action btn bg-info text-white btn-default btn-flat "
										id="pos-edit-discount" title="Edit Discount"
										aria-hidden="true" data-toggle="modal"
										data-target="#posEditDiscountModal">
										<i class="fas fa-percent"></i><br>
										<span>
											Discount / Cut Point
										</span>
									</Button>

									<button type="button"
										class="h-btn-action btn btn-default bg-yellow btn-flat "
										id="pos-quotation">
										<i class="fas fa-file-invoice"></i>
										<br>
										QUOTATION
									</button>






									<button type="button"
										class="btn btn-danger h-btn-action btn-flat  "
										id="pos-cancel">
										<i class="fas fa-ban"></i><br>
										<span>
											Cancel</button>
									</span>

									<button type="button" id="register_details" title="View Regis."
										class="btn   h-btn-action  btn-flat btn-success btn-modal"
										data-container=".register_details_modal"
										data-href="https://pos.eocambo.com/cash-register/register-details">
										<i class="fas fa-eye"></i><br>
										<span>
											View shift
										</span>
									</button>
									<button type="button" id="close_register" title="Close Register"
										class="btn   h-btn-action btn-flat btn-danger btn-modal"
										data-container=".close_register_modal"
										data-href="https://pos.eocambo.com/cash-register/close-register">
										<i class="fas fa-times-circle"></i><br>
										<span>
											Close shift
										</span>
									</button>
									<span class="span-action ">
										<button type="button"
											class=" h-btn-action btn bg-info text-white btn-default btn-flat "
											id="pos-draft">
											<i class="fas fa-sort-amount-up"></i><br>
											<span>
												Draft </span>
										</button>
										<Button type="button"
											class=" h-btn-action btn bg-info text-white btn-default btn-flat "
											id="pos-edit-tax" title="Edit Order Tax"
											aria-hidden="true" data-toggle="modal"
											data-target="#posEditOrderTaxModal">
											<i class="fas fa-chart-line"></i><br>
											<span>
												Order Tax </span>
										</Button>
										<Button type="button"
											class=" h-btn-action btn bg-info text-white btn-default btn-flat "
											id="pos-edit-tax" title="Edit Order Tax"
											aria-hidden="true" data-toggle="modal"
											data-target="#posShippingModal">
											<i class="fas fa-shipping-fast"></i><br>
											<span>
												Shipping </span>
										</Button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Edit discount Modal -->
				<div class="modal fade" tabindex="-1" role="dialog" id="posEditDiscountModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close"><span
										aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">
									Discount </h4>
							</div>
							<div class="modal-body">
								<div class="row ">
									<div class="col-md-12">
										<h4 class="modal-title">Edit Discount:</h4>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="discount_type_modal">Discount Type:*</label>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-info"></i>
												</span>
												<select class="form-control" required
													id="discount_type_modal"
													name="discount_type_modal">
													<option value="">Please Select</option>
													<option value="fixed">Fixed</option>
													<option value="percentage" selected="selected">
														Percentage</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="discount_amount_modal">Discount
												Amount:*</label>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-info"></i>
												</span>
												<input class="form-control input_number"
													data-max-discount=""
													data-max-discount-error_msg="You can give max % discount per sale"
													name="discount_amount_modal" type="text"
													value="0.00" id="discount_amount_modal">
											</div>
										</div>
									</div>
									<div class="bill-discount form-group col-xs-12 col-sm-12">
										<ul class="wr-list-discount discount-option-percentag "
											style="list-style: none;">
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="0">0%</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="10">10%</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="20">20%</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="30">30%</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="40">40%</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="50">50%</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="100">100%</div>
											</li>
										</ul>
										<ul class="wr-list-discount discount-option-fixed  hidden "
											style="list-style: none;">
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="0">0</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="1">1</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="2">2</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="5">5</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="10">10</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="20">20</div>
											</li>
											<li>
												<div class="btn btn-default discount_value_on_bill"
													data-value="50">50</div>
											</li>
										</ul>
									</div>
								</div>

								<br>
								<div class="row  hide ">
									<div class="well well-sm bg-light-gray col-md-12">
										<div class="col-md-12">
											<h4 class="modal-title">:</h4>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="rp_redeemed_modal">Redeemed:</label>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-gift"></i>
													</span>
													<input class="form-control"
														data-amount_per_unit_point="1.0000"
														data-max_points="0" min="0"
														data-min_order_total="1.0000"
														name="rp_redeemed_modal" type="number"
														value="0" id="rp_redeemed_modal">
													<input type="hidden" id="rp_name" value="">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<p><strong>Available:</strong> <span
													id="available_rp">0</span></p>
											<h5><strong>Redeemed Amount:</strong> <span
													id="rp_redeemed_amount_text">0.00</span></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary"
									id="posEditDiscountModalUpdate">Update</button>
								<button type="button" class="btn btn-default"
									data-dismiss="modal">Cancel</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

				<style>
					ul.wr-list-discount {
						padding: 0px;
					}

					ul.wr-list-discount li {
						float: left;
						margin-right: 10px;
					}

				</style>
				<!-- Edit Order tax Modal -->
				<div class="modal fade" tabindex="-1" role="dialog" id="posEditOrderTaxModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close"><span
										aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Edit Order Tax</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="order_tax_modal">Order Tax:*</label>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-info"></i>
												</span>
												<select class="form-control" id="order_tax_modal"
													name="order_tax_modal">
													<option selected="selected" value="">Please
														Select</option>
													<option value="" selected="selected">None
													</option>
													<option value="6" data-rate="10">Tax</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary"
									id="posEditOrderTaxModalUpdate">Update</button>
								<button type="button" class="btn btn-default"
									data-dismiss="modal">Cancel</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- Edit Shipping Modal -->
				<div class="modal fade" tabindex="-1" role="dialog" id="posShippingModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close"><span
										aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Shipping</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="shipping_details_modal">Shipping
												Details:*</label>
											<textarea class="form-control"
												placeholder="Shipping Details" required rows="4"
												name="shipping_details_modal" cols="50"
												id="shipping_details_modal"></textarea>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="shipping_address_modal">Shipping
												Address:</label>
											<textarea class="form-control"
												placeholder="Shipping Address" rows="4"
												name="shipping_address_modal" cols="50"
												id="shipping_address_modal"></textarea>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="shipping_charges_modal">Shipping
												Charges:*</label>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-info"></i>
												</span>
												<input class="form-control input_number"
													placeholder="Shipping Charges"
													name="shipping_charges_modal" type="text"
													value="0" id="shipping_charges_modal">
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="shipping_status_modal">Shipping
												Status:</label>
											<select class="form-control" id="shipping_status_modal"
												name="shipping_status_modal">
												<option selected="selected" value="">Please Select
												</option>
												<option value="ordered">Ordered</option>
												<option value="packed">Packed</option>
												<option value="shipped">Shipped</option>
												<option value="delivered">Delivered</option>
												<option value="cancelled">Cancelled</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="delivered_to_modal">Delivered To:</label>
											<input class="form-control" placeholder="Delivered To"
												name="delivered_to_modal" type="text"
												id="delivered_to_modal">
										</div>
									</div>

								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary"
									id="posShippingModalUpdate">Update</button>
								<button type="button" class="btn btn-default"
									data-dismiss="modal">Cancel</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<script deffer src="https://pos.eocambo.com/js/SocketClient.js"></script>
				<style>
					@media screen and (min-width: 992px) {
						.pos-form-actions {
							margin-left: 3px;
						}

						.pos-form-actions button {
							min-width: 9.5%;
							height: 40px;
							background: #001F3F;
							border: #fb9e07;
						}

						.pos-form-actions .btn.btn-flat {
							border-radius: 5px !important;
						}

						/* .pos-form-actions .btn.btn-flat{
padding: 15px 20px;
border-radius: 5px !important;
background-color: #2b3d51!important;
border: #2b3d51!important;
}
#pos-finalize{
background: #ff5928 !important;
}
#btn_suspend{
background: #00c0ef !important;
}
.wr-list-categoryx ul{
list-style: none;
padding: 0px;
}
.wr-list-categoryx ul li{
padding: 20px;
background: #fff;
margin-bottom: 10px;
border-radius: 5px !important;
} */
					}

				</style>
				<script>
					const business_id = '10';
					// ======read info from realtime======
					const socketListener = async () => {
						const options = {
							secure: true,
							authType: 'ws',
						};
						const client = new SocketClient('3vENntM3qglor-mxug8fqUMQ622WVvUj2QyG8hRAXHLu6_9M', options);
						const instance = await client.connect();

						const channel = instance.subscribe('new_order_biz_id_' + business_id);
						const iterator = channel[Symbol.asyncIterator]();
						const result = [];
						while (result.length < Infinity) {
							const {
								value,
								done
							} = await iterator.next();
							if (done) break;
							console.log(value);
							// ==veha updated sound==
							var audio_path = 'https://pos.eocambo.com/audio/success.mp3';
							var audio = new Audio(audio_path);
							audio.play();
							swal({
								title: "Congratulations",
								text: "You get new order! please refresh and check in draft tap!",
								icon: "success",
								buttons: ["OK", "OK and Refresh"],
							});
							// swal("Congratulations!", "You get new order! please refresh and check in draft tap!", "success");

						}
					}

					document.addEventListener('DOMContentLoaded', () => {
						socketListener();
					});
				</script>
			</div>
			<!-- Button trigger modal -->

			<!-- Modal -->
			<style>
				.h-row-table {
					margin: 0 !important
				}

				.h-col-table {
					padding-left: 0 !important;
					cursor: pointer;
				}

				.table_order_h {
					text-align: center;
					display: flex;
					flex-direction: column;
					vertical-align: middle;
					justify-content: center;
					width: fit-content;
					border-style: none;
					margin: 5px;
					width: 100%;
					padding: 20px 0;
					background-color: rgba(255, 0, 0, 0.76);
				}

				.table_order_h .table_name_h {
					color: #ffffff;
					font-size: 20px;
				}

				#close_h {
					position: absolute;
					right: 17px;
					top: 13px;
				}

				#close_h span {
					font-size: 30px;
				}

				.table-icon i {
					font-size: 68px;
				}

			</style>
			<div class="modal fade" id="showTableOrder" data-backdrop="static" data-keyboard="false"
				tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="staticBackdropLabel">Order Table</h4>
							<button type="button" id="close_h" class="close" data-dismiss="modal"
								aria-label="Close"><span aria-hidden="true">&times;</span></button>

						</div>
						<div class="modal-body">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item active">
									<a class="nav-link" data-toggle="tab" href="#all_1">All</a>
								</li>
							</ul>
							<br>
							<div class="tab-content">
								<div div id="all_1" class="tab-pane active"
									style="text-align: center;">
									<div class="row h-row-table">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info" data-dismiss="modal"
								id="x">Close</button>
						</div>
					</div>
				</div>
			</div>


		</div>
		<div class="add-slide">
			<p class="marquee">
				<span>Power by: eOcambo Technololgy | Phone: 077 99 1005 | Email:
					support@eocambo.com | Website: eocambo.com | Our Products: E-Commerce Platform
					(E-commerce Website, E-commerce Mobile application, Extranet (Backend), Domain &
					Hosting, EOCAMBO PAY, Scanning comment on Facebook Live, AI - Artificial
					Intelligence)</span>
			</p>
		</div>
	</div>
</div>
</form>
</section>

<!-- This will be printed -->
<section class="invoice print_section" id="receipt_section">
</section>
<div class="modal fade contact_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
	<form method="POST" action="https://pos.eocambo.com/contacts" accept-charset="UTF-8"
		id="quick_add_contact"><input name="_token" type="hidden"
			value="BHMcWVietLKrR8D5fXdKfChaF4FgLmiH7vGNh2uA">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
					aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Add a new contact</h4>
		</div>

		<div class="modal-body">
			<div class="row">

				<div class="col-md-4 contact_type_div">
					<div class="form-group">
						<label for="type">Contact type:*</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<select class="form-control" id="contact_type" required name="type">
								<option selected="selected" value="">Please Select</option>
								<option value="supplier">Suppliers</option>
								<option value="customer">Customers</option>
								<option value="both">Both (Supplier &amp; Customer)</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="name">Name:*</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<input class="form-control" placeholder="Name" required name="name"
								type="text" id="name">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="vat_tin">VAT TIN:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<input class="form-control" placeholder="Enter VAT TIN" name="vat_tin"
								type="text" id="vat_tin">
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 supplier_fields">
					<div class="form-group">
						<label for="supplier_business_name">Business Name:*</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-briefcase"></i>
							</span>
							<input class="form-control" required placeholder="Business Name"
								name="supplier_business_name" type="text"
								id="supplier_business_name">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="contact_id">Contact ID:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-id-badge"></i>
							</span>
							<input class="form-control" placeholder="Contact ID" name="contact_id"
								type="text" id="contact_id">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="tax_number">Tax number:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-info"></i>
							</span>
							<input class="form-control" placeholder="Tax number" name="tax_number"
								type="text" id="tax_number">
						</div>
					</div>
				</div>

				<!-- lead additional field -->
				<div class="col-md-4 lead_additional_div">
					<div class="form-group">
						<label for="crm_source">Source:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fas fa fa-search"></i>
							</span>
							<select class="form-control" id="crm_source" name="crm_source">
								<option selected="selected" value="">Please Select</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4 lead_additional_div">
					<div class="form-group">
						<label for="crm_life_stage">Life Stage:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fas fa fa-life-ring"></i>
							</span>
							<select class="form-control" id="crm_life_stage" name="crm_life_stage">
								<option selected="selected" value="">Please Select</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6 lead_additional_div">
					<div class="form-group">
						<label for="user_id">Assigned to:*</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<select class="form-control select2" id="user_id" multiple required
								style="width: 100%;" name="user_id[]"></select>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-4 opening_balance">
					<div class="form-group">
						<label for="opening_balance">Opening Balance:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fas fa-money-bill-alt"></i>
							</span>
							<input class="form-control input_number" name="opening_balance"
								type="text" value="0" id="opening_balance">
						</div>
					</div>
				</div>

				<div class="col-md-4 pay_term">
					<div class="form-group">
						<div class="multi-input">
							<label for="pay_term_number">Pay term:</label> <i
								class="fa fa-info-circle text-info hover-q no-print "
								aria-hidden="true" data-container="body" data-toggle="popover"
								data-placement="auto bottom"
								data-content="Payments to be paid for purchases/sales within the given time period.<br/><small class='text-muted'>All upcoming or due payments will be displayed in dashboard - Payment Due section</small>"
								data-html="true" data-trigger="hover"></i> <br />
							<input class="form-control width-40 pull-left" placeholder="Pay term"
								name="pay_term_number" type="number" id="pay_term_number">

							<select class="form-control width-60 pull-left" name="pay_term_type">
								<option selected="selected" value="">Please Select</option>
								<option value="months">Months</option>
								<option value="days">Days</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-4 customer_fields">
					<div class="form-group">
						<label for="customer_group_id">Customer Group:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-users"></i>
							</span>
							<select class="form-control" id="customer_group_id"
								name="customer_group_id">
								<option value="" selected="selected">None</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4 customer_fields">
					<div class="form-group">
						<label for="credit_limit">Credit Limit:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fas fa-money-bill-alt"></i>
							</span>
							<input class="form-control input_number" name="credit_limit" type="text"
								id="credit_limit">
						</div>
						<p class="help-block">Keep blank for no limit</p>
					</div>
				</div>
				<div class="col-md-12">
					<hr />
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="email">Email:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-envelope"></i>
							</span>
							<input class="form-control" placeholder="Email" name="email"
								type="email" id="email">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="mobile">Mobile:*</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-mobile"></i>
							</span>
							<input class="form-control" required placeholder="Mobile" name="mobile"
								type="text" id="mobile">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="alternate_number">Alternate contact number:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-phone"></i>
							</span>
							<input class="form-control" placeholder="Alternate contact number"
								name="alternate_number" type="text" id="alternate_number">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="landline">Landline:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-phone"></i>
							</span>
							<input class="form-control" placeholder="Landline" name="landline"
								type="text" id="landline">
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="city">City:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-map-marker"></i>
							</span>
							<input class="form-control" placeholder="City" name="city" type="text"
								id="city">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="state">State:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-map-marker"></i>
							</span>
							<input class="form-control" placeholder="State" name="state" type="text"
								id="state">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="country">Country:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-globe"></i>
							</span>
							<input class="form-control" placeholder="Country" name="country"
								type="text" id="country">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="landmark">Landmark:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-map-marker"></i>
							</span>
							<input class="form-control" placeholder="Landmark" name="landmark"
								type="text" id="landmark">
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<hr />
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="custom_field1">Custom Field 1:</label>
						<input class="form-control" placeholder="Custom Field 1"
							name="custom_field1" type="text" id="custom_field1">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="custom_field2">Custom Field 2:</label>
						<input class="form-control" placeholder="Custom Field 2"
							name="custom_field2" type="text" id="custom_field2">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="custom_field3">Custom Field 3:</label>
						<input class="form-control" placeholder="Custom Field 3"
							name="custom_field3" type="text" id="custom_field3">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="custom_field4">Custom Field 4:</label>
						<input class="form-control" placeholder="Custom Field 4"
							name="custom_field4" type="text" id="custom_field4">
					</div>
				</div>
				<div class="col-md-12">
					<hr>
				</div>
				<div class="col-md-8">
					<strong>Shipping Address</strong><br>
					<input class="form-control" placeholder="Search address" id="shipping_address"
						name="shipping_address" type="text">
					<div id="map"></div>
				</div>
				<input id="position" name="position" type="hidden">

			</div>
		</div>

		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Save</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>

	</form>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
<!-- /.content -->
<div class="modal fade register_details_modal" tabindex="-1" role="dialog"
aria-labelledby="gridSystemModalLabel">
</div>
<div class="modal fade close_register_modal" tabindex="-1" role="dialog"
aria-labelledby="gridSystemModalLabel">
</div>
<!-- quick product modal -->
<div class="modal fade quick_add_product_modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
</div>

<div class="modal fade" id="configure_search_modal" tabindex="-1" role="dialog"
aria-labelledby="gridSystemModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">
			Search products by </h4>
	</div>
	<div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<div class="checkbox">
					<label>
						<input class="input-icheck search_fields" checked="checked"
							name="search_fields[]" type="checkbox" value="name"> Product Name
					</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="checkbox">
					<label>
						<input class="input-icheck search_fields" checked="checked"
							name="search_fields[]" type="checkbox" value="sku"> SKU </label>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
</div>
</div>
</div>
<div class="modal fade no-print" id="recent_transactions_modal" tabindex="-1" role="dialog"
aria-labelledby="modalTitle">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Recent Transactions</h4>
	</div>
	<div class="modal-body">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active" id="final-h"><a href="#tab_final" data-toggle="tab"
						aria-expanded="true"><b><i class="fa fa-check"></i> Final</b></a></li>

				<li class=""><a href="#tab_quotation" data-toggle="tab" aria-expanded="false"><b><i
								class="fa fa-terminal"></i> Quotation</b></a></li>

				<li class="" id="draff-h"><a href="#tab_draft" data-toggle="tab"
						aria-expanded="false"><b><i class="fa fa-terminal"></i> Draft</b></a></li>

				<li class=""><a href="#tab_cancel" data-toggle="tab" aria-expanded="false"><b><i
								class="fa fa-terminal"></i> Cancel</b></a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_final">
				</div>
				<div class="tab-pane" id="tab_quotation">
				</div>
				<div class="tab-pane" id="tab_draft">
				</div>
				<div class="tab-pane" id="tab_cancel">
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="weighing_scale_modal">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Weighing Scale</h4>
	</div>
	<div class="modal-body">
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label for="weighing_scale_barcode">Weighing scale barcode:</label> <i
						class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
						data-container="body" data-toggle="popover" data-placement="auto bottom"
						data-content="Scan the barcode from weighing sale and submit"
						data-html="true" data-trigger="hover"></i> <input class="form-control"
						name="weighing_scale_barcode" type="text" id="weighing_scale_barcode">
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-primary" id="weighing_scale_submit">Submit</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class='scrolltop no-print'>
<div class='scroll icon'><i class="fas fa-angle-up"></i></div>
</div>


<!-- This will be printed -->
<section class="invoice print_section" id="receipt_section">
</section>

</div>
<div class="modal fade" id="todays_profit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
			aria-hidden="true">&times;</span></button>
	<h4 class="modal-title" id="myModalLabel">Today's profit</h4>
</div>
<div class="modal-body">
	<input type="hidden" id="modal_today" value="2021-08-17">
	<div class="row">
		<div id="todays_profit">
		</div>
	</div>

</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div> <!-- /.content-wrapper -->


<audio id="success-audio">
<source src="https://pos.eocambo.com/audio/success.ogg?v=6" type="audio/ogg">
<source src="https://pos.eocambo.com/audio/success.mp3?v=6" type="audio/mpeg">
</audio>
<audio id="error-audio">
<source src="https://pos.eocambo.com/audio/error.ogg?v=6" type="audio/ogg">
<source src="https://pos.eocambo.com/audio/error.mp3?v=6" type="audio/mpeg">
</audio>
<audio id="warning-audio">
<source src="https://pos.eocambo.com/audio/warning.ogg?v=6" type="audio/ogg">
<source src="https://pos.eocambo.com/audio/warning.mp3?v=6" type="audio/mpeg">
</audio>

</div>

<script type="text/javascript">
base_path = "https://pos.eocambo.com";
//used for push notification
APP = {};
APP.PUSHER_APP_KEY = '';
APP.PUSHER_APP_CLUSTER = '';
//variable from app service provider
APP.PUSHER_ENABLED = '';
APP.USER_ID = "28";
</script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js?v=$asset_v"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js?v=$asset_v"></script>
<![endif]-->
<script src="https://pos.eocambo.com/js/vendor.js?v=6"></script>

<script src="https://pos.eocambo.com/js/lang/en.js?v=6"></script>

<script>
moment.tz.setDefault('Asia/Kolkata');
$(document).ready(function() {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$.fn.dataTable.ext.errMode = 'throw';
});

var financial_year = {
start: moment('2021-01-01'),
end: moment('2021-12-31'),
}

var datepicker_date_format = "mm/dd/yyyy";
var moment_date_format = "MM/DD/YYYY";
var moment_time_format = "HH:mm";

var app_locale = "en";

var non_utf8_languages = [
"ar",
"hi",
"ps",
];

var __default_datatable_page_entries = "25";

var __new_notification_count_interval = "60000";
</script>

<script src="https://pos.eocambo.com/js/lang/en.js?v=6"></script>

<script src="https://pos.eocambo.com/js/functions.js?v=6"></script>
<script src="https://pos.eocambo.com/js/common.js?v=6"></script>
<script src="https://pos.eocambo.com/js/app.js?v=6"></script>
<script src="https://pos.eocambo.com/js/help-tour.js?v=6"></script>
<script src="https://pos.eocambo.com/js/documents_and_note.js?v=6"></script>

<!-- TODO -->

<script src="https://pos.eocambo.com/js/pos.js?v=6"></script>
<script src="https://pos.eocambo.com/js/printer.js?v=6"></script>
<script src="https://pos.eocambo.com/js/product.js?v=6"></script>
<script deffer src="https://pos.eocambo.com/js/SocketClient.js"></script>
<script src="https://pos.eocambo.com/js/opening_stock.js?v=6"></script>
<script type="text/javascript">
$(document).ready(function() {
//shortcut for express checkout
Mousetrap.bind('shift+e', function(e) {
e.preventDefault();
$('button.pos-express-finalize[data-pay_method="cash"]').trigger('click');
});

//shortcut for cancel checkout
Mousetrap.bind('shift+c', function(e) {
e.preventDefault();
$('#pos-cancel').trigger('click');
});

//shortcut for draft checkout
Mousetrap.bind('shift+d', function(e) {
e.preventDefault();
$('#pos-draft').trigger('click');
});

//shortcut for draft pay & checkout
Mousetrap.bind('shift+p', function(e) {
e.preventDefault();
$('#pos-finalize').trigger('click');
});

//shortcut for edit discount
Mousetrap.bind('shift+i', function(e) {
e.preventDefault();
$('#pos-edit-discount').trigger('click');
});

//shortcut for edit tax
Mousetrap.bind('shift+t', function(e) {
e.preventDefault();
$('#pos-edit-tax').trigger('click');
});

//shortcut for add payment row
var payment_modal = document.querySelector('#modal_payment');
Mousetrap.bind('shift+r', function(e, combo) {
if ($('#modal_payment').is(':visible')) {
e.preventDefault();
$('#add-payment-row').trigger('click');
}
});

//shortcut for add finalize payment
var payment_modal = document.querySelector('#modal_payment');
Mousetrap(payment_modal).bind('shift+f', function(e, combo) {
if ($('#modal_payment').is(':visible')) {
e.preventDefault();
$('#pos-save').trigger('click');
}
});

//Shortcuts to go recent product quantity
shortcut_length_prev = 0;
shortcut_position_now = null;

Mousetrap.bind('f2', function(e, combo) {
var length_now = $('table#pos_table tr').length;

if (length_now != shortcut_length_prev) {
shortcut_length_prev = length_now;
shortcut_position_now = length_now;
} else {
shortcut_position_now = shortcut_position_now - 1;
}

var last_qty_field = $('table#pos_table tr').eq(shortcut_position_now - 1).contents().find(
'input.pos_quantity');
if (last_qty_field.length >= 1) {
last_qty_field.focus().select();
} else {
shortcut_position_now = length_now + 1;
Mousetrap.trigger('f2');
}
});

//On focus of quantity field go back to search when stop typing
var timeout = null;
$('table#pos_table').on('focus', 'input.pos_quantity', function() {
var that = this;

$(this).on('keyup', function(e) {

if (timeout !== null) {
	clearTimeout(timeout);
}

var code = e.keyCode || e.which;
if (code != '9') {
	timeout = setTimeout(function() {
		$('input#search_product').focus().select();
	}, 5000);
}
});
});

//shortcut to go to add new products
Mousetrap.bind('f4', function(e) {
$('input#search_product').focus().select();
});

//shortcut for weighing scale
});
</script>
<!-- Call restaurant module if defined -->
<script src="https://pos.eocambo.com/js/restaurant.js?v=6"></script>
<!-- include module js -->

<div class="modal fade" id="clock_in_clock_out_modal" tabindex="-1" role="dialog"
aria-labelledby="gridSystemModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">

<form method="POST" action="https://pos.eocambo.com/hrm/clock-in-clock-out" accept-charset="UTF-8"
id="clock_in_clock_out_form"><input name="_token" type="hidden"
	value="BHMcWVietLKrR8D5fXdKfChaF4FgLmiH7vGNh2uA">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
			aria-hidden="true">&times;</span></button>
	<h4 class="modal-title"><span id="clock_in_text">Clock In</span>
		<span id="clock_out_text">Clock Out</span>
	</h4>
</div>
<div class="modal-body">
	<div class="row">
		<input type="hidden" name="type" id="type">
		<div class="form-group col-md-12">
			<strong>IP Address: 117.20.112.51</strong>
		</div>
		<div class="form-group col-md-12">
			<label for="note">Note:</label>
			<textarea class="form-control" placeholder="Note" rows="3" name="note" cols="50"
				id="note"></textarea>
		</div>
	</div>
</div>

<div class="modal-footer">
	<button type="submit" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</form>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

<script type="text/javascript">
$(document).ready(function() {
$('#essentials_dob').datepicker();
$('.clock_in_btn, .clock_out_btn').click(function() {
var type = $(this).data('type');
if (type == 'clock_in') {
$('#clock_in_clock_out_modal').find('#clock_in_text').removeClass('hide');
$('#clock_in_clock_out_modal').find('#clock_out_text').addClass('hide');
} else if (type == 'clock_out') {
$('#clock_in_clock_out_modal').find('#clock_in_text').addClass('hide');
$('#clock_in_clock_out_modal').find('#clock_out_text').removeClass('hide');
}
$('#clock_in_clock_out_modal').find('input#type').val(type);

$('#clock_in_clock_out_modal').modal('show');
});
});

$(document).on('submit', 'form#clock_in_clock_out_form', function(e) {
e.preventDefault();
$(this).find('button[type="submit"]').attr('disabled', true);
var data = $(this).serialize();

$.ajax({
method: $(this).attr('method'),
url: $(this).attr('action'),
dataType: 'json',
data: data,
success: function(result) {
if (result.success == true) {
	$('div#clock_in_clock_out_modal').modal('hide');
	toastr.success(result.msg);
	if (typeof attendance_table !== 'undefined') {
		attendance_table.ajax.reload();
	}
	if (result.type == 'clock_in') {
		$('.clock_in_btn').addClass('hide');
		$('.clock_out_btn').removeClass('hide');
	} else if (result.type == 'clock_out') {
		$('.clock_out_btn').addClass('hide');
		$('.clock_in_btn').removeClass('hide');
	}
} else {
	swal({
		title: result.msg,
		icon: 'error'
	})
}
$('#clock_in_clock_out_form')[0].reset();
$('#clock_in_clock_out_form').find('button[type="submit"]').removeAttr('disabled');
},
});
});
</script> <div class="modal fade view_modal" tabindex="-1" role="dialog"
aria-labelledby="gridSystemModalLabel"></div>
</body>

</html>
<!-- Summernote -->
<script src="https://pos.eocambo.com/summernote/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
$('.text_area').summernote();
});
</script>
