<table class="table table-striped text-nowrap m-0">
    <thead>
        <tr>
            <th style="width: 30%">{{ __('Orginal Url') }}</th>
            <th>{{ __('Shorten Url') }}</th>
            <th>{{ __('Click Count') }}</th>
            <th style="width: 10%">{{ __('Action') }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($urls as $item)
            <tr>
                <td style="text-wrap: wrap;"><a href="{{ $item->original_url }}">{{ $item->original_url }}</a></td>
                <td><a target="_blank" href="{{ route('share.short.url', $item->short_url) }}">{{ route('share.short.url', $item->short_url) ?? "N/A" }}</a></td>
                <td>{{ $item->click_count }}</td>
                <td>
                    <a href="{{ route('user.urls.edit', $item->short_url) }}" title="Edit" class="action-btn"><i class="fas fa-edit"></i></a>
                    <a href="javascript:void(0)" title="Delete" data-target="{{ $item->id }}" class="action-btn delete-btn action-danger mr-1"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        @empty
        <tr>
            <td colspan="7">
                @include('user.includes.elements.empty-table')
            </td>
        </tr>
        @endforelse
    </tbody>
</table>