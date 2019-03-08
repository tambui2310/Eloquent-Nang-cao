@extends('home')
@section('title', 'Cập nhật Danh mục')
@section('content')
  <div class="col-12 col-md-12">
      <div class="row">
          <div class="col-12">
              <h1>Sửa danh mục</h1>
          </div>
          <div class="col-12">
              <form method="post" action="">
                  @csrf
                  <div class="form-group">
                      <label>Danh mục</label>
                      <input type="text" class="form-control" name="name" value="{{ $categories->name }}" required>
                  </div>
                  <button type="submit" class="btn btn-primary" value="Chỉnh sửa">Cập nhật</button>
                  <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
              </form>
          </div>
      </div>
  </div>
@endsection