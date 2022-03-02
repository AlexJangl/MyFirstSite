<tr>
    <td class="text-center">
        {{ $loop->iteration }}
    </td>
    <td>
        {{ $item->title ?? '--' }}
    </td>
    <td>
        {{ $item->icon ?? '--' }}
    </td>
    <td>
        {{ $item->description ?? '--' }}
    </td>

    <td class="text-center">
        <a href = "{{ route('service.edit', $item) }}" class="text-primary mx-2" >
            <i class="far fa-edit"></i>
        </a>

    </td>
</tr>
