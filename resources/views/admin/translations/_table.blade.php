<tr>
    <td class="text-center">
        {{ $loop->iteration }}
    </td>
    <td>
        {{ $item->key ?? '--' }}
    </td>
    <td>
        {{ $item->title_ru ?? '--' }}
    </td>
    <td>
        {{ $item->title_ua ?? '--' }}
    </td>

    <td class="text-center">
        <a class="text-primary mx-2" data-toggle="modal" data-target="#modal{{ $item->id }}credit">
            <i class="far fa-edit"></i>
        </a>
        @include('admin.translations._credit_modal')
        {{--        <a class="text-danger" data-toggle="modal" data-target="#modal{{ $item->id }}delete">--}}
        {{--            <i class="far fa-trash-alt"></i>--}}
        {{--        </a>--}}
        {{--        @include('admin.categories._delete_modal')--}}
    </td>
</tr>