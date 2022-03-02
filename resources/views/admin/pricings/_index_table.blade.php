<tr>
    <td class="text-center">
        {{ $loop->iteration }}
    </td>
    <td>
        {{ $item->title ?? '--' }}
    </td>
    <td>
        {{ $item->price ?? '--' }}
    </td>
    <td>
        {{ $item->list_of_benefits ?? '--' }}
    </td>

    <td class="text-center">
        <a href = "{{ route('pricings.edit', $item) }}" class="text-primary mx-2" >
            <i class="far fa-edit"></i>
        </a>

    </td>
</tr>
