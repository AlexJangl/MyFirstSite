<tr>
    <td class="text-center">
        {{ $loop->iteration }}
    </td>
    <td>
        {{ $item->title ?? '--' }}
    </td>
    <td>
        {{ $item->image ?? '--' }}
    </td>
    <td>
        {{ $item->text ?? '--' }}
    </td>

    <td class="text-center">
        <a href = "{{ route('blogs.edit', $item) }}" class="text-primary mx-2" >
            <i class="far fa-edit"></i>
        </a>

    </td>
</tr>
