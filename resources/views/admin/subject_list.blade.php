@extends('../admin_layout')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Danh Sách</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Danh Sách</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Danh Sách Môn Học</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered" style="text-align: center">
        <?php 
        $message = Session::get('message');
        if ($message) {
          echo '<span class="text-alert" style="color:green">' .$message. '</span>';
          Session::put('message',null);
        }
        ?>
        <br>
        <thead>
          <tr>
            <th width="150px">Mã Môn Học</th>
            <th>Tên Môn Học</th>
            <th>Thới lượng</th>
            <th>Giáo Viên</th>
            <th>Thi Skill</th>
            <th>Thi Final</th>
            <th>Ngày Bắt Đầu</th>
            <th width="150px"></th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($subject_list as $key => $subject)
          <tr>
            <td>{{$subject->subject_id}}</td>
            <td>{{$subject->subject_name}}</td>
            <td>{{$subject->total_subject}} (Giờ)</td>
            <td>{{$subject->lecturers_name}}</td>
            @if ($subject->is_skill == 1)
              <td><i class="far fa-circle text-success"></i></td> 
            @else
              <td><i class="fas fa-times text-danger"></i></td> 
            @endif

            @if ($subject->is_final == 1)
            <td><i class="far fa-circle text-success"></i></td> 
            @else
            <td><i class="fas fa-times text-danger"></i></td> 
            @endif
            
            <td>{{$subject->start_subject}}</td>
            <td>

                <a href="{{URL::to('/edit-subject/'.$subject->subject_id)}}" class="active styling-edit " ui-toggle-class="" style="margin-left: 5px; font-size:20px; ">
                  <i class="far fa-edit text-success" ></i>
                </a>
                &nbsp;&nbsp;&nbsp;
                <a onClick="return confirm('Bạn có chắc muốn xóa môn học này không?')" href="{{URL::to('/delete-subject/'.$subject->subject_id)}}" style="margin-left: 5px; font-size:20px;" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-times text-danger "></i></a>
                </a>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div>
  </div>
@endsection