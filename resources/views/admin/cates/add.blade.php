
        <!-- Header-->
@extends('admin.index')
@section('content')
<base href="{{asset('')}}">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Basic</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Thêm</strong>
                  </div>
                  @if(count($errors )> 0)
                      @foreach($errors->all() as $err )
                          <div class="alert alert-danger">
                              {{$err}}
                          </div>
                      @endforeach
                  @endif
                  @if(session('thongbao'))
                      <div class="alert alert-success">
                          {{session('thongbao')}}
                      </div>
                  @endif
                  <div class="card-body card-block">
                    <form action="quantri/cate/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nhập tên</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Nhập tên" class="form-control"></div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
  <script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>

@endsection