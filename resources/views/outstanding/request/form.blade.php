<x-layout.main>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Outstanding</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Form Outstanding
                    <div class="pull-right">
                        <a href="{{ route('app.outstanding.request') }}" class="btn btn-default btn-xs">Back</a>
                        {{-- <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                data-toggle="dropdown">
                                Filter
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Request</a>
                                </li>
                                <li><a href="#">History</a>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control" type="text" placeholder="Enter description">
                        <p class="help-block">name of vendor to be registered</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input class="form-control" type="text" placeholder="Enter NIK">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NPWP</label>
                                <input class="form-control" type="text" placeholder="Enter NPWP">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input class="form-control" type="text" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="Enter email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Is Plantation</label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                        value="option1" checked="">PRV
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2"
                                        value="option2">NPRV
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tax</label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                        value="option1" checked="">VAT
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2"
                                        value="option2">NVAT
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2"
                                        value="option2">-
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <select class="js-example-basic-single" name="state" class="form-control" style="width: 100%">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->code . ' | ' . $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Region</label>
                        <select class="js-example-basic-single" name="state" class="form-control" style="width: 100%">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input class="form-control" type="text" placeholder="Enter city">
                    </div>
                    <div class="form-group">
                        <label>Districts</label>
                        <input class="form-control" type="text" placeholder="Enter district">
                    </div>
                    <div class="form-group">
                        <label>Street</label>
                        <input class="form-control" type="text" placeholder="Enter street">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Term Of Payment</label>
                                <select class="js-example-basic-single" name="state" class="form-control"
                                    style="width: 100%">
                                    @foreach ($termOfPayments as $termOfPayment)
                                        <option value="{{ $termOfPayment->id }}">
                                            {{ $termOfPayment->code . ' | ' . $termOfPayment->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Payment Method</label>
                                <select class="js-example-basic-single" name="state" class="form-control"
                                    style="width: 100%">
                                    @foreach ($paymentMethods as $paymentMethod)
                                        <option value="{{ $paymentMethod->id }}">
                                            {{ $paymentMethod->code . ' | ' . $paymentMethod->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Finance</label>
                                <select class="js-example-basic-single" name="state" class="form-control"
                                    style="width: 100%">
                                    @foreach ($finances as $finance)
                                        <option value="{{ $finance->id }}">
                                            {{ $finance->code . ' | ' . $finance->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Currency</label>
                                <select class="js-example-basic-single" name="state" class="form-control"
                                    style="width: 100%">
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->id }}">
                                            {{ $currency->code . ' | ' . $currency->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Schema Group</label>
                                <select class="js-example-basic-single" name="state" class="form-control"
                                    style="width: 100%">
                                    @foreach ($schemaGroups as $schemaGroup)
                                        <option value="{{ $schemaGroup->id }}">
                                            {{ $schemaGroup->code . ' | ' . $schemaGroup->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2({
                    theme: "bootstrap",
                    width: 'resolve'
                });
            });
        </script>
    @endpush
</x-layout.main>
