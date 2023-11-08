<?= $this->extend('template/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="content-header">
    <div class="container-fulid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Author Management</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fulid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addItem">
                    Add Author
                </button>
            </div>
        </div>
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">LAST NAME</th>
                    <th scope="col">FIRST NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">BIRTH DATE</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
        </table>

    </div>
</section>

<?= $this->endSection(); ?>

<?= $this->section('pagescripts'); ?>
<script>
    var table = $("#dataTable").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: "<?= base_url('authors/list'); ?>",
            type: "POST"
        },
        columns: [{
                data: "id",
            },
            {
                data: "last_name",
            },
            {
                data: "first_name",
            },
            {
                data: "email",
            },
            {
                data: "birthdate",
            },
            {
                data: null,
                defaultContent : `<td>
                <button class="btn btn-primary" id=editRow><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger" id=deleteRow><i class="fas fa-trash"></i></button>
                </td>`,
            }
        ],
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
        lengthMenu: [5, 10, 25, 50]
    });
</script>
<?= $this->endSection(); ?>