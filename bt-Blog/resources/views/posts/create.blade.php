@extends('home')

@section('title', 'Thêm bài viết')


@section('content')

  <div class="row">

      <div class="col-md-12">

          <h2>Thêm mới bài viết</h2>

      </div>

      <div class="col-md-12">

          <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">

              @csrf

              <div class="form-group">

                  <label >Tiêu đề</label>

                  <input type="text" class="form-control" name="title" required>

              </div>

              <div class="form-group">

                  <label >Nội dung</label>

                  <textarea class="form-control" rows="3" name="content" required></textarea>

              </div>

              <div class="form-group">

                  <label for="exampleFormControlFile1">Ảnh</label>

                  <input type="file" name="image" class="form-control-file" required>

              </div>

              <div class="form-group">

                  <label for="exampleFormControlFile1">Ngày</label>

                  <input type="date" name="date" class="form-control" required>

              </div>
              <div class="form-group">

                      <label>Danh mục</label>

                      <select class="form-control" name="category_id">

                          @foreach($categories as $categorie)

                          <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>

                          @endforeach

                      </select>
              </div>

              <button type="submit" class="btn btn-primary">Đăng bài</button>

              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

          </form>

      </div>

  </div>


@endsection