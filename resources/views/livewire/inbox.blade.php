<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="flex items-center justify-between">
        <h1 class="text-4xl font-bold text-red-900">Pending ACM Requests</h1>
        <div class="flex justify-end w-lg">
        </div>
    </div>
    {{-- <div class="mt-6 p-4 bg-white rounded-xl">
        <div class="overflow-x-auto bg-white shadow-md rounded-xl">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-amber-100">
                    <tr class="">
                        <th class="px-6 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wider">
                            Requester
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wider">
                            Title
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wider">
                            Request Purpose
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wider">
                            Submitted On
                        </th>
                        <th class="px-6 py-3 text-right text-sm font-bold text-gray-700 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Jhon Doe
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Capstone ni jhonmar
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Ipapasa kay rommel
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Pending
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                2025-09-26 18:00:26
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm ">
                                <flux:button class="mr-2" icon="check" size="sm">Approve</flux:button>
                                <flux:button variant="danger" icon="x-mark" size="sm" >Decline</flux:button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div> --}}


    <div class="flex flex-col gap-4 bg-white p-4 rounded-xl mt-6 shadow-xl">
        <div class="flex "><p class="font-bold">Requester: </p> <span>name</span></div>
        <div class="flex "><p class="font-bold">Title: </p> <span>title</span></div>
        <div class="flex "><p class="font-bold">Request Purpose: </p> <span>purpose</span></div>
        <div class="flex "><p class="font-bold">Status: </p> <span>status</span></div>
        <div class="flex "><p class="font-bold">Submitted On: </p> <span>date</span></div>
        <div class="flex gap-4 items-center">
            <flux:button class="!bg-red-900 !text-white">Approve</flux:button>
            <flux:button variant="danger">Decline</flux:button>
        </div>
    </div>
</div>
