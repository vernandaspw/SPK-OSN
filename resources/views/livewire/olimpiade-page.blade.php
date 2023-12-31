<div>


    <!-- Topbar -->

    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Olimpiade</h1>

        </div>

        <!-- Content Row -->
        <div class="">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered border-sm table-hover">
                        <thead class="bg-primary text-white">
                            <th>
                                Nama
                            </th>
                            <td>Aksi</td>
                        </thead>
                        <tbody>
                            <tr class="bg-secondary">
                                <td>
                                    <input required type="text" class="form-control" placeholder="buat baru"
                                        wire:model.live='nama' wire:keydown.enter='simpanBaru'>
                                </td>

                            </tr>
                            @foreach ($olimpiades as $olimpiade)
                            @if($olimpiade->id == $ID)
                            <tr>
                                <td>
                                    <input required placeholder="{{ $olimpiade->nama }}" type="text" class="form-control" wire:model='nama_edit' wire:keydown.enter='edit'>
                                </td>
                            </tr>
                            @else
                            <tr wire:click="$set('ID', {{ $olimpiade->id }})">
                                <td>
                                    {{ $olimpiade->nama }}
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" wire:confirm='Yakin mau hapus?'
                                        wire:click="hapus('{{ $olimpiade->id }}')">Hapus</button>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


</div>
