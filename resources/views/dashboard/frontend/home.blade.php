@extends('dashboard.layout.master')
<style>
    img{
  max-width:180px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}
</style>
            @section('content')
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
						THEME COLOR </span>
						<ul>
							<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
							</li>
							<li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
							</li>
							<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
							</li>
							<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
							</li>
							<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
							</li>
							<li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
						Theme Style </span>
						<select class="layout-style-option form-control input-sm">
							<option value="square" selected="selected">Square corners</option>
							<option value="rounded">Rounded corners</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Layout </span>
						<select class="layout-option form-control input-sm">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Header </span>
						<select class="page-header-option form-control input-sm">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Top Menu Dropdown</span>
						<select class="page-header-top-dropdown-style-option form-control input-sm">
							<option value="light" selected="selected">Light</option>
							<option value="dark">Dark</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Mode</span>
						<select class="sidebar-option form-control input-sm">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Menu </span>
						<select class="sidebar-menu-option form-control input-sm">
							<option value="accordion" selected="selected">Accordion</option>
							<option value="hover">Hover</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Style </span>
						<select class="sidebar-style-option form-control input-sm">
							<option value="default" selected="selected">Default</option>
							<option value="light">Light</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Position </span>
						<select class="sidebar-pos-option form-control input-sm">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Footer </span>
						<select class="page-footer-option form-control input-sm">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Form Widgets & Tools <small>input spinner, switches, input masks and more</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">UI Components</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Form Widgets & Tools</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			{{-- <div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box yellow-crusta">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Twitter Auto Complete(typeahead.js)
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form action="#" id="form-username" class="form-horizontal form-bordered">
								<div class="form-group">
									<label class="col-sm-3 control-label">Basic Auto Complete</label>
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-user"></i>
											</span>
											<input type="text" id="typeahead_example_1" name="typeahead_example_1" class="form-control"/>
										</div>
										<p class="help-block">
											 E.g: metronic, keenthemes.<br>
											<span class="label label-success label-sm">
											Learn more: </span>
											<a target="_blank" href="http://twitter.github.io/typeahead.js/">
											http://twitter.github.io/typeahead.js/ </a>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Country Auto Complete</label>
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-search"></i>
											</span>
											<input type="text" id="typeahead_example_2" name="typeahead_example_2" class="form-control"/>
										</div>
										<p class="help-block">
											 E.g: USA, Malaysia. Prefetch from JSON source</code>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Custom Template</label>
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-cogs"></i>
											</span>
											<input type="text" id="typeahead_example_3" name="typeahead_example_3" class="form-control"/>
										</div>
										<p class="help-block">
											 Uses a precompiled template to customize look of suggestion.</code>
										</p>
									</div>
								</div>
								<div class="form-group ">
									<label class="col-sm-3 control-label">Multiple Sections with Headers</label>
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-check"></i>
											</span>
											<input type="text" id="typeahead_example_4" name="typeahead_example_4" class="form-control"/>
										</div>
										<p class="help-block">
											 Two datasets that are prefetched, stored, and searched on the client. Highlighting is enabled.
										</p>
									</div>
								</div>
								<div class="form-group last">
									<label class="control-label col-md-3">Modal</label>
									<div class="col-md-4">
										<a href="#myModal_autocomplete" role="button" class="btn red" data-toggle="modal">
										View in Modal </a>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<div id="myModal_autocomplete" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Radio Switch in Modal</h4>
										</div>
										<div class="modal-body form">
											<form action="#" class="form-horizontal form-row-seperated">
												<div class="form-group">
													<label class="col-sm-4 control-label">Basic Auto Complete</label>
													<div class="col-sm-8">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-user"></i>
															</span>
															<input type="text" id="typeahead_example_modal_1" name="typeahead_example_modal_1" class="form-control"/>
														</div>
														<p class="help-block">
															 E.g: metronic, keenthemes.<br>
															<span class="label label-success label-sm">
															Learn more: </span>
															<a target="_blank" href="http://twitter.github.io/typeahead.js/">
															http://twitter.github.io/typeahead.js/ </a>
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Country Auto Complete</label>
													<div class="col-sm-8">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-search"></i>
															</span>
															<input type="text" id="typeahead_example_modal_2" name="typeahead_example_modal_2" class="form-control"/>
														</div>
														<p class="help-block">
															 E.g: USA, Malaysia. Prefetch from JSON source</code>
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Custom Template</label>
													<div class="col-sm-8">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-cogs"></i>
															</span>
															<input type="text" id="typeahead_example_modal_3" name="typeahead_example_modal_3" class="form-control"/>
														</div>
														<p class="help-block">
															 Uses a precompiled template to customize look of suggestion.</code>
														</p>
													</div>
												</div>
												<div class="form-group last">
													<label class="col-sm-4 control-label">Multiple Sections with Headers</label>
													<div class="col-sm-8">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-check"></i>
															</span>
															<input type="text" id="typeahead_example_modal_4" name="typeahead_example_modal_4" class="form-control"/>
														</div>
														<p class="help-block">
															 Two datasets that are prefetched, stored, and searched on the client. Highlighting is enabled.
														</p>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div> --}}
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Home Section
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" id="form-username" class="form-horizontal form-bordered">
								<div class="form-body">

                                    <div class="form-group">
										<label class="control-label col-md-2">Title-head</label>
										<div class="col-md-3">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
												<input type="text" class="form-control" name="username1" id="username2_input">
											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
                                        <label class="control-label col-md-2">Title-head Ara</label>

										<div class="col-md-3">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
												<input type="text" class="form-control" name="username1" id="username2_input">
											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
									</div>
                                 								<div class="form-group">
										<label class="control-label col-md-2">head-line</label>
										<div class="col-md-3">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
												<input type="text" class="form-control" name="username1" id="username2_input">
											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
                                        <label class="control-label col-md-2">head-line</label>
										<div class="col-md-3">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
												<input type="text" class="form-control" name="username1" id="username2_input">
											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">head-line-word</label>
										<div class="col-md-3">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
												<input type="text" class="form-control"  name="username1" id="username2_input">
											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
                                        <label class="control-label col-md-2">head-line-word</label>

										<div class="col-md-3">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
												<input type="text" class="form-control"  name="username1" id="username2_input">
											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-2">details</label>
										<div class="col-md-3">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
												<textarea class="form-control" name="username1" id="username2_input"></textarea>
											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
                                        <label class="control-label col-md-2">details</label>

										<div class="col-md-3">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
												<textarea class="form-control" name="username1" id="username2_input"></textarea>
											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-2">Background Image</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="icon-exclamation-sign"></i>
                                                <input type='file' onchange="readURL(this);" />
                                                <img id="blah" src="http://placehold.it/1920x900.jpg" alt="your image" />											</div>
											{{-- <div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div> --}}
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Save</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			{{-- <div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Bootstrap Input MaxLength
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Default usage</label>
										<div class="col-md-4">
											<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_defaultconfig">
											<span class="help-block">
											Maxlength is 25 chars. The badge will show up by default when the remaining chars are 10 or less. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Change the threshold value</label>
										<div class="col-md-4">
											<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_thresholdconfig">
											<span class="help-block">
											Maxlength is 25 chars. Do you want the badge to show up when there are 20 chars or less? Use the threshold option: <code>threshold: 20</code>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Advance usage</label>
										<div class="col-md-9">
											<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_alloptions">
											<span class="help-block">
											This is a complete example where all the options configured for the bootstrap-maxlength counter are setted. Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Textarea</label>
										<div class="col-md-9">
											<textarea id="maxlength_textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
											<span class="help-block">
											Bootstrap maxlength supports textarea as well as inputs. Even on old IE. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Position</label>
										<div class="col-md-9">
											<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_placement">
											<span class="help-block">
											The field counter can be positioned at the top, bottom, left or right. You can also place the maxlength indicator on the corners: <code>bottom-right</code>, <code>top-right</code>, <code>top-left</code>, <code>bottom-left</code> and <code>centered-right</code>. All you need to do is specify the <code>placement</code> option, with one of those strings. </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div> --}}
			{{-- <div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box green-meadow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Spinners
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 1</label>
										<div class="col-md-9">
											<div id="spinner1">
												<div class="input-group input-small">
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn btn-group-vertical">
														<button type="button" class="btn spinner-up btn-xs blue">
														<i class="fa fa-angle-up"></i>
														</button>
														<button type="button" class="btn spinner-down btn-xs blue">
														<i class="fa fa-angle-down"></i>
														</button>
													</div>
												</div>
											</div>
											<span class="help-block">
											basic example </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 2</label>
										<div class="col-md-9">
											<div id="spinner2">
												<div class="input-group input-small">
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn btn-group-vertical">
														<button type="button" class="btn spinner-up btn-xs red">
														<i class="fa fa-angle-up"></i>
														</button>
														<button type="button" class="btn spinner-down btn-xs red">
														<i class="fa fa-angle-down"></i>
														</button>
													</div>
												</div>
											</div>
											<span class="help-block">
											disabled state </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 3</label>
										<div class="col-md-9">
											<div id="spinner3">
												<div class="input-group" style="width:150px;">
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn">
														<button type="button" class="btn spinner-up default">
														<i class="fa fa-angle-up"></i>
														</button>
														<button type="button" class="btn spinner-down default">
														<i class="fa fa-angle-down"></i>
														</button>
													</div>
												</div>
											</div>
											<span class="help-block">
											with max value: 10 </span>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">Spinner 4</label>
										<div class="col-md-9">
											<div id="spinner4">
												<div class="input-group" style="width:150px;">
													<div class="spinner-buttons input-group-btn">
														<button type="button" class="btn spinner-up blue">
														<i class="fa fa-plus"></i>
														</button>
													</div>
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn">
														<button type="button" class="btn spinner-down red">
														<i class="fa fa-minus"></i>
														</button>
													</div>
												</div>
											</div>
											<span class="help-block">
											with step: 5 </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box yellow-crusta">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Bootstrap Switch
							</div>
							<div class="actions">
								<input type="checkbox" class="make-switch" checked data-on="success" data-off="warning">
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Default Sizes</label>
										<div class="col-md-9">
											<input type="checkbox" checked class="make-switch" data-size="small">
											<input type="checkbox" checked class="make-switch" data-size="normal">
											<input type="checkbox" checked class="make-switch" data-size="large">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Colors</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" checked data-on-color="primary" data-off-color="info">
											<input type="checkbox" class="make-switch" checked data-on-color="info" data-off-color="success">
											<input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning">
											<input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger">
											<input type="checkbox" class="make-switch" checked data-on-color="danger" data-off-color="default">
											<input type="checkbox" class="make-switch" checked data-on-color="default" data-off-color="primary">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Disabled / Readonly</label>
										<div class="col-md-9">
											<input type="checkbox" checked disabled class="make-switch"/>
											<input type="checkbox" checked readonly class="make-switch"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Text</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" data-on-text="Yes" data-off-text="No">
											<input type="checkbox" class="make-switch" data-on-text="1" data-off-text="0">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Long Text</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" data-on-text="&nbsp;External&nbsp;" data-off-text="&nbsp;Internal&nbsp;">
											<input type="checkbox" class="make-switch" data-on-text="&nbsp;Enabled&nbsp;&nbsp;" data-off-text="&nbsp;Disabled&nbsp;">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Label Text</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" checked data-on-text="TV">
											<input type="checkbox" class="make-switch" checked data-off-text="Signal">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">HTML Text</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"> <input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-user'></i>" data-off-text="<i class='fa fa-trash-o'></i>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">HTML Text Label Icon</label>
										<div class="col-md-9">
											<input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"> <input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-youtube" data-on-text="<i class='fa fa-thumbs-up'></i>" data-off-text="<i class='fa fa-thumbs-down'></i>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Radio Group</label>
										<div class="col-md-9">
											<div class="margin-bottom-10">
												<label for="option1">Option 1</label>
												<input id="option1" type="radio" name="radio1" value="option1" class="make-switch switch-radio1">
											</div>
											<div class="margin-bottom-10">
												<label for="option2">Option 2</label>
												<input id="option2" type="radio" name="radio1" value="option2" class="make-switch switch-radio1">
											</div>
											<div class="margin-bottom-10">
												<label for="option3">Option 3</label>
												<input id="option3" type="radio" name="radio1" value="option3" class="make-switch switch-radio1">
											</div>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">Modal</label>
										<div class="col-md-9">
											<a href="#myModal" role="button" class="btn red" data-toggle="modal">
											View in Modal </a>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Bootstrap switches</h4>
										</div>
										<div class="modal-body">
											<form action="#" class="form-horizontal">
												<div class="form-group">
													<label class="control-label col-md-3">Default Sizes</label>
													<div class="col-md-9">
														<input type="checkbox" checked class="make-switch" data-size="small">
														<input type="checkbox" checked class="make-switch" data-size="normal">
														<input type="checkbox" checked class="make-switch" data-size="large">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Colors</label>
													<div class="col-md-9">
														<input type="checkbox" class="make-switch" checked data-on-color="primary" data-off-color="info">
														<input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning">
														<input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Disabled / Readonly</label>
													<div class="col-md-9">
														<input type="checkbox" checked disabled class="make-switch"/>
														<input type="checkbox" checked readonly class="make-switch"/>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Bootstrap TouchSpin
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 1</label>
										<div class="col-md-9">
											<div class="input-inline input-medium">
												<input id="touchspin_demo1" type="text" value="55" name="demo1" class="form-control">
											</div>
											<span class="help-block">
											basic example </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 2</label>
										<div class="col-md-9">
											<div class="input-inline input-medium">
												<input id="touchspin_demo2" type="text" value="55" name="demo1" class="form-control">
											</div>
											<span class="help-block">
											example with decimal steps </span>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box green-turquoise">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>IP Address Input
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-row-seperated">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">IPV4</label>
										<div class="col-md-4">
											<input class="form-control" id="input_ipv4" type="text"/>
											<span class="help-block">
											192.168.120.150 </span>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">IPV6</label>
										<div class="col-md-4">
											<input class="form-control" id="input_ipv6" type="text"/>
											<span class="help-block">
											3ffe:1900:4545:3:200:f8ff:fe21:67cf </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box red-sunglo">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Input Masks
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Date 1</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_date" type="text"/>
											<span class="help-block">
											y/m/d </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Date 2</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_date1" type="text"/>
											<span class="help-block">
											change the placeholder </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Date 3</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_date2" type="text"/>
											<span class="help-block">
											multi-char placeholder </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Phone</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_phone" type="text"/>
											<span class="help-block">
											(999) 999-9999 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Tax ID</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_tin" type="text"/>
											<span class="help-block">
											99-9999999 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Number</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_number" type="text"/>
											<span class="help-block">
											mask "9" or mask "99" or ... mask "9999999999" </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Currency</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_currency" type="text"/>
											<span class="help-block">
											123456 => € ___.__1.234,56 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Currency 2</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_currency2" type="text"/>
											<span class="help-block">
											123456 => € ___.__1.234,56(left aligned) </span>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">SSN</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_ssn" type="text"/>
											<span class="help-block">
											999-99-9999. remove the empty mask on blur or when not empty removes the optional trailing part </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Tags Input
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body ">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-md-3">Default</label>
									<div class="col-md-9">
										<input id="tags_1" type="text" class="form-control tags" value="foo,bar,baz,roffle"/>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Fixed Width</label>
									<div class="col-md-6">
										<input id="tags_2" type="text" class="form-control tags medium" value="tag1,tag2"/>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Advanced File Input
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Default1</label>
										<div class="col-md-3">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
														<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
														</span>
													</div>
													<span class="input-group-addon btn default btn-file">
													<span class="fileinput-new">
													Select file </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="...">
													</span>
													<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Without input</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<span class="btn default btn-file">
												<span class="fileinput-new">
												Select file </span>
												<span class="fileinput-exists">
												Change </span>
												<input type="file" name="...">
												</span>
												<span class="fileinput-filename">
												</span>
												&nbsp; <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput">
												</a>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Image Upload #1</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
												</div>
												<div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="...">
													</span>
													<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
											<div class="clearfix margin-top-10">
												<span class="label label-danger">
												NOTE! </span>
												Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
											</div>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">Image Upload #2</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
												</div>
												<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
												</div>
												<div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="...">
													</span>
													<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
											<div class="clearfix margin-top-10">
												<span class="label label-danger">
												NOTE! </span>
												Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXTRAS PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>CKEditor Editor
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group last">
										<label class="control-label col-md-3">CKEditor</label>
										<div class="col-md-9">
											<textarea class="ckeditor form-control" name="editor1" rows="6"></textarea>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END EXTRAS PORTLET-->
				</div>
			</div> --}}
			<!-- END PAGE CONTENT-->
		{{-- </div>
	</div> --}}
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
	{{-- <div class="page-quick-sidebar-wrapper">
		<div class="page-quick-sidebar">
			<div class="nav-justified">
				<ul class="nav nav-tabs nav-justified">
					<li class="active">
						<a href="#quick_sidebar_tab_1" data-toggle="tab">
						Users <span class="badge badge-danger">2</span>
						</a>
					</li>
					<li>
						<a href="#quick_sidebar_tab_2" data-toggle="tab">
						Alerts <span class="badge badge-success">7</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						More<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-bell"></i> Alerts </a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-info"></i> Notifications </a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-speech"></i> Activities </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-settings"></i> Settings </a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
						<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
							<h3 class="list-heading">Staff</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">8</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar3.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Bob Nilson</h4>
										<div class="media-heading-sub">
											 Project Manager
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar1.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Nick Larson</h4>
										<div class="media-heading-sub">
											 Art Director
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">3</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar4.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Deon Hubert</h4>
										<div class="media-heading-sub">
											 CTO
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar2.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Ella Wong</h4>
										<div class="media-heading-sub">
											 CEO
										</div>
									</div>
								</li>
							</ul>
							<h3 class="list-heading">Customers</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-warning">2</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar6.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Lara Kunis</h4>
										<div class="media-heading-sub">
											 CEO, Loop Inc
										</div>
										<div class="media-heading-small">
											 Last seen 03:10 AM
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="label label-sm label-success">new</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar7.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Ernie Kyllonen</h4>
										<div class="media-heading-sub">
											 Project Manager,<br>
											 SmartBizz PTL
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar8.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Lisa Stone</h4>
										<div class="media-heading-sub">
											 CTO, Keort Inc
										</div>
										<div class="media-heading-small">
											 Last seen 13:10 PM
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">7</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar9.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Deon Portalatin</h4>
										<div class="media-heading-sub">
											 CFO, H&D LTD
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar10.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Irina Savikova</h4>
										<div class="media-heading-sub">
											 CEO, Tizda Motors Inc
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">4</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar11.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Maria Gomez</h4>
										<div class="media-heading-sub">
											 Manager, Infomatic Inc
										</div>
										<div class="media-heading-small">
											 Last seen 03:10 AM
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="page-quick-sidebar-item">
							<div class="page-quick-sidebar-chat-user">
								<div class="page-quick-sidebar-nav">
									<a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
								</div>
								<div class="page-quick-sidebar-chat-user-messages">
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											When could you send me the report ? </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Its almost done. I will be sending it shortly </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Alright. Thanks! :) </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:16</span>
											<span class="body">
											You are most welcome. Sorry for the delay. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											No probs. Just take your time :) </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:40</span>
											<span class="body">
											Alright. I just emailed it to you. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											Great! Thanks. Will check it right away. </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:40</span>
											<span class="body">
											Please let me know if you have any comment. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
										</div>
									</div>
								</div>
								<div class="page-quick-sidebar-chat-user-form">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Type a message here...">
										<div class="input-group-btn">
											<button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
						<div class="page-quick-sidebar-alerts-list">
							<h3 class="list-heading">General</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 30 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 2 hours
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
							<h3 class="list-heading">System</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 30 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-warning">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 2 hours
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
						<div class="page-quick-sidebar-settings-list">
							<h3 class="list-heading">General Settings</h3>
							<ul class="list-items borderless">
								<li>
									 Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
							</ul>
							<h3 class="list-heading">System Settings</h3>
							<ul class="list-items borderless">
								<li>
									 Security Level
									<select class="form-control input-inline input-sm input-small">
										<option value="1">Normal</option>
										<option value="2" selected>Medium</option>
										<option value="e">High</option>
									</select>
								</li>
								<li>
									 Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
								</li>
								<li>
									 Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
								</li>
								<li>
									 Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
							</ul>
							<div class="inner-content">
								<button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script src="../../assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../assets/global/plugins/ckeditor/ckeditor.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/components-form-tools.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {
           // initiate layout and plugins
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
           ComponentsFormTools.init();
        });
    </script>
<!-- BEGIN GOOGLE RECAPTCHA -->
<script type="text/javascript">
        var RecaptchaOptions = {
           theme : 'custom',
           custom_theme_widget: 'recaptcha_widget'
        };

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
<!-- END GOOGLE RECAPTCHA -->
<!-- END JAVASCRIPTS -->
@endsection
