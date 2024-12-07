<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    {{-- Create content --}}
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col gap-y-1">
                            <h1 class="text-xl font-bold">Add Bus Route</h1>
                            <p class="text-sm text-gray-500">Fill out this form to create a new bus route</p>
                        </div>
                        {{-- Create Bus Route Form --}}
                        <form wire:submit='addBusRoute'>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <label for="bus_id" class="block mb-2 text-sm font-medium dark:text-white">Bus ID</label>
                                    <input 
                                    type="number" 
                                    id="bus_id" 
                                    wire:model.blur="form.bus_id" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 
                                    @error('form.bus_id')
                                        text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                    @enderror
                                    ">
                                    @error('form.bus_id')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="bus_make" class="block mb-2 text-sm font-medium dark:text-white">Bus Make</label>
                                    <input 
                                    type="text" 
                                    id="bus_make" 
                                    wire:model.blur="form.bus_make" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 
                                    @error('form.bus_make')
                                        text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                    @enderror
                                    ">
                                    @error('form.bus_make')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="arrival_time" class="block mb-2 text-sm font-medium dark:text-white">Arrival Time</label>
                                    <input 
                                    type="time" 
                                    id="arrival_time"
                                    wire:model.blur="form.arrival_time" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                                    @error('form.arrival_time')
                                        text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                    @enderror
                                    ">
                                    @error('form.arrival_time')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="departure_time" class="block mb-2 text-sm font-medium dark:text-white">Departure Time</label>
                                    <input 
                                    type="time" 
                                    id="departure_time"
                                    wire:model.blur="form.departure_time" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                                    @error('form.departure_time')
                                        text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                    @enderror
                                    ">
                                    @error('form.departure_time')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="destination" class="block mb-2 text-sm font-medium dark:text-white">Destination</label>
                                    <select 
                                    id="destination" 
                                    wire:model.live="form.destination"
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                                        @error('form.destination')
                                            text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                        @enderror
                                    ">
                                        <option value="">Select a destination</option>
                                        <option value="UCLM">UCLM</option>
                                        <option value="Terminal">Terminal</option>
                                    </select>
                                    @error('form.destination')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex justify-end mt-4 gap-x-3">
                                <a href="{{ route('buss.index') }}" class="inline-flex items-center px-4 py-3 text-sm font-medium text-indigo-800 bg-indigo-100 border border-transparent rounded-lg gap-x-2 hover:bg-indigo-200 focus:outline-none focus:bg-indigo-200 disabled:opacity-50 disabled:pointer-events-none dark:text-indigo-400 dark:hover:bg-indigo-900 dark:focus:bg-indigo-900">
                                    Cancel
                                </a>
                                <button type="submit" class="px-4 py-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-lg gap-x-2 hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none">
                                    Save
                                </button>
                            </div>
                        </form>
                        {{-- End of Create Bus Route Form --}}
                    </div>
                    {{-- End of Create content --}}
                </div>
            </div>
        </div>
    </div>
</div>
