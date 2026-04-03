
<?php $__env->startSection('content'); ?>
  <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Draft Invoices')); ?>

            </h2>
            <a href="<?php echo e(route('invoicing.index')); ?>"
               class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Create New Invoice
            </a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Search and Filters -->
                    <div class="mb-6">
                        <div class="flex flex-col sm:flex-row gap-4 items-center justify-between">
                            <div class="flex-1 max-w-lg">
                                <form method="GET" action="<?php echo e(route('drafts.index')); ?>" class="flex">
                                    <div class="relative flex-1">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text"
                                               name="search"
                                               value="<?php echo e($search); ?>"
                                               placeholder="Search drafts by title, buyer name, NTN, or reference..."
                                               class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-l-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                    <button type="submit"
                                            class="inline-flex items-center px-4 py-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50 text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <?php if($search): ?>
                                <div class="text-sm text-gray-600">
                                    <?php echo e($drafts->total()); ?> result(s) for "<?php echo e($search); ?>"
                                    <a href="<?php echo e(route('draft-invoices.index')); ?>" class="ml-2 text-blue-600 hover:text-blue-800">Clear</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if($drafts->count() > 0): ?>
                        <!-- Drafts Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <?php $__currentLoopData = $drafts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $draft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                                    <!-- Draft Header -->
                                    <div class="p-4 border-b border-gray-100">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1">
                                                <h3 class="text-lg font-medium text-gray-900 truncate" title="<?php echo e($draft->generateTitle()); ?>">
                                                    <?php echo e($draft->generateTitle()); ?>

                                                </h3>
                                                <p class="text-sm text-gray-500 mt-1">
                                                    <?php echo e($draft->summary); ?>

                                                </p>
                                            </div>
                                            <div class="ml-2 flex-shrink-0">
                                                <div class="flex items-center">
                                                    <!-- Status indicator -->
                                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                        Draft
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Draft Details -->
                                    <div class="p-4">
                                        <div class="space-y-2">
                                            <?php if($draft->buyer_business_name): ?>
                                                <div class="flex items-center text-sm">
                                                    <svg class="w-4 h-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="text-gray-600"><?php echo e($draft->buyer_business_name); ?></span>
                                                </div>
                                            <?php endif; ?>

                                            <?php if($draft->invoice_date): ?>
                                                <div class="flex items-center text-sm">
                                                    <svg class="w-4 h-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="text-gray-600"><?php echo e($draft->invoice_date->format('M d, Y')); ?></span>
                                                </div>
                                            <?php endif; ?>

                                            <?php if($draft->items_count > 0): ?>
                                                <div class="flex items-center text-sm">
                                                    <svg class="w-4 h-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="text-gray-600"><?php echo e($draft->items_count); ?> item(s)</span>
                                                </div>
                                            <?php endif; ?>

                                            <div class="flex items-center text-sm">
                                                <svg class="w-4 h-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="text-gray-600">Modified <?php echo e($draft->formatted_last_modified_at); ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Draft Actions -->
                                    <div class="px-4 py-3 bg-gray-50 border-t border-gray-100 rounded-b-lg">
                                        <div class="flex items-center justify-between">
                                            <div class="flex space-x-2">
                                                <a href="<?php echo e(route('drafts.edit', $draft)); ?>"
                                                   class="inline-flex items-center px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                    Edit
                                                </a>
                                                <a href="<?php echo e(route('getinkDetails', $draft)); ?>"
                                                   class="inline-flex items-center px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                    View
                                                </a>
                                            </div>
                                            <div class="flex space-x-2">
                                                <button type="button"
                                                        onclick="deleteDraft(<?php echo e($draft->id); ?>, '<?php echo e(addslashes($draft->generateTitle())); ?>')"
                                                        class="inline-flex items-center px-3 py-1 border border-red-300 rounded-md text-sm font-medium text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" clip-rule="evenodd" />
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 012 0v6a1 1 0 11-2 0V7zm4 0a1 1 0 012 0v6a1 1 0 11-2 0V7z" clip-rule="evenodd" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-8">
                            <?php echo e($drafts->appends(request()->query())->links()); ?>

                        </div>

                    <?php else: ?>
                        <!-- Empty State -->
                        <div class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No draft invoices</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                <?php if($search): ?>
                                    No drafts found matching "<?php echo e($search); ?>".
                                <?php else: ?>
                                    Get started by creating a new invoice.
                                <?php endif; ?>
                            </p>
                            <div class="mt-6">
                                <a href="<?php echo e(route('invoicing.index')); ?>"
                                   class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                    Create Your First Invoice
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Messages -->
    <div id="statusMessages" class="fixed top-4 right-4 z-50 space-y-2"></div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mt-2">Delete Draft Invoice</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500">
                        Are you sure you want to delete "<span id="deleteDraftTitle"></span>"? This action cannot be undone.
                    </p>
                </div>
                <div class="flex items-center justify-center gap-4 mt-4">
                    <button id="cancelDelete" type="button"
                            class="px-4 py-2 bg-gray-300 text-gray-800 text-base font-medium rounded-md shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        Cancel
                    </button>
                    <button id="confirmDelete" type="button"
                            class="px-4 py-2 bg-red-600 text-white text-base font-medium rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const API_BASE = '<?php echo e(url('/')); ?>';
        const CSRF_TOKEN = '<?php echo e(csrf_token()); ?>';

        let draftToDelete = null;

        function deleteDraft(draftId, title) {
            draftToDelete = draftId;
            document.getElementById('deleteDraftTitle').textContent = title;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        document.getElementById('cancelDelete').addEventListener('click', function() {
            document.getElementById('deleteModal').classList.add('hidden');
            draftToDelete = null;
        });

        document.getElementById('confirmDelete').addEventListener('click', function() {
            if (draftToDelete) {
                fetch(`${API_BASE}/premiertax/draftinvoices/${draftToDelete}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF_TOKEN,
                        'Accept': 'application/json'
                    }
                    })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showMessage('Draft invoice deleted successfully', 'success');
                        
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else {
                        showMessage(data.message || 'Failed to delete draft invoice', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showMessage('An error occurred while deleting the draft invoice', 'error');
                })
                .finally(() => {
                    document.getElementById('deleteModal').classList.add('hidden');
                    draftToDelete = null;
                });
            }
        });

        function showMessage(message, type = 'info') {
            const container = document.getElementById('statusMessages');
            const messageDiv = document.createElement('div');

            const bgColor = type === 'success' ? 'bg-green-50 border-green-200 text-green-800' :
                           type === 'error' ? 'bg-red-50 border-red-200 text-red-800' :
                           'bg-blue-50 border-blue-200 text-blue-800';

            messageDiv.className = `border px-4 py-3 rounded-md ${bgColor} shadow-md`;
            messageDiv.innerHTML = `
                <div class="flex items-center justify-between">
                    <span>${message}</span>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-2 text-current opacity-70 hover:opacity-100">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            `;

            container.appendChild(messageDiv);

            // Auto-remove after 5 seconds
            setTimeout(() => {
                if (messageDiv.parentElement) {
                    messageDiv.remove();
                }
            }, 5000);
        }

        // Close modal when clicking outside
        document.getElementById('deleteModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
                draftToDelete = null;
            }
        });
    </script>
<?php $__env->stopSection(); ?>
   


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/erplive/public_html/premiertax/resources/views/draftinvoicing/index.blade.php ENDPATH**/ ?>