@extends('home')
@section('title', 'Danh mục')
@section('content')
  <div class="col-12 col-md-12">
      <div class="row">
          <div class="col-12">
              <h1>Thêm mới danh mục</h1>
          </div>
          <div class="col-12">
              <form method="post" action="">
                  @csrf
                  <div class="form-group">
                      <label>Tên danh mục</label>
                      <input type="text" class="form-control" name="name"  placeholder="Nhập tên danh mục" required>
                  </div>
                  <button type="submit" class="btn btn-primary" value="Thêm">Thêm mới</button>
                  <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
              </form>
          </div>
      </div>
  </div>
@endsection