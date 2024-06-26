<div class="">
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
                    <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal text-center">{{ $loop->iteration }}</td>
                    <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal">{{ $item->name }}</td>
                    <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal">{{ $item->email }}</td>
                    <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal">
                        <div class="flex justify-center">{{ $item->address }}</div>
                    </td>
                    <td class="border-2 border-gray-300 px-4 py-2 text-body font-normal">
                        <div class="flex justify-center">
                            <!-- Edit Button -->
                            <button wire:click="edit({{ $item->id }})" data-modal-target="modaledit{{ $item->id }}" data-modal-toggle="modaledit{{ $item->id }}" class="bg-orange hover:bg-amber-400 text-white font-bold py-2 px-2 rounded-l-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                </svg>
                            </button>

                            <!-- Delete Button -->
                            <button wire:click="deleteKaryawan({{ $item->id }})" class="bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-2 rounded-r-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}

    <!-- Create Modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="{{ $errors->any() ? 'flex' : 'hidden' }} fixed inset-0 z-50 overflow-y-auto overflow-x-hidden flex justify-center items-center">
        <div class="fixed inset-0 bg-gray-800 bg-opacity-50"></div>
        <div class="relative p-4 w-full max-w-md max-h-screen">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Data Karyawan</h3>
                    <form class="space-y-6" wire:submit.prevent="save">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input wire:model.defer="name" type="text" name="name" id="name" class="block w-full p-2.5 border rounded-lg bg-gray-50 text-gray-900 sm:text-sm border-gray-300 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                            <input wire:model.defer="email" type="email" name="email" id="email" class="block w-full p-2.5 border rounded-lg bg-gray-50 text-gray-900 sm:text-sm border-gray-300 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                            <input wire:model.defer="address" type="text" name="address" id="address" class="block w-full p-2.5 border rounded-lg bg-gray-50 text-gray-900 sm:text-sm border-gray-300 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                            <input wire:model.defer="password" type="password" name="password" id="password" class="block w-full p-2.5 border rounded-lg bg-gray-50 text-gray-900 sm:text-sm border-gray-300 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Tambah Data Karyawan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    @if ($selectedUser)
        <div id="modaledit{{ $selectedUser->id }}" tabindex="-1" aria-hidden="true" class="flex fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center">
            <div class="fixed inset-0 bg-gray-800 bg-opacity-50"></div>
            <div class="relative p-4 w-full max-w-md max-h-screen">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="modaledit{{ $selectedUser->id }}">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Data Karyawan</h3>
                        <form class="space-y-6" wire:submit.prevent="update">
                            <div>
                                <label for="updatename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                                <input wire:model.defer="updatename" type="text" name="updatename" id="updatename" class="block w-full p-2.5 border rounded-lg bg-gray-50 text-gray-900 sm:text-sm border-gray-300 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            </div>
                            <div>
                                <label for="updateemail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                                <input wire:model.defer="updateemail" type="email" name="updateemail" id="updateemail" class="block w-full p-2.5 border rounded-lg bg-gray-50 text-gray-900 sm:text-sm border-gray-300 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            </div>
                            <div>
                                <label for="updateaddress" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                                <input wire:model.defer="updateaddress" type="text" name="updateaddress" id="updateaddress" class="block w-full p-2.5 border rounded-lg bg-gray-50 text-gray-900 sm:text-sm border-gray-300 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            </div>
                            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Edit Data Karyawan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
