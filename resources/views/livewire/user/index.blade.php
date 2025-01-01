<div>
    <h1 class="text-2xl max-w-screen-lg mx-auto text-center mb-5">All Users</h1>

    <div class="relative max-w-screen-md mx-auto">
        <input wire:model.live.debounce.500ms="search" type="search" class="rounded-full peer py-3 px-3 ps-14 focus:shadow-md block w-full bg-gray-200 border-transparent focus:border-gray-200 focus:bg-white focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search in user">

        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>
    </div>


    <div class="max-w-screen-sm mx-auto pt-4 flex items-center justify-center gap-2">
        <select wire:model.live="role" class="my-2 py-3 px-4 pe-9 block bg-gray-200 border-transparent rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600">
            <option selected="">Role</option>
            <option value="admin">Admin</option>
            <option value="zm">Zm</option>
            <option value="manager">Manager</option>
            <option value="rso">Rso</option>
        </select>

        <select wire:model.live="status" class="my-2 py-3 px-4 pe-9 block bg-gray-200 border-transparent rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600">
            <option selected="">Status</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>

    <div class="pt-10 pb-5 grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4">
        @forelse($users as $user)
            <div wire:key="{{ $user->id }}" class="w-auto flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <img class="w-full h-auto rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" alt="Card Image">
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        {{ $user->name }}
                    </h3>
                    <p class="mt-1 text-xs font-medium uppercase text-gray-500 dark:text-neutral-500">
                        <span>{{ $user->phone }}</span>
                        <span>-</span>
                        @if( $user->status == 'active' )
                            <span class="text-green-500">Active</span>
                        @else
                            <span class="text-red-500">Inactive</span>
                        @endif

                    </p>

                    <p class="mt-1 text-gray-500 dark:text-neutral-400">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>

                    <p class="mt-5 text-xs text-gray-500 dark:text-neutral-500">
                        Last updated 5 mins ago
                    </p>


                    <div class="flex items-center justify-between">
                        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-none focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-600 dark:focus:text-blue-600" href="#">
                            Edit
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </a>

                        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-red-600 decoration-2 hover:text-red-700 hover:underline focus:underline focus:outline-none focus:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:text-red-600 dark:focus:text-red-600" href="#">
                            Delete
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                {{--            <img class="w-full h-auto rounded-b-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" alt="Card Image">--}}
            </div>
        @empty
            <div class="min-h-60 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
                    <svg class="size-10 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" x2="2" y1="12" y2="12"></line>
                        <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                        <line x1="6" x2="6.01" y1="16" y2="16"></line>
                        <line x1="10" x2="10.01" y1="16" y2="16"></line>
                    </svg>
                    <p class="mt-2 text-sm text-gray-800 dark:text-neutral-300">
                        No data to found
                    </p>
                </div>
            </div>
        @endforelse
    </div>
    {{ $users->links(data: ['scrollTo' => false]) }}
</div>


