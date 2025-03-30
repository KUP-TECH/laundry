<x-basedashboard active_link="{{ $active_link }}">
    
    <script src="{{ asset('assets/js/fillable.js')}}"></script>

    <div class="container-fluid row px-2">
        
        <div class="card">
            <div class="card-header">
                
                <div class="d-flex justify-content-between align-items-center">
                    <p class="fs-2 fw-bold text-dark">Table</p>

                    <div class="row">
                        <div class="col-12">
                            <div class="input-group">
                                <input type="text" class="border-1 opacity-2 rounded-start">
                                <button class=" btn btn-secondary m-0">Seach</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="d-flex flex-row justify-content-end">
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create_modal">Add</button>
                    </div>

                <div class="card-body">
                    <table class="table-table-responsive border table">
                        <thead>
                            <tr class="text-center">
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Salary</th>
                                <th>Schedule</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1000025</td>
                                <td>Sammyboy</td>
                                <td>SingleDouble</td>
                                <td class="text-success">350</td>
                                <td>M/W/F</td>
                            </tr>
                            <tr class="text-center">
                                <td>3100252</td>
                                <td>Lloyd Monalee</td>
                                <td>SeniorCitizen</td>
                                <td class="text-success">350</td>
                                <td>M/W/F</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




















































</x-basedashboard>
