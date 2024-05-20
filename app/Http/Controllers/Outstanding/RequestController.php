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

class RequestController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Form::select(
                'form.*',
                DB::raw("CONCAT(company.code,' | ',company.name) as code_name"),
                'users.name as created_name',
                'form.status as request_status',
                'form.step_approval as approval_status',
                DB::raw("CONCAT(company.name, '-', form.id) as form_ticket"),
            )
                ->join('users', 'users.id', '=', 'form.created_by')
                ->join('company', 'company.id', '=', 'form.company_id')
                ->join('account_group', 'account_group.id', '=', 'form.account_group_id')
                ->join('type', 'type.id', '=', 'form.type_id')
                ->join('region', 'region.id', '=', 'form.region_id')
                ->join('country', 'country.id', '=', 'region.country_id');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    // $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    // return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('outstanding.request.index');
    }

    public function form(Request $request)
    {
        if(auth()->user()->level == '2' || auth()->user()->level == '4'){
            $termOfPayments = TermOfPayment::where('company_id', auth()->user()->company_id)->get();
            $paymentMethods = PaymentMethod::where('company_id', auth()->user()->company_id)->get();
            $finances = Finance::where('company_id', auth()->user()->company_id)->get();
            $currencies = Currency::get();
            $schemaGroups = SchemaGroup::where('company_id', auth()->user()->company_id)->get();
            $countries = Country::where('company_id', auth()->user()->company_id)->get();

            return view('outstanding.request.form', compact('termOfPayments', 'paymentMethods', 'finances', 'currencies', 'schemaGroups', 'countries'));
        }else{
            return redirect()->route('app.outstanding.request');
        }
    }
}
