<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Emergency Form ' . $emergency_view->patient_id . '.pdf' }}</title>
    <style>
        @page {
            margin: 45px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1rem;
        }

        .title {
            position: absolute;
            width: 100%;
            text-align: center;
        }

        .h_name {
            font-size: 1.2rem;
        }

        .first_section {
            position: absolute;
            top: 8%;
            width: 100%;
        }

        .health_rec_no {
            position: absolute;
            top: 0%;
            right: 0;
        }

        .second_section {
            position: absolute;
            top: 13%;
            width: 100%;
        }

        .opd_title {
            text-align: center;
            font-size: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
        }

        .patient_name {
            position: absolute;
            top: 4%;
        }

        .name_label {
            font-size: 0.9rem;
        }

        .lname_label {
            position: absolute;
            left: 20%;
        }

        .fname_label {
            position: absolute;
            left: 45%;
        }

        .mname_label {
            position: absolute;
            left: 70%;
        }

        .suffix_label {
            position: absolute;
            right: 1%;
        }

        .name_value {
            position: absolute;
            left: 20%;
            top: 0;
            width: 100%;
        }

        .lname_value {
            position: absolute;
        }

        .fname_value {
            position: absolute;
            left: 20%;
        }

        .mname_value {
            position: absolute;
            left: 50%;
        }

        .suffix_value {
            position: absolute;
            left: 75%;
        }

        .personal_info {
            position: absolute;
            top: 9%;
            font-size: 0.9rem;
        }

        .address_value {
            position: absolute;
            left: 11%;
            top: 0;
            width: 100%;
        }

        .personal_second {
            position: absolute;
            top: 11.5%;
            font-size: 0.9rem;
            width: 100%;
        }

        .phone_value {
            position: absolute;
            left: 17%;
        }

        .birthday_value {
            position: absolute;
            top: 0;
            left: 45%;
        }

        .age_value {
            position: absolute;
            top: 0;
            left: 63%;
        }

        .status_value {
            position: absolute;
            top: 0;
            left: 79%;
        }

        .sex_value {
            position: absolute;
            top: 0;
            left: 94%;
        }

        .personal_third {
            position: absolute;
            top: 14%;
            font-size: 0.9rem;
            width: 100%;
        }

        .occupation_value {
            position: absolute;
            top: 0;
            left: 14%;
        }

        .company_value {
            position: absolute;
            top: 0;
            left: 64%;
        }

        .personal_fourth {
            position: absolute;
            top: 16.3%;
            font-size: 0.9rem;
            width: 100%;
        }

        .personal_fifth {
            position: absolute;
            top: 18.5%;
            font-size: 0.9rem;
            width: 100%;
        }

        .doctor_value {
            position: absolute;
            top: 3%;
            left: 12%;
        }

        .case_summary {
            position: absolute;
            top: 25%;
            font-size: 0.9rem;
            width: 100%;
        }

        .case_title {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 1.2rem;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            width: 100%;
        }

        .vitals {
            position: absolute;
            top: 3%;
            font-size: 0.9rem;
            width: 100%;
        }

        .vital_status {
            position: absolute;
            top: 2.5%;
            left: 7%;
            width: 100%;
        }

        .pulse_label {
            position: absolute;
            top: 5%;
            left: 7%;
            width: 100%;
        }

        .bp_label {
            position: absolute;
            top: 5%;
            left: 41.5%;
            width: 100%;
        }

        .pulse_value {
            position: absolute;
            top: 5%;
            left: 15%;
            width: 100%;
        }

        .bp_value {
            position: absolute;
            top: 5%;
            left: 44.8%;
            width: 100%;
        }

        .rr_label {
            position: absolute;
            top: 5%;
            left: 77.5%;
            width: 100%;
        }

        .rr_value {
            position: absolute;
            top: 5%;
            left: 81%;
            width: 100%;
        }

        .height {
            position: absolute;
            top: 5.5%;
            left: 21%;
            width: 100%;
        }

        .pulse {
            position: absolute;
            top: 8%;
            left: 21%;
            width: 100%;
        }

        .weight {
            position: absolute;
            top: 5.5%;
            left: 52%;
            width: 100%;
        }

        .temperature {
            position: absolute;
            top: 5.5%;
            left: 88%;
            width: 100%;
        }

        .bp {
            position: absolute;
            top: 8%;
            left: 52.5%;
            width: 100%;
        }

        .rr {
            position: absolute;
            top: 8%;
            left: 86%;
            width: 100%;
        }

        .illness {
            position: absolute;
            top: 11%;
            left: 0;
            width: 100%;
            word-wrap: break-word;
        }

        .illness_value {
            position: absolute;
            top: 2%;
            left: 7%;
            height: 7%;
            width: 93%;
            font-size: 1.2rem;
        }

        .complaint {
            position: absolute;
            top: 20.5%;
            left: 0;
            width: 100%;
            word-wrap: break-word;
        }

        .complaint_value {
            position: absolute;
            top: 2%;
            left: 7%;
            width: 93%;
            font-size: 1.2rem;
        }

        .diagnosis {
            position: absolute;
            top: 30%;
            left: 0;
            width: 100%;
            word-wrap: break-word;
        }

        .diagnosis_value {
            position: absolute;
            top: 2%;
            left: 7%;
            width: 93%;
            font-size: 1.2rem;
        }

        .footer {
            position: absolute;
            top: 75%;
            left: 0;
            width: 100%;
            font-size: 0.9rem;
        }

        .discharge_value {
            position: absolute;
            top: 2%;
            left: 4%;
            width: 100%;
        }

        .disposition {
            position: absolute;
            top: 0.2%;
            left: 41.9%;
            width: 100%;
        }

        .checkbox_first {
            position: absolute;
            top: 2%;
            left: 41.9%;
        }

        .checkbox_second {
            position: absolute;
            top: 4%;
            left: 41.9%;
        }

        .checkbox_third {
            position: absolute;
            top: 2%;
            left: 64.2%;
        }

        .checkbox_fourth {
            position: absolute;
            top: 4%;
            left: 64.2%;
        }

        .checkbox_fifth {
            position: absolute;
            top: 2%;
            left: 83.3%;
        }

        .discharge_date_label {
            position: absolute;
        }

        .discharge_time_label {
            position: absolute;
            top: 2%;
        }

        .all_values {
            font-size: 0.85rem;
        }

        .treated_value {
            position: absolute;
            top: 2.35%;
            left: 44.55%;
        }

        .admission_value {
            position: absolute;
            top: 4.35%;
            left: 44.5%;
        }

        .refused_value {
            position: absolute;
            top: 2.35%;
            left: 66.7%;
        }

        .referred_value {
            position: absolute;
            top: 4.35%;
            left: 66.7%;
        }

        .out_value {
            position: absolute;
            top: 2.35%;
            left: 86%;
        }
    </style>
