<?php

namespace Modules\Report\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function transactionReport()
    {
        return view('report::transaction');
    }
    public function saleReport()
    {
        return view('report::sales');
    }
    public function productReport()
    {
        return view('report::products');
    }
    public function brandReport()
    {
        return view('report::brand');
    }
}
