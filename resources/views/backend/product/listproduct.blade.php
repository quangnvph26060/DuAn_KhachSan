@extends('backend.layout.master')
@section('title','Admin-Phòng')
@section('content')

	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách phòng</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách phòng</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								@if (session('thongbao'))
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>{{session('thongbao')}}<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								@endif
								<a href="/admin/product/add" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th>Giảm giá</th>
											<th>Trạng thái</th>
											<th>Danh mục</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($phongs as $phong)
										<tr>
											<td>{{$phong->id}}</td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="/storage/{{$phong->hinh_anh}}" width="100px" class="thumbnail"></div>
													<div class="col-md-9">
														<p style="margin-right: 10%"><strong>Tên phòng : {{$phong->ten_phong}}</strong></p>
														<p>Mô tả : {{$phong->mo_ta}}</p>
														
													</div>
												</div>
											</td>
											<td>{{$phong->gia_phong}} VNĐ</td>
											<td>{{$phong->giam_gia}} VNĐ</td>
											<td>

												@if ($phong->trang_thai==1)
													<a class="btn btn-success" href="#" role="button">Còn Phòng</a>
												@else
													<a class="btn btn-danger" href="#" role="button">Hết Phòng</a>
												@endif

												
											</td>
											<td>{{$phong->loaiphong->loaiphong}}</td>
											<td>
												<a href="/admin/product/edit/{{$phong->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn có muốn xóa phòng: {{$phong->ten_phong}} không')"  href="/admin/product/delete/{{$phong->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
										
										

									</tbody>
								</table>
								<div align='right'>
									{{$phongs->links('pagination::default')}}
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
			<!--end main-->

@endsection