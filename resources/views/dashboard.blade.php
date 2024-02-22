<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="flex flex-col w-full">
            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-gray-200 border-b">
                                <tr class="">
                                    <th scope="col"
                                        class="text-center text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        #
                                    </th>
                                    <th scope="col"
                                        class="text-center text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Task Description
                                    </th>
                                    <th scope="col"
                                        class="text-center text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Username
                                    </th>
                                    <th scope="col"
                                        class="text-center text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Created at
                                    </th>
                                    <th scope="col"
                                        class=" text-center text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tasks as $key => $task)
                                    <tr
                                        class="text-center bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $tasks->firstItem() + $key }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $task->task_description }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $task->user->name }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $task->created_at }}
                                        </td>
                                        <td>
                                            <div class="flex justify-evenly">
                                                <div>
                                                    <a href="">
                                                        <i class="fa-solid fa-pen-to-square text-lg"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="fa-solid fa-trash text-lg" style="color: #ff0000;"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
