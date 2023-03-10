<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- form --}}
                    <form method="post" action="{{ url('/item/'.$item->id) }}"
                        class="space-y-8 divide-y divide-gray-200">
                        @method('put')
                        @csrf
                        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                            <div class="space-y-6 sm:space-y-5">
                                <div>
                                    <h3 class="text-base font-semibold leading-6 text-gray-900">Edit Item
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Voluptas harum molestias</p>
                                </div>
                                <div class="space-y-6 sm:space-y-5">
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="first-name"
                                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Kode
                                            Barang</label>
                                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                                            <input value="{{$item->code}}" type="text" name="code" id="code"
                                                class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                    </div>

                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="last-name"
                                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Nama
                                            Barang</label>
                                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                                            <input value="{{$item->name}}" type="text" name="name" id="name"
                                                class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                    </div>

                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Harga
                                            Jual</label>
                                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                                            <input value="{{$item->selling_price}}" type="number" name="selling_price"
                                                id="selling_price"
                                                class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                    </div>

                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Harga
                                            Beli</label>
                                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                                            <input value="{{$item->purchase_price}}" type="number" name="purchase_price"
                                                id="purchase_price"
                                                class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                    </div>

                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Satuan</label>
                                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                                            <input value="{{$item->unit}}" type="text" name="unit" id="unit"
                                                class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                    </div>

                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Kategori</label>
                                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                                            <input value="{{$item->category}}" type="text" name="category" id="category"
                                                class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                    </div>

                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Stock</label>
                                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                                            <input value="{{$item->stock}}" type="number" name="stock" id="stock"
                                                class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-5">
                                <div class="flex justify-end gap-x-3">
                                    <a href="/item"
                                        class="rounded-md bg-white py-2 px-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cancel</a>
                                    <button type="submit"
                                        class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                                </div>
                            </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>