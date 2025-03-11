<x-basedashboard active_link="{{ $active_link }}">

    <script src="{{ asset('assets/js/fillable.js') }}"></script>

    <div class="container-fluid row px-2">

        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <p class="fs-2 fw-bold text-dark">Orders</p>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group">
                                <input type="text" class="border-1 opacity-2 rounded-start">
                                <button class="btn btn-secondary m-0">Search</button>
                            </div>

                        </div>
                    </div>
                    
                </div>
                
                
                <div class="d-flex flex-row justify-content-end">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create_modal">Create</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-responsive border table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Client</th>
                            <th>Weigth</th>
                            <th>Payable</th>
                            <th>Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>Kupal Kups</td>
                            <td>3.1KG</td>
                            <td class="text-danger">250</td>
                            <td>3/11/2025</td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td>Karding Kups</td>
                            <td>1.1KG</td>
                            <td class="text-success">0</td>
                            <td>3/10/2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <div class="modal fade" id="create_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" >Create Order</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">

                            <div class="col">
                                <label class="form-label">Client Name</label>
                                <div class="input-group justify-content-center align-items-center">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Weigth</label>
                                <div class="input-group justify-content-center align-items-center">
                                    <input type="number" class="form-control" id="weight" oninput="auto_val()">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Payable</label>
                                <div class="input-group justify-content-center align-items-center">
                                    <input type="number" class="form-control" id="payable">
                                </div>
                            </div>
                        </div>
                    </form>                

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
    

</x-basedashboard>