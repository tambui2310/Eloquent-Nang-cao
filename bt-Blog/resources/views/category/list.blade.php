@extends('home')
@section('title', 'Danh sách tỉnh thành')
@section('content')
  <div class="col-12">
      <div class="row">
          <div class="col-12">
              <h1>Danh Mục</h1>
          </div>
          <div id="menu" >
             <ul>
               <li><a href="{{ route('posts.index') }}">Trang Chủ</a></li>
               <li><a href="{{ route('category.list') }}">Danh mục</a></li>
               <li><a href="#">Liên hệ</a></li>
             </ul>
        </div>
          <table class="table table-striped">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Danh mục</th>
                  <th scope="col">Số bài</th>
                  <th></th>
                  <th></th>
              </tr>
              </thead>
              <tbody>
              @if(count($categories) == 0)
                  <tr>
                      <td colspan="4">Không có dữ liệu</td>
                  </tr>
              @else
                  @foreach($categories as $key => $categorie)
                      <tr>
                          <th scope="row">{{ ++$key }}</th>
                          <td>{{ $categorie->name }}</td>
                          <td>{{ count($categorie->posts) }}</td>
                          <td><a href="{{ route ('category.edit', $categorie->id ) }}">Sửa</a></td>
                          <td><a href="{{ route ('category.destroy', $categorie->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                      </tr>
                  @endforeach
              @endif
              </tbody>
          </table>
          <a class="btn btn-primary" href="{{ route('category.create') }}">Thêm mới</a>
      </div>
  </div>
@endsection
<div class="col-6" style="left: 750px;">

  <form class="navbar-form navbar-left" action="{{ route('posts.search') }}">

    @csrf

      <div class="row">

          <div class="col-8">

              <div class="form-group">

                  <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search">

              </div>

          </div>

          <div class="col-4">

              <button type="submit" class="btn btn-default">Tìm kiếm</button>

          </div>

      </div>

  </form>

</div>