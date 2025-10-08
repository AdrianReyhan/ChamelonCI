<?= $this->extend('layouts/master') ?>

<?= $this->section('custom_css') ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css">

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row match-height mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Zero Configuration</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>pzz</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('custom_js') ?>
<script>
    $(document).ready(function() {
        var table = $('#datatable').DataTable({
            responsive: true,
            dom: '<"top"<"left-col"l><"center-col"B><"right-col"f>>rtip',
            buttons: ['copy', 'excel', 'pdf', 'print'],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            order: [
                [0, 'asc']
            ],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records..."
            }
        });
    });
</script>
<?= $this->endSection() ?>