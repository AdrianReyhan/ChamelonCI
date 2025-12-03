<?= $this->extend('layouts/master') ?>

<?= $this->section('custom_css') ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css">

<style>
    #datatable {
        font-size: 0.875rem;
    }

    #datatable th,
    #datatable td {
        padding: 1rem !important;
    }
</style>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row match-height mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center" style="font-weight: 700; font-size: 2rem;">Defect Target Quantity</h5>
            </div>

            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label>Period:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Location:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Target QTY:</label>
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <!-- <div class="row mt-2">
                            <div class="col-md-12 text-right">
                                <input class="btn btn-primary btn-min-width" type="submit" value="Submit">
                            </div>
                        </div> -->
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead class="bg-info text-white">
                                <tr>
                                    <th>Period</th>
                                    <th>Location</th>
                                    <th>Target QTY</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2024-01</td>
                                    <td>Warehouse A</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td>2024-02</td>
                                    <td>Warehouse B</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <td>2024-03</td>
                                    <td>Warehouse C</td>
                                    <td>250</td>
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
        })
    });
</script>

<?= $this->endSection() ?>