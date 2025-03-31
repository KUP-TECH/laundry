<x-basedashboard active_link="{{ $active_link }}">


    <div class="container-fluid row px-2">

        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <p class="fs-2 fw-bold text-dark">Orders</p>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group">
                                <form action="{{route('orders')}}" method="GET">
                                    <input type="number" name="search" class="border-1 opacity-2 rounded-start" placeholder="order id">
                                    <button type="submit" class="btn btn-sm btn-secondary m-0">Search</button>

                                </form>
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

                            @foreach ($table_headers as $head)
                                <th class="text-center fs-10">{{ $head }}</th>
                            @endforeach
                            
                        </tr>
                    </thead>

                    <tbody>
                        
                        @foreach ($orders as $index => $order)
                            <tr class="text-center" id="row_{{ $order->order_id }}">
                                <input type="hidden" name="order_id" value="{{ $index }}">
                                <td>{{ $order->order_id }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->weight }}</td>
                                <td>{{ $order->payable }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td class="{{ $order->paid == 1 ? 'text-success' : 'text-danger' }}">{{ $order->paid == 1 ? 'Yes' : 'No' }}</td>
                                <td>{{ $order->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- Order Modal --}}
    @foreach ($orders as $index => $order)
        <div class="modal fade" id="order_modal_{{ $order->order_id }}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Order # {{ $order->order_id }}</h1>
                    </div>
                    <form action="{{ route('set_status')}} " method="POST">
                    @csrf

                        <div class="modal-body">
                            <p class="fs-7">
                                <span class="fw-bold">Order Date:</span> {{ $order->order_date }}
                            </p>
                            <p class="fs-7 my-0">
                                <span class="fw-bold">Name:</span> {{ $order->name }}
                            </p>

                            <p class="fs-7 my-0">
                                <span class="fw-bold">Weight:</span> {{ $order->weight }}
                            </p>
                            <p class="fs-7 my-0 mb-2">
                                <span class="fw-bold">Contact No.:</span> {{ $order->contactno }}
                            </p>
                            <input type="hidden" name="order_id" value="{{ $order->order_id }}">
                            <input type="hidden" name="order_contactno" value="{{ $order->contactno }}">

                            <label for="" class="form-label my-0">Payable</label>
                            <div class="input-group mb-2">
                                <input type="number" step="0.00001" name="payable" class="form-control" value="{{ $order->payable }}">
                            </div>

                            <label for="" class="form-label my-0">Job Status:</label>
                            <div class="input-group">
                                <select name="job" id="" class="form-control">
                                    @foreach ($status as $s)
                                        <option value="{{$s}}" "{{ $order->status == $status ? 'selected' : ''  }}" >{{$s}}</option>                                    
                                    @endforeach

                                </select>
                            </div>

                            <label for="" class="form-label my-0">Pay Status:</label>
                            <div class="input-group">
                                <select name="paid" id="" class="form-control">
                                    <option value="1" {{ $order->paid == '1' ? 'selected' : '' }}>Paid</option>
                                    <option value="0" {{ $order->paid == '0' ? 'selected' : '' }}>Unpaid</option>
                                </select>
                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Confirm Order</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    @endforeach
    {{-- END --}}


    {{-- Success modal --}}


    <div class="modal fade" id="success_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Order Status</h1>
                </div>
                <div class="modal-body">
                    <p class="fs-7 text-success">
                        {{ session('success') }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>



    {{-- END Success Modal --}}




    {{-- Create Modal --}}

    <div class="modal fade" id="create_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" >Create Order</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add_order') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Client Name</label>
                                <div class="input-group justify-content-center align-items-center">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Weigth</label>
                                <div class="input-group justify-content-center align-items-center">
                                    <input type="number" class="form-control" id="weight" oninput="auto_val()" name="weight">
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label">Payable</label>
                                <div class="input-group justify-content-center align-items-center">
                                    <input type="number" step="0.00001" class="form-control" id="payable" name="payable">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="form-label">Contact No.</label>
                            <div class="input-group justify-content-center align-items-center">
                                <span class="input-group-text " >+63</span>
                                <input type="number" class="form-control" name="contactno" placeholder="9123456789">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group justify-content-start align-items-center mt-3">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>                

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    {{-- END Create Modal --}}

        <script>

            function auto_val() {

                let val = parseInt(document.getElementById('weight').value);
                console.log(val);
                document.getElementById('payable').value = (val * 40);

            }


            window.onload = function () {
                @if (session('success'))

                    var myModal = new bootstrap.Modal(document.getElementById('success_modal'));
                    myModal.show();
                @endif
                @foreach ($orders as $index => $order)
                    document.getElementById('row_{{ $order->order_id }}').addEventListener('click', function (event) {
                        var myModal = new bootstrap.Modal(document.getElementById('order_modal_{{ $order->order_id }}'));
                        myModal.show();
                    });
                @endforeach

            };


        </script>


   
    

</x-basedashboard>