</head>

<body>
    <div class="title">
        <label class="h_name">SAN MIGUEL DISTRICT HOSPITAL</label><br>
        <label class="h_address">Old Sta. Rita, San Miguel Bulacan</label>
    </div>
    <div class="first_section">
        <div class="visit">
            <label>DATE:
                {{ Carbon\Carbon::parse($emergency_view->hospital_visit['visit_start']['start_date'])->format('m/d/y') }}</label><br>
            <label>TIME:
                {{ Carbon\Carbon::parse($emergency_view->hospital_visit['visit_start']['start_time'])->format('g:i A') }}</label>
        </div>
        <div class="health_rec_no">
            <label>HEALTH RECORD NUMBER: {{ $emergency_view->patient_id }}</label>
        </div>
    </div>
    <div class="second_section">
        <div class="opd_title">
            <label>OPD RECORD</label>
        </div>
        <div class="patient_name">
            <label>PATIENT'S NAME: ______________________________________________________________________</label>
            <div class="name_label">
                <label class="lname_label">Last Name</label>
                <label class="fname_label">First Name</label>
                <label class="mname_label">Middle Name</label>
                <label class="suffix_label">Suffix</label>
            </div>
            <div class="name_value">
                <label class="lname_value">{{ $emergency_view->last_name }}</label>
                <label class="fname_value">{{ $emergency_view->first_name }}</label>
                <label class="mname_value">{{ $emergency_view->middle_name }}</label>
                <label class="suffix_value">{{ $emergency_view->suffix }}</label>
            </div>
        </div>
        <div class="personal_info">
            <label>ADDRESS:
                _______________________________________________________________________________________</label>
            <div class="address_value">
                {{ $emergency_view->full_address['street'] }}, {{ $emergency_view->full_address['barangay'] }}
                {{ $emergency_view->full_address['municipality'] }}
                {{ $emergency_view->full_address['province'] }} {{ $emergency_view->full_address['zip_code'] }}
                {{ $emergency_view->full_address['country'] }}
            </div>
        </div>
        <div class="personal_second">
            <label>TELEPHONE NO:_____________ BIRTHDATE:_____________ AGE:________ STATUS:__________
                SEX:_______</label>
            <div class="phone_value">
                {{ $emergency_view->personal_info['phone'] }}
            </div>
            <div class="birthday_value">
                {{ Carbon\Carbon::parse($emergency_view->personal_info['birthday'])->format('m/d/y') }}
            </div>
            <div class="age_value">
                {{ $emergency_view->personal_info['age'] }}
            </div>
            <div class="status_value">
                {{ $emergency_view->personal_info['civil_status'] }}
            </div>
            <div class="sex_value">
                {{ $emergency_view->personal_info['gender'] }}
            </div>
        </div>
        <div class="personal_third">
            <label>OCCUPATION:______________________________________ COMPANY:___________________________________
            </label>
            <div class="occupation_value">
                {{ $emergency_view->personal_info['occupation'] }}
            </div>
            <div class="company_value">
                {{ $emergency_view->personal_info['company'] }}
            </div>
        </div>
        <div class="personal_fourth">
            <label>REFERRAL:______________________________________ </label>
        </div>
        <div class="personal_fifth">
            <label>CONSULTING DOCTOR/SIGNATURE: </label>
            <div class="doctor_value">______________________________________</div>
        </div>
        <div class="case_summary">
            <label class="case_title">PATIENT'S CASE SUMMARY</label>
            <div class="vitals">
                <label>VITAL SIGNS</label><br>
                <label class="vital_status">HEIGHT ____________________ WEIGHT ____________________ TEMPERATURE
                    __________________</label>
                <div class="pulse_label">PULSE</div>
                <div class="pulse_value">____________________</div>
                <div class="bp_label">BP</div>
                <div class="bp_value">____________________</div>
                <div class="rr_label">RR</div>
                <div class="rr_value">__________________</div>
            </div>
            <div class="height">{{ $emergency_view->case_summary['latest_vitals']['height'] }}</div>
            <div class="pulse">{{ $emergency_view->case_summary['latest_vitals']['pulse_rate'] }}</div>
            <div class="weight">{{ $emergency_view->case_summary['latest_vitals']['weight'] }}</div>
            <div class="temperature">{{ $emergency_view->case_summary['latest_vitals']['temperature'] }}</div>
            <div class="bp">{{ $emergency_view->case_summary['latest_vitals']['blood_pressure'] }}</div>
            <div class="rr">{{ $emergency_view->case_summary['latest_vitals']['respiratory_rate'] }}</div>
            <div class="illness">
                <label>PRESENT ILLNESS</label>
                <div class="illness_value">{{ $emergency_view->case_summary['present_illness'] }}</div>
            </div>
            <div class="complaint">
                <label>CHIEF COMPLAINT</label>
                <div class="complaint_value">{{ $emergency_view->case_summary['chief_complaint'] }}</div>
            </div>
            <div class="diagnosis">
                <label>DIAGNOSIS</label>
                <div class="diagnosis_value">{{ $emergency_view->main_diagnosis }}</div>
            </div>
        </div>

        <div class="footer">
            <label class="discharge_opd">DATE AND TIME DISCHARGED IN OPD</label>
            <div class="discharge_value">
                <label class="discharge_date_label">DATE:
                    {{ Carbon\Carbon::parse($emergency_view->hospital_visit['visit_end']['end_date'])->format('m/d/y') }}</label><br>
                <label class="discharge_time_label">TIME:
                    {{ Carbon\Carbon::parse($emergency_view->hospital_visit['visit_end']['end_time'])->format('g:i A') }}</label>
            </div>
            <label class="disposition">DISPOSITION</label>
            <input class="checkbox_first" type="checkbox"
                {{ $emergency_view->case_summary['disposition'] == 'Treated and Sent Home' ? 'checked' : 'disabled' }}>
            <input class="checkbox_second" type="checkbox"
                {{ $emergency_view->case_summary['disposition'] == 'For Admission' ? 'checked' : 'disabled' }}>
            <input class="checkbox_third" type="checkbox"
                {{ $emergency_view->case_summary['disposition'] == 'Refused Admission' ? 'checked' : 'disabled' }}>
            <input class="checkbox_fourth" type="checkbox"
                {{ $emergency_view->case_summary['disposition'] == 'Referred' ? 'checked' : 'disabled' }}>
            <input class="checkbox_fifth" type="checkbox"
                {{ $emergency_view->case_summary['disposition'] == 'Out When Called' ? 'checked' : 'disabled' }}>

            <div class="all_values">
                <label class="treated_value">Treated and Sent Home</label>
                <label class="admission_value">For Admission</label>
                <label class="refused_value">Refused Admission</label>
                <label class="referred_value">Referred</label>
                <label class="out_value">Out When Called</label>
            </div>
        </div>

    </div>
</body>

</html>
