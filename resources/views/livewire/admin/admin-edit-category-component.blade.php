<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pengaturan Kategori</h1>
    <p class="mb-4">Menampilkan serta menambahkan suatu Kategori produk kedalam web.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kategori
                <a href="{{route('admin.categories')}}" class="btn btn-success btn-sm pull-right"
                    style="float: right">Kembali</a>
            </h6>

        </div>
        <div class="card-body">
            <div class="panel-body">
                {{-- @if (Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif --}}
                @if(Session::has('message'))
                <div class="form-group row">
                    <div class="col-6">
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ 
                Session::get('message') }}</p>
                    </div>
                </div>
                @endif
                <form class="form-horizontal" wire:submit.prevent="updateCategory">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Kategori</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Nama Kategori" class="form-control input-md"
                                wire:model="name" wire:keyup="generateSlug" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Slug Kategori</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Nama Kategori" class="form-control input-md"
                                wire:model="slug" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
