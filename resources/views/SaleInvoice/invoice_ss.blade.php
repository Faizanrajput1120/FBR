<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Tax Invoice - {{ $invoice->seller_business_name ?? 'SS ENTERPRISES' }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            position: relative;
        }

        /* Header Section */
        .header {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            align-items: flex-start;
            margin-bottom: 25px;
            padding-bottom: 15px;
            gap: 20px;
        }

        .company-info {
            text-align: center;
            grid-column: 1 / -1;
        }

        .company-logo {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
            display: none;
        }

        .company-name {
            font-size: 16px;
            font-weight: 700;
            color: #000;
            margin-bottom: 3px;
            letter-spacing: 0.5px;
        }

        .company-address {
            font-size: 9px;
            color: #555;
            line-height: 1.4;
            margin-bottom: 3px;
        }

        .company-tax {
            font-size: 8px;
            color: #666;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .invoice-title {
            font-size: 13px;
            font-weight: 700;
            color: #000;
            text-align: center;
            letter-spacing: 1px;
        }

        .header-bottom {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            width: 100%;
            font-size: 9px;
            gap: 20px;
        }

        .header-left {
            text-align: left;
        }

        .header-center {
            text-align: center;
        }

        .header-right {
            text-align: right;
        }

        .date-bill {
            text-align: right;
            font-size: 9px;
            line-height: 1.5;
        }

        .date-bill div {
            margin-bottom: 2px;
        }

        /* Info Section */
        .info-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 20px;
            font-size: 9px;
        }

        .info-block {
            border: 1px solid #000;
            padding: 15px;
        }

        .info-block-title {
            font-size: 9px;
            font-weight: 700;
            color: #000;
            margin-bottom: 8px;
            padding-bottom: 5px;
            border-bottom: 1px solid #000;
            letter-spacing: 0.5px;
        }

        .info-row {
            display: grid;
            grid-template-columns: 100px 1fr;
            gap: 10px;
            margin-bottom: 5px;
            line-height: 1.4;
        }

        .info-row label {
            font-weight: 600;
            color: #000;
        }

        .info-row value {
            color: #333;
            word-break: break-word;
        }

        /* Items Table */
        .items-section {
            margin-bottom: 20px;
        }

        .items-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 9px;
            margin-bottom: 15px;
        }

        .items-table thead {
            background: #fff;
            border: 1px solid #000;
        }

        .items-table th {
            padding: 6px 8px;
            text-align: left;
            font-weight: 700;
            color: #000;
            border: 1px solid #000;
            line-height: 1.3;
            font-size: 8px;
        }

        .items-table td {
            padding: 6px 8px;
            border: 1px solid #000;
            text-align: left;
            font-size: 8px;
        }

        .items-table .num-cell {
            text-align: right;
        }

        .items-table tbody tr {
            background: #fff;
        }

        .items-table tbody tr:nth-child(odd) {
            background: #fff;
        }

        .items-table .total-row {
            background: #fff;
            font-weight: 600;
            color: #000;
            border: none;
        }

        .items-table .total-row td {
            border: none;
            padding: 5px 8px;
        }

        /* Bottom Section */
        .bottom-section {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .amount-words {
            border: 1px solid #000;
            padding: 15px;
        }

        .amount-words-label {
            font-size: 9px;
            font-weight: 600;
            color: #000;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .amount-words-value {
            font-size: 9px;
            color: #333;
            line-height: 1.5;
            min-height: 30px;
        }

        .totals-section {
            border: 1px solid #000;
            padding: 15px;
        }

        .total-line {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 15px;
            margin-bottom: 6px;
            font-size: 9px;
            line-height: 1.4;
        }

        .total-line label {
            font-weight: 600;
            color: #000;
        }

        .total-line value {
            font-weight: 600;
            color: #000;
            text-align: right;
        }

        .total-line.grand {
            border-top: 1px solid #000;
            padding-top: 8px;
            margin-top: 8px;
            font-weight: 700;
        }

        /* Footer Section */
        .footer {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 30px;
            font-size: 9px;
            padding-top: 20px;
            border-top: 1px solid #000;
        }

        .signature-area {
            text-align: right;
        }

        .sig-line {
            width: 150px;
            border-top: 1px solid #000;
            margin: 20px 0 3px 0;
            margin-left: auto;
        }

        .sig-text {
            text-align: right;
            font-weight: 600;
            color: #000;
        }

        /* Print Button */
        .print-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            background: #000;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-weight: 600;
            font-size: 12px;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .print-btn:hover {
            background: #333;
        }

        @media print {
            body {
                background: white;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 100%;
                margin: 0;
                padding: 0.35in;
                box-shadow: none;
            }

            .print-btn {
                display: none !important;
            }

            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
        }

        /* Utility Classes */
        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .no-border {
            border: none;
        }
    </style>
</head>

<body>
    <button class="print-btn" onclick="window.print()">Print Invoice</button>

    @php
        // Process items
        $items = is_string($invoice->items) ? json_decode($invoice->items, true) : ($invoice->items ?? []);
        $itemsCollection = collect($items);

        $totalExclTax = 0;
        $totalSalesTax = 0;
        $totalFurtherTax = 0;
        $totalTransport = $invoice->expense_col ?? 0;
        $grandTotal = 0;

        foreach ($itemsCollection as $item) {
            $itemArray = is_array($item) ? $item : (array) $item;
            $itemExcl = floatval($itemArray['valueSalesExcludingST'] ?? 0);
            $itemTotal = floatval($itemArray['totalValues'] ?? 0);
            $furtherTax = floatval($itemArray['furtherTax'] ?? 0);

            $totalExclTax += $itemExcl;
            $totalSalesTax += $itemTotal;
            $totalFurtherTax += $furtherTax;
        }

        $grandTotal = $totalExclTax + $totalSalesTax + $totalTransport + $totalFurtherTax;

        // Number to words conversion
        function numberToWords($num)
        {
            if ($num == 0)
                return "Zero";
            $below20 = [
                "",
                "One",
                "Two",
                "Three",
                "Four",
                "Five",
                "Six",
                "Seven",
                "Eight",
                "Nine",
                "Ten",
                "Eleven",
                "Twelve",
                "Thirteen",
                "Fourteen",
                "Fifteen",
                "Sixteen",
                "Seventeen",
                "Eighteen",
                "Nineteen"
            ];
            $tens = ["", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
            $helper = function ($n) use (&$helper, $below20, $tens) {
                if ($n == 0)
                    return "";
                elseif ($n < 20)
                    return $below20[$n] . " ";
                elseif ($n < 100)
                    return $tens[intval($n / 10)] . " " . $helper($n % 10);
                else
                    return $below20[intval($n / 100)] . " Hundred " . $helper($n % 100);
            };
            $words = "";
            $i = 0;
            $thousands = ["", "Thousand", "Million", "Billion"];
            while ($num > 0) {
                if ($num % 1000 != 0)
                    $words = $helper($num % 1000) . $thousands[$i] . " " . $words;
                $num = intval($num / 1000);
                $i++;
            }
            return trim($words);
        }
    @endphp

    <div class="container">
        <!-- Header -->
        <div class="company-info">
            <div class="company-name">{{ $invoice->seller_business_name ?? 'SS ENTERPRISES' }}</div>
            <div class="company-address">
                {{ $invoice->seller_address ?? 'Godown No. 20, Kot Bhano Shah, Near Sheikhupura Road, Kohlowala, Gujranwala' }}
            </div>
            <div class="company-tax">
                NTN: {{ $invoice->seller_ntn_cnic ?? '9628363-1' }} | STRN:
                {{ $invoice->seller_strn ?? '3277876270368' }}
            </div>
        </div>

        <div class="header">
            <div></div>
            <div style="text-align: center;">
                <div class="invoice-title">SALES TAX INVOICE</div>
            </div>
            <div class="date-bill">
                <div><strong>Date:</strong>
                    {{ \Carbon\Carbon::parse($invoice->invoice_date ?? now())->format('d/m/Y') }}</div>
                <div><strong>Bill:</strong> {{ $invoice->fbr_invoice_no ?? '-' }}</div>
            </div>
        </div>

        <!-- Customer Information Section -->
        <div class="info-section">
            <div class="info-block">
                <div class="info-block-title">CUSTOMER INFO</div>
                <div class="info-row">
                    <label>Name:</label>
                    <value>{{ $invoice->buyer_business_name ?? 'Unregistered Supplies' }}</value>
                </div>
                <div class="info-row">
                    <label>Address:</label>
                    <value>{{ $invoice->buyer_address ?? '-' }}</value>
                </div>
            </div>

            <div class="info-block">
                <div class="info-block-title">CUSTOMER TAX DETAILS</div>
                <div class="info-row">
                    <label>NTN:</label>
                    <value>{{ $invoice->buyer_ntn_cnic ?? '-' }}</value>
                </div>
                <div class="info-row">
                    <label>STRN:</label>
                    <value>{{ $invoice->buyer_strn ?? '-' }}</value>
                </div>
                <div class="info-row">
                    <label>Invoice No:</label>
                    <value>{{ $invoice->fbr_invoice_no ?? '-' }}</value>
                </div>
                <div class="info-row">
                    <label>Date:</label>
                    <value>{{ \Carbon\Carbon::parse($invoice->invoice_date ?? now())->format('d/m/Y') }}</value>
                </div>
            </div>
        </div>

        <!-- Items Table -->
        <div class="items-section">
            <table class="items-table">
                <thead>
                    <tr>
                        <th style="width: 5%;">Sr#</th>
                        <th style="width: 12%;">HS Code</th>
                        <th style="width: 30%;">Item Name</th>
                        <th style="width: 8%;">QTY</th>
                        <th style="width: 10%;">Rate</th>
                        <th style="width: 12%;">Amount Excl. Sales Tax</th>
                        <th style="width: 8%;">Sales Tax %</th>
                        <th style="width: 10%;">Sales Tax</th>
                        <th style="width: 13%;">Amount Incl. Sales Tax</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itemsCollection as $index => $item)
                        @php
                            $itemArray = is_array($item) ? $item : (array) $item;
                            $quantity = floatval($itemArray['quantity'] ?? 0);
                            $rate = floatval($itemArray['rateValues'] ?? 0);
                            $itemExcl = floatval($itemArray['valueSalesExcludingST'] ?? 0);
                            $itemTotal = floatval($itemArray['totalValues'] ?? 0);
                            $salesTax = $itemTotal - $itemExcl;
                            $salesTaxPct = $quantity > 0 && $itemExcl > 0 ? ($salesTax / $itemExcl * 100) : 0;
                        @endphp
                        <tr>
                            <td class="num-cell">{{ $index + 1 }}</td>
                            <td>{{ $itemArray['hsCode'] ?? '-' }}</td>
                            <td>{{ $itemArray['productDescription'] ?? $itemArray['product_description'] ?? '-' }}</td>
                            <td class="num-cell">{{ number_format($quantity, 2) }}</td>
                            <td class="num-cell">{{ number_format($rate, 2) }}</td>
                            <td class="num-cell">{{ number_format($itemExcl, 2) }}</td>
                            <td class="num-cell">{{ number_format($salesTaxPct, 0) }}</td>
                            <td class="num-cell">{{ number_format($salesTax, 2) }}</td>
                            <td class="num-cell">{{ number_format($itemTotal, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Grand Total Section Without Borders -->
            <div style="margin-top: 10px; padding: 0 8px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="border: none;">
                        <td style="border: none; text-align: right; padding: 5px 8px; font-weight: 600; width: 78%;">
                            Total Amount Excl. Sales Tax:</td>
                        <td
                            style="border: none; text-align: right; padding: 5px 8px; font-weight: 600; width: 12%; font-size: 9px;">
                            {{ number_format($totalExclTax, 2) }}
                        </td>
                        <td style="border: none; width: 10%;"></td>
                    </tr>
                    <tr style="border: none;">
                        <td style="border: none; text-align: right; padding: 5px 8px; font-weight: 600;">Total Sales
                            Tax:</td>
                        <td
                            style="border: none; text-align: right; padding: 5px 8px; font-weight: 600; font-size: 9px;">
                            {{ number_format($totalSalesTax, 2) }}
                        </td>
                        <td style="border: none;"></td>
                    </tr>
                    @if($totalTransport > 0)
                        <tr style="border: none;">
                            <td style="border: none; text-align: right; padding: 5px 8px; font-weight: 600;">Transportation
                                Charges:</td>
                            <td
                                style="border: none; text-align: right; padding: 5px 8px; font-weight: 600; font-size: 9px;">
                                {{ number_format($totalTransport, 2) }}
                            </td>
                            <td style="border: none;"></td>
                        </tr>
                    @endif
                    @if($totalFurtherTax > 0)
                        <tr style="border: none;">
                            <td style="border: none; text-align: right; padding: 5px 8px; font-weight: 600;">Further Tax:
                            </td>
                            <td
                                style="border: none; text-align: right; padding: 5px 8px; font-weight: 600; font-size: 9px;">
                                {{ number_format($totalFurtherTax, 2) }}
                            </td>
                            <td style="border: none;"></td>
                        </tr>
                    @endif
                    <tr style="border-top: 2px solid #000;">
                        <td
                            style="border: none; border-top: 2px solid #000; text-align: right; padding: 6px 8px; font-weight: 700; font-size: 10px;">
                            Total Amount Incl. Sales Tax:</td>
                        <td
                            style="border: none; border-top: 2px solid #000; text-align: right; padding: 6px 8px; font-weight: 700; font-size: 10px;">
                            {{ number_format($grandTotal, 2) }}
                        </td>
                        <td style="border: none;"></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- QR Code and FBR Logo Section -->
        <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin: 25px 0;">
            <div style="text-align: center;">
                <div id="qrcode" style="display: inline-block; border: 1px solid #000; padding: 5px;"></div>
            </div>
            @if(file_exists(public_path('fbr.jpg')))
                <img src="{{ asset('fbr.jpg') }}" alt="FBR Logo"
                    style="width: 100px; height: 100px; object-fit: contain; border: 1px solid #000; padding: 5px;">
            @else
                <div
                    style="width: 100px; height: 100px; border: 1px solid #000; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #666;">
                    FBR Logo</div>
            @endif
        </div>

        <!-- Footer -->
        <div class="footer">
            <div style="flex: 1;">
                <span style="color: #666; font-size: 8px;">This is a digitally generated invoice</span>
            </div>
            <div class="signature-area">
                <div class="sig-line"></div>
                <div class="sig-text">Authorized Signature</div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const qrData = '{{ $invoice->fbr_invoice_no ?? "N/A" }}';
            if (qrData && qrData !== 'N/A') {
                new QRCode(document.getElementById('qrcode'), {
                    text: qrData,
                    width: 100,
                    height: 100,
                    colorDark: '#000000',
                    colorLight: '#ffffff'
                });
            }
        });
    </script>
</body>

</html>