<table class="min-w-full bg-white border-collapse border border-gray-200">
    <thead class="bg-dgreen">
        <tr>
            <th class="border-2 border-gray-300 px-4 py-2 text-white text-body font-semibold">No</th>
            <th class="border-2 border-gray-300 px-4 py-2 text-white text-body font-semibold">Nama</th>
            <th class="border-2 border-gray-300 px-4 py-2 text-white text-body font-semibold">Email</th>
            <th class="border-2 border-gray-300 px-4 py-2 text-white text-body font-semibold">alamat</th>
            <th class="border-2 border-gray-300 px-4 py-2 text-white text-body font-semibold">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr class="">
                <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal text-center">
                    {{ $loop->iteration }}</td>
                <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal">{{ $item->name }}</td>
                <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal">{{ $item->email }}</td>
                <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal"> <div class="flex justify-center">{{ $item->address }}</div>
                </td>
                <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal">
                    <div class="flex justify-center">
                        <!-- Edit Button -->
                        <div class="group">
                            <button wire:click="editKaryawan({{ $item->id }})"
                                class="bg-orange hover:bg-amber-400 text-white font-bold py-2 px-2 rounded-l-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                </svg>
                            </button>
                        </div>
                                
                        <!-- Delete Button -->
                        <div class="group">
                            <button wire:click="deleteKaryawan({{ $item->id }})"
                                class="bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-2 rounded-r-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </td>                
            </tr>
        @endforeach
    </tbody>
</table>
