<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Tax Invoice - {{ $invoice->seller_business_name ?? 'N/A' }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }
        body { background: #fff; color: #000; font-size: 11px; line-height: 1.3; padding: 20px; }
        .invoice-box { max-width: 1300px; margin: 0 auto; border: 1px solid #000; padding: 15px; }
        .header-top { text-align: center; margin-bottom: 10px; }
        .header-top h1 { font-size: 18px; font-weight: bold; text-transform: uppercase; }
        .header-top h2 { font-size: 16px; font-weight: bold; text-decoration: underline; margin-top: 2px; }
        .details-section { display: flex; justify-content: space-between; margin-bottom: 8px; border-bottom: 1px solid #000; padding-bottom: 6px; }
        .details-left { width: 60%; }
        .details-right { width: 38%; border-left: 1px solid #000; padding-left: 10px; }
        .detail-row { display: flex; margin-bottom: 2px; }
        .detail-label { font-weight: bold; width: 140px; }
        .detail-value { flex: 1; }
        table { width: 100%; border-collapse: collapse; margin-top: 5px; }
        th, td { border: 1px solid #000; padding: 4px 3px; text-align: center; font-size: 9.5px; vertical-align: middle; }
        th { background: #f0f0f0; font-weight: bold; text-align: center; font-size: 9px; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }
        .total-row td { font-weight: bold; background: #f5f5f5; }
        .footer-text { text-align: center; margin-top: 15px; font-size: 11px; font-weight: bold; font-style: italic; }
        .print-btn { position: fixed; bottom: 20px; right: 20px; padding: 10px 20px; background: #2c3e50; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; z-index: 1000; }
        @media print { body { padding: 0; } .print-btn { display: none; } .invoice-box { border: none; } }
        .sub-header { font-size: 9px; color: #555; }
        .amount-col { font-weight: bold; }
    </style>
</head>
<body>
    <button class="print-btn" onclick="window.print()">Print Invoice</button>

    <div class="invoice-box">
        {{-- Header --}}
        <div class="header-top">
            <h1>M/S {{ $invoice->seller_business_name ?? 'N/A' }}</h1>
            <h2>SALES TAX INVOICE</h2>
        </div>

        {{-- Customer Details --}}
        <div class="details-section">
            <div class="details-left">
                <div class="detail-row">
                    <span class="detail-label">Buyer's Name:</span>
                    <span class="detail-value">{{ $invoice->buyer_business_name ?? '' }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Address:</span>
                    <span class="detail-value">{{ $invoice->buyer_address ?? 'LAHORE-PAKISTAN' }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Sales Tax Reg No:</span>
                    <span class="detail-value">{{ $invoice->buyer_ntn_cnic ?? '' }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">NTN No:</span>
                    <span class="detail-value">{{ $invoice->buyer_ntn_cnic ?? '' }}</span>
                </div>
            </div>
            <div class="details-right">
                <div class="detail-row">
                    <span class="detail-label">Invoice No:</span>
                    <span class="detail-value">{{ $invoice->fbr_invoice_no ?? '0001' }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Invoice Date:</span>
                    <span class="detail-value">{{ \Carbon\Carbon::parse($invoice->invoice_date ?? now())->format('d-M-y') }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Sales Tax Reg No:</span>
                    <span class="detail-value">{{ $invoice->seller_ntn_cnic ?? '' }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">NTN No:</span>
                    <span class="detail-value">{{ $invoice->seller_ntn_cnic ?? '' }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">P-Order No:</span>
                    <span class="detail-value">{{ $invoice->invoice_ref_no ?? '-' }}</span>
                </div>
            </div>
        </div>

        {{-- Items Table --}}
        @php
            $items = is_string($invoice->items) ? json_decode($invoice->items, true) : ($invoice->items ?? []);
            $itemsCollection = collect($items);
            $grandQty = 0;
            $grandRetailExcl = 0;
            $grandRetailTax = 0;
            $grandRetailIncl = 0;
            $grandDiscount = 0;
            $grandTradeExcl = 0;
            $grandTradeTax = 0;
            $grandTradeWithTax = 0;
            $grandFurtherTax = 0;
            $grandAmount = 0;
        @endphp

        <table>
            <thead>
                <tr>
                    <th rowspan="2">Sr.#</th>
                    <th rowspan="2" style="width:18%">Description</th>
                    <th rowspan="2">Qty</th>
                    <th colspan="3">Retail's Price</th>
                    <th colspan="5">Trade's Price</th>
                    <th rowspan="2">Amount (Rs.)</th>
                </tr>
                <tr>
                    <th>Exclusive Value</th>
                    <th>Sales Tax 18%</th>
                    <th>Inclusive Value</th>
                    <th>Discount</th>
                    <th>Discounted Value Excl. GST</th>
                    <th>Sales Tax 18%</th>
                    <th>Value With Sales Tax</th>
                    <th>U/S 236 G/H</th>
                </tr>
            </thead>
            <tbody>
                @foreach($itemsCollection as $index => $item)
                @php
                    $itemArray = is_array($item) ? $item : (array) $item;
                    $qty = floatval($itemArray['quantity'] ?? 0);
                    $rateVal = floatval($itemArray['rateValues'] ?? 0);
                    $fixedNotified = floatval($itemArray['fixedNotifiedValueOrRetailPrice'] ?? 0);
                    
                    $retailExcl = $fixedNotified > 0 ? ($fixedNotified * $qty) : ($rateVal * $qty);
                    $tradeExcl = floatval($itemArray['valueSalesExcludingST'] ?? $retailExcl);
                    $discount = floatval($itemArray['discount'] ?? 0);
                    $salesTax = floatval($itemArray['salesTaxApplicable'] ?? 0);
                    $furtherTax = floatval($itemArray['furtherTax'] ?? 0);
                    $retailIncl = $retailExcl + $salesTax;
                    $tradeWithTax = $tradeExcl + $salesTax;
                    $amount = $tradeExcl + $salesTax + $furtherTax;

                    $grandQty += $qty;
                    $grandRetailExcl += $retailExcl;
                    $grandRetailTax += $salesTax;
                    $grandRetailIncl += $retailIncl;
                    $grandDiscount += $discount;
                    $grandTradeExcl += $tradeExcl;
                    $grandTradeTax += $salesTax;
                    $grandTradeWithTax += $tradeWithTax;
                    $grandFurtherTax += $furtherTax;
                    $grandAmount += $amount;
                @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="text-left">{{ $itemArray['product_description'] ?? $itemArray['productDescription'] ?? '-' }}</td>
                    <td>{{ number_format($qty, 3) }}</td>
                    <td>{{ number_format($retailExcl) }}</td>
                    <td>{{ number_format($salesTax) }}</td>
                    <td>{{ number_format($retailIncl) }}</td>
                    <td>{{ $discount > 0 ? number_format($discount) : '-' }}</td>
                    <td>{{ number_format($tradeExcl) }}</td>
                    <td>{{ number_format($salesTax) }}</td>
                    <td>{{ number_format($tradeWithTax) }}</td>
                    <td>{{ $furtherTax > 0 ? number_format($furtherTax, 2) : '-' }}</td>
                    <td class="amount-col">{{ number_format($amount) }}</td>
                </tr>
                @endforeach

                {{-- Super Series / additional row --}}
                @php
                    $extraAmount = floatval($invoice->expense_col ?? 0);
                @endphp
                @if($extraAmount > 0 && $itemsCollection->count() > 0)
                <tr>
                    <td>{{ $itemsCollection->count() + 1 }}</td>
                    <td class="text-left">Transportation Charges</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="amount-col">{{ number_format($extraAmount) }}</td>
                </tr>
                @php
                    $grandQty += 0;
                    $grandAmount += $extraAmount;
                    $grandTradeWithTax += $extraAmount;
                @endphp
                @endif

                {{-- Total Row --}}
                <tr class="total-row">
                    <td colspan="2" class="text-right">Total Value Exclusive of Sales Tax</td>
                    <td>{{ number_format($grandQty) }}</td>
                    <td>{{ number_format($grandRetailExcl) }}</td>
                    <td>{{ number_format($grandRetailTax) }}</td>
                    <td>{{ number_format($grandRetailIncl) }}</td>
                    <td>{{ number_format($grandDiscount) }}</td>
                    <td>{{ number_format($grandTradeExcl) }}</td>
                    <td>{{ number_format($grandTradeTax) }}</td>
                    <td>{{ number_format($grandTradeWithTax) }}</td>
                    <td>{{ number_format($grandFurtherTax, 2) }}</td>
                    <td>{{ number_format($grandAmount) }}</td>
                </tr>
            </tbody>
        </table>

        {{-- Footer --}}
        <div class="footer-text">
            "It is System Generated Invoice Does Not Need Any Signature or Stamp"
        </div>
    </div>
</body>
</html>
