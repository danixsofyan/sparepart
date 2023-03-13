<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Master Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            @if (session('status'))
            <div class="py-10">
                <div class="rounded-md bg-green-50 p-4 mx-12">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-green-800">{{ session('status') }}</h3>
                            <div class="mt-2 text-sm text-green-700">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum
                                    similique veniam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-10">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- table --}}
                    <div class=py-10">
                        <div class="px-4 sm:px-6 lg:px-8">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-base font-semibold leading-6 text-white">Penjualan</h1>
                                    <p class="mt-2 text-sm text-gray-300">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Corporis, odit! Aliquid asperiores optio accusamus adipisci
                                        officiis?</p>
                                </div>
                                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                                    <a href="/sale/create"
                                        class="block rounded-md bg-indigo-500 py-2 px-3 text-center text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add
                                        Sale</a>
                                </div>
                            </div>
                            <div class="mt-8 flow-root">
                                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                        <table class="min-w-full divide-y divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">
                                                        Tanggal Faktur</th>
                                                    <th scope="col"
                                                        class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                                        No Faktur</th>
                                                    <th scope="col"
                                                        class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                                        Nama Konsumen</th>
                                                    <th scope="col"
                                                        class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                                        Nama Barang</th>
                                                    <th scope="col"
                                                        class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                                        Jumlah</th>
                                                    <th scope="col"
                                                        class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                                        Harga Satuan</th>
                                                    <th scope="col"
                                                        class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                                        Harga Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-800">
                                                @foreach ($sale as $data)
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">
                                                        {{$data->invoice_date}}
                                                    </td>
                                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                                        {{$data->invoice_no}}</td>
                                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                                        {{$data->name_customer}}</td>
                                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                                        {{$data->item_name}}
                                                    </td>
                                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                                        {{$data->qty}}
                                                    </td>
                                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                                        {{$data->unit_price}}
                                                    </td>
                                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                                        {{$data->total_price}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

    </script>
</x-app-layout>