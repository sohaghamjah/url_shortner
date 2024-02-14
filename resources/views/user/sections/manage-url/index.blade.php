@extends('user.layouts.app')

@section('button-area')
   <div class="d-flex justify-content-end">
        <div class="link-area ml-3">
            <a href="{{ route('user.urls.create') }}" class="btn btn-primary"><i class="fas fa-plus button-icon"></i> {{ __('Add New') }}</a>
        </div>
   </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-body p-0">
                    <div class="table-responsive urls_table">
                        @include('user.includes.tables.url-table', compact('urls'))
                    </div>
                </div>
            </div><!-- /.card -->
        </div>
    </div>
@endsection


@push('script')
    <script>
        $(document).ready(function () {
            // Delete
            $(document).on('click', '.delete-btn', function(e){
                let method = 'POST';
                let url = "{{ route('user.urls.delete') }}";
                let title = 'Role Delete';
                let message = "Are Your Sure To Delete Url ?";
                let target = $(this).data('target');
                alertModalShow(method,url,title,message,target);
            });
        });

    </script>
@endpush
