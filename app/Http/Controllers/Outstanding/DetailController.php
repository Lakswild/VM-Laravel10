<?php

namespace App\Http\Controllers\Outstanding;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Finance;
use App\Models\PaymentMethod;
use App\Models\SchemaGroup;
use App\Models\TermOfPayment;
use Yajra\DataTables\Facades\DataTables;

class DetailController extends Controller
{
    public function view()
    {
        return view('outstanding.detail.index');
    }
}