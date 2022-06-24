<div class="p-4 w-full mx-auto flex items-start">
    <table class="w-full">
        <thead>
            <tr class="capitalize text-base text-gray-600 border-b-[1px]">
                <th scope="col">id</th>
                <th scope="col" class="border-l-[1px]">Title</th>
                <th scope="col" class="border-l-[1px]">Category</th>
                <th scope="col" class="border-l-[1px]">Gender</th>
                <th scope="col" class="border-l-[1px]">Qty</th>
                <th scope="col" class="border-l-[1px]">Price</th>
                <th scope="col" class="border-l-[1px]">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td class="pl-2 py-2">{{$item->name}}</td>
                <td class="pl-2 py-2">{{$item->category->name}}</td>
                <td class="pl-2 py-2">{{$item->gender}}</td>
                <td class="pl-2 py-2">{{$item->qty}}</td>
                <td class="pl-2 py-2">${{$item->price}}</td>
                <td class="pl-2 py-2 flex flex-row justify-center items-center">
                    <a href="#" class="text-rose-600" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>|
                    <a href="#" class="text-rose-600" title="remove">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>