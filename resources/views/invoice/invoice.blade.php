<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="row mb-3">
                <label for="invoice_number" class="col-md-4 col-form-label text-md-end">{{ __('Invoice Number')
                    }}</label>

                <div class="col-md-6">
                    <input id="invoice_number" type="text" class="form-control" name="invoice_number" value="{{ $invoice->invoice_number }}" readonly>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row mb-3">
                <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                <div class="col-md-6">
                    <input id="date" type="text" class="form-control" name="date" value="{{ $invoice->date }}" readonly>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row mb-3">
                <label for="customer_id" class="col-md-4 col-form-label text-md-end">{{ __('Customer') }}</label>

                <div class="col-md-6">
                    <input id="date" type="text" class="form-control" name="customer_id" value="{{ $invoice->customer->name }}" readonly>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <th>No</th>
            <th>Material</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
        </thead>
        <tbody id="tbody">
            @foreach ($invoice->details as $detail)
                <tr class="item">
                    <td>
                        <div class="form-group">
                            <input type="text" name="index[]" class="form-control index" value="{{ $loop->iteration }}" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="material[]" class="form-control material" value="{{ $detail->material->name }}" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="quantity[]" class="form-control quantity" value="{{ $detail->qty }}" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="price[]" class="form-control price" value="{{ $detail->price }}" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="total_price[]" class="form-control total_price" value="{{ $detail->total_price }}" readonly>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <td colspan="3">Grand Total</td>
            <td></td>
            <td>
                <div class="form-group">
                    <input id="grand-total" type="text" name="subtotal" class="form-control subtotal" value="{{ $invoice->subtotal }}" readonly>
                </div>
            </td>
            <td></td>
        </tfoot>
    </table>
</body>

</html>