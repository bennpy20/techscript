<!-- Main modal -->
<div id="mahasiswa-skma-modal-{{ $letter->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full backdrop-brightness-70">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm ">
            <!-- Modal header -->
<<<<<<< HEAD
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
=======
            <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
>>>>>>> e8489abcd84da377b1d0da4713bff0d153315699
                <h3 class="text-xl font-semibold text-gray-900">
                    Detail Pengajuan SKMA
                </h3>
                <button type="button"
                    class="cursor-pointer text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="mahasiswa-skma-modal-{{ $letter->id }}">
<<<<<<< HEAD
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
=======
                    <svg class="w-3 h-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
>>>>>>> e8489abcd84da377b1d0da4713bff0d153315699
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500">
                    Nomor surat: {{ $letter->id }}
                </p>
                <p class="text-base leading-relaxed text-gray-500">
                    NRP: {{ $letter->nrp }}
                </p>
                <p class="text-base leading-relaxed text-gray-500">
                    Nama Lengkap: {{ $letter->full_name }}
                </p>
                <p class="text-base leading-relaxed text-gray-500">
                    Keperluan Pengajuan: {{ $letter->purpose }}
                </p>
                <p class="text-base leading-relaxed text-gray-500">
                    Status: {{ $letter->status_text }}
                </p>
<<<<<<< HEAD
                @if ($letter->status===3)
                <p class="text-base leading-relaxed text-gray-500">
                    Disetujui oleh: {{ $letter->accepted_by }}
                </p>
                @endif
=======
>>>>>>> e8489abcd84da377b1d0da4713bff0d153315699
                <p class="text-base leading-relaxed text-gray-500">
                    Tanggal pengajuan: {{ $letter->date_indo }}
                </p>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> e8489abcd84da377b1d0da4713bff0d153315699
