<div>
   
    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between p-4 item-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-neutral-200">The Terminal</h1>
                    <p class="text-sm text-gray-500 dark:text-neutral-400">IM BOUTTA BUSSS</p>
                </div>
               <div>
                <a href="{{ route('buss.create') }}" wire:navigate class="inline-flex items-center px-4 py-3 mb-4 text-sm font-medium text-white bg-indigo-500 border border-transparent rounded-lg shadow-md gap-x-2 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                    Create a Bus Route
                </a>
               </div>
            </div>
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700" id="paginated-bus-routes">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Bus ID</th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Bus Make</th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Arrival Time</th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Departure Time</th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Destination</th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-end dark:text-neutral-500">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($busRoutes as $busRoute)
                                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $busRoute->bus_id }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $busRoute->bus_make }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $busRoute->arrival_time }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $busRoute->departure_time }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $busRoute->destination }}</td>
                                                    <td class="flex justify-end px-6 py-4 text-sm font-medium whitespace-nowrap gap-x-3">
                                                <a href="{{ route('buss.edit', ['busRout' => $busRoute->id]) }}" wire:navigate class="text-sm font-semibold text-blue-600 border border-transparent rounded-lg gap-x-2 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Edit</a>
                                                <button 
                                                type="button" 
                                                wire:click="delete({{ $busRoute->id }})"
                                                wire:confirm="Are you sure you want to delete this student?" 
                                                class="text-sm font-semibold text-red-600 border border-transparent rounded-lg gap-x-2 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:text-red-400 dark:focus:text-red-400">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        {{ $busRoutes->links(data: ['scrollTo' => false]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
