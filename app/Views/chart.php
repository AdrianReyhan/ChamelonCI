<?= $this->extend('layouts/master') ?>

<?= $this->section('custom_css') ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css">

<style>
    #datatable {
        font-size: 0.875rem
    }

    #datatable th,
    #datatable td {
        padding: 1rem !important
    }
</style>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row match-height mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center" style="font-weight: 700; font-size: 2rem;">Raw Material</h5>
            </div>

            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <div class="p-3 mb-3">
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label>Part No:</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Local Import:</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Code:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label>Product Group:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4 mb-2">
                                <label>Lead Time Ord:</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Supplier MPQ:</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Supply MPQ:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label>STO Code:</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Unit:</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Moving Code:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">

                            <thead class="bg-info text-center">
                                <tr>
                                    <th>Location No.</th>
                                    <th>Warehouse</th>
                                    <th>Min Stock</th>
                                    <th>Max Stock</th>
                                    <th>Begin Stock</th>
                                    <th>In</th>
                                    <th>Received</th>
                                    <th>Out</th>
                                    <th>Adjustment</th>
                                    <th>On Hand</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>LOC-001</td>
                                    <td>Warehouse A</td>
                                    <td>10</td>
                                    <td>33</td>
                                    <td>65</td>
                                    <td>29</td>
                                    <td>98</td>
                                    <td>67</td>
                                    <td>77</td>
                                    <td>108</td>
                                </tr>
                                <tr>
                                    <td>LOC-002</td>
                                    <td>Warehouse B</td>
                                    <td>20</td>
                                    <td>35</td>
                                    <td>15</td>
                                    <td>294</td>
                                    <td>938</td>
                                    <td>671</td>
                                    <td>76</td>
                                    <td>1028</td>
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
            buttons: ['excel', 'pdf', 'print'],
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