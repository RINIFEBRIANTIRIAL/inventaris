<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption>
                Daengweb Invoice App
            </caption>
            <thead>
                <tr>
                    <th colspan="3">Invoice <strong>#{{ $invoice->income }}</strong></th>
                    <th>{{ $invoice->created_at->format('D, d M Y') }}</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Perusahaan: </h4>
                        <p>Daengweb.<br>
                            Jl Sultan Hasanuddin Makassar<br>
                            085343966997<br>
                            support@daengweb.id
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Pelanggan: </h4>
                        <p>{{ $invoice->income->tanggal }}<br>
                        {{ $invoice->income->name }}<br>
                        {{ $invoice->income->quantity}} <br>
                        {{ $invoice->income->price }}<br>
                        {{ $invoice->income->total_price }}<br>
                      
                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>tanggal</th>
                    <th>Nama</th>
                    <th>Volume</th>
                    <th>harga</th>
                    <th>harga satuan</th>
                  
                </tr>
                @foreach ($invoice->detail as $income)
                <tr>
                    <td>{{$income->tanggal}}</td>
                    <td>{{$income->name}}</td>
                    <td>{{$income->quantity}}</td>
                    <td>{{$income->price}}</td>
                    <td>{{$income->total_price}}</td>
                    <td>{{$income->jumlah}}</td>
                    <td>{{$income->supplier}}</td>
                    <!-- <td>{{ $row->product->title }}</td>
                    <td>Rp {{ number_format($row->price) }}</td>
                    <td>{{ $row->qty }}</td>
                    <td>Rp {{ $row->subtotal }}</td> -->
                </tr>
                @endforeach
                <tr>
                    <th colspan="3">name</th>
                    <td>{{ ($invoice->name) }}</td>
                </tr>
                <tr>
                    <th>Volume</th>
                    <td></td>
                    <td>{{($invoice->quantity) }}</td>
                </tr>
                <tr>
                    <th>satuan</th>
                    <td></td>
                    <td>{{($invoice->price) }}</td>
                </tr>
                <tr>
                    <th>harga</th>
                    <td></td>
                    <td>{{($invoice->total_price) }}</td>
                </tr>
               
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
</body>
</html>