 <!-- Content Header (Page header) -->
 <div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb">
            @foreach ($breadcrumb as $title => $url)
                <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}" aria-current="page">
                @if($loop->last) {{ $title }} @else <a href="{{ $url }}">{{ $title }}</a> @endif</li>
            @endforeach
          </ol>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <div class="float-sm-right">
              @yield('button-area')
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->