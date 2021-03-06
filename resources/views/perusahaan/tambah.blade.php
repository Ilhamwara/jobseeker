@extends('layouts.master')
@section('content')
<div class="app app-default">
	@include('include.sidebar')
	<div class="app-container">
		@include('include.topbar')
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Form Tambah Perusahaan</b>
					</div>
					<div class="card-body">
						<form class="form form-horizontal">
							<div class="section">
								<div class="section-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Masukan nama perusahaan">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-3">
											<label class="control-label">Description</label>
											<p class="control-label-help">( short detail of products , 150 max words )</p>
										</div>
										<div class="col-md-9">
											<textarea class="form-control"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Price</label>
										<div class="col-md-9">
											<div class="input-group">
												<span class="input-group-addon">$</span>
												<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section">
								<div class="section-title">Warranty</div>
								<div class="section-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Type</label>
										<div class="col-md-9">
											<div class="radio radio-inline">
												<input type="radio" name="radio4" id="radio10" value="option10">
												<label for="radio10">
													Global
												</label>
											</div>
											<div class="radio radio-inline">
												<input type="radio" name="radio4" id="radio11" value="option11" checked>
												<label for="radio11">
													Local
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Cover</label>
										<div class="col-md-4">
											<div class="input-group">
												<select class="select2">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
												<span class="input-group-addon">Years</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-footer">
								<div class="form-group">
									<div class="col-md-9 col-md-offset-3">
										<button type="submit" class="btn btn-primary">Save</button>
										<button type="button" class="btn btn-default">Cancel</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection