<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7w2Hs17jrUw98QYR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/hello' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BVKxEup6PXg3rY0b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/registration-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.registration-type',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/sale-type-to-rate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.sale-type-to-rate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/sro-schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.sro-schedule',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/sro-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.sro-item',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/item-description-codes/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.item-description-codes.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/uom-by-hs-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.uom-by-hs-code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/buyers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.buyers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/buyers/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.buyers.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/migrate-sale-parties-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eDBCEW0Uw23N9JgX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/run-cid-migration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OZQo3pJKUkuv51fT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X7pALbzjHcRNBfNv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qn6fOe5tq6lfmbii',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cDj2BQf8zT1XCrW8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/reports/party' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.party',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/reports/Sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/create-storage-link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SzAi8ZmeGKZD1qGu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.companies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.companies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/companies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.companies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/create_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_account.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/Supplier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parties.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'parties.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/Supplier/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parties.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/Customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custommer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custommer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/Customers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custommer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/salary_calc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salary_calc.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/cust' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cust.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/salary_calc/get-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salary_calc.get_data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/attendence_form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendence_form.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attendence_form.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/attendence_form/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendence_form.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/check-attendance-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.attendance.status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/get-lamination-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TbNT8Z1WCdpaQ6bk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/job_sheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/job_sheet/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/job_sheet/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/job-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job-details.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/get-product-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.product.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/fetch-custom-rate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.custom.rate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/fetch-shipper-stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.shipper.stock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/fetch-corrugation-stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.corrugation.stock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/daily_statement/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'daily_statement.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/expense/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general/job/sheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_job_sheet.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general-job-sheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general-job-sheet.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general-job-sheet/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_job_sheet.report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/get-purchase-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IRmDz0qEUCWFahuK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/get-purchase-item-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IvxSMIM3OzOAS0ya',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general/delivery/challan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_delivery_challan.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/get-general-job-sheet-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pilgOJaImch5O809',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general/delivery/challan/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_delivery_challan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general/delivery/challan/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_delivery_challan.report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general/billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_billing.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general/billing/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_billing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/general/billing/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_billing.report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/check-existing-billings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EroO40A5RMyrtzVi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/boxboard/wage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boxboard_wage.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/boxboard/wage/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boxboard_wage.report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/boxboard/wage/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boxboard_wage.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/reports/stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.stock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/purchase/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/sale/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/bank_cash/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_cash.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'department.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'department.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/department/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'department.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employees.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/employees/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/employee_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_type.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee_type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/employee_type/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_type.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/bank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bank.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/erp_param' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'erp_param.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'erp_param.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/erp_param/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'erp_param.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/cash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cash.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/cash/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/paymentreports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/bank_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_payment.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bank_payment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/bank_payment/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_payment.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/gate_ex' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_ex.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gate_ex.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/gate_ex/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_ex.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/office_cash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_cash.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'office_cash.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/office_cash/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_cash.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/bank_recipt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_recipt.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bank_recipt.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/bank_recipt/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_recipt.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ledger.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/ledger_detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ledger_detail.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/payables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payables.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/recieveables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recieveables.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/journal_voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal_voucher.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'journal_voucher.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/journal_voucher/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal_voucher.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/open_bal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_bal.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'open_bal.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/open_bal/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_bal.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/employee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/employee/create1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.create1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/level1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level1.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'level1.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/level1/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level1.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/level2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level2.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'level2.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/level2/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level2.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/level3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level3.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'level3.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/level3/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level3.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'group.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/group/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/a_master' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amaster.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'amaster.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/a_master/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amaster.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/amount/party' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'party.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/party' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'party.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/party/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'party.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/bill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bill.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bill.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/bill/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bill.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/loan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loan.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'loan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/account/loan/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loan.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/itemmaster' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemmaster.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemmaster',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/itemtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemtype.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemtype',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/create/itemmaster' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.create.itemmaster',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/itemLog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.item_log',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/create/itemtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.create.itemtype',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/boxboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.boxboard',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/lamination' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.lamination',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/corrugation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.corrugation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/plates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.plates',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/dye' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.dye',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/inventory/ink' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.ink',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/stock_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock_report.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/stock_report/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock_report.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/stock_report/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock_report.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/delivery_challan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/delivery_challan/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/confectionery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/confectionery/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/wastage_sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wastage_sale.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'wastage_sale.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/wastage_sale/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wastage_sale.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/dye_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchase.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/dye_purchase/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchases.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/wastage/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wastage.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/pharma_billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pharma_billing.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pharma_billing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/pharma_billing/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pharma_billing.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/confect_billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confect_billing.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'confect_billing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/confect_billing/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confect_billing.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/gate_pass_in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_in.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_in.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/gate_pass_in/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_in.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/gate_pass_out' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_out.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_out.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/gate_pass_out/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_out.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/cheque_receipts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cheque.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cheque_receipts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/cheque_receipts/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cheque_receipts.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'country.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/country/add_country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custom.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/custom/add_country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/printing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'print.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'print.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/designation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designation.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'designation.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/extra_time' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'extra_time.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'extra_time.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'process.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'process.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/process/add_process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'process.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/paste' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paste.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'paste.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/paste/add_paste' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paste.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/registration_form/add_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registration_form.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'registration_form.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/registration_form/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registration_form.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/product-log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_log.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/product-log/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_log.report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/payment_invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_invoice.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment_invoice.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/payment_invoice/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_invoice.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/purchase_return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_return.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_return.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/purchase_return/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_return.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/plate_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_purchase.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'plate_purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/plate_purchase/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_purchase.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/get-products-by-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1WwH3kYZ7V72ys2o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/plate_return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_return.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'plate_return.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/plate_return/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_return.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/glue_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/glue_purchase/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/glue_return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_return.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'glue_return.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/glue_return/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_return.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/ink_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/ink_purchase/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/ink_return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_return.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ink_return.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/ink_return/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_return.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/shippers_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/shippers_purchase/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/shipper_return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_return.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_return.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/shipper_return/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_return.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/dye_return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_return.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dye_return.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/dye_return/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_return.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/lemination_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/lemination_purchase/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/lamination_return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lamination_return.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lamination_return.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/lamination_return/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lamination_return.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/corrugation_return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_return.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_return.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/corrugation_return/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_return.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/corrugation_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/corrugation_purchase/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.sales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.sales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/sales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.sales.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.purchase.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/purchase/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.purchase.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/Units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unit.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/Units/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/data-backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data-backup.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'data-backup.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/data-backup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data-backup.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JYXWSkxE5UWAHBXH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2xhg6TvasDp9tKLo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/invoicing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoicing.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/invoicing/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoicing.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/invoicing/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoicing.validate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/provinces' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.provinces',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/hs-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.hs-codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/item-description-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.item-description-codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/uom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.uom',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/transaction-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.transaction-types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/tax-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.tax-rates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/api/fbr/doctypecode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fbr.doctypecode',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/drafts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'drafts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/invoicing/save-draft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoicing.saveDraft',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premiertax/route-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VywqxAcXifDqQzmC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/premiertax/(?|a(?|pi/buyers/([^/]++)(*:44)|ttendence_form/([^/]++)(?|(*:77)|/edit(*:89)|(*:96))|ccount/(?|level(?|1/([^/]++)(?|/edit(*:140)|(*:148))|2/([^/]++)(?|/edit(*:175)|(*:183)))|a_master/([^/]++)(?|/edit(*:218)|(*:226))))|p(?|urchase(?|/(?|invoice/([^/]++)(*:271)|([^/]++)(?|(*:290)|/edit(*:303)|(*:311)))|\\-details/(?|edit(?|/([^/]++)(*:350)|Boxboard/([^/]++)(*:375))|([^/]++)/(?|update(?|Boxboard(*:413)|(*:421))|del(?|ete(*:439)|(*:447))))|_return/(?|([^/]++)/del(?|ete(*:487)|(*:495))|edit/([^/]++)(*:517)|update/([^/]++)(*:540)))|a(?|yment(?|/(?|([^/]++)(?|/(?|edit(*:585)|update(*:599))|(*:608))|create(*:623))|\\-delete/([^/]++)(*:649))|ste/([^/]++)(*:670))|harma\\-billing/([^/]++)/del(*:706)|r(?|inting/(?|edit/([^/]++)(*:741)|([^/]++)(*:757)|add_printing(*:777)|([^/]++)(*:793))|ocess/([^/]++)(*:816))|late_(?|purchase/(?|edit/([^/]++)(*:858)|update/([^/]++)(*:881)|([^/]++)/del(?|ete(*:907)|(*:915)))|return/([^/]++)(*:940)))|s(?|ale(?|/invoice/([^/]++)(*:977)|s/([^/]++)(?|(*:998)|/edit(*:1011)|(*:1020)))|hipper(?|s_purchase/(?|edit/([^/]++)(*:1067)|update/([^/]++)(*:1091)|([^/]++)/del(?|ete(*:1118)|(*:1127))|editBoxboard/([^/]++)(*:1158)|([^/]++)/updateBoxboard(*:1190))|_return/([^/]++)(*:1216)))|c(?|o(?|mpanies/([^/]++)(?|/edit(*:1259)|(*:1268))|nfect(?|ionery/(?|edit/([^/]++)(*:1309)|update/([^/]++)(*:1333)|([^/]++)/del(?|ete(*:1360)|(*:1369))|editCon/([^/]++)(*:1395)|([^/]++)/updateCon(*:1422))|\\-billing/([^/]++)/del(*:1454))|untry/([^/]++)(*:1478)|rrugation_(?|return/([^/]++)(*:1515)|purchase/(?|edit/([^/]++)(*:1549)|update/([^/]++)(*:1573)|([^/]++)/del(?|ete(*:1600)|(*:1609))|editBoxboard/([^/]++)(*:1640)|([^/]++)/updateBoxboard(*:1672))))|a(?|tegory/(?|([^/]++)(?|/edit(*:1714)|(*:1723))|create(*:1739))|sh(?|/(?|([^/]++)(?|/(?|update(*:1779)|edit(*:1792))|(*:1802))|create(*:1818))|\\-delete/([^/]++)(*:1845)))|heque(?|\\-receipts/([^/]++)(*:1883)|_receipt(?|s/(?|edit/([^/]++)(*:1921)|update/([^/]++)(*:1945))|/([^/]++)/delete(*:1971)))|ustom/([^/]++)(*:1996))|Supplier/([^/]++)(?|(*:2026)|/edit(*:2040)|(*:2049))|Customers/([^/]++)(?|(*:2080)|/edit(*:2094)|(*:2103))|g(?|e(?|t\\-(?|boxboard\\-details/([^/]++)(*:2153)|i(?|nk\\-details/([^/]++)(*:2186)|tem\\-details/([^/]++)(*:2216))|glue\\-details/([^/]++)(*:2248)|shipper\\-details/([^/]++)(*:2282)|products/([^/]++)(?|(*:2311)|(*:2320))|v(?|oucher\\-(?|numbers/([^/]++)(*:2361)|details/([^/]++)(*:2386))|nos(?|s/([^/]++)(*:2412)|/([^/]++)(*:2430)))|e(?|mployee\\-details/([^/]++)(*:2470)|ntry\\-details(?|s/([^/]++)(*:2505)|/([^/]++)(*:2523)))|aid/([^/]++)(*:2546))|neral(?|\\-(?|job\\-sheet/([^/]++)(?|(*:2591)|/edit(*:2605)|(*:2614))|delivery\\-challan/(?|([^/]++)(?|(*:2656)|/edit(*:2670))|/([^/]++)(*:2689)))|/billing/([^/]++)(*:2717)))|ate_(?|ex(?|/([^/]++)(?|/(?|edit(*:2760)|update(*:2775))|(*:2785))|\\-delete/([^/]++)(*:2812))|pass_(?|in/(?|([^/]++)/delete(?|(*:2854)|(*:2863))|edit/([^/]++)(*:2886)|update/([^/]++)(*:2910))|out/(?|([^/]++)/delete(?|(*:2945)|(*:2954))|edit/([^/]++)(*:2977)|update/([^/]++)(*:3001))))|lue_(?|purchase/(?|edit/([^/]++)(*:3045)|update/([^/]++)(*:3069)|([^/]++)/del(?|ete(*:3096)|(*:3105))|editBoxboard/([^/]++)(*:3136)|([^/]++)/updateBoxboard(*:3168))|return/([^/]++)(*:3193)))|jo(?|b\\-details/([^/]++)(?|/edit(*:3236)|(*:3245))|urnal_voucher/(?|([^/]++)/edit(*:3285)|delete/([^/]++)(*:3309)|([^/]++)(?|/update(*:3336)|(*:3345))))|b(?|oxboard/wage/(?|vouchers/([^/]++)(*:3394)|details/([^/]++)/([^/]++)(*:3428)|store/([^/]++)(*:3451))|ank_(?|payment(?|/([^/]++)(?|/(?|edit(*:3498)|update(*:3513))|(*:3523))|\\-delete/([^/]++)(*:3550))|recipt(?|/([^/]++)(?|/(?|edit(*:3589)|update(*:3604))|(*:3614))|\\-delete/([^/]++)(*:3641))))|update\\-(?|status/([^/]++)(*:3679)|company\\-id/([^/]++)(*:3708))|d(?|e(?|partment/([^/]++)(?|/edit(*:3751)|(*:3760))|livery_challan/(?|edit/([^/]++)(*:3801)|update/([^/]++)(*:3825)|([^/]++)/del(?|ete(*:3852)|(*:3861))|editCon/([^/]++)(*:3887)|([^/]++)/updateCon(*:3914))|signation/(?|edit/([^/]++)(*:3950)|([^/]++)(*:3967)|add_printing(*:3988)|([^/]++)(*:4005)))|ye_(?|purchase/(?|([^/]++)/delete(?|(*:4052)|(*:4061))|edit(?|/([^/]++)(*:4087)|Dye/([^/]++)(*:4108))|update/([^/]++)(*:4133)|([^/]++)/updateDye(*:4160))|return/([^/]++)(*:4185))|ata\\-backup/([^/]++)(?|(*:4218)|/edit(*:4232)|(*:4241))|raft(?|s/([^/]++)(?|/(?|edit(*:4279)|submit(*:4294))|(*:4304))|invoices/([^/]++)(*:4331)))|e(?|mployee(?|s/([^/]++)(?|(*:4369)|/edit(*:4383)|(*:4392))|_type/([^/]++)(?|/edit(*:4424)|(*:4433))|/([^/]++)(?|/edit(*:4460)|(*:4469)))|xtra(?|\\-times/([^/]++)(*:4503)|_time/(?|edit/([^/]++)(*:4534)|([^/]++)(*:4551)|add_printing(*:4572)|([^/]++)(*:4589)))|rp_param/([^/]++)(?|/edit(*:4625)|(*:4634)))|o(?|ffice_cash(?|/([^/]++)(?|/(?|edit(*:4682)|update(*:4697))|(*:4707))|\\-delete/([^/]++)(*:4734))|pen_bal/(?|([^/]++)/edit(*:4768)|delete/([^/]++)(*:4792)|([^/]++)(?|/update(*:4819)|(*:4828))))|in(?|ventory/item(?|master/([^/]++)(?|/edit(*:4883)|(*:4892))|type/([^/]++)(?|/edit(*:4923)|(*:4932)))|k_(?|purchase/(?|edit/([^/]++)(*:4973)|update/([^/]++)(*:4997)|([^/]++)/del(?|ete(*:5024)|(*:5033))|editBoxboard/([^/]++)(*:5064)|([^/]++)/updateBoxboard(*:5096))|return/([^/]++)(*:5121)))|wastage_sale/(?|([^/]++)/delete(?|(*:5166)|(*:5175))|edit/([^/]++)(*:5198)|update/([^/]++)(*:5222))|registration_form/(?|edit/([^/]++)(*:5266)|update/([^/]++)(*:5290)|([^/]++)(*:5307)|remove\\-image/([^/]++)(*:5338))|l(?|emination_purchase/(?|edit/([^/]++)(*:5387)|update/([^/]++)(*:5411)|([^/]++)/del(?|ete(*:5438)|(*:5447))|editBoxboard/([^/]++)(*:5478)|([^/]++)/updateBoxboard(*:5510))|amination_return/([^/]++)(*:5545))|Units/([^/]++)(?|(*:5572)|/edit(*:5586)|(*:5595))))/?$}sDu',
    ),
    3 => 
    array (
      44 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.buyers.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      77 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendence_form.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      89 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendence_form.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      96 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendence_form.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level1.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level1.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'level1.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level2.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level2.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'level2.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amaster.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amaster.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'amaster.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.purchase.invoice',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.purchase.show',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.purchase.edit',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.purchase.update',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.purchase.destroy',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_details.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_details.editBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_details.updateBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_details.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_details.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_details.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_return.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_return.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_return.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase_return.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paste.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pharma_billing.destroy',
          ),
          1 => 
          array (
            0 => 'billing_no',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'print.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'print.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'print.list',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'print.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'process.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_purchase.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_purchase.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_purchase.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_purchase.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plate_return.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.sale.invoice',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.sales.show',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.sales.edit',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.sales.update',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.sales.destroy',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.editBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_purchases.updateBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper_return.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.companies.edit',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.companies.update',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'premiertax.companies.destroy',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1360 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.editCon',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confectionery.updateCon',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confect_billing.destroy',
          ),
          1 => 
          array (
            0 => 'billing_no',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_return.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.editBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corrugation_purchase.updateBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'category.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1779 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chequeReceipts.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cheque_receipts.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cheque_receipts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cheque_receipts.del',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parties.show',
          ),
          1 => 
          array (
            0 => 'Supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parties.edit',
          ),
          1 => 
          array (
            0 => 'Supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parties.update',
          ),
          1 => 
          array (
            0 => 'Supplier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'parties.destroy',
          ),
          1 => 
          array (
            0 => 'Supplier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custommer.show',
          ),
          1 => 
          array (
            0 => 'Customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2094 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custommer.edit',
          ),
          1 => 
          array (
            0 => 'Customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custommer.update',
          ),
          1 => 
          array (
            0 => 'Customer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custommer.destroy',
          ),
          1 => 
          array (
            0 => 'Customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2VVR3dsqweerNWxG',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getinkDetails',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getItemDetails',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OqhT6rtaHGaZF3sA',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AZiAqe9NNC45VEvI',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gPY9G6xsyW0enaa8',
          ),
          1 => 
          array (
            0 => 'customerId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9YuxaJYzFUhUrFwe',
          ),
          1 => 
          array (
            0 => 'partyId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.voucher.numbers',
          ),
          1 => 
          array (
            0 => 'partyId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WNpKg8Bxp7jFC5rf',
          ),
          1 => 
          array (
            0 => 'voucherNo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gZkc3QyWo4ff7QSj',
          ),
          1 => 
          array (
            0 => 'accountId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::58UBB8IT9QcKcP9t',
          ),
          1 => 
          array (
            0 => 'accountId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OEGMWVgXGEJT3KvJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kDLxRQc977C2BAdn',
          ),
          1 => 
          array (
            0 => 'vno',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xcz17bLJsuRqTxpp',
          ),
          1 => 
          array (
            0 => 'vno',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::erf0IpLlyECW8F5X',
          ),
          1 => 
          array (
            0 => 'accountId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_job_sheet.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_job_sheet.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_job_sheet.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_delivery_challan.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_delivery_challan.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_delivery_challan.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general_billing.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_ex.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_ex.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_ex.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_ex.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_in.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_in.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_in.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_in.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_out.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_out.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_out.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gate_pass_out.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3096 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.editBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_purchase.updateBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'glue_return.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job-details.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job-details.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal_voucher.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal_voucher.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3336 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal_voucher.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal_voucher.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boxboard_wage.vouchers',
          ),
          1 => 
          array (
            0 => 'employee_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boxboard_wage.details',
          ),
          1 => 
          array (
            0 => 'employee_id',
            1 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boxboard_wage.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_payment.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_payment.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_payment.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_payment.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_recipt.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_recipt.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_recipt.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank_recipt.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash.updateStatus',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l2mjU0etb9P168Zq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'department.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'department.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'department.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.editDel',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_challan.updateDel',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designation.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designation.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designation.list',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designation.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4052 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchase.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchase.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchase.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchase.editDye',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchase.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_purchase.updateDye',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dye_return.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data-backup.show',
          ),
          1 => 
          array (
            0 => 'data_backup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data-backup.edit',
          ),
          1 => 
          array (
            0 => 'data_backup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data-backup.update',
          ),
          1 => 
          array (
            0 => 'data_backup',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'data-backup.destroy',
          ),
          1 => 
          array (
            0 => 'data_backup',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'drafts.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'drafts.submit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'drafts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'drafts.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_type.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_type.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee_type.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RvHrjcBvd3Gazzvm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'extra_time.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'extra_time.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'extra_time.list',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'extra_time.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'erp_param.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'erp_param.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'erp_param.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_cash.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_cash.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_cash.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_cash.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_bal.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_bal.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_bal.update',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_bal.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemmaster.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemmaster.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemmaster.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemtype.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4932 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemtype.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.itemtype.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5033 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.editBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5096 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_purchase.updateBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ink_return.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wastage_sale.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wastage_sale.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wastage_sale.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wastage_sale.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registration_form.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registration_form.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registration_form.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.image',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.edit',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.destroy',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.editBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lemination_purchase.updateBoxboard',
          ),
          1 => 
          array (
            0 => 'v_no',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lamination_return.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.show',
          ),
          1 => 
          array (
            0 => 'Unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.edit',
          ),
          1 => 
          array (
            0 => 'Unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.update',
          ),
          1 => 
          array (
            0 => 'Unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unit.destroy',
          ),
          1 => 
          array (
            0 => 'Unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7w2Hs17jrUw98QYR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003bd0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'generated::7w2Hs17jrUw98QYR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BVKxEup6PXg3rY0b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/hello',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:76:"function () {
    return \\response()->json([\'message\' => \'Hello World!\']);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003bc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'generated::BVKxEup6PXg3rY0b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.registration-type' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/api/fbr/registration-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getRegistrationType',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getRegistrationType',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.registration-type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.sale-type-to-rate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/api/fbr/sale-type-to-rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getSaleTypeToRate',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getSaleTypeToRate',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.sale-type-to-rate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.sro-schedule' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/api/fbr/sro-schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getSroSchedule',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getSroSchedule',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.sro-schedule',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.sro-item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/api/fbr/sro-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getSroItem',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getSroItem',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.sro-item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.item-description-codes.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/fbr/item-description-codes/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@searchItemDescriptionCodes',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@searchItemDescriptionCodes',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.item-description-codes.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.uom-by-hs-code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/api/fbr/uom-by-hs-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getUomByHsCode',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getUomByHsCode',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.uom-by-hs-code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.buyers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/buyers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getBuyers',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getBuyers',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.buyers.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.buyers.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/buyers/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@searchBuyersByNtn',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@searchBuyersByNtn',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.buyers.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.buyers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/buyers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getBuyerById',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getBuyerById',
        'namespace' => NULL,
        'prefix' => 'premiertax',
        'where' => 
        array (
        ),
        'as' => 'api.buyers.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eDBCEW0Uw23N9JgX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/migrate-sale-parties-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1522:"function () {
   
         \\Illuminate\\Support\\Facades\\Schema::create(\'sale_invoice_fbr\', function (\\Illuminate\\Database\\Schema\\Blueprint $table) {
             $table->id();
            $table->unsignedBigInteger(\'user_id\');
            $table->string(\'title\')->nullable();
            $table->text(\'notes\')->nullable();
            $table->string(\'fbr_invoice_no\');
            // Seller info
            $table->string(\'seller_ntn_cnic\')->nullable();
            $table->string(\'seller_business_name\')->nullable();
            $table->string(\'seller_province\')->nullable();
            $table->string(\'seller_address\')->nullable();

            // Invoice info
            $table->string(\'invoice_type\')->nullable();
            $table->date(\'invoice_date\')->nullable();
            $table->string(\'invoice_ref_no\')->nullable();
            $table->string(\'scenario_id\')->nullable();

            // Buyer info
            $table->string(\'buyer_ntn_cnic\')->nullable();
            $table->string(\'buyer_business_name\')->nullable();
            $table->string(\'buyer_province\')->nullable();
            $table->string(\'buyer_registration_type\')->nullable();
            $table->string(\'buyer_address\')->nullable();

            // Items as JSON
            $table->json(\'items\')->nullable();

            $table->timestamps();

            // Foreign key constraint
            $table->foreign(\'user_id\')->references(\'id\')->on(\'users\')->onDelete(\'cascade\');
        });
    

    
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003c10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eDBCEW0Uw23N9JgX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OZQo3pJKUkuv51fT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/run-cid-migration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:549:"function () {
    try {
        // Run only pending migrations
        \\Artisan::call(\'migrate\', [
            \'--force\' => true, // needed when running in production
        ]);

        return \\response()->json([
            \'status\' => \'success\',
            \'message\' => \'Migration executed successfully\',
            \'output\' => \\Artisan::output(),
        ]);
    } catch (\\Exception $e) {
        return \\response()->json([
            \'status\' => \'error\',
            \'message\' => $e->getMessage(),
        ], 500);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003cc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OZQo3pJKUkuv51fT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X7pALbzjHcRNBfNv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:560:"function () {
    try {
        // Run the storage:link command
        \\Artisan::call(\'storage:link\', [
            \'--force\' => true, // optional: overwrite existing symlink
        ]);

        return \\response()->json([
            \'status\' => \'success\',
            \'message\' => \'Storage link created successfully\',
            \'output\' => \\Artisan::output(),
        ]);
    } catch (\\Exception $e) {
        return \\response()->json([
            \'status\' => \'error\',
            \'message\' => $e->getMessage(),
        ], 500);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003ce0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::X7pALbzjHcRNBfNv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qn6fOe5tq6lfmbii' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:729:"function() {
    try {
        // Clear caches first
        \\Artisan::call(\'route:clear\');
        \\Artisan::call(\'view:clear\');
        \\Artisan::call(\'config:clear\');
        // Cache routes and config for better performance
        \\Artisan::call(\'route:cache\');
        \\Artisan::call(\'config:cache\');
        
        return \\response()->json([
            \'status\' => \'success\',
            \'message\' => \'Migration completed \',
            \'output\' => \\Artisan::output()
        ]);
        
    } catch (\\Exception $e) {
        return \\response()->json([
            \'status\' => \'error\',
            \'message\' => \'Migration failed\',
            \'error\' => $e->getMessage()
        ], 500);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003d00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qn6fOe5tq6lfmbii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cDj2BQf8zT1XCrW8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:57:"function () {
    return \\redirect()->route(\'login\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003d20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cDj2BQf8zT1XCrW8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.party' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/reports/party',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@partyReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@partyReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.party',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/reports/Sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@SaleReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@SaleReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.sales',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.purchase.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase/invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseDetail@invoice',
        'controller' => 'App\\Http\\Controllers\\PurchaseDetail@invoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'premiertax.purchase.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.sale.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/sale/invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleDetails@invoice',
        'controller' => 'App\\Http\\Controllers\\SaleDetails@invoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'premiertax.sale.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SzAi8ZmeGKZD1qGu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/create-storage-link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StorageLinkController@createLink',
        'controller' => 'App\\Http\\Controllers\\StorageLinkController@createLink',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SzAi8ZmeGKZD1qGu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.companies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'premiertax.companies.index',
        'uses' => 'App\\Http\\Controllers\\CompaniesController@index',
        'controller' => 'App\\Http\\Controllers\\CompaniesController@index',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.companies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/companies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'premiertax.companies.create',
        'uses' => 'App\\Http\\Controllers\\CompaniesController@create',
        'controller' => 'App\\Http\\Controllers\\CompaniesController@create',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.companies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'premiertax.companies.store',
        'uses' => 'App\\Http\\Controllers\\CompaniesController@store',
        'controller' => 'App\\Http\\Controllers\\CompaniesController@store',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.companies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/companies/{company}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'premiertax.companies.edit',
        'uses' => 'App\\Http\\Controllers\\CompaniesController@edit',
        'controller' => 'App\\Http\\Controllers\\CompaniesController@edit',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.companies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'premiertax/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'premiertax.companies.update',
        'uses' => 'App\\Http\\Controllers\\CompaniesController@update',
        'controller' => 'App\\Http\\Controllers\\CompaniesController@update',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.companies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'premiertax.companies.destroy',
        'uses' => 'App\\Http\\Controllers\\CompaniesController@destroy',
        'controller' => 'App\\Http\\Controllers\\CompaniesController@destroy',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard.admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_account.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/create_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CreateAccountController@store',
        'controller' => 'App\\Http\\Controllers\\CreateAccountController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create_account.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parties.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'parties.index',
        'uses' => 'App\\Http\\Controllers\\PartyMemberController@index',
        'controller' => 'App\\Http\\Controllers\\PartyMemberController@index',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parties.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Supplier/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'parties.create',
        'uses' => 'App\\Http\\Controllers\\PartyMemberController@create',
        'controller' => 'App\\Http\\Controllers\\PartyMemberController@create',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parties.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/Supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'parties.store',
        'uses' => 'App\\Http\\Controllers\\PartyMemberController@store',
        'controller' => 'App\\Http\\Controllers\\PartyMemberController@store',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parties.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Supplier/{Supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'parties.show',
        'uses' => 'App\\Http\\Controllers\\PartyMemberController@show',
        'controller' => 'App\\Http\\Controllers\\PartyMemberController@show',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parties.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Supplier/{Supplier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'parties.edit',
        'uses' => 'App\\Http\\Controllers\\PartyMemberController@edit',
        'controller' => 'App\\Http\\Controllers\\PartyMemberController@edit',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parties.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'premiertax/Supplier/{Supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'parties.update',
        'uses' => 'App\\Http\\Controllers\\PartyMemberController@update',
        'controller' => 'App\\Http\\Controllers\\PartyMemberController@update',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parties.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/Supplier/{Supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'parties.destroy',
        'uses' => 'App\\Http\\Controllers\\PartyMemberController@destroy',
        'controller' => 'App\\Http\\Controllers\\PartyMemberController@destroy',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custommer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'custommer.index',
        'uses' => 'App\\Http\\Controllers\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custommer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Customers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'custommer.create',
        'uses' => 'App\\Http\\Controllers\\CustomerController@create',
        'controller' => 'App\\Http\\Controllers\\CustomerController@create',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custommer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/Customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'custommer.store',
        'uses' => 'App\\Http\\Controllers\\CustomerController@store',
        'controller' => 'App\\Http\\Controllers\\CustomerController@store',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custommer.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Customers/{Customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'custommer.show',
        'uses' => 'App\\Http\\Controllers\\CustomerController@show',
        'controller' => 'App\\Http\\Controllers\\CustomerController@show',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custommer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Customers/{Customer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'custommer.edit',
        'uses' => 'App\\Http\\Controllers\\CustomerController@edit',
        'controller' => 'App\\Http\\Controllers\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custommer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'premiertax/Customers/{Customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'custommer.update',
        'uses' => 'App\\Http\\Controllers\\CustomerController@update',
        'controller' => 'App\\Http\\Controllers\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custommer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/Customers/{Customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'custommer.destroy',
        'uses' => 'App\\Http\\Controllers\\CustomerController@destroy',
        'controller' => 'App\\Http\\Controllers\\CustomerController@destroy',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salary_calc.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/salary_calc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaryCalculatorController@index',
        'controller' => 'App\\Http\\Controllers\\SalaryCalculatorController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'salary_calc.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cust.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cust',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cust.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salary_calc.get_data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/salary_calc/get-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaryCalculatorController@getSalaryData',
        'controller' => 'App\\Http\\Controllers\\SalaryCalculatorController@getSalaryData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'salary_calc.get_data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendence_form.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/attendence_form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendenceFormController@index',
        'controller' => 'App\\Http\\Controllers\\AttendenceFormController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'attendence_form.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendence_form.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/attendence_form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendenceFormController@store',
        'controller' => 'App\\Http\\Controllers\\AttendenceFormController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'attendence_form.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendence_form.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/attendence_form/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendenceFormController@reports',
        'controller' => 'App\\Http\\Controllers\\AttendenceFormController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'attendence_form.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendence_form.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/attendence_form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendenceFormController@destroy',
        'controller' => 'App\\Http\\Controllers\\AttendenceFormController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'attendence_form.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendence_form.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/attendence_form/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendenceFormController@edit',
        'controller' => 'App\\Http\\Controllers\\AttendenceFormController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'attendence_form.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendence_form.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/attendence_form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendenceFormController@update',
        'controller' => 'App\\Http\\Controllers\\AttendenceFormController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'attendence_form.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check.attendance.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/check-attendance-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendenceFormController@checkAttendanceStatus',
        'controller' => 'App\\Http\\Controllers\\AttendenceFormController@checkAttendanceStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'check.attendance.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2VVR3dsqweerNWxG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-boxboard-details/{item_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@getBoxboardDetails',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@getBoxboardDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2VVR3dsqweerNWxG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getinkDetails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-ink-details/{item_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@getinkDetails',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@getinkDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getinkDetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TbNT8Z1WCdpaQ6bk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-lamination-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@getLaminationDetails',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@getLaminationDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TbNT8Z1WCdpaQ6bk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OqhT6rtaHGaZF3sA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-glue-details/{item_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@getglueDetails',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@getglueDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OqhT6rtaHGaZF3sA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AZiAqe9NNC45VEvI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-shipper-details/{item_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@getshipperDetails',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@getshipperDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AZiAqe9NNC45VEvI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'job.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/job_sheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@index',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'job.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'job.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/job_sheet/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@store',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'job.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'job.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/job_sheet/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@report',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@report',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'job.report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'job-details.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/job-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@destroy',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'job-details.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'job-details.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/job-details/{v_no}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@edit',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'job-details.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'job-details.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/job-details/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@update',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'job-details.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get.product.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-product-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@getProductDetails',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@getProductDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get.product.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gPY9G6xsyW0enaa8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-products/{customerId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@getProducts',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@getProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gPY9G6xsyW0enaa8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetch.custom.rate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/fetch-custom-rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@fetchRate',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@fetchRate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fetch.custom.rate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetch.shipper.stock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/fetch-shipper-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@fetchShipperStock',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@fetchShipperStock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fetch.shipper.stock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetch.corrugation.stock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/fetch-corrugation-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JobSheetController@fetchCorrugationStock',
        'controller' => 'App\\Http\\Controllers\\JobSheetController@fetchCorrugationStock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fetch.corrugation.stock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'daily_statement.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/daily_statement/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DailyStatementController@reports',
        'controller' => 'App\\Http\\Controllers\\DailyStatementController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'daily_statement.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/expense/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseController@reports',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'expense.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_job_sheet.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/general/job/sheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralJobSheetController@index',
        'controller' => 'App\\Http\\Controllers\\GeneralJobSheetController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_job_sheet.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general-job-sheet.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/general-job-sheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralJobSheetController@store',
        'controller' => 'App\\Http\\Controllers\\GeneralJobSheetController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general-job-sheet.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_job_sheet.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/general-job-sheet/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralJobSheetController@report',
        'controller' => 'App\\Http\\Controllers\\GeneralJobSheetController@report',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_job_sheet.report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_job_sheet.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/general-job-sheet/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralJobSheetController@destroy',
        'controller' => 'App\\Http\\Controllers\\GeneralJobSheetController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_job_sheet.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IRmDz0qEUCWFahuK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-purchase-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralJobSheetController@getPurchaseItems',
        'controller' => 'App\\Http\\Controllers\\GeneralJobSheetController@getPurchaseItems',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IRmDz0qEUCWFahuK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IvxSMIM3OzOAS0ya' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-purchase-item-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralJobSheetController@getPurchaseItemDetails',
        'controller' => 'App\\Http\\Controllers\\GeneralJobSheetController@getPurchaseItemDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IvxSMIM3OzOAS0ya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_job_sheet.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/general-job-sheet/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralJobSheetController@edit',
        'controller' => 'App\\Http\\Controllers\\GeneralJobSheetController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_job_sheet.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_job_sheet.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/general-job-sheet/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralJobSheetController@update',
        'controller' => 'App\\Http\\Controllers\\GeneralJobSheetController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_job_sheet.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_delivery_challan.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/general/delivery/challan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@index',
        'controller' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_delivery_challan.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pilgOJaImch5O809' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-general-job-sheet-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@getGeneralJobSheetData',
        'controller' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@getGeneralJobSheetData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pilgOJaImch5O809',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_delivery_challan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/general/delivery/challan/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@store',
        'controller' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_delivery_challan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_delivery_challan.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/general/delivery/challan/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@report',
        'controller' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@report',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_delivery_challan.report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_delivery_challan.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/general-delivery-challan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@destroy',
        'controller' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_delivery_challan.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_delivery_challan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/general-delivery-challan/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@edit',
        'controller' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_delivery_challan.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_delivery_challan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/general-delivery-challan//{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@update',
        'controller' => 'App\\Http\\Controllers\\GeneralDeliveryChallanController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_delivery_challan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_billing.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/general/billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralBillingController@index',
        'controller' => 'App\\Http\\Controllers\\GeneralBillingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_billing.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_billing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/general/billing/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralBillingController@store',
        'controller' => 'App\\Http\\Controllers\\GeneralBillingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_billing.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_billing.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/general/billing/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralBillingController@report',
        'controller' => 'App\\Http\\Controllers\\GeneralBillingController@report',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_billing.report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general_billing.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/general/billing/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralBillingController@destroy',
        'controller' => 'App\\Http\\Controllers\\GeneralBillingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general_billing.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get.voucher.numbers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-voucher-numbers/{partyId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralBillingController@getVoucherNumbers',
        'controller' => 'App\\Http\\Controllers\\GeneralBillingController@getVoucherNumbers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get.voucher.numbers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WNpKg8Bxp7jFC5rf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-voucher-details/{voucherNo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralBillingController@getVoucherDetails',
        'controller' => 'App\\Http\\Controllers\\GeneralBillingController@getVoucherDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WNpKg8Bxp7jFC5rf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EroO40A5RMyrtzVi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/check-existing-billings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralBillingController@checkExistingBillings',
        'controller' => 'App\\Http\\Controllers\\GeneralBillingController@checkExistingBillings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EroO40A5RMyrtzVi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boxboard_wage.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/boxboard/wage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WageBoxboardController@index',
        'controller' => 'App\\Http\\Controllers\\WageBoxboardController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'boxboard_wage.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boxboard_wage.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/boxboard/wage/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WageBoxboardController@report',
        'controller' => 'App\\Http\\Controllers\\WageBoxboardController@report',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'boxboard_wage.report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boxboard_wage.vouchers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/boxboard/wage/vouchers/{employee_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WageBoxboardController@getVouchersByEmployee',
        'controller' => 'App\\Http\\Controllers\\WageBoxboardController@getVouchersByEmployee',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'boxboard_wage.vouchers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boxboard_wage.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/boxboard/wage/details/{employee_id}/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WageBoxboardController@getVoucherDetails',
        'controller' => 'App\\Http\\Controllers\\WageBoxboardController@getVoucherDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'boxboard_wage.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boxboard_wage.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/boxboard/wage/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WageBoxboardController@store',
        'controller' => 'App\\Http\\Controllers\\WageBoxboardController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'boxboard_wage.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boxboard_wage.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/boxboard/wage/store/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WageBoxboardController@destroy',
        'controller' => 'App\\Http\\Controllers\\WageBoxboardController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'boxboard_wage.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.stock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/reports/stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportStockController@reports',
        'controller' => 'App\\Http\\Controllers\\ReportStockController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.stock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportsController@reports',
        'controller' => 'App\\Http\\Controllers\\ReportsController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/sale/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SReportsController@reports',
        'controller' => 'App\\Http\\Controllers\\SReportsController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_cash.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_cash/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankCashReportController@reports',
        'controller' => 'App\\Http\\Controllers\\BankCashReportController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_cash.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getItemDetails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-item-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@getItemDetails',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@getItemDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getItemDetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.updateStatus' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/update-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\CashController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.updateStatus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@user_index',
        'controller' => 'App\\Http\\Controllers\\DashboardController@user_index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\UserController@profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'department.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@index',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'department.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'department.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/department/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@create',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'department.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'department.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@store',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'department.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'department.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/department/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@edit',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'department.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'department.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/department/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@update',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'department.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'department.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/department/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'department.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeesController@index',
        'controller' => 'App\\Http\\Controllers\\EmployeesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employees.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeesController@store',
        'controller' => 'App\\Http\\Controllers\\EmployeesController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employees.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employees/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeesController@reports',
        'controller' => 'App\\Http\\Controllers\\EmployeesController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employees.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/employees/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeesController@destroy',
        'controller' => 'App\\Http\\Controllers\\EmployeesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employees.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employees/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeesController@edit',
        'controller' => 'App\\Http\\Controllers\\EmployeesController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employees.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/employees/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeesController@update',
        'controller' => 'App\\Http\\Controllers\\EmployeesController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employees.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RvHrjcBvd3Gazzvm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/extra-times/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeesController@getRate',
        'controller' => 'App\\Http\\Controllers\\EmployeesController@getRate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RvHrjcBvd3Gazzvm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_type.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employee_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeTypeController@index',
        'controller' => 'App\\Http\\Controllers\\EmployeeTypeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee_type.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/employee_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeTypeController@store',
        'controller' => 'App\\Http\\Controllers\\EmployeeTypeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee_type.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OEGMWVgXGEJT3KvJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-employee-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeTypeController@getEmployeeDetails',
        'controller' => 'App\\Http\\Controllers\\EmployeeTypeController@getEmployeeDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OEGMWVgXGEJT3KvJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_type.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employee_type/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeTypeController@reports',
        'controller' => 'App\\Http\\Controllers\\EmployeeTypeController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee_type.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employee_type/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\EmployeeTypeController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee_type.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/employee_type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeTypeController@update',
        'controller' => 'App\\Http\\Controllers\\EmployeeTypeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee_type.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/employee_type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\EmployeeTypeController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee_type.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\category\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\category\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\category\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\category\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/category/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\category\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\category\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\category\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\category\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\category\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\category\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\category\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\category\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankController@index',
        'controller' => 'App\\Http\\Controllers\\BankController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankController@store',
        'controller' => 'App\\Http\\Controllers\\BankController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'erp_param.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/erp_param',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ErpParamController@index',
        'controller' => 'App\\Http\\Controllers\\ErpParamController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'erp_param.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'erp_param.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/erp_param/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ErpParamController@create',
        'controller' => 'App\\Http\\Controllers\\ErpParamController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'erp_param.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'erp_param.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/erp_param',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ErpParamController@store',
        'controller' => 'App\\Http\\Controllers\\ErpParamController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'erp_param.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'erp_param.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/erp_param/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ErpParamController@edit',
        'controller' => 'App\\Http\\Controllers\\ErpParamController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'erp_param.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'erp_param.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/erp_param/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ErpParamController@update',
        'controller' => 'App\\Http\\Controllers\\ErpParamController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'erp_param.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'erp_param.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/erp_param/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ErpParamController@destroy',
        'controller' => 'App\\Http\\Controllers\\ErpParamController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'erp_param.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@index',
        'controller' => 'App\\Http\\Controllers\\CashController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cash/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@reports',
        'controller' => 'App\\Http\\Controllers\\CashController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/cash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@store',
        'controller' => 'App\\Http\\Controllers\\CashController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/cash/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@update',
        'controller' => 'App\\Http\\Controllers\\CashController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cash/{v_no}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@edit',
        'controller' => 'App\\Http\\Controllers\\CashController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@destroy',
        'controller' => 'App\\Http\\Controllers\\CashController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/cash-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@delete',
        'controller' => 'App\\Http\\Controllers\\CashController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cash/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CashController@create',
        'controller' => 'App\\Http\\Controllers\\CashController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/paymentreports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@reports',
        'controller' => 'App\\Http\\Controllers\\PaymentController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/payment/{v_no}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/payment/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/payment-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@delete',
        'controller' => 'App\\Http\\Controllers\\PaymentController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/payment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_payment.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\BankPaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_payment.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_payment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/bank_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankPaymentController@store',
        'controller' => 'App\\Http\\Controllers\\BankPaymentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_payment.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_payment.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_payment/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankPaymentController@reports',
        'controller' => 'App\\Http\\Controllers\\BankPaymentController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_payment.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_payment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_payment/{v_no}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankPaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\BankPaymentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_payment.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_payment.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/bank_payment/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankPaymentController@update',
        'controller' => 'App\\Http\\Controllers\\BankPaymentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_payment.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_payment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankPaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\BankPaymentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_payment.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_payment.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/bank_payment-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankPaymentController@delete',
        'controller' => 'App\\Http\\Controllers\\BankPaymentController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_payment.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_ex.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_ex',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GateExController@index',
        'controller' => 'App\\Http\\Controllers\\GateExController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_ex.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_ex.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/gate_ex',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GateExController@store',
        'controller' => 'App\\Http\\Controllers\\GateExController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_ex.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_ex.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_ex/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GateExController@reports',
        'controller' => 'App\\Http\\Controllers\\GateExController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_ex.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_ex.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_ex/{v_no}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GateExController@edit',
        'controller' => 'App\\Http\\Controllers\\GateExController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_ex.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_ex.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/gate_ex/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GateExController@update',
        'controller' => 'App\\Http\\Controllers\\GateExController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_ex.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_ex.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_ex/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GateExController@destroy',
        'controller' => 'App\\Http\\Controllers\\GateExController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_ex.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_ex.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/gate_ex-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GateExController@delete',
        'controller' => 'App\\Http\\Controllers\\GateExController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_ex.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_cash.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/office_cash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OfficeCashController@index',
        'controller' => 'App\\Http\\Controllers\\OfficeCashController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'office_cash.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_cash.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/office_cash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OfficeCashController@store',
        'controller' => 'App\\Http\\Controllers\\OfficeCashController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'office_cash.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_cash.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/office_cash/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OfficeCashController@reports',
        'controller' => 'App\\Http\\Controllers\\OfficeCashController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'office_cash.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_cash.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/office_cash/{v_no}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OfficeCashController@edit',
        'controller' => 'App\\Http\\Controllers\\OfficeCashController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'office_cash.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_cash.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/office_cash/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OfficeCashController@update',
        'controller' => 'App\\Http\\Controllers\\OfficeCashController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'office_cash.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_cash.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/office_cash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OfficeCashController@destroy',
        'controller' => 'App\\Http\\Controllers\\OfficeCashController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'office_cash.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_cash.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/office_cash-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OfficeCashController@delete',
        'controller' => 'App\\Http\\Controllers\\OfficeCashController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'office_cash.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_recipt.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_recipt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankReciptController@index',
        'controller' => 'App\\Http\\Controllers\\BankReciptController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_recipt.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_recipt.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/bank_recipt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankReciptController@store',
        'controller' => 'App\\Http\\Controllers\\BankReciptController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_recipt.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_recipt.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_recipt/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankReciptController@reports',
        'controller' => 'App\\Http\\Controllers\\BankReciptController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_recipt.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_recipt.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_recipt/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankReciptController@edit',
        'controller' => 'App\\Http\\Controllers\\BankReciptController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_recipt.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_recipt.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/bank_recipt/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankReciptController@update',
        'controller' => 'App\\Http\\Controllers\\BankReciptController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_recipt.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_recipt.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/bank_recipt/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankReciptController@destroy',
        'controller' => 'App\\Http\\Controllers\\BankReciptController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_recipt.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bank_recipt.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/bank_recipt-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BankReciptController@delete',
        'controller' => 'App\\Http\\Controllers\\BankReciptController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bank_recipt.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ledger.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LedgerController@index',
        'controller' => 'App\\Http\\Controllers\\LedgerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ledger.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ledger_detail.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ledger_detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LedgerDetailController@index',
        'controller' => 'App\\Http\\Controllers\\LedgerDetailController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ledger_detail.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payables.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/payables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PayableController@index',
        'controller' => 'App\\Http\\Controllers\\PayableController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payables.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recieveables.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/recieveables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RecieveableableController@index',
        'controller' => 'App\\Http\\Controllers\\RecieveableableController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'recieveables.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal_voucher.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/journal_voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalVoucherController@index',
        'controller' => 'App\\Http\\Controllers\\JournalVoucherController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'journal_voucher.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal_voucher.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/journal_voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalVoucherController@store',
        'controller' => 'App\\Http\\Controllers\\JournalVoucherController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'journal_voucher.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal_voucher.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/journal_voucher/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalVoucherController@reports',
        'controller' => 'App\\Http\\Controllers\\JournalVoucherController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'journal_voucher.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal_voucher.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/journal_voucher/{v_no}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalVoucherController@edit',
        'controller' => 'App\\Http\\Controllers\\JournalVoucherController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'journal_voucher.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal_voucher.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/journal_voucher/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalVoucherController@delete',
        'controller' => 'App\\Http\\Controllers\\JournalVoucherController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'journal_voucher.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal_voucher.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/journal_voucher/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalVoucherController@update',
        'controller' => 'App\\Http\\Controllers\\JournalVoucherController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'journal_voucher.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal_voucher.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/journal_voucher/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalVoucherController@destroy',
        'controller' => 'App\\Http\\Controllers\\JournalVoucherController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'journal_voucher.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_bal.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/open_bal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenBalController@index',
        'controller' => 'App\\Http\\Controllers\\OpenBalController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_bal.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_bal.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/open_bal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenBalController@store',
        'controller' => 'App\\Http\\Controllers\\OpenBalController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_bal.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_bal.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/open_bal/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenBalController@reports',
        'controller' => 'App\\Http\\Controllers\\OpenBalController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_bal.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_bal.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/open_bal/{v_no}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenBalController@edit',
        'controller' => 'App\\Http\\Controllers\\OpenBalController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_bal.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_bal.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/open_bal/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenBalController@delete',
        'controller' => 'App\\Http\\Controllers\\OpenBalController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_bal.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_bal.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/open_bal/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenBalController@update',
        'controller' => 'App\\Http\\Controllers\\OpenBalController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_bal.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_bal.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/open_bal/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenBalController@destroy',
        'controller' => 'App\\Http\\Controllers\\OpenBalController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_bal.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeController@create',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.create1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employee/create1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeController@create1',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@create1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.create1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeController@store',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/employee/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeController@edit',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/employee/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeController@update',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/employee/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeController@destroy',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level1.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/level1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level1Controller@store',
        'controller' => 'App\\Http\\Controllers\\account\\Level1Controller@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level1.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level1.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/level1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level1Controller@index',
        'controller' => 'App\\Http\\Controllers\\account\\Level1Controller@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level1.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level1.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/level1/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level1Controller@create',
        'controller' => 'App\\Http\\Controllers\\account\\Level1Controller@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level1.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level1.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/level1/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level1Controller@edit',
        'controller' => 'App\\Http\\Controllers\\account\\Level1Controller@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level1.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level1.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/level1/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level1Controller@update',
        'controller' => 'App\\Http\\Controllers\\account\\Level1Controller@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level1.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level1.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/account/level1/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level1Controller@destroy',
        'controller' => 'App\\Http\\Controllers\\account\\Level1Controller@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level1.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level2.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/level2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level2Controller@store',
        'controller' => 'App\\Http\\Controllers\\account\\Level2Controller@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level2.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level2.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/level2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level2Controller@index',
        'controller' => 'App\\Http\\Controllers\\account\\Level2Controller@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level2.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level2.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/level2/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level2Controller@create',
        'controller' => 'App\\Http\\Controllers\\account\\Level2Controller@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level2.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level2.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/level2/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level2Controller@edit',
        'controller' => 'App\\Http\\Controllers\\account\\Level2Controller@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level2.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level2.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/level2/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level2Controller@update',
        'controller' => 'App\\Http\\Controllers\\account\\Level2Controller@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level2.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level2.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/account/level2/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level2Controller@destroy',
        'controller' => 'App\\Http\\Controllers\\account\\Level2Controller@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level2.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level3.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/level3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level3Controller@store',
        'controller' => 'App\\Http\\Controllers\\account\\Level3Controller@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level3.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level3.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/level3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level3Controller@index',
        'controller' => 'App\\Http\\Controllers\\account\\Level3Controller@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level3.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'level3.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/level3/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\Level3Controller@create',
        'controller' => 'App\\Http\\Controllers\\account\\Level3Controller@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'level3.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\GroupController@store',
        'controller' => 'App\\Http\\Controllers\\account\\GroupController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'group.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\GroupController@index',
        'controller' => 'App\\Http\\Controllers\\account\\GroupController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'group.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/group/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\GroupController@create',
        'controller' => 'App\\Http\\Controllers\\account\\GroupController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'group.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amaster.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/a_master',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\AccountMasterController@store',
        'controller' => 'App\\Http\\Controllers\\account\\AccountMasterController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'amaster.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amaster.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/a_master',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\AccountMasterController@index',
        'controller' => 'App\\Http\\Controllers\\account\\AccountMasterController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'amaster.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\AccountMasterController@reports',
        'controller' => 'App\\Http\\Controllers\\account\\AccountMasterController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'account.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amaster.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/a_master/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\AccountMasterController@create',
        'controller' => 'App\\Http\\Controllers\\account\\AccountMasterController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'amaster.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amaster.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/a_master/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\AccountMasterController@edit',
        'controller' => 'App\\Http\\Controllers\\account\\AccountMasterController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'amaster.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amaster.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/a_master/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\AccountMasterController@update',
        'controller' => 'App\\Http\\Controllers\\account\\AccountMasterController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'amaster.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amaster.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/account/a_master/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\AccountMasterController@destroy',
        'controller' => 'App\\Http\\Controllers\\account\\AccountMasterController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'amaster.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'party.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/amount/party',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\PartyController@store',
        'controller' => 'App\\Http\\Controllers\\account\\PartyController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'party.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'party.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/party',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\PartyController@index',
        'controller' => 'App\\Http\\Controllers\\account\\PartyController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'party.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'party.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/party/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\PartyController@create',
        'controller' => 'App\\Http\\Controllers\\account\\PartyController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'party.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bill.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/bill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\BillController@index',
        'controller' => 'App\\Http\\Controllers\\account\\BillController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bill.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bill.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/bill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\BillController@store',
        'controller' => 'App\\Http\\Controllers\\account\\BillController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bill.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bill.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/bill/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\BillController@create',
        'controller' => 'App\\Http\\Controllers\\account\\BillController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bill.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/loan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\LoanController@index',
        'controller' => 'App\\Http\\Controllers\\account\\LoanController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'loan.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/account/loan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\LoanController@store',
        'controller' => 'App\\Http\\Controllers\\account\\LoanController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'loan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/account/loan/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\account\\LoanController@create',
        'controller' => 'App\\Http\\Controllers\\account\\LoanController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'loan.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemmaster.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/inventory/itemmaster',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@index_itemmaster',
        'controller' => 'App\\Http\\Controllers\\InventoryController@index_itemmaster',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemmaster.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemmaster.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/inventory/itemmaster/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemmasteredit',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemmasteredit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemmaster.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemmaster.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/itemmaster/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemmasterupdate',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemmasterupdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemmaster.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemmaster.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/inventory/itemmaster/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemmasterdestroy',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemmasterdestroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemmaster.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemtype.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/inventory/itemtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@index_itemtype',
        'controller' => 'App\\Http\\Controllers\\InventoryController@index_itemtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemtype.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemmaster' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/itemmaster',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemmaster',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemmaster',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemmaster',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemtype' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/itemtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemtype',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemtype',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemtype.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/inventory/itemtype/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemtypeedit',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemtypeedit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemtype.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemtype.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/itemtype/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemtypeupdate',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemtypeupdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemtype.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.itemtype.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/inventory/itemtype/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemtypedestroy',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemtypedestroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.itemtype.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.create.itemmaster' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/inventory/create/itemmaster',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@createitemmaster',
        'controller' => 'App\\Http\\Controllers\\InventoryController@createitemmaster',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.create.itemmaster',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.item_log' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/inventory/itemLog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@itemlogList',
        'controller' => 'App\\Http\\Controllers\\InventoryController@itemlogList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.item_log',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.create.itemtype' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/inventory/create/itemtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@createitemtype',
        'controller' => 'App\\Http\\Controllers\\InventoryController@createitemtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.create.itemtype',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.boxboard' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/boxboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@boxboard',
        'controller' => 'App\\Http\\Controllers\\InventoryController@boxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.boxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.lamination' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/lamination',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@lamination',
        'controller' => 'App\\Http\\Controllers\\InventoryController@lamination',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.lamination',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.corrugation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/corrugation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@corrugation',
        'controller' => 'App\\Http\\Controllers\\InventoryController@corrugation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.corrugation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.plates' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/plates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@plates',
        'controller' => 'App\\Http\\Controllers\\InventoryController@plates',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.plates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.dye' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/dye',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@dye',
        'controller' => 'App\\Http\\Controllers\\InventoryController@dye',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.dye',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.ink' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/inventory/ink',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InventoryController@ink',
        'controller' => 'App\\Http\\Controllers\\InventoryController@ink',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inventory.ink',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock_report.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/stock_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StockReportController@index',
        'controller' => 'App\\Http\\Controllers\\StockReportController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stock_report.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock_report.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/stock_report/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StockReportController@store',
        'controller' => 'App\\Http\\Controllers\\StockReportController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stock_report.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock_report.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/stock_report/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StockReportController@reports',
        'controller' => 'App\\Http\\Controllers\\StockReportController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stock_report.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/delivery_challan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@index',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9YuxaJYzFUhUrFwe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-products/{partyId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@getProducts',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@getProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9YuxaJYzFUhUrFwe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/delivery_challan/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@reports',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/delivery_challan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@store',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/delivery_challan/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@edit',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/delivery_challan/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@update',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/delivery_challan/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@destroy',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/delivery_challan/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@delete',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.editDel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/delivery_challan/editCon/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@editCon',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@editCon',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.editDel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_challan.updateDel' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/delivery_challan/{v_no}/updateCon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryChallanController@updateCon',
        'controller' => 'App\\Http\\Controllers\\DeliveryChallanController@updateCon',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery_challan.updateDel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::erf0IpLlyECW8F5X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-aid/{accountId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@getAid',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@getAid',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::erf0IpLlyECW8F5X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/confectionery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@index',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/confectionery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@store',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/confectionery/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@reports',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/confectionery/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@edit',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/confectionery/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@update',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/confectionery/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@destroy',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/confectionery/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@delete',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.editCon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/confectionery/editCon/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@editCon',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@editCon',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.editCon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confectionery.updateCon' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/confectionery/{v_no}/updateCon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectioneryController@updateCon',
        'controller' => 'App\\Http\\Controllers\\ConfectioneryController@updateCon',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confectionery.updateCon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wastage_sale.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/wastage_sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WastageSaleController@index',
        'controller' => 'App\\Http\\Controllers\\WastageSaleController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wastage_sale.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wastage_sale.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/wastage_sale/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WastageSaleController@reports',
        'controller' => 'App\\Http\\Controllers\\WastageSaleController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wastage_sale.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wastage_sale.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/wastage_sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WastageSaleController@store',
        'controller' => 'App\\Http\\Controllers\\WastageSaleController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wastage_sale.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wastage_sale.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/wastage_sale/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WastageSaleController@destroy',
        'controller' => 'App\\Http\\Controllers\\WastageSaleController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wastage_sale.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wastage_sale.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/wastage_sale/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WastageSaleController@delete',
        'controller' => 'App\\Http\\Controllers\\WastageSaleController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wastage_sale.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wastage_sale.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/wastage_sale/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WastageSaleController@edit',
        'controller' => 'App\\Http\\Controllers\\WastageSaleController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wastage_sale.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wastage_sale.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/wastage_sale/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WastageSaleController@update',
        'controller' => 'App\\Http\\Controllers\\WastageSaleController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wastage_sale.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchase.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/dye_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchase.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchases.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/dye_purchase/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@reports',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchases.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/dye_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchase.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/dye_purchase/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchase.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchase.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/dye_purchase/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@delete',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchase.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/dye_purchase/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchase.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/dye_purchase/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchase.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchase.editDye' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/dye_purchase/editDye/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@editDye',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@editDye',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchase.editDye',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_purchase.updateDye' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/dye_purchase/{v_no}/updateDye',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyePurchaseController@updateDye',
        'controller' => 'App\\Http\\Controllers\\DyePurchaseController@updateDye',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_purchase.updateDye',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wastage.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/wastage/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\WastageController@reports',
        'controller' => 'App\\Http\\Controllers\\WastageController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wastage.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gZkc3QyWo4ff7QSj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-vnoss/{accountId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleInvoiceController@getVnoss',
        'controller' => 'App\\Http\\Controllers\\SaleInvoiceController@getVnoss',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gZkc3QyWo4ff7QSj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kDLxRQc977C2BAdn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-entry-detailss/{vno}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleInvoiceController@getEntryDetailss',
        'controller' => 'App\\Http\\Controllers\\SaleInvoiceController@getEntryDetailss',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kDLxRQc977C2BAdn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pharma_billing.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/pharma_billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleInvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\SaleInvoiceController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pharma_billing.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pharma_billing.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/pharma_billing/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleInvoiceController@reports',
        'controller' => 'App\\Http\\Controllers\\SaleInvoiceController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pharma_billing.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pharma_billing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/pharma_billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleInvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\SaleInvoiceController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pharma_billing.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pharma_billing.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/pharma-billing/{billing_no}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleInvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\SaleInvoiceController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pharma_billing.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::58UBB8IT9QcKcP9t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-vnos/{accountId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectBillingController@getVnos',
        'controller' => 'App\\Http\\Controllers\\ConfectBillingController@getVnos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::58UBB8IT9QcKcP9t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xcz17bLJsuRqTxpp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-entry-details/{vno}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectBillingController@getEntryDetails',
        'controller' => 'App\\Http\\Controllers\\ConfectBillingController@getEntryDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Xcz17bLJsuRqTxpp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confect_billing.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/confect_billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectBillingController@index',
        'controller' => 'App\\Http\\Controllers\\ConfectBillingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confect_billing.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confect_billing.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/confect_billing/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectBillingController@reports',
        'controller' => 'App\\Http\\Controllers\\ConfectBillingController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confect_billing.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confect_billing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/confect_billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectBillingController@store',
        'controller' => 'App\\Http\\Controllers\\ConfectBillingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confect_billing.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confect_billing.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/confect-billing/{billing_no}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfectBillingController@destroy',
        'controller' => 'App\\Http\\Controllers\\ConfectBillingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confect_billing.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_in.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_pass_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassInController@index',
        'controller' => 'App\\Http\\Controllers\\GatePassInController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_in.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_in.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_pass_in/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassInController@reports',
        'controller' => 'App\\Http\\Controllers\\GatePassInController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_in.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_in.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/gate_pass_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassInController@store',
        'controller' => 'App\\Http\\Controllers\\GatePassInController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_in.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_in.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_pass_in/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassInController@destroy',
        'controller' => 'App\\Http\\Controllers\\GatePassInController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_in.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_in.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/gate_pass_in/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassInController@delete',
        'controller' => 'App\\Http\\Controllers\\GatePassInController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_in.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_in.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_pass_in/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassInController@edit',
        'controller' => 'App\\Http\\Controllers\\GatePassInController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_in.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_in.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/gate_pass_in/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassInController@update',
        'controller' => 'App\\Http\\Controllers\\GatePassInController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_in.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_out.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_pass_out',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassOutController@index',
        'controller' => 'App\\Http\\Controllers\\GatePassOutController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_out.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_out.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_pass_out/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassOutController@reports',
        'controller' => 'App\\Http\\Controllers\\GatePassOutController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_out.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_out.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/gate_pass_out',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassOutController@store',
        'controller' => 'App\\Http\\Controllers\\GatePassOutController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_out.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_out.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_pass_out/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassOutController@destroy',
        'controller' => 'App\\Http\\Controllers\\GatePassOutController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_out.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_out.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/gate_pass_out/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassOutController@delete',
        'controller' => 'App\\Http\\Controllers\\GatePassOutController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_out.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_out.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/gate_pass_out/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassOutController@edit',
        'controller' => 'App\\Http\\Controllers\\GatePassOutController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_out.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gate_pass_out.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/gate_pass_out/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GatePassOutController@update',
        'controller' => 'App\\Http\\Controllers\\GatePassOutController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gate_pass_out.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cheque.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cheque_receipts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChequeReceiptsController@index',
        'controller' => 'App\\Http\\Controllers\\ChequeReceiptsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cheque.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cheque_receipts.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cheque_receipts/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChequeReceiptsController@reports',
        'controller' => 'App\\Http\\Controllers\\ChequeReceiptsController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cheque_receipts.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cheque_receipts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/cheque_receipts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChequeReceiptsController@store',
        'controller' => 'App\\Http\\Controllers\\ChequeReceiptsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cheque_receipts.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chequeReceipts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/cheque-receipts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChequeReceiptsController@destroy',
        'controller' => 'App\\Http\\Controllers\\ChequeReceiptsController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'chequeReceipts.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cheque_receipts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cheque_receipts/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChequeReceiptsController@edit',
        'controller' => 'App\\Http\\Controllers\\ChequeReceiptsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cheque_receipts.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cheque_receipts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/cheque_receipts/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChequeReceiptsController@update',
        'controller' => 'App\\Http\\Controllers\\ChequeReceiptsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cheque_receipts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cheque_receipts.del' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/cheque_receipt/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChequeReceiptsController@del',
        'controller' => 'App\\Http\\Controllers\\ChequeReceiptsController@del',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cheque_receipts.del',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\CountryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'country.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\CountryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'country.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/country/add_country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CountryController@list',
        'controller' => 'App\\Http\\Controllers\\CountryController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'country.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/country/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\CountryController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'country.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomController@index',
        'controller' => 'App\\Http\\Controllers\\CustomController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'custom.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomController@store',
        'controller' => 'App\\Http\\Controllers\\CustomController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'custom.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/custom/add_country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomController@list',
        'controller' => 'App\\Http\\Controllers\\CustomController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'custom.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/custom/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomController@destroy',
        'controller' => 'App\\Http\\Controllers\\CustomController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'custom.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'print.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/printing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentSectionController@index',
        'controller' => 'App\\Http\\Controllers\\DepartmentSectionController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'print.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'print.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/printing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentSectionController@store',
        'controller' => 'App\\Http\\Controllers\\DepartmentSectionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'print.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'print.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/printing/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentSectionController@edit',
        'controller' => 'App\\Http\\Controllers\\DepartmentSectionController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'print.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'print.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/printing/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentSectionController@update',
        'controller' => 'App\\Http\\Controllers\\DepartmentSectionController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'print.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'print.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/printing/add_printing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentSectionController@list',
        'controller' => 'App\\Http\\Controllers\\DepartmentSectionController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'print.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'print.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/printing/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentSectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\DepartmentSectionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'print.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designation.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/designation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignationController@index',
        'controller' => 'App\\Http\\Controllers\\DesignationController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'designation.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/designation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignationController@store',
        'controller' => 'App\\Http\\Controllers\\DesignationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'designation.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designation.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/designation/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignationController@edit',
        'controller' => 'App\\Http\\Controllers\\DesignationController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'designation.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designation.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/designation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignationController@update',
        'controller' => 'App\\Http\\Controllers\\DesignationController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'designation.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designation.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/designation/add_printing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignationController@list',
        'controller' => 'App\\Http\\Controllers\\DesignationController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'designation.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/designation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignationController@destroy',
        'controller' => 'App\\Http\\Controllers\\DesignationController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'designation.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'extra_time.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/extra_time',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtraTimeController@index',
        'controller' => 'App\\Http\\Controllers\\ExtraTimeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'extra_time.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'extra_time.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/extra_time',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtraTimeController@store',
        'controller' => 'App\\Http\\Controllers\\ExtraTimeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'extra_time.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'extra_time.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/extra_time/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtraTimeController@edit',
        'controller' => 'App\\Http\\Controllers\\ExtraTimeController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'extra_time.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'extra_time.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/extra_time/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtraTimeController@update',
        'controller' => 'App\\Http\\Controllers\\ExtraTimeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'extra_time.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'extra_time.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/extra_time/add_printing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtraTimeController@list',
        'controller' => 'App\\Http\\Controllers\\ExtraTimeController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'extra_time.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'extra_time.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/extra_time/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtraTimeController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExtraTimeController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'extra_time.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'process.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProcessSectionController@index',
        'controller' => 'App\\Http\\Controllers\\ProcessSectionController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'process.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'process.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProcessSectionController@store',
        'controller' => 'App\\Http\\Controllers\\ProcessSectionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'process.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'process.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/process/add_process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProcessSectionController@list',
        'controller' => 'App\\Http\\Controllers\\ProcessSectionController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'process.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'process.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/process/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProcessSectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProcessSectionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'process.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paste.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/paste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PasteSectionController@index',
        'controller' => 'App\\Http\\Controllers\\PasteSectionController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paste.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paste.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/paste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PasteSectionController@store',
        'controller' => 'App\\Http\\Controllers\\PasteSectionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paste.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paste.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/paste/add_paste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PasteSectionController@list',
        'controller' => 'App\\Http\\Controllers\\PasteSectionController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paste.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paste.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/paste/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PasteSectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\PasteSectionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paste.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registration_form.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/registration_form/add_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RegistrationFormController@index',
        'controller' => 'App\\Http\\Controllers\\RegistrationFormController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registration_form.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registration_form.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/registration_form/add_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RegistrationFormController@store',
        'controller' => 'App\\Http\\Controllers\\RegistrationFormController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registration_form.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registration_form.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/registration_form/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RegistrationFormController@reports',
        'controller' => 'App\\Http\\Controllers\\RegistrationFormController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registration_form.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registration_form.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/registration_form/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RegistrationFormController@edit',
        'controller' => 'App\\Http\\Controllers\\RegistrationFormController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registration_form.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registration_form.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/registration_form/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RegistrationFormController@update',
        'controller' => 'App\\Http\\Controllers\\RegistrationFormController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registration_form.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registration_form.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/registration_form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RegistrationFormController@destroy',
        'controller' => 'App\\Http\\Controllers\\RegistrationFormController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registration_form.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'remove.image' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/registration_form/remove-image/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RegistrationFormController@removeImage',
        'controller' => 'App\\Http\\Controllers\\RegistrationFormController@removeImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'remove.image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_log.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/product-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductLogController@index',
        'controller' => 'App\\Http\\Controllers\\ProductLogController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_log.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_log.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/product-log/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductLogController@report',
        'controller' => 'App\\Http\\Controllers\\ProductLogController@report',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_log.report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_invoice.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/payment_invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment_invoice.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_invoice.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/payment_invoice/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@reports',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment_invoice.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_invoice.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/payment_invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment_invoice.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_details.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase-details/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_details.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_details.editBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase-details/editBoxboard/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@editBoxboard',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@editBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_details.editBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_details.updateBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/purchase-details/{v_no}/updateBoxboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@updateBoxboard',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@updateBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_details.updateBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_details.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/purchase-details/{v_no}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_details.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_details.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/purchase-details/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_details.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_details.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase-details/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentInvoiceController@delete',
        'controller' => 'App\\Http\\Controllers\\PaymentInvoiceController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_details.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_return.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@index',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_return.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/purchase_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@store',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_return.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_return.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase_return/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@reports',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_return.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase_return/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_return.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_return.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/purchase_return/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@delete',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_return.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_return.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase_return/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_return.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase_return.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/purchase_return/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@update',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase_return.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_purchase.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/plate_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlatePurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\PlatePurchaseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_purchase.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_purchase.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/plate_purchase/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlatePurchaseController@reports',
        'controller' => 'App\\Http\\Controllers\\PlatePurchaseController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_purchase.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1WwH3kYZ7V72ys2o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/get-products-by-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlatePurchaseController@getProductsByCountry',
        'controller' => 'App\\Http\\Controllers\\PlatePurchaseController@getProductsByCountry',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1WwH3kYZ7V72ys2o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/plate_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlatePurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\PlatePurchaseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_purchase.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/plate_purchase/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlatePurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\PlatePurchaseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_purchase.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/plate_purchase/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlatePurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\PlatePurchaseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_purchase.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/plate_purchase/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlatePurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\PlatePurchaseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_purchase.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_purchase.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/plate_purchase/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlatePurchaseController@delete',
        'controller' => 'App\\Http\\Controllers\\PlatePurchaseController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_purchase.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_return.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/plate_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlateReturnController@index',
        'controller' => 'App\\Http\\Controllers\\PlateReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_return.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_return.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/plate_return/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlateReturnController@reports',
        'controller' => 'App\\Http\\Controllers\\PlateReturnController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_return.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/plate_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlateReturnController@store',
        'controller' => 'App\\Http\\Controllers\\PlateReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_return.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plate_return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/plate_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlateReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\PlateReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plate_return.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/glue_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/glue_purchase/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@reports',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/glue_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/glue_purchase/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/glue_purchase/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/glue_purchase/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/glue_purchase/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@delete',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.editBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/glue_purchase/editBoxboard/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@editBoxboard',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@editBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.editBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_purchase.updateBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/glue_purchase/{v_no}/updateBoxboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GluePurchaseController@updateBoxboard',
        'controller' => 'App\\Http\\Controllers\\GluePurchaseController@updateBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_purchase.updateBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_return.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/glue_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GlueReturnController@index',
        'controller' => 'App\\Http\\Controllers\\GlueReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_return.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_return.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/glue_return/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GlueReturnController@reports',
        'controller' => 'App\\Http\\Controllers\\GlueReturnController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_return.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/glue_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GlueReturnController@store',
        'controller' => 'App\\Http\\Controllers\\GlueReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_return.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'glue_return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/glue_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\GlueReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\GlueReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'glue_return.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ink_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ink_purchase/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@reports',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/ink_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ink_purchase/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/ink_purchase/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ink_purchase/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/ink_purchase/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@delete',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.editBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ink_purchase/editBoxboard/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@editBoxboard',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@editBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.editBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_purchase.updateBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/ink_purchase/{v_no}/updateBoxboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkPurchaseController@updateBoxboard',
        'controller' => 'App\\Http\\Controllers\\InkPurchaseController@updateBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_purchase.updateBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_return.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ink_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkReturnController@index',
        'controller' => 'App\\Http\\Controllers\\InkReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_return.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_return.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/ink_return/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkReturnController@reports',
        'controller' => 'App\\Http\\Controllers\\InkReturnController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_return.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/ink_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkReturnController@store',
        'controller' => 'App\\Http\\Controllers\\InkReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_return.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ink_return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/ink_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InkReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\InkReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ink_return.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/shippers_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@index',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/shippers_purchase/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@reports',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/shippers_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@store',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/shippers_purchase/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@edit',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/shippers_purchase/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@update',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/shippers_purchase/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@destroy',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/shippers_purchase/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@delete',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.editBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/shippers_purchase/editBoxboard/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@editBoxboard',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@editBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.editBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_purchases.updateBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/shippers_purchase/{v_no}/updateBoxboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperPurchasesController@updateBoxboard',
        'controller' => 'App\\Http\\Controllers\\ShipperPurchasesController@updateBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_purchases.updateBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_return.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/shipper_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperReturnController@index',
        'controller' => 'App\\Http\\Controllers\\ShipperReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_return.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_return.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/shipper_return/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperReturnController@reports',
        'controller' => 'App\\Http\\Controllers\\ShipperReturnController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_return.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/shipper_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperReturnController@store',
        'controller' => 'App\\Http\\Controllers\\ShipperReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_return.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper_return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/shipper_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShipperReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\ShipperReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipper_return.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_return.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/dye_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyeReturnController@index',
        'controller' => 'App\\Http\\Controllers\\DyeReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_return.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_return.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/dye_return/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyeReturnController@reports',
        'controller' => 'App\\Http\\Controllers\\DyeReturnController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_return.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/dye_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyeReturnController@store',
        'controller' => 'App\\Http\\Controllers\\DyeReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_return.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dye_return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/dye_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DyeReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\DyeReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dye_return.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/lemination_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/lemination_purchase/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@reports',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/lemination_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/lemination_purchase/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/lemination_purchase/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/lemination_purchase/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/lemination_purchase/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@delete',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.editBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/lemination_purchase/editBoxboard/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@editBoxboard',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@editBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.editBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lemination_purchase.updateBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/lemination_purchase/{v_no}/updateBoxboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LeminationPurchaseController@updateBoxboard',
        'controller' => 'App\\Http\\Controllers\\LeminationPurchaseController@updateBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lemination_purchase.updateBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lamination_return.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/lamination_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LaminationReturnController@index',
        'controller' => 'App\\Http\\Controllers\\LaminationReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lamination_return.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lamination_return.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/lamination_return/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LaminationReturnController@reports',
        'controller' => 'App\\Http\\Controllers\\LaminationReturnController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lamination_return.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lamination_return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/lamination_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LaminationReturnController@store',
        'controller' => 'App\\Http\\Controllers\\LaminationReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lamination_return.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lamination_return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/lamination_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LaminationReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\LaminationReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lamination_return.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_return.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/corrugation_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationReturnController@index',
        'controller' => 'App\\Http\\Controllers\\CorrugationReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_return.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_return.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/corrugation_return/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationReturnController@reports',
        'controller' => 'App\\Http\\Controllers\\CorrugationReturnController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_return.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/corrugation_return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationReturnController@store',
        'controller' => 'App\\Http\\Controllers\\CorrugationReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_return.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/corrugation_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\CorrugationReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_return.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/corrugation_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/corrugation_purchase/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@reports',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@reports',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/corrugation_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/corrugation_purchase/edit/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/corrugation_purchase/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/corrugation_purchase/{v_no}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/corrugation_purchase/{id}/del',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@delete',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.editBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/corrugation_purchase/editBoxboard/{v_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@editBoxboard',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@editBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.editBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corrugation_purchase.updateBoxboard' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/corrugation_purchase/{v_no}/updateBoxboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CorrugationPurchaseController@updateBoxboard',
        'controller' => 'App\\Http\\Controllers\\CorrugationPurchaseController@updateBoxboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corrugation_purchase.updateBoxboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.sales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.sales.index',
        'uses' => 'App\\Http\\Controllers\\SaleDetails@index',
        'controller' => 'App\\Http\\Controllers\\SaleDetails@index',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.sales.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/sales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.sales.create',
        'uses' => 'App\\Http\\Controllers\\SaleDetails@create',
        'controller' => 'App\\Http\\Controllers\\SaleDetails@create',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.sales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.sales.store',
        'uses' => 'App\\Http\\Controllers\\SaleDetails@store',
        'controller' => 'App\\Http\\Controllers\\SaleDetails@store',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.sales.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.sales.show',
        'uses' => 'App\\Http\\Controllers\\SaleDetails@show',
        'controller' => 'App\\Http\\Controllers\\SaleDetails@show',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.sales.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/sales/{sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.sales.edit',
        'uses' => 'App\\Http\\Controllers\\SaleDetails@edit',
        'controller' => 'App\\Http\\Controllers\\SaleDetails@edit',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.sales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'premiertax/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.sales.update',
        'uses' => 'App\\Http\\Controllers\\SaleDetails@update',
        'controller' => 'App\\Http\\Controllers\\SaleDetails@update',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.sales.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.sales.destroy',
        'uses' => 'App\\Http\\Controllers\\SaleDetails@destroy',
        'controller' => 'App\\Http\\Controllers\\SaleDetails@destroy',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.purchase.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.purchase.index',
        'uses' => 'App\\Http\\Controllers\\PurchaseDetail@index',
        'controller' => 'App\\Http\\Controllers\\PurchaseDetail@index',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.purchase.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.purchase.create',
        'uses' => 'App\\Http\\Controllers\\PurchaseDetail@create',
        'controller' => 'App\\Http\\Controllers\\PurchaseDetail@create',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.purchase.store',
        'uses' => 'App\\Http\\Controllers\\PurchaseDetail@store',
        'controller' => 'App\\Http\\Controllers\\PurchaseDetail@store',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.purchase.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.purchase.show',
        'uses' => 'App\\Http\\Controllers\\PurchaseDetail@show',
        'controller' => 'App\\Http\\Controllers\\PurchaseDetail@show',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/purchase/{purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.purchase.edit',
        'uses' => 'App\\Http\\Controllers\\PurchaseDetail@edit',
        'controller' => 'App\\Http\\Controllers\\PurchaseDetail@edit',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'premiertax/purchase/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.purchase.update',
        'uses' => 'App\\Http\\Controllers\\PurchaseDetail@update',
        'controller' => 'App\\Http\\Controllers\\PurchaseDetail@update',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'premiertax.purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/purchase/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'premiertax.purchase.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchaseDetail@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchaseDetail@destroy',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'unit.index',
        'uses' => 'App\\Http\\Controllers\\ItemUnit@index',
        'controller' => 'App\\Http\\Controllers\\ItemUnit@index',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Units/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'unit.create',
        'uses' => 'App\\Http\\Controllers\\ItemUnit@create',
        'controller' => 'App\\Http\\Controllers\\ItemUnit@create',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/Units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'unit.store',
        'uses' => 'App\\Http\\Controllers\\ItemUnit@store',
        'controller' => 'App\\Http\\Controllers\\ItemUnit@store',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Units/{Unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'unit.show',
        'uses' => 'App\\Http\\Controllers\\ItemUnit@show',
        'controller' => 'App\\Http\\Controllers\\ItemUnit@show',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/Units/{Unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'unit.edit',
        'uses' => 'App\\Http\\Controllers\\ItemUnit@edit',
        'controller' => 'App\\Http\\Controllers\\ItemUnit@edit',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'premiertax/Units/{Unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'unit.update',
        'uses' => 'App\\Http\\Controllers\\ItemUnit@update',
        'controller' => 'App\\Http\\Controllers\\ItemUnit@update',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/Units/{Unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'unit.destroy',
        'uses' => 'App\\Http\\Controllers\\ItemUnit@destroy',
        'controller' => 'App\\Http\\Controllers\\ItemUnit@destroy',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-backup.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/data-backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'data-backup.index',
        'uses' => 'App\\Http\\Controllers\\Backup@index',
        'controller' => 'App\\Http\\Controllers\\Backup@index',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-backup.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/data-backup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'data-backup.create',
        'uses' => 'App\\Http\\Controllers\\Backup@create',
        'controller' => 'App\\Http\\Controllers\\Backup@create',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-backup.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/data-backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'data-backup.store',
        'uses' => 'App\\Http\\Controllers\\Backup@store',
        'controller' => 'App\\Http\\Controllers\\Backup@store',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-backup.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/data-backup/{data_backup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'data-backup.show',
        'uses' => 'App\\Http\\Controllers\\Backup@show',
        'controller' => 'App\\Http\\Controllers\\Backup@show',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-backup.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/data-backup/{data_backup}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'data-backup.edit',
        'uses' => 'App\\Http\\Controllers\\Backup@edit',
        'controller' => 'App\\Http\\Controllers\\Backup@edit',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-backup.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'premiertax/data-backup/{data_backup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'data-backup.update',
        'uses' => 'App\\Http\\Controllers\\Backup@update',
        'controller' => 'App\\Http\\Controllers\\Backup@update',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-backup.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/data-backup/{data_backup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'data-backup.destroy',
        'uses' => 'App\\Http\\Controllers\\Backup@destroy',
        'controller' => 'App\\Http\\Controllers\\Backup@destroy',
        'namespace' => NULL,
        'prefix' => '/premiertax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JYXWSkxE5UWAHBXH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JYXWSkxE5UWAHBXH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2xhg6TvasDp9tKLo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function(){
    return "Hello World";
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009630000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2xhg6TvasDp9tKLo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l2mjU0etb9P168Zq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/update-company-id/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:162:"function ($id) {
    (new \\App\\Http\\Controllers\\Addvalue)->updateCompanyIdForAllTables($id);
    return "Updated c_id with company id = $id for all tables.";
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009650000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::l2mjU0etb9P168Zq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:48:"function () {
    return \\view(\'dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009830000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoicing.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/invoicing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@index',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'invoicing.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoicing.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/invoicing/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@submitInvoice',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@submitInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'invoicing.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoicing.validate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/invoicing/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@validateInvoice',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@validateInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'invoicing.validate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.provinces' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/fbr/provinces',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getProvinceCodes',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getProvinceCodes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.provinces',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.hs-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/fbr/hs-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getHsCodes',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getHsCodes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.hs-codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.item-description-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/fbr/item-description-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getItemDescriptionCodes',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getItemDescriptionCodes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.item-description-codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.uom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/fbr/uom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getUnitsOfMeasurement',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getUnitsOfMeasurement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.uom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.transaction-types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/fbr/transaction-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getTransactionTypeCodes',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getTransactionTypeCodes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.transaction-types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.tax-rates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/fbr/tax-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getTaxRates',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getTaxRates',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.tax-rates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fbr.doctypecode' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/api/fbr/doctypecode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoicingController@getDocumentTypeCodes',
        'controller' => 'App\\Http\\Controllers\\InvoicingController@getDocumentTypeCodes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.fbr.doctypecode',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'drafts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/drafts/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DraftController@edit',
        'controller' => 'App\\Http\\Controllers\\DraftController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'drafts.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'drafts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/drafts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DraftController@index',
        'controller' => 'App\\Http\\Controllers\\DraftController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'drafts.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'drafts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'premiertax/drafts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DraftController@update',
        'controller' => 'App\\Http\\Controllers\\DraftController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'drafts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'drafts.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/drafts/{id}/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DraftController@submit',
        'controller' => 'App\\Http\\Controllers\\DraftController@submit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'drafts.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoicing.saveDraft' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'premiertax/invoicing/save-draft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DraftController@saveDraft',
        'controller' => 'App\\Http\\Controllers\\DraftController@saveDraft',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'invoicing.saveDraft',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'drafts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'premiertax/draftinvoices/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DraftController@destroy',
        'controller' => 'App\\Http\\Controllers\\DraftController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'drafts.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VywqxAcXifDqQzmC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premiertax/route-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:210:"function() {
    // Execute the route:list command and capture output
    \\Artisan::call(\'route:list\');
    
    // Get the command output
    $output = \\Artisan::output();
    
    return $output;
;
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009850000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VywqxAcXifDqQzmC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
