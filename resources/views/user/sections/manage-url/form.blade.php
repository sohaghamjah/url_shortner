@extends('user.layouts.app')

@section('button-area')
    <a href="{{ route('user.urls.index') }}" class="btn btn-primary rounded-0 mb-0"><i
            class="fas fa-arrow-left button-icon"></i> Back</a>
@endsection

@push('style')
@endpush

@section('content')
    <form id="role_form" method="POST" action="{{ route('user.urls.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        @csrf
                        @isset($url)
                            <input type="hidden" name="target" value="{{ $url->short_url }}">
                        @endisset
                        <div class="row">
                            <div class="col-md-12">
                                <x-forms.textbox 
                                    name="title" 
                                    labelName="Title" 
                                    placeholder="Title"
                                    required="required" 
                                    value="{{ old('title', @$url->title) }}">
                                </x-forms.textbox>
                            </div>
                            <div class="col-md-12">
                                <x-forms.textarea 
                                    name="original_url" 
                                    labelName="Original Url" 
                                    placeholder="Original Url"
                                    required="required" 
                                    value="{{ old('original_url', @$url->original_url) }}">
                                </x-forms.textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <button type="submit" class="btn btn-primary rounded-0 mb-0">
                                <i class="fas fa-check"></i>
                                @isset($url)
                                    Update Changes
                                @else
                                    Save Changes
                                @endisset
                            </button>
                        </div>
                    </div>
                </div><!-- /.card -->
            </div>
        </div>
    </form>
@endsection


@push('script')

@endpush
