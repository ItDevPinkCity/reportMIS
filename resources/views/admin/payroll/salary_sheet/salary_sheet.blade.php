@extends('admin.layout.app')
@section('content')
@php
$showurl = url('/hr/salary_sheet?show='.request()->show.'&company='.request()->company.'&employee_name='.request()->employee_name.'&status='.request()->status.'&year='.request()->year);
@endphp

    <div class="main-panel">
        <div class="content">
            @includeif('admin.payroll.salary_sheet.filters')
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="clearfix"></div>
                        <div class="row">
                     <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                           <div class="x_content">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="card-box table-responsive">

                                      @php

                                        $staff_1 = 0;
                                        $worker_1 = 0;

                                        $gross_1 = 0;


                                        $basic_1 = 0;
                                        $city_compensatory_allowance_1 = 0;
                                        $washing_allowance_1 = 0;
                                        $house_rent_allowance_1 = 0;
                                        $overtime_1 = 0;
                                        $arrear_1 = 0;
                                        $incentive_pay_1 = 0;
                                        $travelling_allowance_1 = 0;
                                        $leave_encashment_1 = 0;

                                        $employee_contribution_PF_1 = 0;
                                        $employee_contribution_ESI_1 = 0;
                                        $late_hours_deduction_1 = 0;
                                        $advance_deduction_1 = 0;
                                        $tax_deducted_at_source_1 = 0;
                                        $professional_tax_1 = 0;
                                        $income_tax_1 = 0;
                                        $ABRY_scheme_1 = 0;
                                        $GMI_1 = 0;


                                        $gross_2 = 0;

                                        $basic_2 = 0;
                                        $city_compensatory_allowance_2 = 0;
                                        $washing_allowance_2 = 0;
                                        $house_rent_allowance_2 = 0;
                                        $overtime_2 = 0;
                                        $arrear_2 = 0;
                                        $incentive_pay_2 = 0;
                                        $travelling_allowance_2 = 0;
                                        $leave_encashment_2 = 0;

                                        $employee_contribution_PF_2 = 0;
                                        $employee_contribution_ESI_2 = 0;
                                        $late_hours_deduction_2 = 0;
                                        $advance_deduction_2 = 0;
                                        $tax_deducted_at_source_2 = 0;
                                        $professional_tax_2 = 0;
                                        $income_tax_2 = 0;
                                        $ABRY_scheme_2 = 0;
                                        $GMI_2 = 0;

                                        $hdfc_bank = 0;
                                        $other_bank = 0;
                                        $total_bank = 0;

                                      @endphp

                                      @foreach($salary_sheet_data['staff'] as $key => $data)
                                         @if ($data->salary_component_abbr == 'B') @php $basic_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'CCA') @php $city_compensatory_allowance_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'WA') @php $washing_allowance_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'HRA') @php $house_rent_allowance_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'OT') @php $overtime_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'A') @php $arrear_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'IP') @php $incentive_pay_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'TA') @php $travelling_allowance_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'LE') @php $leave_encashment_1 = $data->amount; @endphp @endif

                                         @if ($data->salary_component_abbr == 'PF') @php $employee_contribution_PF_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'ESI') @php $employee_contribution_ESI_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'LHD') @php $late_hours_deduction_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'AD') @php $advance_deduction_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'TDS') @php $tax_deducted_at_source_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'PT') @php $professional_tax_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'IT') @php $income_tax_1 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'ABRY') @php $ABRY_scheme_1 = abs($data->amount); @endphp @endif
                                         @if ($data->salary_component_abbr == 'GMI') @php $GMI_1 = $data->amount; @endphp @endif
                                      @endforeach

                                      @foreach($salary_sheet_data['worker'] as $key => $data)
                                         @if ($data->salary_component_abbr == 'B') @php $basic_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'CCA') @php $city_compensatory_allowance_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'WA') @php $washing_allowance_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'HRA') @php $house_rent_allowance_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'OT') @php $overtime_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'A') @php $arrear_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'IP') @php $incentive_pay_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'TA') @php $travelling_allowance_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'LE') @php $leave_encashment_2 = $data->amount; @endphp @endif

                                         @if ($data->salary_component_abbr == 'PF') @php $employee_contribution_PF_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'ESI') @php $employee_contribution_ESI_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'LHD') @php $late_hours_deduction_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'AD') @php $advance_deduction_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'TDS') @php $tax_deducted_at_source_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'PT') @php $professional_tax_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'IT') @php $income_tax_2 = $data->amount; @endphp @endif
                                         @if ($data->salary_component_abbr == 'ABRY') @php $ABRY_scheme_2 = abs($data->amount); @endphp @endif
                                         @if ($data->salary_component_abbr == 'GMI') @php $GMI_2 = $data->amount; @endphp @endif
                                      @endforeach


                                      @foreach($salary_sheet_data['gross_data'] as $key => $data)
                                         @if ($data->occupation == 'Staff') @php $gross_1 = $data->gross_monthly_salary; $staff_1 = $data->employee_count; @endphp @endif
                                         @if ($data->occupation == 'Worker') @php $gross_2 = $data->gross_monthly_salary; $worker_1 = $data->employee_count; @endphp @endif
                                      @endforeach

                                      @foreach($salary_sheet_data['bank_data'] as $key => $data)
                                         @if ($data->bank_name_new == 'HDFC Bank') @php $hdfc_bank += $data->net_pay; @endphp
                                         @else @php $other_bank += $data->net_pay; @endphp @endif
                                      @endforeach

                                      @php
                                          $employee_total = $staff_1 + $worker_1;
                                          $gross_total = $gross_1 + $gross_2;

                                          $basic_total = $basic_1 + $basic_2;
                                          $city_compensatory_allowance_total = $city_compensatory_allowance_1 + $city_compensatory_allowance_2;
                                          $washing_allowance_total = $washing_allowance_1 + $washing_allowance_2;
                                          $house_rent_allowance_total = $house_rent_allowance_1 + $house_rent_allowance_2;
                                          $overtime_total = $overtime_1 + $overtime_2;
                                          $arrear_total = $arrear_1 + $arrear_2;
                                          $incentive_pay_total = $incentive_pay_1 + $incentive_pay_2;
                                          $travelling_allowance_total = $travelling_allowance_1 + $travelling_allowance_2;
                                          $leave_encashment_total = $leave_encashment_1 + $leave_encashment_2;

                                          $employee_contribution_PF_total = $employee_contribution_PF_1 + $employee_contribution_PF_2;
                                          $employee_contribution_ESI_total = $employee_contribution_ESI_1 + $employee_contribution_ESI_2;
                                          $late_hours_deduction_total = $late_hours_deduction_1 + $late_hours_deduction_2;
                                          $advance_deduction_total = $advance_deduction_1 + $advance_deduction_2;
                                          $tax_deducted_at_source_total = $tax_deducted_at_source_1 + $tax_deducted_at_source_2;
                                          $professional_tax_total = $professional_tax_1 + $professional_tax_2;
                                          $income_tax_total = $income_tax_1 + $income_tax_2;
                                          $ABRY_scheme_total = $ABRY_scheme_1 + $ABRY_scheme_2;
                                          $GMI_total = $GMI_1 + $GMI_2;

                                          $earned_gross_1 = $basic_1 + $city_compensatory_allowance_1 + $washing_allowance_1 + $house_rent_allowance_1 + $overtime_1 +
                                                            $arrear_1 + $incentive_pay_1 + $leave_encashment_1 + $travelling_allowance_1 + $ABRY_scheme_1;

                                          $net_gross_1 = $earned_gross_1 - $late_hours_deduction_1;

                                          $earned_gross_2 = $basic_2 + $city_compensatory_allowance_2 + $washing_allowance_2 + $house_rent_allowance_2 + $overtime_2 +
                                                            $arrear_2 + $incentive_pay_2 + $leave_encashment_2 + $travelling_allowance_2 + $ABRY_scheme_2;

                                          $net_gross_2 = $earned_gross_2 - $late_hours_deduction_2;

                                          $total_1 = $earned_gross_1 - $employee_contribution_PF_1 - $employee_contribution_ESI_1 - $late_hours_deduction_1 - $advance_deduction_1
                                                     - $tax_deducted_at_source_1 - $professional_tax_1 - $income_tax_1 - $GMI_1;

                                          $total_2 = $earned_gross_2 - $employee_contribution_PF_2 - $employee_contribution_ESI_2 - $late_hours_deduction_2 - $advance_deduction_2
                                                     - $tax_deducted_at_source_2 - $professional_tax_2 - $income_tax_2 - $GMI_2;

                                          $earned_gross_total = $earned_gross_1 + $earned_gross_2;
                                          $net_gross_total = $net_gross_1 + $net_gross_2;
                                          $total_total = $total_1 + $total_2;

                                          $total_bank = $hdfc_bank + $other_bank

                                      @endphp

                                       <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                          <thead>
                                             <tr style="text-align: center;text-shadow: 1px 1px 1px lightgrey, 3px 3px 5px lightgrey;">
                                               <th colspan="4"></th>
                                               <th colspan="10">Earning</th>
                                               <th colspan="2"></th>
                                               <th colspan="8">Deduction</th>
                                               <th></th>
                                             </tr>
                                             <tr style="text-align: center;text-shadow: 1px 1px 1px lightgrey, 3px 3px 5px lightgrey;">
                                               <th>S.NO.</th>
                                               <th>Occupation</th>
                                               <th>Gross</th>

                                               <th>Employee</th>
                                               <th>Basic</th>
                                               <th>City Compensatory Allowance</th>
                                               <th>Washing Allowance</th>
                                               <th>House Rent Allowance</th>
                                               <th>Overtime</th>
                                               <th>Arrear</th>
                                               <th>Incentive Pay</th>
                                               <th>Leave Encashment</th>
                                               <th>Travelling Allowance</th>
                                               <th>ABRY Scheme</th>

                                               <th>Earned Gross</th>
                                               <th>Net Gross</th>

                                               <th>Employee Contribution PF</th>
                                               <th>Employee Contribution ESI</th>
                                               <th>Late Hours Deduction</th>
                                               <th>Advance Deduction</th>
                                               <th>Tax Deducted at Source</th>
                                               <th>Professional Tax</th>
                                               <th>Income Tax</th>
                                               <th>GMI</th>


                                               <th>Total</th>


                                             </tr>
                                          </thead>
                                          <tbody>
                                            <tr  style="text-align: center;">
                                              <td>1</td>
                                              <td>Staff</td>
                                              <td>{{ number_format($gross_1) }}</td>

                                              <td>{{ number_format($staff_1) }}</td>
                                              <td>{{ number_format($basic_1) }}</td>
                                              <td>{{ number_format($city_compensatory_allowance_1) }}</td>
                                              <td>{{ number_format($washing_allowance_1) }}</td>
                                              <td>{{ number_format($house_rent_allowance_1) }}</td>
                                              <td>{{ number_format($overtime_1) }}</td>
                                              <td>{{ number_format($arrear_1) }}</td>
                                              <td>{{ number_format($incentive_pay_1) }}</td>
                                              <td>{{ number_format($leave_encashment_1) }}</td>
                                              <td>{{ number_format($travelling_allowance_1) }}</td>
                                              <td>{{ number_format($ABRY_scheme_1) }}</td>

                                              <td>{{ number_format($earned_gross_1) }}</td>
                                              <td>{{ number_format($net_gross_1) }}</td>

                                              <td>{{ number_format($employee_contribution_PF_1) }}</td>
                                              <td>{{ number_format($employee_contribution_ESI_1) }}</td>
                                              <td>{{ number_format($late_hours_deduction_1) }}</td>
                                              <td>{{ number_format($advance_deduction_1) }}</td>
                                              <td>{{ number_format($tax_deducted_at_source_1) }}</td>
                                              <td>{{ number_format($professional_tax_1) }}</td>
                                              <td>{{ number_format($income_tax_1) }}</td>
                                              <td>{{ number_format($GMI_1) }}</td>

                                              <td>{{ number_format($total_1) }}</td>

                                            </tr>


                                            <tr  style="text-align: center;">
                                              <td>2</td>
                                              <td>Worker</td>
                                              <td>{{ number_format($gross_2) }}</td>

                                              <td>{{ number_format($worker_1) }}</td>
                                              <td>{{ number_format($basic_2) }}</td>
                                              <td>{{ number_format($city_compensatory_allowance_2) }}</td>
                                              <td>{{ number_format($washing_allowance_2) }}</td>
                                              <td>{{ number_format($house_rent_allowance_2) }}</td>
                                              <td>{{ number_format($overtime_2) }}</td>
                                              <td>{{ number_format($arrear_2) }}</td>
                                              <td>{{ number_format($incentive_pay_2) }}</td>
                                              <td>{{ number_format($leave_encashment_2) }}</td>
                                              <td>{{ number_format($travelling_allowance_2) }}</td>
                                              <td>{{ number_format($ABRY_scheme_2) }}</td>

                                              <td>{{ number_format($earned_gross_2) }}</td>
                                              <td>{{ number_format($net_gross_2) }}</td>

                                              <td>{{ number_format($employee_contribution_PF_2) }}</td>
                                              <td>{{ number_format($employee_contribution_ESI_2) }}</td>
                                              <td>{{ number_format($late_hours_deduction_2) }}</td>
                                              <td>{{ number_format($advance_deduction_2) }}</td>
                                              <td>{{ number_format($tax_deducted_at_source_2) }}</td>
                                              <td>{{ number_format($professional_tax_2) }}</td>
                                              <td>{{ number_format($income_tax_2) }}</td>
                                              <td>{{ number_format($GMI_2) }}</td>

                                              <td>{{ number_format($total_2) }}</td>

                                            </tr>


                                            <tr  style="text-align: center;">
                                              <td></td>
                                              <td>Total</td>
                                              <td>{{ number_format($gross_total) }}</td>

                                              <td>{{ number_format($employee_total) }}</td>
                                              <td>{{ number_format($basic_total) }}</td>
                                              <td>{{ number_format($city_compensatory_allowance_total) }}</td>
                                              <td>{{ number_format($washing_allowance_total) }}</td>
                                              <td>{{ number_format($house_rent_allowance_total) }}</td>
                                              <td>{{ number_format($overtime_total) }}</td>
                                              <td>{{ number_format($arrear_total) }}</td>
                                              <td>{{ number_format($incentive_pay_total) }}</td>
                                              <td>{{ number_format($leave_encashment_total) }}</td>
                                              <td>{{ number_format($travelling_allowance_total) }}</td>
                                              <td>{{ number_format($ABRY_scheme_total) }}</td>

                                              <td>{{ number_format($earned_gross_total) }}</td>
                                              <td>{{ number_format($net_gross_total) }}</td>

                                              <td>{{ number_format($employee_contribution_PF_total) }}</td>
                                              <td>{{ number_format($employee_contribution_ESI_total) }}</td>
                                              <td>{{ number_format($late_hours_deduction_total) }}</td>
                                              <td>{{ number_format($advance_deduction_total) }}</td>
                                              <td>{{ number_format($tax_deducted_at_source_total) }}</td>
                                              <td>{{ number_format($professional_tax_total) }}</td>
                                              <td>{{ number_format($income_tax_total) }}</td>
                                              <td>{{ number_format($GMI_total) }}</td>

                                              <td>{{ number_format($total_total) }}</td>

                                            </tr>

                                            <tr  style="text-align: center;">
                                              <td colspan="25"></td>
                                            </tr>
                                            <tr  style="text-align: center;">
                                              <td colspan="25"></td>
                                            </tr>
                                            <!-- <tr  style="text-align: center;">
                                              <td colspan="24"></td>
                                            </tr>
                                            <tr  style="text-align: center;">
                                              <td colspan="24"></td>
                                            </tr> -->

                                            <tr  style="text-align: center;">
                                              <td></td>
                                              <td>HDFC Bank</td>
                                              <td>{{ number_format($hdfc_bank) }}</td>
                                              <td colspan="22"></td>
                                            </tr>
                                            <tr  style="text-align: center;">
                                              <td></td>
                                              <td>Other Bank</td>
                                              <td>{{ number_format($other_bank) }}</td>
                                              <td colspan="22"></td>
                                            </tr>
                                            <tr  style="text-align: center;">
                                              <td></td>
                                              <td>Total</td>
                                              <td>{{ number_format($total_bank) }}</td>
                                              <td colspan="22"></td>
                                            </tr>


                                    </tbody>
                                 </table>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('footer-scripts')
<script>

</script>
<script>
function changenumber(params) {
    $("#show_hidden_input").attr("value", params);
    $("#filter_form").trigger("submit");
}
</script>
@endsection
