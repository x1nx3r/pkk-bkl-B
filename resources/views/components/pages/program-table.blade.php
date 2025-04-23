<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="{{ $headerBg }}">
            <tr>
                @foreach($headers as $header)
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium {{ $headerText }} uppercase tracking-wider">
                    {{ $header }}
                </th>
                @endforeach
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($items as $row)
            <tr class="hover:bg-gray-50">
                @foreach($row as $cell)
                <td class="px-6 py-4 text-sm text-gray-700">
                    {!! $cell !!}
                </td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
