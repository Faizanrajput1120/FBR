@extends('layouts.app')
@section('content')
  <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Draft Invoice') }}: {{ $draftInvoice->generateTitle() }}
            </h2>
            <div class="flex items-center space-x-4">
                <a href="{{ route('drafts.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 active:bg-gray-600 disabled:opacity-25 transition">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Back to Drafts
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Invoice Form -->
                    <form id="invoiceForm" method="POST" action="{{ route('drafts.update', $draftInvoice) }}" class="space-y-8">
                        @csrf
                        @method('PUT')

                        <!-- Draft Title Section -->
                        <div class="bg-blue-50 rounded-lg p-4">
                            <div class="flex items-center mb-4">
                                <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                <h2 class="text-lg font-semibold text-gray-900">Draft Information</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Draft Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter a title for this draft" value="{{ $draftInvoice->title ?: $draftInvoice->generateTitle() }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                                    <textarea id="notes" name="notes" placeholder="Add any notes about this draft" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ $draftInvoice->notes }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Seller Information -->
                        <div class="bg-gray-50 rounded-lg">
                            <div class="seller-accordion-header cursor-pointer p-6 flex items-center justify-between hover:bg-gray-100 transition-colors duration-200" onclick="toggleSellerAccordion()">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm0 2h12v8H4V6z" clip-rule="evenodd" />
                                    </svg>
                                    <h2 class="text-lg font-semibold text-gray-900">Seller Information</h2>
                                </div>
                                <svg id="sellerAccordionIcon" class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div id="sellerAccordionContent" class="hidden px-6 pb-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="sellerNTNCNIC" class="block text-sm font-medium text-gray-700 mb-1">CNIC/NTN</label>
                                        <input type="text" id="sellerNTNCNIC" name="sellerNTNCNIC" placeholder="0000000000000" value="{{ $draftInvoice->seller_ntn_cnic ?: ($user->cinc_ntn ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="sellerBusinessName" class="block text-sm font-medium text-gray-700 mb-1">Business Name</label>
                                        <input type="text" id="sellerBusinessName" name="sellerBusinessName" placeholder="Your Business Name" value="{{ $draftInvoice->seller_business_name ?: ($user->business_name ?? $user->name) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="sellerProvince" class="block text-sm font-medium text-gray-700 mb-1">Province</label>
                                        <select id="sellerProvince" name="sellerProvince" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 province-select">
                                            <option value="">Select Province</option>
                                            @if($provinces)
                                                @foreach($provinces as $province)
                                                    <option value="{{ $province['stateProvinceCode'] }}"
                                                        {{ ($draftInvoice->seller_province == $province['stateProvinceCode'] || ($user->province == $province['stateProvinceCode'] && !$draftInvoice->seller_province)) ? 'selected' : '' }}>
                                                        {{ $province['stateProvinceDesc'] }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="md:col-span-2 mb-4">
                                        <label for="sellerAddress" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                        <textarea id="sellerAddress" name="sellerAddress" placeholder="Seller Address" required rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ $draftInvoice->seller_address ?: ($user->address ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Information -->
                        <div class="bg-gray-50 p-2 rounded-lg">
                            <div class="flex items-center mb-4">
                                <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                                <h2 class="text-lg font-semibold text-gray-900">Invoice Information</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div>
                                    <label for="invoiceType" class="block text-sm font-medium text-gray-700 mb-1">Invoice Type</label>
                                    <select id="invoiceType" name="invoiceType" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 invoice-type-select">
                                        <option value="">Loading invoice types...</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="invoiceDate" class="block text-sm font-medium text-gray-700 mb-1">Invoice Date</label>
                                    <input type="date" id="invoiceDate" name="invoiceDate" value="{{ $draftInvoice->invoice_date ? $draftInvoice->invoice_date->format('Y-m-d') : '' }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="invoiceRefNo" class="block text-sm font-medium text-gray-700 mb-1">Invoice Reference No.</label>
                                    <input type="text" id="invoiceRefNo" name="invoiceRefNo" placeholder="Enter reference number" value="{{ $draftInvoice->invoice_ref_no }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                @if($user->use_sandbox)
                                <div>
                                    <label for="scenarioId" class="block text-sm font-medium text-gray-700 mb-1">Scenario ID</label>
                                    <input type="text" id="scenarioId" name="scenarioId" value="{{ $draftInvoice->scenario_id ?: 'SN000' }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Buyer Information -->
                        <div class="bg-gray-50 p-2 rounded-lg">
                            <div class="flex items-center mb-4">
                                <svg class="w-5 h-5 text-purple-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <h2 class="text-lg font-semibold text-gray-900">Buyer Information</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div class="relative">
                                    <label for="buyerNTNCNIC" class="block text-sm font-medium text-gray-700 mb-1">NTN/CNIC</label>
                                    <input type="text" id="buyerNTNCNIC" name="buyerNTNCNIC" placeholder="0000000000000" value="{{ $draftInvoice->buyer_ntn_cnic }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" autocomplete="off">

                                    <!-- Autocomplete suggestions dropdown -->
                                    <div id="buyerNTNAutocomplete" class="absolute z-50 w-full bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-y-auto hidden">
                                        <div class="p-2 text-sm text-gray-500 text-center">
                                            Start typing to search buyers...
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="buyerBusinessName" class="block text-sm font-medium text-gray-700 mb-1">Business Name</label>
                                    <input type="text" id="buyerBusinessName" name="buyerBusinessName" placeholder="Buyer Business Name" value="{{ $draftInvoice->buyer_business_name }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="buyerProvince" class="block text-sm font-medium text-gray-700 mb-1">Province</label>
                                    <select id="buyerProvince" name="buyerProvince" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 province-select">
                                        <option value="">Select Province</option>
                                        @if($provinces)
                                            @foreach($provinces as $province)
                                                <option value="{{ $province['stateProvinceCode'] }}"
                                                    {{ $draftInvoice->buyer_province == $province['stateProvinceCode'] ? 'selected' : '' }}>
                                                    {{ $province['stateProvinceDesc'] }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div>
                                    <label for="buyerRegistrationType" class="block text-sm font-medium text-gray-700 mb-1">
                                        Registration Type
                                    </label>
                                    <select id="buyerRegistrationType" name="buyerRegistrationType" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Select Registration Type</option>
                                        <option value="Unregistered" {{ $draftInvoice->buyer_registration_type == 'Unregistered' ? 'selected' : '' }}>Unregistered</option>
                                        <option value="Registered" {{ $draftInvoice->buyer_registration_type == 'Registered' ? 'selected' : '' }}>Registered</option>
                                    </select>
                                </div>
                                <div class="md:col-span-4">
                                    <label for="buyerAddress" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                    <textarea id="buyerAddress" name="buyerAddress" placeholder="Buyer Address" required rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 !h-[50px]">{{ $draftInvoice->buyer_address }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Items Section -->
                        <div class="bg-gray-50 p-2 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-indigo-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <h2 class="text-lg font-semibold text-gray-900">Invoice Items</h2>
                                </div>
                                <div class="flex flex-col items-end">
                                    <button type="button" id="addItemBtn" disabled class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition opacity-50 cursor-not-allowed" title="Please select buyer province and registration type first">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                        </svg>
                                        Add Item
                                    </button>
                                    <div id="addItemRequirement" class="mt-1 text-xs text-red-600">
                                        Please select buyer province and registration type first
                                        <button type="button" onclick="validateBuyerRequirements()" class="ml-2 text-blue-600 underline hover:text-blue-800">
                                            Check now
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Items Table -->
                            <div class="overflow-x-auto">
                                <table id="itemsTable" class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Description</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">HS Code</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (%)</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Value Sales Excluding ST</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sales Tax</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="itemsTableBody" class="bg-white divide-y divide-gray-200">
                                        <tr id="noItemsRow" class="hidden">
                                            <td colspan="8" class="px-4 py-8 text-center text-gray-500">
                                                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2 2v-5m16 0h-6a2 2 0 00-2 2v3a2 2 0 002 2h6a2 2 0 002-2v-3a2 2 0 00-2-2z" />
                                                </svg>
                                                No items added yet. Click "Add Item" to get started.
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot id="itemsTableFooter" class="bg-gray-100 border-t-2 border-gray-300 hidden">
                                        <tr class="font-semibold text-gray-900">
                                            <td class="px-4 py-3 text-sm font-bold">Total</td>
                                            <td class="px-4 py-3 text-sm text-center">-</td>
                                            <td class="px-4 py-3 text-sm text-center">-</td>
                                            <td class="px-4 py-3 text-sm font-bold" id="totalQuantity">0</td>
                                            <td class="px-4 py-3 text-sm text-center">-</td>
                                            <td class="px-4 py-3 text-sm font-bold" id="totalValueSales">0.00</td>
                                            <td class="px-4 py-3 text-sm font-bold" id="totalSalesTax">0.00</td>
                                            <td class="px-4 py-3 text-sm text-center" id="overall">-</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                                 <div>
                            <table>
                                <tr>
                                    <td>
                                        Transportation Charges
                                    </td>
                                    <td>
                                        <input name="furtherexpense" value={{$draftInvoice->expense_col??0}} id='furthertaxexpense'>
                                    </td>
                                   
                                    
                                </tr>
                            </table>
                        </div>
                            <!-- Hidden container for form inputs -->
                            <div id="hiddenItemsContainer" style="display: none;">
                                <!-- Form inputs will be generated here for submission -->
                            </div>
                        </div>

                        <!-- Submit Section -->
                        <div class="flex justify-end space-x-4">
                            <button type="button" id="clearBtn" class="inline-flex items-center px-6 py-3 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 active:bg-gray-600 disabled:opacity-25 transition">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                </svg>
                                Clear
                            </button>
                            <button type="button" id="validateBtn" class="!hidden inline-flex items-center px-6 py-3 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring focus:ring-yellow-200 active:bg-yellow-600 disabled:opacity-25 transition">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Validate Invoice
                            </button>
                            <button type="button" id="saveDraftBtn" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6a1 1 0 10-2 0v5.586l-1.293-1.293z" />
                                    <path d="M5 3.5A1.5 1.5 0 016.5 2h7A1.5 1.5 0 0115 3.5v.5a1 1 0 002 0v-.5A3.5 3.5 0 0013.5 0h-7A3.5 3.5 0 003 3.5v.5a1 1 0 102 0v-.5z" />
                                </svg>
                                Update Draft
                            </button>
                            <button type="button" id="submitBtn" class="inline-flex items-center px-6 py-3 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 1.414L10.586 9.5 9.293 8.207a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 00-1.414-1.414L11.414 9.5z" clip-rule="evenodd" />
                                </svg>
                                Generate Invoice
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Messages -->
    <div id="statusMessages" class="fixed top-4 right-4 z-50 space-y-2"></div>

    <!-- Add Item Modal - Complete version from main invoicing page -->
    <div id="addItemModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-8 mx-auto p-5 border w-11/12 max-w-4xl shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <!-- Modal Header -->
                <div class="flex items-center justify-between pb-4 border-b">
                    <h3 class="text-lg font-medium text-gray-900">Add Invoice Item</h3>
                    <button type="button" id="closeModalBtn" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="mt-6">
                    <form id="itemForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Sale Type <span class="text-red-500">*</span></label>
                                <select id="modalSaleType" name="saleType" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm sale-type-select">
                                    <option value="">Select Sale Type</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">HS Code <span class="text-red-500">*</span></label>
                                <select id="modalHsCode" name="hsCode" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm hs-code-select">
                                    <option value="">Select HS Code</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Product Description <span class="text-red-500">*</span></label>
                                <input type="text" id="modalProductDescription" name="productDescription" placeholder="Enter product description" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Rate (%) <span class="text-red-500">*</span>
                                    <span class="rate-loader hidden ml-2 text-blue-600">Loading...</span>
                                </label>
                                <select id="modalRate" name="rate" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm rate-select">
                                    <option value="">Select Rate</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Unit of Measure <span class="text-red-500">*</span>
                                    <span class="text-xs text-gray-500">(Select HS Code first)</span>
                                </label>
                                <select id="modalUoM" name="uoM" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm uom-select">
                                    <option value="">Select Unit of Measure</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Quantity <span class="text-red-500">*</span></label>
                                <input type="number" id="modalQuantity" name="quantity" placeholder="0" min="0" step="any" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Rate <span class="text-red-500">*</span></label>
                                <input type="number" id="modalRateValues" name="rateValues" placeholder="0" min="0" step="any" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Total Values <span class="text-red-500">*</span></label>
                                <input type="number" id="modalTotalValues" name="totalValues" placeholder="0" min="0" step="any" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Value Sales Excluding ST <span class="text-red-500">*</span></label>
                                <input type="number" id="modalValueSalesExcludingST" name="valueSalesExcludingST" placeholder="0" min="0" step="any" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Sales Tax Applicable</label>
                                <input type="number" id="modalSalesTaxApplicable" name="salesTaxApplicable" placeholder="Auto-calculated" min="0" step="any" readonly class="mt-1 block w-full rounded-md border-gray-300 bg-gray-50 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm sales-tax-field">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Fixed Notified Value/Retail Price</label>
                                <input type="number" id="modalFixedNotifiedValueOrRetailPrice" name="fixedNotifiedValueOrRetailPrice" placeholder="0" min="0" step="any" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Sales Tax Withheld at Source</label>
                                <input type="number" id="modalSalesTaxWithheldAtSource" name="salesTaxWithheldAtSource" placeholder="0" min="0" step="any" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Extra Tax</label>
                                <input type="text" id="modalExtraTax" name="extraTax" placeholder="Enter extra tax details" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Further Tax</label>
                                <input type="number" id="modalFurtherTax" name="furtherTax" placeholder="0" min="0" step="any" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    SRO Schedule No.
                                    <span class="text-red-500 hidden sro-schedule-required">*</span>
                                </label>
                                <select id="modalSroScheduleNo" name="sroScheduleNo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm sro-schedule-select">
                                    <option value="">Select SRO Schedule</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">FED Payable</label>
                                <input type="number" id="modalFedPayable" name="fedPayable" placeholder="0" min="0" step="any" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Discount</label>
                                <input type="number" id="modalDiscount" name="discount" placeholder="0" min="0" step="any" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    SRO Item Serial No.
                                    <span class="text-red-500 hidden sro-item-required">*</span>
                                </label>
                                <select id="modalSroItemSerialNo" name="sroItemSerialNo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm sro-item-select">
                                    <option value="">Select SRO Item</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="flex items-center justify-end pt-6 border-t space-x-3">
                    <button type="button" id="cancelModalBtn" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 active:bg-gray-600 disabled:opacity-25 transition">
                        Cancel
                    </button>
                    <button type="button" id="addItemFromModalBtn" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Add Item
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Configuration
        const API_BASE = '{{ url('/') }}';
        const CSRF_TOKEN = '{{ csrf_token() }}';
        const DRAFT_ID = {{ $draftInvoice->id }};
        console.log(DRAFT_ID)
        const IS_EDIT_MODE = true;
    </script>

    <script>
        // Pass data from backend to JavaScript
        window.appData = {
            provinces: @json($provinces ?? []),
            hsCodes: @json($hsCodes ?? []),
            uoMs: @json($uoMs ?? []),
            transactionTypes: @json($transactionTypes ?? []),
            user: {
                cinc_ntn: @json($user->cinc_ntn ?? ''),
                business_name: @json($user->business_name ?? $user->name ?? ''),
                province: @json($user->province ?? ''),
                address: @json($user->address ?? ''),
                use_sandbox: @json($user->use_sandbox ?? true)
            },
            @php
    $items = $draftInvoice->items;

    if (!is_array($items)) {
        $items = json_decode($items ?? '[]', true);
    }
@endphp


            draftData:  @json($items)

           
        };
    </script>

    <!-- Include the main invoicing page's JavaScript functionality -->
        <script>
        // All the variables and functions from the main invoicing page
        let itemCounter = 0;
        let editingItemIndex = -1;
        let provinces = window.appData.provinces;
        let hsCodes = window.appData.hsCodes;
        let uoMs = window.appData.uoMs;
        let transactionTypes = window.appData.transactionTypes;
        let userProfile = window.appData.user;
        let documentTypes = [];
        let itemsData = [];
        // Global storage for SRO data
        let sroSchedules = new Map();
        let sroItems = new Map();

        // Load default document types as fallback
        function loadDefaultDocumentTypes() {
            documentTypes = [
                { docTypeId: "Sale Invoice", docDescription: "Sale Invoice" },
                { docTypeId: "Debit Note", docDescription: "Debit Note" },
                { docTypeId: "Credit Note", docDescription: "Credit Note" },
                { docTypeId: "Purchase Invoice", docDescription: "Purchase Invoice" }
            ];

            populateDocumentTypeSelects();
            console.log('Document Types loaded from fallback:', documentTypes.length, 'items');
        }

        // Populate document type selects with HTML options
        function populateDocumentTypeSelects() {
            if (documentTypes && Array.isArray(documentTypes)) {
                // Update all document type selects
                $('.invoice-type-select').each(function() {
                    const select = this;
                    select.innerHTML = '<option value="">Select Invoice Type</option>';

                    documentTypes.forEach(type => {
                        const typeId = type.docTypeId;
                        const typeDesc = type.docDescription;

                        if (typeId && typeDesc) {
                            const option = document.createElement('option');
                            option.value = typeId;
                            option.textContent = typeDesc;
                            select.appendChild(option);
                        }
                    });
                });
                console.log('Document Types populated:', documentTypes.length, 'items');
            }
        }

        // Helper function to find province code by name (for backwards compatibility)
        function findProvinceCodeByName(provinceName) {
            if (!provinceName || !provinces) return provinceName;

            // If it's already a code (number), return it
            if (!isNaN(provinceName)) return provinceName;

            // Find province by name (case insensitive)
            const province = provinces.find(p =>
                p.stateProvinceDesc &&
                p.stateProvinceDesc.toLowerCase() === provinceName.toLowerCase()
            );

            return province ? province.stateProvinceCode : provinceName;
        }

        // Load and populate Document Types (Invoice Types) from FBR API
        async function loadAndPopulateDocumentTypes() {
            try {
                console.log('Loading Document Types from FBR API...');
                const response = await fetch(`${API_BASE}/premiertax/api/fbr/doctypecode`, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    }
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const result = await response.json();
                console.log('Document Types API response:', result);

                if (result.success && result.data && Array.isArray(result.data)) {
                    documentTypes = result.data;
                    populateDocumentTypeSelects();

                    // Re-initialize Select2 for document type selects after loading data
                    $('.invoice-type-select').each(function() {
                        // Only destroy if Select2 is already initialized
                        if ($(this).hasClass('select2-hidden-accessible')) {
                            $(this).select2('destroy');
                        }
                        // Initialize Select2
                        $(this).select2({
                            placeholder: 'Select Invoice Type',
                            allowClear: true,
                            width: '100%',
                            dropdownAutoWidth: true
                        });
                    });

                    console.log('Document Types loaded successfully:', documentTypes.length, 'items');
                    return true; // Indicate success
                } else {
                    console.error('Failed to load Document Types - Invalid response:', result);
                    if (result.message) {
                        showMessage('Failed to load Invoice Types: ' + result.message, 'error');
                    }
                    return false;
                }
            } catch (error) {
                console.error('Error loading Document Types:', error);
                showMessage('Error loading Invoice Types from FBR server: ' + error.message, 'error');
                return false;
            }
        }

        // Populate Document Type (Invoice Type) selects with HTML options
        function populateDocumentTypeSelects() {
            if (documentTypes && Array.isArray(documentTypes)) {
                // Update all document type selects
                $('.invoice-type-select').each(function() {
                    const select = this;
                    select.innerHTML = '<option value="">Select Invoice Type</option>';

                    documentTypes.forEach(docType => {
                        const docDescription = docType.docDescription;

                        if (docDescription) {
                            const option = document.createElement('option');
                            // Use docDescription for both value and label as requested
                            option.value = docDescription;
                            option.textContent = docDescription;
                            select.appendChild(option);
                        }
                    });
                });
                console.log('Document Types populated:', documentTypes.length, 'items');
            }
        }



        // Populate province selects with HTML options
        function populateProvinceSelects() {
            if (provinces && Array.isArray(provinces)) {
                // Update all province selects
                $('.province-select').each(function() {
                    const select = this;
                    const currentValue = select.value; // Preserve current selection
                    select.innerHTML = '<option value="">Select Province</option>';

                    provinces.forEach(province => {
                        const provinceCode = province.stateProvinceCode;
                        const provinceDesc = province.stateProvinceDesc;

                        if (provinceCode && provinceDesc) {
                            const option = document.createElement('option');
                            option.value = provinceCode;
                            option.textContent = provinceDesc;
                            if (provinceCode === currentValue) {
                                option.selected = true;
                            }
                            select.appendChild(option);
                        }
                    });
                });
                console.log('Provinces populated:', provinces.length, 'items');
            }
        }

        // Initialize the page with draft data
        document.addEventListener('DOMContentLoaded', function() {
            // Load and populate data first
            populateProvinceSelects();

            // Load the draft items if they exist
            if (window.appData.draftData && window.appData.draftData.length > 0) {
                window.appData.draftData.forEach(item => {
                    addItemToTable(item);
                });
            }

            // Set invoice type if available
            // Wait for document types to load, then set the invoice type
            setTimeout(async () => {
                // Wait for document types to be loaded from API
                await loadAndPopulateDocumentTypes();

                if ('{{ $draftInvoice->invoice_type }}') {
                    const invoiceTypeSelect = document.getElementById('invoiceType');
                    if (invoiceTypeSelect) {
                        invoiceTypeSelect.value = '{{ $draftInvoice->invoice_type }}';
                        console.log('Invoice type pre-selected:', '{{ $draftInvoice->invoice_type }}');
                    }
                }

                // Ensure provinces are selected correctly (using Select2 API)
                if ('{{ $draftInvoice->seller_province }}') {
                    const sellerProvinceValue = findProvinceCodeByName('{{ $draftInvoice->seller_province }}');
                    $('#sellerProvince').val(sellerProvinceValue).trigger('change');
                    console.log('Seller province set to:', sellerProvinceValue);
                }

                if ('{{ $draftInvoice->buyer_province }}') {
                    const buyerProvinceValue = findProvinceCodeByName('{{ $draftInvoice->buyer_province }}');
                    $('#buyerProvince').val(buyerProvinceValue).trigger('change');
                    console.log('Buyer province set to:', buyerProvinceValue);
                }
            }, 1000); // Increased timeout to allow API call to complete

            // Validate buyer requirements on load - after all data is loaded
            setTimeout(() => {
                console.log('Running final validation check...');

                // Force trigger change events to ensure Select2 is in sync
                $('#buyerProvince').trigger('change');
                $('#buyerRegistrationType').trigger('change');

                // Wait a bit more for Select2 to process, then validate
                setTimeout(() => {
                    validateBuyerRequirements();
                }, 200);
            }, 2000); // Increased timeout even more
        });

        // Override the submit function to handle draft saving
        document.getElementById('saveDraftBtn').addEventListener('click', function(e) {
            saveDraft(e);
        });

        // Override the submit function for generating invoice
        document.getElementById('submitBtn').addEventListener('click', function(e) {
            submitDraftAsInvoice(e);
        });

        // Save draft function
        async function saveDraft(e) {
            e.preventDefault();

            const formData = new FormData(document.getElementById('invoiceForm'));
             const data = formDataToObjectWithLabels(formData);

            if (!data) return;

            const apiUrl = `${API_BASE}/premiertax/drafts/${DRAFT_ID}`;

            try {
                showMessage('Saving draft...', 'info');
                document.getElementById('saveDraftBtn').disabled = true;

                const response = await fetch(apiUrl, {
                    method: 'PUT',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': CSRF_TOKEN,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (result.success) {
                    showMessage('Draft saved successfully!', 'success');
                } else {
                    showMessage('Failed to save draft: ' + result.message, 'error');
                }
            } catch (error) {
                console.error('Save error:', error);
                showMessage('Failed to save draft: ' + error.message, 'error');
            } finally {
                document.getElementById('saveDraftBtn').disabled = false;
            }
        }

        // Submit draft as invoice function
        async function submitDraftAsInvoice(e) {
    e.preventDefault();

    const formData = new FormData(document.getElementById('invoiceForm'));

    if (formData.has('_method') && formData.get('_method').toUpperCase() === 'PUT') {
        formData.delete('_method');
    }

    const data = formDataToObjectWithLabels(formData);
    const apiUrl = `${API_BASE}/premiertax/invoicing/submit`;

    console.log('=== SUBMIT INVOICE API CALL ===');
    console.log('API URL:', apiUrl);
    console.log('Raw Form Data:', data);

    try {
        showMessage('Submitting invoice to FBR...', 'info');
        document.getElementById('submitBtn').disabled = true;

        const response = await fetch(apiUrl, {
            method: 'POST', // explicitly send POST
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': CSRF_TOKEN,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (result.success) {
            showMessage('Invoice submitted successfully to FBR!', 'success');
            if (result.data?.invoiceNumber) {
                showMessage('Invoice Number: ' + result.data.invoiceNumber, 'info');
            }
        } else {
            showMessage('Submission failed: ' + result.message, 'error');
            if (result.errors) console.error('Validation errors:', result.errors);
        }
    } catch (error) {
        console.error('Submission error:', error);
        showMessage('Submission failed: ' + error.message, 'error');
    } finally {
        document.getElementById('submitBtn').disabled = false;
    }
}


        // Include all other functions from the main invoicing page
        // (formDataToObject, validateBuyerRequirements, toggleSellerAccordion, etc.)
        // These would be copied from the main page for consistency

        function toggleSellerAccordion() {
            const content = document.getElementById('sellerAccordionContent');
            const icon = document.getElementById('sellerAccordionIcon');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }

        function showMessage(message, type = 'info') {
            const messagesContainer = document.getElementById('statusMessages');
            const messageEl = document.createElement('div');

            let bgColor, textColor, iconSvg;
            switch (type) {
                case 'success':
                    bgColor = 'bg-green-50 border-green-200';
                    textColor = 'text-green-800';
                    iconSvg = '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />';
                    break;
                case 'error':
                    bgColor = 'bg-red-50 border-red-200';
                    textColor = 'text-red-800';
                    iconSvg = '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />';
                    break;
                default:
                    bgColor = 'bg-blue-50 border-blue-200';
                    textColor = 'text-blue-800';
                    iconSvg = '<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />';
            }

            messageEl.className = `border rounded-md p-4 ${bgColor} shadow-lg max-w-md`;
            messageEl.innerHTML = `
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 ${textColor}" viewBox="0 0 20 20" fill="currentColor">
                            ${iconSvg}
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium ${textColor}">
                            ${message}
                        </p>
                    </div>
                    <div class="ml-auto pl-3">
                        <button onclick="this.parentElement.parentElement.remove()" class="${textColor} hover:${textColor.replace('800', '900')}">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            `;

            messagesContainer.appendChild(messageEl);

            setTimeout(() => {
                if (messageEl.parentElement) {
                    messageEl.remove();
                }
            }, 5000);
        }

        // Simplified formDataToObject for draft saving
        function formDataToObject(formData) {
            const obj = {};

            for (let [key, value] of formData.entries()) {
                if (key.startsWith('items[')) {
                    // Handle items data
                    continue; // Items will be handled separately
                } else {
                    obj[key] = value;
                }
            }

            // Get items from the current itemsData array
            obj.items = itemsData;

            return obj;
        }

                // Item management functions
        function addItemToTable(item) {
            if (!item) return;

            itemCounter++;
            const rowId = `item-row-${itemCounter}`;

            // Add to itemsData array
            itemsData.push({
                ...item,
                rowId: rowId,
                index: itemCounter
            });

            // Update table display
            updateItemsTable();
            updateTotals();
        }

        function updateItemsTable() {
            const tableBody = document.getElementById('itemsTableBody');
            const noItemsRow = document.getElementById('noItemsRow');
            const tableFooter = document.getElementById('itemsTableFooter');

            // Clear existing rows except no-items row
            const rows = tableBody.querySelectorAll('tr:not(#noItemsRow)');
            rows.forEach(row => row.remove());

            if (itemsData.length === 0) {
                noItemsRow.classList.remove('hidden');
                tableFooter.classList.add('hidden');
                return;
            }

            noItemsRow.classList.add('hidden');
            tableFooter.classList.remove('hidden');

            // Add rows for each item
            itemsData.forEach((item, index) => {
                const row = document.createElement('tr');
                row.id = `item-row-${index}`;
                row.className = 'border-b border-gray-200 hover:bg-gray-50';

                row.innerHTML = `
                    <td class="px-4 py-3 text-sm text-gray-900">${index + 1}</td>
                    <td class="px-4 py-3 text-sm text-gray-900">${item.productDescription || '-'}</td>
                    <td class="px-4 py-3 text-sm text-gray-900">
                        <div class="text-xs text-gray-600">${item.hsCode || '-'}</div>
                        <div class="text-xs text-gray-500 mt-1">${item.hsCodeText || 'Product description'}</div>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-900">${item.quantity || 0}</td>
                    <td class="px-4 py-3 text-sm text-gray-900">${item.rateValue || 0}%</td>
                    <td class="px-4 py-3 text-sm text-gray-900">${parseFloat(item.valueSalesExcludingST || 0).toFixed(2)}</td>
                    <td class="px-4 py-3 text-sm text-gray-900">${parseFloat(item.salesTaxApplicable || 0).toFixed(2)}</td>
                    <td class="px-4 py-3 text-sm text-gray-900">
                        <div class="flex space-x-2">
                            <button type="button" onclick="editItem(${index})" class="text-blue-600 hover:text-blue-900 text-sm font-medium">Edit</button>
                            <button type="button" onclick="deleteItem(${index})" class="text-red-600 hover:text-red-900 text-sm font-medium">Delete</button>
                        </div>
                    </td>
                `;

                tableBody.appendChild(row);
            });

            // Update hidden form inputs
            updateHiddenFormInputs();
        }

        function updateHiddenFormInputs() {
            const container = document.getElementById('hiddenItemsContainer');
            container.innerHTML = '';

            itemsData.forEach((item, index) => {
                Object.keys(item).forEach(key => {
                    if (key !== 'rowId' && key !== 'index') {
                        const input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = `items[${index}][${key}]`;
                        input.value = item[key] || '';
                        container.appendChild(input);
                    }
                });
            });
        }

        function removeItem(index) {
            if (index >= 0 && index < itemsData.length) {
                itemsData.splice(index, 1);
                updateItemsTable();
                updateTotals();
            }
        }

        // Edit item function - opens modal for editing
        function editItem(index) {
            if (index < 0 || index >= itemsData.length) return;

            // Check if buyer requirements are met before allowing edit
            if (!validateBuyerRequirements()) {
                showMessage('Please select buyer province and registration type before editing items', 'warning');
                return;
            }

            editingItemIndex = index;
            const item = itemsData[index];

            // Open modal
            document.getElementById('addItemModal').classList.remove('hidden');

            // Update modal title
            const modalTitle = document.querySelector('#addItemModal h3');
            if (modalTitle) {
                modalTitle.textContent = 'Edit Invoice Item';
            }

                        // Initialize Select2 for modal fields
            initializeModalSelect2();

            // Wait for all API calls to complete, then populate data
            setTimeout(async () => {
                try {
                    // 1. First populate basic fields (text inputs)
                    ['productDescription', 'quantity', 'totalValues', 'valueSalesExcludingST', 'salesTaxApplicable',
                     'fixedNotifiedValueOrRetailPrice', 'salesTaxWithheldAtSource', 'extraTax', 'furtherTax',
                     'fedPayable', 'discount'].forEach(key => {
                        const element = document.getElementById('modal' + key.charAt(0).toUpperCase() + key.slice(1));
                        if (element && item[key] !== undefined) {
                            element.value = item[key];
                            console.log(`Setting ${key} to:`, item[key]);
                        }
                    });

                    // 2. Populate transaction types and set sale type
                    populateModalSelects();
                    let saleTypeId = null;
                    if (item.saleType) {
                        // Handle both ID and text values for sale type
                        if (transactionTypes && Array.isArray(transactionTypes)) {
                            // Try to find by ID first
                            let foundType = transactionTypes.find(t => t.transactioN_TYPE_ID == item.saleType);
                            // If not found, try to find by description text
                            if (!foundType) {
                                foundType = transactionTypes.find(t => t.transactioN_DESC === item.saleType);
                            }
                            if (foundType) {
                                saleTypeId = foundType.transactioN_TYPE_ID;
                                $('#modalSaleType').val(saleTypeId).trigger('change');
                                console.log('Setting saleType to:', saleTypeId, '(from:', item.saleType, ')');
                            }
                        }
                    }

                    // 3. Wait for rates to load and set rate (requires sale type ID)
                    if (saleTypeId) {
                        const ratesLoaded = await fetchRatesForEdit(saleTypeId);
                        if (item.rate && ratesLoaded.length > 0) {
                            // Handle both JSON string and text values for rate
                            let rateToSet = item.rate;
                            if (typeof item.rate === 'string' && !item.rate.startsWith('{')) {
                                // It's a text like "0%" - try to find matching rate
                                const rateText = item.rate;
                                const rateSelect = document.getElementById('modalRate');
                                for (let option of rateSelect.options) {
                                    if (option.textContent.includes(rateText) || option.textContent === rateText) {
                                        rateToSet = option.value;
                                        break;
                                    }
                                }
                            }
                            $('#modalRate').val(rateToSet).trigger('change');
                            console.log('Setting rate to:', rateToSet, '(from:', item.rate, ')');
                        }
                    }

                    // 4. Set HS Code and wait for UoM to load
                    if (item.hsCode) {
                        // Create an option for the existing HS Code
                        const hsCodeSelect = $('#modalHsCode');
                        // Use hsCodeText if available, otherwise create display text from code
                        const displayText = item.hsCodeText || `${item.hsCode} - Product Description`;
                        const option = new Option(displayText, item.hsCode, true, true);
                        hsCodeSelect.append(option).trigger('change');
                        console.log('Setting HS Code to:', item.hsCode, displayText);

                        // Wait for UoM options to load based on HS Code
                        const uomOptions = await fetchUomByHsCode(item.hsCode);
                        if (item.uoM && uomOptions.length > 0) {
                            // Handle both ID and text values for UoM
                            let uomToSet = item.uoM;
                            if (typeof item.uoM === 'string') {
                                // Try to find UoM by description text if it's not an ID
                                const foundUom = uomOptions.find(uom =>
                                    (uom.uoM_DESC === item.uoM) ||
                                    (uom.uoM_ID == item.uoM)
                                );
                                if (foundUom) {
                                    uomToSet = foundUom.uoM_ID;
                                }
                            }
                            $('#modalUoM').val(uomToSet).trigger('change');
                            console.log('UoM value set for edit:', uomToSet, '(from:', item.uoM, ')');
                        }
                    }

                                        // 5. Handle SRO fields if they exist
                    if (item.sroScheduleNo) {
                        // Handle both ID and text values for SRO Schedule
                        let sroScheduleToSet = item.sroScheduleNo;
                        const sroScheduleSelect = document.getElementById('modalSroScheduleNo');

                        // If it's text, try to find matching option by text content
                        if (typeof item.sroScheduleNo === 'string' && sroScheduleSelect.options.length > 0) {
                            let foundOption = null;
                            for (let option of sroScheduleSelect.options) {
                                if (option.textContent === item.sroScheduleNo ||
                                    option.value === item.sroScheduleNo ||
                                    option.textContent.includes(item.sroScheduleNo)) {
                                    foundOption = option;
                                    break;
                                }
                            }
                            if (foundOption) {
                                sroScheduleToSet = foundOption.value;
                            }
                        }

                        $('#modalSroScheduleNo').val(sroScheduleToSet).trigger('change');
                        console.log('SRO Schedule value set for edit:', sroScheduleToSet, '(from:', item.sroScheduleNo, ')');
                    }

                    if (item.sroItemSerialNo) {
                        // Handle both ID and text values for SRO Item Serial No
                        let sroItemToSet = item.sroItemSerialNo;
                        const sroItemSelect = document.getElementById('modalSroItemSerialNo');

                        // If it's text, try to find matching option by text content
                        if (typeof item.sroItemSerialNo === 'string' && sroItemSelect.options.length > 0) {
                            let foundOption = null;
                            for (let option of sroItemSelect.options) {
                                if (option.textContent === item.sroItemSerialNo ||
                                    option.value === item.sroItemSerialNo ||
                                    option.textContent.includes(item.sroItemSerialNo)) {
                                    foundOption = option;
                                    break;
                                }
                            }
                            if (foundOption) {
                                sroItemToSet = foundOption.value;
                            }
                        }

                        $('#modalSroItemSerialNo').val(sroItemToSet).trigger('change');
                        console.log('SRO Item Serial No. value set for edit:', sroItemToSet, '(from:', item.sroItemSerialNo, ')');
                    }

                    console.log('All item values populated successfully!');

                } catch (error) {
                    console.error('Error populating edit form:', error);
                }
            }, 500);
        }

        // Delete item function - same as removeItem but with confirmation
        function deleteItem(index) {
            if (confirm('Are you sure you want to delete this item?')) {
                removeItem(index);
            }
        }

        function updateTotals() {
            let totalQuantity = 0;
            let totalValueSales = 0;
            let totalSalesTax = 0;

            itemsData.forEach(item => {
                totalQuantity += parseFloat(item.quantity) || 0;
                totalValueSales += parseFloat(item.valueSalesExcludingST) || 0;
                totalSalesTax += parseFloat(item.salesTaxApplicable) || 0;
            });
            total=totalValueSales+totalSalesTax;
            document.getElementById('totalQuantity').textContent = totalQuantity.toFixed(0);
            document.getElementById('totalValueSales').textContent = totalValueSales.toFixed(2);
            document.getElementById('totalSalesTax').textContent = totalSalesTax.toFixed(2);
            document.getElementById('overall').textContent = total.toFixed(2);
        }

        function validateBuyerRequirements() {
            // Get values from both Select2 and regular elements
            const buyerProvince = $('#buyerProvince').val() || document.getElementById('buyerProvince').value;
            const buyerRegistrationType = $('#buyerRegistrationType').val() || document.getElementById('buyerRegistrationType').value;
            const addItemBtn = document.getElementById('addItemBtn');
            const requirementMsg = document.getElementById('addItemRequirement');

            console.log('Validating buyer requirements:', {
                province: buyerProvince,
                registrationType: buyerRegistrationType,
                provinceElement: document.getElementById('buyerProvince').value,
                registrationElement: document.getElementById('buyerRegistrationType').value
            });

            const isValid = buyerProvince && buyerProvince.trim() !== '' &&
                           buyerRegistrationType && buyerRegistrationType.trim() !== '';

            if (isValid) {
                addItemBtn.disabled = false;
                addItemBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                addItemBtn.classList.add('hover:bg-blue-500');
                requirementMsg.classList.add('hidden');
                addItemBtn.title = '';
                console.log('Add Item button enabled');
                return true;
            } else {
                addItemBtn.disabled = true;
                addItemBtn.classList.add('opacity-50', 'cursor-not-allowed');
                addItemBtn.classList.remove('hover:bg-blue-500');
                requirementMsg.classList.remove('hidden');
                addItemBtn.title = 'Please select buyer province and registration type first';
                console.log('Add Item button disabled - Province:', buyerProvince, 'Registration:', buyerRegistrationType);
                return false;
            }
        }

        // Initialize Select2 for modal fields
        function initializeModalSelect2() {
            // Initialize Select2 for modal sale type
            $('#modalSaleType').select2({
                placeholder: 'Select Sale Type',
                allowClear: true,
                width: '100%',
                dropdownParent: $('#addItemModal')
            });

            // Initialize Select2 for modal HS Code with AJAX
            $('#modalHsCode').select2({
                placeholder: 'Search HS Code...',
                allowClear: true,
                width: '100%',
                minimumInputLength: 2,
                dropdownParent: $('#addItemModal'),
                ajax: {
                    delay: 150,
                    transport: function (params, success, failure) {
                        searchHsCodesWithCache(params, success, failure);
                    }
                }
            });

            // Initialize Select2 for modal UoM
            $('#modalUoM').select2({
                placeholder: 'Select Unit of Measure',
                allowClear: true,
                width: '100%',
                dropdownParent: $('#addItemModal')
            });

            // Initialize Select2 for modal rate
            $('#modalRate').select2({
                placeholder: 'Select Rate',
                allowClear: true,
                width: '100%',
                dropdownParent: $('#addItemModal')
            });

            // Initialize Select2 for modal SRO fields
            $('#modalSroScheduleNo').select2({
                placeholder: 'Select SRO Schedule',
                allowClear: true,
                width: '100%',
                dropdownParent: $('#addItemModal')
            });

            $('#modalSroItemSerialNo').select2({
                placeholder: 'Select SRO Item',
                allowClear: true,
                width: '100%',
                dropdownParent: $('#addItemModal')
            });
        }

        // Populate modal selects with data
        function populateModalSelects() {
            // Populate sale types
            const saleTypeSelect = document.getElementById('modalSaleType');
            if (transactionTypes && Array.isArray(transactionTypes)) {
                saleTypeSelect.innerHTML = '<option value="">Select Sale Type</option>';
                transactionTypes.forEach(type => {
                    const typeId = type.transactioN_TYPE_ID;
                    const typeDesc = type.transactioN_DESC;
                    if (typeId && typeDesc) {
                        const option = document.createElement('option');
                        option.value = typeId;
                        option.textContent = typeDesc;
                        saleTypeSelect.appendChild(option);
                    }
                });
            }
        }

        // Get selected text from select element
        function getSelectText(selectId) {
            const select = document.getElementById(selectId);
            if (select && select.selectedIndex >= 0) {
                return select.options[select.selectedIndex].text;
            }
            return '';
        }

        // Simplified HS codes search function for modal
        function searchHsCodesWithCache(params, success, failure) {
            const searchTerm = params.data.term || '';
            const page = params.data.page || 1;

            // Make API request
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `${API_BASE}/premiertax/api/fbr/item-description-codes/search?search=${encodeURIComponent(searchTerm)}&page=${page}&limit=20`);
            xhr.setRequestHeader('Accept', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', CSRF_TOKEN);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    try {
                        const data = JSON.parse(xhr.responseText);
                        if (data.success && data.data) {
                            const result = {
                                results: data.data.map(item => ({
                                    id: item.hS_CODE || item.code,
                                    text: `${item.hS_CODE || item.code} - ${item.description || item.itemDescription}`
                                })),
                                pagination: {
                                    more: data.has_more || false
                                }
                            };
                            success(result);
                        } else {
                            success({ results: [] });
                        }
                    } catch (e) {
                        console.error('Error parsing HS codes response:', e);
                        failure();
                    }
                } else {
                    console.error('HS codes request failed:', xhr.status);
                    failure();
                }
            };

            xhr.onerror = function() {
                console.error('HS codes network error');
                failure();
            };

            xhr.send();
        }

        // Fetch UOM based on HS code
        async function fetchUomByHsCode(hsCode) {
            if (!hsCode) {
                const uomSelect = document.getElementById('modalUoM');
                if (uomSelect) {
                    uomSelect.innerHTML = '<option value="">Select Unit of Measure</option>';
                    $(uomSelect).val('').trigger('change');
                    uomSelect.disabled = true;
                }
                return [];
            }

            try {
                const uomSelect = document.getElementById('modalUoM');
                if (uomSelect) {
                    uomSelect.innerHTML = '<option value="">Loading UOM...</option>';
                    uomSelect.disabled = true;
                }

                const response = await fetch(`${API_BASE}/premiertax/api/fbr/uom-by-hs-code`, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    body: JSON.stringify({
                        hs_code: hsCode
                    })
                });

                const result = await response.json();

                if (result.success && result.data && result.data.length > 0) {
                    // Populate UOM dropdown
                    if (uomSelect) {
                        uomSelect.innerHTML = '<option value="">Select Unit of Measure</option>';
                        result.data.forEach(uom => {
                            const uomId = uom.uoM_ID || uom.id;
                            const uomDesc = uom.uoM_DESC || uom.description;
                            if (uomId && uomDesc) {
                                const option = document.createElement('option');
                                option.value = uomId;
                                option.textContent = uomDesc;
                                uomSelect.appendChild(option);
                            }
                        });
                        uomSelect.disabled = false;

                        // Re-initialize Select2
                        $(uomSelect).select2('destroy').select2({
                            placeholder: 'Select Unit of Measure',
                            allowClear: true,
                            width: '100%',
                            dropdownParent: $('#addItemModal')
                        });
                    }

                    console.log('UOM options loaded for HS Code:', hsCode, result.data.length, 'options');
                    return result.data;
                } else {
                    if (uomSelect) {
                        uomSelect.innerHTML = '<option value="">No UOM available for this HS Code</option>';
                        uomSelect.disabled = true;
                    }
                    console.warn('No UOM found for HS Code:', hsCode);
                    return [];
                }

            } catch (error) {
                console.error('Error fetching UOM for HS Code:', error);
                const uomSelect = document.getElementById('modalUoM');
                if (uomSelect) {
                    uomSelect.innerHTML = '<option value="">Error loading UOM</option>';
                    uomSelect.disabled = true;
                }
                return [];
            }
        }

                // Fetch rates based on sale type and buyer province - using existing API
        async function fetchRatesForEdit(saleType) {
            const buyerProvince = $('#buyerProvince').val();
            const invoiceDate = document.getElementById('invoiceDate').value;
            alert("Working")
            if (!buyerProvince || !invoiceDate || !saleType) {
                console.log('Missing required data for rate fetch:', { buyerProvince, invoiceDate, saleType });
                return [];
            }

            try {
                const rateSelect = document.getElementById('modalRate');
                if (rateSelect) {
                    rateSelect.innerHTML = '<option value="">Loading rates...</option>';
                    rateSelect.disabled = true;
                }

                const response = await fetch(`${API_BASE}/premiertax/api/fbr/sale-type-to-rate`, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    body: JSON.stringify({
                        date: invoiceDate,
                        trans_type_id: parseInt(saleType),
                        origination_supplier: parseInt(buyerProvince)
                    })
                });

                const result = await response.json();

                if (result.success && result.data && result.data.length > 0) {
                    if (rateSelect) {
                        rateSelect.innerHTML = '<option value="">Select Rate</option>';
                        result.data.forEach((rateData) => {
                            const rateValue = rateData.ratE_VALUE || 0;
                            const rateId = rateData.ratE_ID;
                            const rateDesc = rateData.ratE_DESC || '';

                            const option = document.createElement('option');
                            option.value = JSON.stringify({
                                rate_id: rateId,
                                rate_value: rateValue,
                                rate_desc: rateDesc
                            });

                            let displayText = rateDesc && rateDesc.trim() !== '' ? rateDesc : `${rateValue}%`;
                            option.textContent = displayText;
                            option.title = rateDesc || `Rate: ${rateValue}%`;
                            rateSelect.appendChild(option);
                        });

                        rateSelect.disabled = false;

                        // Re-initialize Select2
                        $(rateSelect).select2('destroy').select2({
                            placeholder: 'Select Rate',
                            allowClear: true,
                            width: '100%',
                            dropdownParent: $('#addItemModal')
                        });
                    }

                    console.log('Rates loaded:', result.data.length, 'options');
                    return result.data;
                } else {
                    if (rateSelect) {
                        rateSelect.innerHTML = '<option value="">No rates available</option>';
                        rateSelect.disabled = true;
                    }
                    return [];
                }

            } catch (error) {
                console.error('Error fetching rates:', error);
                const rateSelect = document.getElementById('modalRate');
                if (rateSelect) {
                    rateSelect.innerHTML = '<option value="">Error loading rates</option>';
                    rateSelect.disabled = true;
                }
                return [];
            }
        }

        // Modal functions
        function openAddItemModal() {
            document.getElementById('addItemModal').classList.remove('hidden');
            // Reset editing state
            editingItemIndex = -1;

            // Update modal title
            const modalTitle = document.querySelector('#addItemModal h3');
            if (modalTitle) {
                modalTitle.textContent = 'Add Invoice Item';
            }

            // Clear all form fields
            document.getElementById('itemForm').reset();

            // Reset all Select2 dropdowns to their default state
            const selectIds = [
                'modalSaleType', 'modalHsCode', 'modalUoM', 'modalRate',
                'modalSroScheduleNo', 'modalSroItemSerialNo'
            ];

            selectIds.forEach(selectId => {
                const selectElement = document.getElementById(selectId);
                if (selectElement) {
                    // Clear the select and reset to default option
                    selectElement.innerHTML = '';

                    // Add default option based on select type
                    let defaultOption = '';
                    switch(selectId) {
                        case 'modalSaleType':
                            defaultOption = '<option value="">Select Sale Type</option>';
                            break;
                        case 'modalHsCode':
                            defaultOption = '<option value="">Select HS Code</option>';
                            break;
                        case 'modalUoM':
                            defaultOption = '<option value="">Select Unit of Measure</option>';
                            break;
                        case 'modalRate':
                            defaultOption = '<option value="">Select Rate</option>';
                            break;
                        case 'modalSroScheduleNo':
                            defaultOption = '<option value="">Select SRO Schedule</option>';
                            break;
                        case 'modalSroItemSerialNo':
                            defaultOption = '<option value="">Select SRO Item</option>';
                            break;
                    }
                    selectElement.innerHTML = defaultOption;
                }
            });

            // Initialize Select2 for modal fields
            initializeModalSelect2();

            // Populate modal selects with fresh data
            populateModalSelects();

            console.log('Add Item modal opened with fresh/reset form');
        }

        function closeAddItemModal() {
            document.getElementById('addItemModal').classList.add('hidden');
        }

                        function addItemFromModal() {
            const form = document.getElementById('itemForm');

            // Validate required fields
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // Get form data
            const formData = new FormData(form);
            const itemData = {};

            // Extract form data
            for (let [key, value] of formData.entries()) {
                itemData[key] = value;
            }

            // Get display texts for selects
            itemData.saleTypeText = getSelectText('modalSaleType');
            itemData.hsCodeText = getSelectText('modalHsCode');
            itemData.uoMText = getSelectText('modalUoM');
            itemData.rateText = getSelectText('modalRate');
            itemData.sroScheduleNoText = getSelectText('modalSroScheduleNo');
            itemData.sroItemSerialNoText = getSelectText('modalSroItemSerialNo');

            // Parse rate data to get numeric value
            if (itemData.rate) {
                try {
                    const rateData = JSON.parse(itemData.rate);
                    itemData.rateValue = parseFloat(rateData.rate_value) || 0;
                } catch (e) {
                    itemData.rateValue = 0;
                }
            } else {
                itemData.rateValue = 0;
            }

            if (editingItemIndex >= 0) {
                // Update existing item
                itemsData[editingItemIndex] = itemData;
                editingItemIndex = -1;
                showMessage('Item updated successfully!', 'success');
            } else {
                // Add new item
                itemsData.push(itemData);
                showMessage('Item added successfully!', 'success');
            }

            // Update table display
            updateItemsTable();

            // Update totals
            updateTotals();

            // Close modal
            closeAddItemModal();
        }

        // Add event listeners
        document.getElementById('buyerProvince').addEventListener('change', validateBuyerRequirements);
        document.getElementById('buyerRegistrationType').addEventListener('change', validateBuyerRequirements);
         // Add event listener for Value Sales Excluding ST changes
            // Add event listener for rate*quantity
            $(document).on('input', 'input[name*="[rateValues]"],input[name*="[quantity]"], #modalRateValues,#modalQuantity', function(e) {
           // Calculate sales tax for a specific item
let rateSelecter, quantity,rateTax;

// Check if we're in the modal context
const isModal =
    e.target.closest('#addItemModal') !== null ||
    e.target.id === 'modalRateValues';

if (isModal) {
    rateSelecter = document.getElementById('modalRateValues');
    quantity = document.getElementById('modalQuantity');
  let rateTax = document.getElementById('modalRate');

let rateData = JSON.parse(rateTax.value);
console.log(rateData.rate_id);
console.log(rateData.rate_value);
console.log(rateData.rate_desc);


    // Ensure both exist and have numeric values
    const rater = parseFloat(rateSelecter.value) || 0;
    const qty = parseFloat(quantity.value) || 0;
    const taxter = parseFloat(rateData.rate_value) || 0;
const totalTaxvalue = (rater * taxter) / 100;
    console.log(totalTaxvalue)
    const total = (rater+totalTaxvalue )* qty;
    const totalDM = (rater )* qty;
    
    $('#modalTotalValues').val(total);
    $('#modalValueSalesExcludingST').val(totalDM);
    
    
      
            let rateSelect, valueSalesField, salesTaxField;

   

      
                rateSelect = document.getElementById('modalRate');
                valueSalesField = document.getElementById('modalValueSalesExcludingST');
                valueFurtherField = document.getElementById('modalFurtherTax');
                salesTaxField = document.getElementById('modalSalesTaxApplicable');
       

            if (!rateSelect || !valueSalesField || !salesTaxField) {
                console.warn('Could not find required fields for sales tax calculation');
                return;
            }

            // Extract rate value from the selected option's JSON data
            let rate = 0;
            if (rateSelect.value) {
                try {
                    const rateData = JSON.parse(rateSelect.value);
                    rate = parseFloat(rateData.rate_value) || 0;
                } catch (e) {
                    console.warn('Could not parse rate data:', e);
                    rate = 0;
                }
            }
            const valueSalesFieldtax=parseFloat(valueSalesField.value) || 0;
            const valueSalesFurther = parseFloat(valueSalesField.value) || 0;
  const valueSales = parseFloat(valueSalesField.value) || 0;
            // Calculate: Sales Tax Applicable = (Value Sales Excluding ST * Rate) / 100
            const salesTax = (valueSales * rate) / 100;
 const salesfur = (totalDM * 4) / 100;
 const taxTyper=$('#buyerRegistrationType').val();
              if (taxTyper === 'Unregistered') {
                  valueFurtherField.value=salesfur;
              }
            // Update the sales tax field
            salesTaxField.value = salesTax.toFixed(2);

            // Visual feedback
            if (rate > 0 && valueSales > 0) {
                salesTaxField.classList.remove('bg-gray-50', 'bg-red-50');
                salesTaxField.classList.add('bg-green-50');
                salesTaxField.title = `Calculated: ${valueSales} × ${rate}% = ${salesTax.toFixed(2)}`;
            } else {
                salesTaxField.classList.remove('bg-green-50');
                salesTaxField.classList.add('bg-gray-50');
                salesTaxField.title = 'Enter rate and value sales to calculate';
            }
            
// Parse values as floats to ensure numeric addition
const Ftax = parseFloat($('#modalFurtherTax').val()) || 0;
const saleTaxer = parseFloat($('#modalTotalValues').val()) || 0;
const saleExclTaxer = parseFloat($('#modalValueSalesExcludingST').val()) || 0;

// Calculate the new values
const ftaxincludesaleTaxer = saleTaxer + Ftax;
const ftaxincludesaleExclTaxer = saleExclTaxer + Ftax;

// Update the fields with the calculated values
$('#modalTotalValues').val(ftaxincludesaleTaxer.toFixed(2));
             
            
            
}



        
            });


        // Modal event listeners
        document.getElementById('addItemBtn').addEventListener('click', openAddItemModal);
        document.getElementById('closeModalBtn').addEventListener('click', closeAddItemModal);
        document.getElementById('cancelModalBtn').addEventListener('click', closeAddItemModal);
        document.getElementById('addItemFromModalBtn').addEventListener('click', addItemFromModal);

        // Close modal when clicking outside
        document.getElementById('addItemModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeAddItemModal();
            }
        });
        function formDataToObjectWithLabels(formData) {
    const obj = {};
    const items = {};

    for (let [key, value] of formData.entries()) {
        if (key.startsWith('items[')) {
            const matches = key.match(/items\[(\d+)\]\[([^\]]+)\]/);
            if (matches) {
                const itemIndex = matches[1];
                const fieldName = matches[2];

                if (!items[itemIndex]) items[itemIndex] = {};

                // Convert fields to descriptions
                if (fieldName === 'uoM' && uoMs) {
                    const uom = uoMs.find(u => (u.uoM_ID || u.id) == value);
                    items[itemIndex][fieldName] = uom ? (uom.uoM_DESC || uom.description) : value;
                } else if (fieldName === 'saleType' && transactionTypes) {
                    const saleType = transactionTypes.find(t => t.transactioN_TYPE_ID == value);
                    items[itemIndex][fieldName] = saleType ? saleType.transactioN_DESC : value;
                } else if (fieldName === 'rate' && value) {
                    try {
                        const rateData = JSON.parse(value);
                        items[itemIndex][fieldName] = rateData.rate_desc || (rateData.rate_value + '%');
                    } catch {
                        items[itemIndex][fieldName] = value;
                    }
                } else if (fieldName === 'sroScheduleNo' && sroSchedules.has(String(value))) {
                    items[itemIndex][fieldName] = sroSchedules.get(String(value));
                } else if (fieldName === 'sroItemSerialNo' && sroItems.has(String(value))) {
                    items[itemIndex][fieldName] = sroItems.get(String(value));
                } else {
                    items[itemIndex][fieldName] = value;
                }
            }
        } else {
            // Convert province codes to descriptions
            if (key === 'sellerProvince' && provinces) {
                const province = provinces.find(p => p.stateProvinceCode == value);
                obj[key] = province ? province.stateProvinceDesc : value;
            } else if (key === 'buyerProvince' && provinces) {
                const province = provinces.find(p => p.stateProvinceCode == value);
                obj[key] = province ? province.stateProvinceDesc : value;
            } else {
                obj[key] = value;
            }
        }
    }
    obj.items = Object.values(items);
    return obj;
}
    </script>
@endsection
  

