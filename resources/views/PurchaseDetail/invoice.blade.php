<!DOCTYPE html>
<html>
<head>
    <title>Purchase Invoice #{{ $billNo }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
        
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        
        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 30px;
        }
        
        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .invoice-title {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
            margin: 0;
        }
        
        .invoice-meta {
            text-align: right;
        }
        
        .invoice-number {
            font-size: 18px;
            font-weight: 500;
            color: #7f8c8d;
        }
        
        .invoice-date {
            color: #7f8c8d;
        }
        
        .company-info {
            margin-bottom: 30px;
        }
        
        .company-name {
            font-size: 22px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            margin: 25px 0 15px 0;
            padding-bottom: 8px;
            border-bottom: 2px solid #3498db;
        }
        
        .client-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 30px;
        }
        
        .client-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
        }
        
        .invoice-table thead {
            background-color: #3498db;
            color: white;
        }
        
        .invoice-table th {
            padding: 12px 15px;
            text-align: left;
            font-weight: 500;
        }
        
        .invoice-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }
        
        .invoice-table tr:last-child td {
            border-bottom: none;
        }
        
        .text-right {
            text-align: right;
        }
        
        .total-section {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #eee;
        }
        
        .total-row {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        
        .total-label {
            width: 150px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .total-value {
            width: 150px;
            text-align: right;
            font-weight: 600;
        }
        
        .grand-total {
            font-size: 18px;
            color: #e74c3c;
        }
        
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            text-align: center;
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-print {
            background-color: #3498db;
            color: white;
        }
        
        .btn-print:hover {
            background-color: #2980b9;
        }
        
        .btn-close {
            background-color: #95a5a6;
            color: white;
        }
        
        .btn-close:hover {
            background-color: #7f8c8d;
        }
        
        @media print {
            body {
                background: none;
                padding: 0;
            }
            
            .invoice-container {
                box-shadow: none;
                padding: 0;
            }
            
            .no-print {
                display: none;
            }
            
            .invoice-table {
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <div>
                <h1 class="invoice-title">Purchase Invoice</h1>
                <div class="company-name">Premier Tax</div>
            </div>
            <div class="invoice-meta">
                <div class="invoice-number">Invoice #{{ str_pad($billNo, 6, '0', STR_PAD_LEFT) }}</div>
                <div class="invoice-date">Date: {{ now()->format('Y-m-d') }}</div>
            </div>
        </div>
        
        <div class="client-info">
            <div class="client-name">{{ $client->buyer_name ?? 'N/A' }}</div>
            <div>Address: {{ $client->city ?? '' }}, {{ $client->country ?? '' }}</div>
            <div>Phone: {{ $client->phone_no ?? '' }}</div>
            <div>CNIC: {{ $client->cnic ?? '' }}</div>
        </div>
        
        <h3 class="section-title">Items</h3>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th class="text-right">Amount</th>
                    <th class="text-right">Tax</th>
                    <th class="text-right">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                @php
                    $amount = $sale->rate * $sale->qty;
                    $total = $amount + $sale->stax_amount;
                @endphp
                <tr>
                    <td>{{ $sale->items->item_code ?? 'N/A' }}</td>
                    <td>{{ $sale->qty }}</td>
                    <td>{{ number_format($sale->rate, 2) }}</td>
                    <td class="text-right">{{ number_format($amount, 2) }}</td>
                    <td class="text-right">{{ number_format($sale->stax_amount, 2) }}</td>
                    <td class="text-right">{{ number_format($total, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="total-section">
            <div class="total-row">
                <div class="total-label">Subtotal:</div>
                <div class="total-value">{{ number_format($totalAmount - $sales->sum('stax_amount'), 2) }}</div>
            </div>
            <div class="total-row">
                <div class="total-label">Tax:</div>
                <div class="total-value">{{ number_format($sales->sum('stax_amount'), 2) }}</div>
            </div>
            <div class="total-row grand-total">
                <div class="total-label">Total:</div>
                <div class="total-value">{{ number_format($totalAmount, 2) }}</div>
            </div>
        </div>
        
        <div class="footer">
            Thank you for your business!
        </div>
        
        <div class="action-buttons no-print">
            <button onclick="window.print()" class="btn btn-print">Print Invoice</button>
            <button onclick="window.close()" class="btn btn-close">Close Window</button>
        </div>
    </div>
</body>
</html>