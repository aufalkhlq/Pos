@extends('layouts.dashboard.app')

@section('content')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Barang
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="{{ route('dashboard.tambahbarang.create') }}" class="button text-white bg-theme-1 shadow-md mr-2" >Add New Product</a>
        <div class="dropdown relative ml-auto sm:ml-0">
            <button class="dropdown-toggle button px-2 box text-gray-700">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                <div class="dropdown-box__content box p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> New Category </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> New Group </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">NAMA BARANG</th>
                <th class="border-b-2 text-center whitespace-no-wrap">STOK</th>
                <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                <th class="border-b-2 text-center whitespace-no-wrap">GAMBAR</th>
                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">{{ $barang->nama_barang }}</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $barang->harga }}</div>
                </td>
                <td class="text-center border-b">{{ $barang->stok }}</td>
                
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>

                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                        </div>
                    </div>
                </td>


                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <form action="{{ route('dashboard.barang.edit', $barang->id) }}" method="GET">
                            <button class="button px-2 mr-1 mb-2 bg-theme-1 text-white" type="submit">
                                <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="edit" class="w-4 h-4"></i> </span>
                            </button>
                        {{-- <a class="delete-barang" href="{{ route('dashboard.barang.delete', $barang->id) }}">
                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete 
                        </a> --}}
                    </form>
                        <form action="{{ route('dashboard.barang.delete', $barang->id) }}" method="POST">
                            
                            @csrf
                            @method('delete')
                            
                            <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white" type="submit">
                                <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="trash" class="w-4 h-4"></i> </span>
                            </button>
                        
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- <script>
    $(document).ready(function() {
        $('.delete-barang').on('click', function(e) {
            e.preventDefault();
            var barangId = $(this).data('id');
            var csrfToken = "{{ csrf_token() }}";

            if (confirm('Apakah Anda yakin ingin menghapus barang ini?')) {
                $.ajax({
                    type: 'DELETE',
                    url: '/barang/' + barangId,
                    data: {
                        "_token": csrfToken
                    },
                    success: function(data) {
                        // Handle success, seperti menghapus elemen dari tampilan
                    },
                    error: function(data) {
                        // Handle error
                    }
                });
            }
        });
    });
</script> --}}
<!-- END: Datatable -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@endsection