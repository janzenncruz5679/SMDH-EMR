<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission_details_{{ $view_first->patient_id }}</title>
    <style>
        @page {
            margin: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.8rem;
        }

        table,
        tr {
            width: 100%;
            border: solid 2px;
            border-collapse: collapse;
        }

        td {
            padding: 20px;
        }

        td.empty {
            padding: 10px;
        }

        td.border-test {
            border: solid 2px;

        }

        td.perma_address {
            padding: 30px;

        }

        td.ssc_row {
            padding: 15px;

        }

        td.alert_allergic {
            padding: 32px;

        }

        td.principal_diagnosis {
            padding: 25px;

        }

        .hospital_name {
            position: absolute;
            top: 1.3%;
            left: 1.5%;
        }

        .hospital_code {
            position: absolute;
            top: 1.3%;
            left: 74.7%;
        }

        .address {
            position: absolute;
            top: 5%;
            left: 1.5%;
        }

        .health_rec {
            position: absolute;
            top: 5%;
            left: 74.7%;
        }

        .sr_no {
            position: absolute;
            top: 11%;
            left: 1.5%;
        }

        .ccc {
            position: absolute;
            top: 11%;
            left: 38%;
        }

        .old_health {
            position: absolute;
            top: 11%;
            right: 3%;
        }

        .patient_fullname {
            position: absolute;
            top: 17%;
            left: 1.5%;
            text-align: center;
        }

        .patient_lastname {
            position: absolute;
            top: 16%;
            left: 25%;
        }

        .patient_lastname_value {
            position: absolute;
            top: 17.5%;
            left: 21.8%;
        }

        .patient_firstname {
            position: absolute;
            top: 16%;
            left: 44%;
        }

        .patient_firstname_value {
            position: absolute;
            top: 17.5%;
            left: 35%;
        }

        .patient_middlename {
            position: absolute;
            top: 16%;
            right: 30%;
        }

        .patient_middlename_value {
            position: absolute;
            top: 17.5%;
            left: 61.3%;
        }

        .ward {
            position: absolute;
            top: 16%;
            left: 74.5%;
        }

        .ward_value {
            position: absolute;
            top: 17.5%;
            left: 80%;
        }

        .perma_address {
            position: absolute;
            top: 22%;
            left: 1.5%;
        }

        .perma_address_value {
            width: 30%;
            position: absolute;
            top: 23.5%;
            left: 1.5%;
        }

        .tel_no {
            position: absolute;
            top: 22%;
            left: 36.5%;
        }

        .tel_no-value {
            position: absolute;
            top: 23.5%;
            left: 35%;
        }

        .gender {
            position: absolute;
            top: 22%;
            left: 48%;
        }

        .gender_input {
            position: absolute;
            top: 23.2%;
            left: 48%;
        }

        .gender_label {
            position: absolute;
            top: 23.56%;
            left: 50.6%;
        }

        .gender_input_two {
            position: absolute;
            top: 23.2%;
            left: 54%;
        }

        .gender_label_two {
            position: absolute;
            top: 23.56%;
            left: 56.56%;
        }

        .civil_status {
            position: absolute;
            top: 22%;
            left: 61.5%;
        }

        .civil_single {
            position: absolute;
            top: 23.2%;
            left: 61%;
        }

        .civil_single_label {
            position: absolute;
            top: 23.56%;
            left: 63.5%;
        }

        .civil_divorced {
            position: absolute;
            top: 23.2%;
            left: 66.5%;
        }

        .civil_divorced_label {
            position: absolute;
            top: 23.56%;
            left: 69.2%;
        }

        .civil_separated {
            position: absolute;
            top: 23.2%;
            left: 72.2%;
        }

        .civil_separated_label {
            position: absolute;
            top: 23.56%;
            left: 74.9%;
        }

        .civil_commonlaw {
            position: absolute;
            top: 23.2%;
            left: 79.2%;
        }

        .civil_commonlaw_label {
            position: absolute;
            top: 23.56%;
            left: 81.8%;
        }

        .civil_widowed {
            position: absolute;
            top: 23.2%;
            left: 84.2%;
        }

        .civil_widowed_label {
            position: absolute;
            top: 23.56%;
            left: 86.8%;
        }

        .civil_married {
            position: absolute;
            top: 23.2%;
            left: 89.8%;
        }

        .civil_married_label {
            position: absolute;
            top: 23.56%;
            left: 92.5%;
        }

        .civil_neutral {
            position: absolute;
            top: 23.2%;
            left: 95.2%;
        }

        .civil_neutral_label {
            position: absolute;
            top: 23.56%;
            left: 97.8%;
        }

        .birthdate {
            position: absolute;
            top: 29.8%;
            left: 4.5%;
        }

        .birthdate_value {
            position: absolute;
            top: 31.3%;
            left: 5%;
        }

        .age {
            position: absolute;
            top: 29.8%;
            left: 25%;
        }

        .age_value {
            position: absolute;
            top: 31.3%;
            left: 26%;
        }

        .birthplace {
            position: absolute;
            top: 29.8%;
            left: 41%;
        }

        .birthplace_value {
            position: absolute;
            top: 31.3%;
            left: 38%;
        }

        .nationality {
            position: absolute;
            top: 29.8%;
            left: 61.5%;
        }

        .nationality_value {
            position: absolute;
            top: 31.3%;
            left: 63.8%;
        }

        .religion {
            position: absolute;
            top: 29.8%;
            left: 75.8%;
        }

        .religion_value {
            position: absolute;
            top: 31.3%;
            left: 76.5%;
        }

        .occupation {
            position: absolute;
            top: 29.8%;
            left: 87.5%;
        }

        .occupation_value {
            position: absolute;
            top: 31.3%;
            left: 88.2%;
        }

        .employer_name {
            position: absolute;
            top: 35.7%;
            left: 1.5%;
        }

        .employer_name_value {
            position: absolute;
            top: 37.3%;
            left: 1.5%;
        }

        .employer_address {
            position: absolute;
            top: 35.7%;
            left: 50%;
        }

        .employer_address_value {
            position: absolute;
            top: 37.3%;
            left: 35%;
        }

        .employer_phone {
            position: absolute;
            top: 35.7%;
            left: 83%;
        }

        .employer_phone_value {
            position: absolute;
            top: 37.3%;
            left: 81.5%;
        }

        .father_name {
            position: absolute;
            top: 39.7%;
            left: 1.5%;
        }

        .father_name_value {
            position: absolute;
            top: 41.2%;
            left: 1.5%;
        }

        .father_address {
            position: absolute;
            top: 39.7%;
            left: 50%;
        }

        .father_address_value {
            position: absolute;
            top: 41.2%;
            left: 35%;
        }

        .father_phone {
            position: absolute;
            top: 39.7%;
            left: 83%;
        }

        .father_phone_value {
            position: absolute;
            top: 41.2%;
            left: 81.5%;
        }

        .mother_maiden_name {
            position: absolute;
            top: 43.5%;
            left: 1.5%;
        }

        .mother_maiden_name_value {
            position: absolute;
            top: 45%;
            left: 1.5%;
        }

        .mother_address {
            position: absolute;
            top: 43.5%;
            left: 50%;
        }

        .mother_address_value {
            position: absolute;
            top: 45%;
            left: 35%;
        }

        .mother_phone {
            position: absolute;
            top: 43.5%;
            left: 83%;
        }

        .mother_phone_value {
            position: absolute;
            top: 45%;
            left: 81.5%;
        }

        .spouse_name {
            position: absolute;
            top: 47.4%;
            left: 1.5%;
        }

        .spouse_name_value {
            position: absolute;
            top: 48.8%;
            left: 1.5%;
        }

        .spouse_address {
            position: absolute;
            top: 47.4%;
            left: 50%;
        }

        .spouse_address_value {
            position: absolute;
            top: 48.8%;
            left: 35%;
        }

        .spouse_phone {
            position: absolute;
            top: 47.4%;
            left: 83%;
        }

        .spouse_phone_value {
            position: absolute;
            top: 48.8%;
            left: 81.5%;
        }

        .admission {
            position: absolute;
            top: 53.3%;
            left: 1.5%;
        }

        .admission_start_date {
            position: absolute;
            top: 55%;
            left: 6%;
        }

        .admission_start_time {
            position: absolute;
            top: 56.7%;
            left: 6%;
        }

        .discharge {
            position: absolute;
            top: 53.3%;
            left: 22%;
        }

        .discharge_end_date {
            position: absolute;
            top: 55%;
            left: 32.5%;
        }

        .discharge_end_time {
            position: absolute;
            top: 56.7%;
            left: 32.5%;
        }

        .total_days {
            position: absolute;
            top: 53.3%;
            left: 52%;
        }

        .total_days_value {
            position: absolute;
            top: 54.8%;
            left: 49.7%;
        }

        .admitting_physician {
            position: absolute;
            top: 53.3%;
            left: 77.3%;
        }

        .admitting_physician_value {
            position: absolute;
            top: 54.8%;
            left: 76%;
        }

        .admitting_clerk {
            position: absolute;
            top: 59.1%;
            left: 1.5%;
        }

        .admitting_clerk_value {
            position: absolute;
            top: 60.6%;
            left: 1.5%;
        }

        .attending_physician {
            position: absolute;
            top: 59.1%;
            left: 61.5%;
        }

        .type_of_admission {
            position: absolute;
            top: 62.8%;
            left: 1.5%;
        }

        .toa_new {
            position: absolute;
            top: 64.2%;
            left: 1.5%;
        }

        .toa_new_label {
            position: absolute;
            top: 64.6%;
            left: 4.5%;
        }

        .toa_old {
            position: absolute;
            top: 64.2%;
            left: 9%;
        }

        .toa_old_label {
            position: absolute;
            top: 64.6%;
            left: 11.7%;
        }

        .toa_former {
            position: absolute;
            top: 64.2%;
            left: 15.5%;
        }

        .toa_former_label {
            position: absolute;
            top: 64.6%;
            left: 18.5%;
        }

        .referred_by {
            position: absolute;
            top: 62.8%;
            left: 61.5%;
        }

        .referred_by_value {
            position: absolute;
            top: 64.2%;
            left: 61.5%;
        }

        .ssc {
            position: absolute;
            top: 69.3%;
            left: 1.5%;
        }

        .ssc_a {
            position: absolute;
            top: 68.8%;
            left: 33%;
        }

        .ssc_a_label {
            position: absolute;
            top: 69.2%;
            left: 36.3%;
        }

        .ssc_b {
            position: absolute;
            top: 68.8%;
            left: 43%;
        }

        .ssc_b_label {
            position: absolute;
            top: 69.2%;
            left: 46.3%;
        }

        .ssc_c_one {
            position: absolute;
            top: 68.8%;
            left: 53%;
        }

        .ssc_c_one_label {
            position: absolute;
            top: 69.2%;
            left: 56.3%;
        }

        .ssc_c_two {
            position: absolute;
            top: 68.8%;
            left: 64%;
        }

        .ssc_c_two_label {
            position: absolute;
            top: 69.2%;
            left: 67.3%;
        }

        .ssc_c_three {
            position: absolute;
            top: 68.8%;
            left: 75%;
        }

        .ssc_c_three_label {
            position: absolute;
            top: 69.2%;
            left: 78.3%;
        }

        .ssc_d {
            position: absolute;
            top: 68.8%;
            left: 85%;
        }

        .ssc_d_label {
            position: absolute;
            top: 69.2%;
            left: 88.3%;
        }

        .alert_allergic {
            position: absolute;
            top: 73.8%;
            left: 1.5%;
        }

        .alert_allergic_value {
            position: absolute;
            top: 76.9%;
            left: 1.5%;
        }

        .hosp_plan {
            position: absolute;
            top: 73.8%;
            left: 22%;
        }

        .hosp_plan_value {
            position: absolute;
            top: 76.9%;
            left: 22%;
        }

        .health_insurance {
            position: absolute;
            top: 73.8%;
            left: 48.3%;
        }

        .health_insurance_value {
            position: absolute;
            top: 76.9%;
            left: 48.3%;
        }

        .toi {
            position: absolute;
            top: 73.8%;
            left: 74.5%;
        }

        .toi_value {
            position: absolute;
            top: 76.9%;
            left: 74.5%;
        }

        .data_furnished {
            position: absolute;
            top: 82%;
            left: 1.5%;
        }

        .data_furnished_value {
            position: absolute;
            top: 83.4%;
            left: 1.5%;
        }

        .address_informant {
            position: absolute;
            top: 82%;
            left: 50%;
        }

        .address_informant_value {
            position: absolute;
            top: 83.4%;
            left: 48.3%;
        }

        .rtp {
            position: absolute;
            top: 82%;
            left: 77.3%;
        }

        .rtp_value {
            position: absolute;
            top: 83.4%;
            left: 74.7%;
        }

        .admission_diagnosis {
            position: absolute;
            top: 86.2%;
            left: 1.5%;
        }

        .admission_diagnosis_value {
            position: absolute;
            top: 86.2%;
            left: 24%;
        }

        .principal_diagnosis {
            position: absolute;
            top: 89%;
            left: 1.5%;
        }

        .principal_diagnosis_value {
            position: absolute;
            top: 89%;
            left: 24%;
        }

        .other_diagnosis {
            position: absolute;
            top: 90.7%;
            left: 1.5%;
        }

        .other_diagnosis_value {
            position: absolute;
            top: 90.7%;
            left: 24%;
        }

        .idc_code {
            position: absolute;
            top: 89%;
            left: 75%;
        }

        .idc_code_value {
            position: absolute;
            top: 90.4%;
            left: 75%;
        }

        .principal_operation {
            position: absolute;
            top: 93.5%;
            left: 1.5%;
        }

        .principal_operation_value {
            position: absolute;
            top: 93.5%;
            left: 36%;
        }

        .other_operation {
            position: absolute;
            top: 95.3%;
            left: 1.5%;
        }

        .other_operation_value {
            position: absolute;
            top: 95.3%;
            left: 36%;
        }

        .icpm_code {
            position: absolute;
            top: 93.5%;
            left: 75%;
        }

        .icpm_code_value {
            position: absolute;
            top: 95%;
            left: 75%;
        }

        .created_at {
            width: 38.5%;
            position: absolute;
            padding: 3px;
            border-top: solid 2px;
            border-left: solid 2px;
            top: 97.2%;
            left: 60.3%;
        }
    </style>
</head>

<body>
    <div class="tbl">
        <table>
            <tr>
                <td class="border-test" colspan="5"></td>
                <td class="border-test" colspan="2"></td>
            </tr>
            <tr>
                <td class="border-test" colspan="5"></td>
                <td class="border-test" colspan="2"></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td colspan="7"></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td class="border-test"></td>
                <td class="border-test"></td>
                <td class=""></td>
                <td class="" style="border-right: none"></td>
                <td class="border-test"></td>
                <td class="" style="border-right: none"></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td class="perma_address" style="border-right: none"></td>
                <td class=""></td>
                <td class="border-test"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td class="border-test"></td>
                <td class="border-test"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class="border-test"></td>
                <td class="border-test"></td>
                <td class="border-test"></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td class="border-test" style="border-right: none"></td>
                <td class="" style="border-right: none"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="border-test" style="border-right: none"></td>
                <td class="" style="border-right: none"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="border-test" style="border-right: none"></td>
                <td class="" style="border-right: none"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="border-test" style="border-right: none"></td>
                <td class="" style="border-right: none"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td class="border-test perma_address"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td class="border-test alert_allergic"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="empty" colspan="7"></td>
            </tr>
            <tr>
                <td class="border-test" style="border-right: none"></td>
                <td class="" style="border-right: none"></td>
                <td class="" style="border-right: none"></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
                <td class="border-test" style="border-right: none"></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
                <td class="ssc_row"></td>
            </tr>
            <tr>
                <td class="border-test principal_diagnosis" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="border-test alert_allergic" style="border-right: none"></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
            </tr>
        </table>
    </div>

    <div class="hospital_name">
        NAME OF HOSPITAL: San Miguel District Hospital
    </div>
    <div class="hospital_code">
        HOSP CODE:0000122
    </div>
    <div class="address">
        ADDRESS: {{ $view_first->address }}
    </div>
    <div class="health_rec">
        HEALTH REC NO.: {{ $view_first->patient_id }}
    </div>
    <div class="sr_no">
        SR CITIZEN NO.: {{ $view_first->sr_no }}
    </div>
    <div class="ccc" style="font-size: 1.2rem;">
        CLINICAL COVER SHEET
    </div>
    <div class="old_health">
        OLD HEALTH RECORD NO.:{{ $view_first->patient_id }}
    </div>
    <div class="patient_fullname">
        PATIENT'S NAME:
    </div>
    <div class="patient_lastname">
        (Last)<br>
    </div>
    <div class="patient_lastname_value">
        {{ $view_first->last_name }}
    </div>
    <div class="patient_firstname">
        (Given)<br>
    </div>
    <div class="patient_firstname_value">
        {{ $view_first->first_name }}
    </div>
    <div class="patient_middlename">
        (Middle)<br>
    </div>
    <div class="patient_middlename_value">
        {{ $view_first->middle_name }}
    </div>
    <div class="ward">
        WARD/ROOM/BED/SERVICE:
    </div>
    <div class="ward_value">
        {{ $view_first->ward_room_bed_service }}
    </div>
    <div class="perma_address">
        PERMANENT ADDRESS:
    </div>
    <div class="perma_address_value">
        {{ $view_first->perma_address }}
    </div>
    <div class="tel_no">
        TEL. NO.:
    </div>
    <div class="tel_no-value">
        {{ $view_first->phone }}
    </div>
    <div class="gender">
        SEX:
    </div>
    <div class="gender_input">
        <input class="" type="checkbox" value="Male" name="gender"
            {{ $view_first->gender == 'Male' ? 'checked' : 'disabled' }}>
    </div>
    <div class="gender_label">
        M
    </div>
    <div class="gender_input_two">
        <input class="" type="checkbox" value="Female" name="gender"
            {{ $view_first->gender == 'Female' ? 'checked' : 'disabled' }}>
    </div>
    <div class="gender_label_two">
        F
    </div>
    <div class="civil_status">
        CIVIL STATUS:
    </div>
    <div class="civil_single">
        <input class="" type="checkbox" value="Single" name="gender"
            {{ $view_first->civil_status == 'Single' ? 'checked' : 'disabled' }}>
    </div>
    <div class="civil_single_label">
        S
    </div>

    <div class="civil_divorced">
        <input class="" type="checkbox" value="Divorced" name="gender"
            {{ $view_first->civil_status == 'Divorced' ? 'checked' : 'disabled' }}>
    </div>
    <div class="civil_divorced_label">
        D
    </div>

    <div class="civil_separated">
        <input class="" type="checkbox" value="Separated" name="gender"
            {{ $view_first->civil_status == 'Separated' ? 'checked' : 'disabled' }}>
    </div>
    <div class="civil_separated_label">
        SEP
    </div>

    <div class="civil_commonlaw">
        <input class="" type="checkbox" value="Common Law" name="gender"
            {{ $view_first->civil_status == 'Common Law' ? 'checked' : 'disabled' }}>
    </div>
    <div class="civil_commonlaw_label">
        C
    </div>

    <div class="civil_widowed">
        <input class="" type="checkbox" value="Widowed" name="gender"
            {{ $view_first->civil_status == 'Widowed' ? 'checked' : 'disabled' }}>
    </div>
    <div class="civil_widowed_label">
        W
    </div>

    <div class="civil_married">
        <input class="" type="checkbox" value="Married" name="gender"
            {{ $view_first->civil_status == 'Married' ? 'checked' : 'disabled' }}>
    </div>
    <div class="civil_married_label">
        M
    </div>

    <div class="civil_neutral">
        <input class="" type="checkbox" value="Neutral" name="gender"
            {{ $view_first->civil_status == 'Neutral' ? 'checked' : 'disabled' }}>
    </div>
    <div class="civil_neutral_label">
        N
    </div>

    <div class="birthdate">
        BIRTHDATE:
    </div>
    <div class="birthdate_value">
        {{ $view_first->birthday }}
    </div>

    <div class="age">
        AGE:
    </div>
    <div class="age_value">
        {{ $view_first->age }}
    </div>

    <div class="birthplace">
        BIRTHPLACE:
    </div>
    <div class="birthplace_value">
        {{ $view_first->birthplace }}
    </div>

    <div class="nationality">
        NATIONALITY:
    </div>
    <div class="nationality_value">
        {{ $view_first->nationality }}
    </div>

    <div class="religion">
        RELIGION:
    </div>
    <div class="religion_value">
        {{ $view_first->religion }}
    </div>

    <div class="occupation">
        OCCUPATION:
    </div>
    <div class="occupation_value">
        {{ $view_first->occupation }}
    </div>

    <div class="employer_name">
        EMPLOYER(type of Business):
    </div>
    <div class="employer_name_value">
        {{ $view_second->person_of_contact['employer']['name'] ?? '' }}
    </div>
    <div class="employer_address">
        ADDRESS:
    </div>
    <div class="employer_address_value">
        {{ $view_second->person_of_contact['employer']['address'] ?? '' }}
    </div>

    <div class="employer_phone">
        TEL.NO.:
    </div>
    <div class="employer_phone_value">
        {{ $view_second->person_of_contact['employer']['contact'] ?? '' }}
    </div>

    <div class="father_name">
        FATHER'S NAME:
    </div>
    <div class="father_name_value">
        {{ $view_second->person_of_contact['father']['name'] ?? '' }}
    </div>

    <div class="father_address">
        ADDRESS:
    </div>
    <div class="father_address_value">
        {{ $view_second->person_of_contact['father']['address'] ?? '' }}
    </div>

    <div class="father_phone">
        TEL.NO.:
    </div>
    <div class="father_phone_value">
        {{ $view_second->person_of_contact['father']['contact'] ?? '' }}
    </div>

    <div class="mother_maiden_name">
        MOTHER'S(MAIDEN) NAME:
    </div>
    <div class="mother_maiden_name_value">
        {{ $view_second->person_of_contact['mother']['name'] ?? '' }}
    </div>

    <div class="mother_address">
        ADDRESS:
    </div>
    <div class="mother_address_value">
        {{ $view_second->person_of_contact['mother']['address'] ?? '' }}
    </div>

    <div class="mother_phone">
        TEL.NO.:
    </div>
    <div class="mother_phone_value">
        {{ $view_second->person_of_contact['mother']['contact'] ?? '' }}
    </div>

    <div class="spouse_name">
        SPOUSE NAME:
    </div>
    <div class="spouse_name_value">
        {{ $view_second->person_of_contact['spouse']['name'] ?? '' }}
    </div>

    <div class="spouse_address">
        ADDRESS:
    </div>
    <div class="spouse_address_value">
        {{ $view_second->person_of_contact['spouse']['address'] ?? '' }}
    </div>

    <div class="spouse_phone">
        TEL.NO.:
    </div>
    <div class="spouse_phone_value">
        {{ $view_second->person_of_contact['spouse']['contact'] ?? '' }}
    </div>

    <div class="admission">
        ADMISSION:
    </div>
    <div class="admission_start_date">
        DATE: {{ $view_second->admission_start['start_date'] }}
    </div>

    <div class="admission_start_time">
        TIME: {{ $view_second->admission_start['start_time'] }}
    </div>

    <div class="discharge">
        DISCHARGE:
    </div>
    <div class="discharge_end_date">
        DATE: {{ $view_second->admission_end['end_date'] }}
    </div>

    <div class="discharge_end_time">
        TIME: {{ $view_second->admission_end['end_time'] }}
    </div>

    <div class="total_days">
        TOTAL NO. OF DAYS:
    </div>
    <div class="total_days_value">
        {{ $view_second->admission_diff }}
    </div>

    <div class="admitting_physician">
        ADMITTING PHYSICIAN:
    </div>
    <div class="admitting_physician_value">
        {{ $view_second->admitting_personel['admitting_physician'] }}
    </div>

    <div class="admitting_clerk">
        ADMITTING CLERK:
    </div>
    <div class="admitting_clerk_value">
        {{ $view_second->admitting_personel['admitting_clerk'] }}
    </div>

    <div class="attending_physician">
        ATTENDING PHYSICIAN/SIGNATURE:
    </div>

    <div class="type_of_admission">
        TYPE OF ADMISSION:
    </div>
    <div class="toa_new">
        <input class="" type="checkbox" value="New" name="admission_type"
            {{ $view_second->type_of_admission == 'New' ? 'checked' : 'disabled' }}>
    </div>
    <div class="toa_new_label">
        New
    </div>

    <div class="toa_old">
        <input class="" type="checkbox" value="Old" name="admission_type"
            {{ $view_second->type_of_admission == 'Old' ? 'checked' : 'disabled' }}>
    </div>
    <div class="toa_old_label">
        Old
    </div>

    <div class="toa_former">
        <input class="" type="checkbox" value="Former OPD" name="admission_type"
            {{ $view_second->type_of_admission == 'Former OPD' ? 'checked' : 'disabled' }}>
    </div>
    <div class="toa_former_label">
        Former OPD
    </div>

    <div class="referred_by">
        REFERRED BY:
    </div>
    <div class="referred_by_value">
        {{ $view_second->admitting_personel['referred_by'] }}
    </div>

    <div class="ssc">
        SOCIAL SERVICE CLASSIFICATION:
    </div>

    <div class="ssc_a">
        <input class="" type="checkbox" value="a" name="ssc"
            {{ $view_second->ssc == 'a' ? 'checked' : 'disabled' }}>
    </div>
    <div class="ssc_a_label">
        A
    </div>

    <div class="ssc_b">
        <input class="" type="checkbox" value="b" name="ssc"
            {{ $view_second->ssc == 'b' ? 'checked' : 'disabled' }}>
    </div>
    <div class="ssc_b_label">
        B
    </div>

    <div class="ssc_c_one">
        <input class="" type="checkbox" value="c_one" name="ssc"
            {{ $view_second->ssc == 'c_one' ? 'checked' : 'disabled' }}>
    </div>
    <div class="ssc_c_one_label">
        C1
    </div>
    <div class="ssc_c_two">
        <input class="" type="checkbox" value="c_two" name="ssc"
            {{ $view_second->ssc == 'c_two' ? 'checked' : 'disabled' }}>
    </div>
    <div class="ssc_c_two_label">
        C2
    </div>
    <div class="ssc_c_three">
        <input class="" type="checkbox" value="c_three" name="ssc"
            {{ $view_second->ssc == 'c_three' ? 'checked' : 'disabled' }}>
    </div>
    <div class="ssc_c_three_label">
        C3
    </div>

    <div class="ssc_d">
        <input class="" type="checkbox" value="d" name="ssc"
            {{ $view_second->ssc == 'd' ? 'checked' : 'disabled' }}>
    </div>
    <div class="ssc_d_label">
        D
    </div>
    <div class="alert_allergic">
        ALERT :<br>
        ALLERGIC TO
    </div>
    <div class="alert_allergic_value">
        {{ $view_second->allergic }}
    </div>

    <div class="hosp_plan">
        HOSPITALIZATION PLAN <br>
        COMPANY/INDUSTRIAL NAME
    </div>
    <div class="hosp_plan_value">
        {{ $view_second->insurance['hospitalization_plan'] }}
    </div>

    <div class="health_insurance">
        HEALTH <br>
        INSURANCE NAME:
    </div>
    <div class="health_insurance_value">
        {{ $view_second->insurance['health_insurance'] }}
    </div>

    <div class="toi">
        TYPE OF INSURANCE <br>
        COVERAGE:
    </div>
    <div class="toi_value">
        {{ $view_second->insurance['coverage_insurance'] }}
    </div>

    <div class="data_furnished">
        DATA FURNISHED BY: (signature over printed name)
    </div>
    <div class="data_furnished_value">
        {{ $view_second->insurance['furnished_by'] }}
    </div>

    <div class="address_informant">
        ADDRESS OF INFORMANT
    </div>
    <div class="address_informant_value">
        {{ $view_second->insurance['informant_address'] }}
    </div>

    <div class="rtp">
        RELATION TO PATIENT
    </div>
    <div class="rtp_value">
        {{ $view_second->insurance['relation_to_patient'] }}
    </div>

    <div class="admission_diagnosis">
        ADMISSION DIAGNOSIS:
    </div>
    <div class="admission_diagnosis_value">
        {{ $view_second->diagnosis['admission_diagnosis'] }}
    </div>

    <div class="principal_diagnosis">
        PRINCIPAL DIAGNOSIS:
    </div>
    <div class="principal_diagnosis_value">
        {{ $view_second->diagnosis['principal_diagnosis'] }}
    </div>

    <div class="other_diagnosis">
        OTHER DIAGNOSIS:
    </div>
    <div class="other_diagnosis_value">
        {{ $view_second->diagnosis['other_diagnosis'] }}
    </div>

    <div class="idc_code">
        IDC CODE:
    </div>
    <div class="idc_code_value">
        {{ $view_second->idc_code }}
    </div>

    <div class="principal_operation">
        PRINCIPAL OPERATION PROCEDURE:
    </div>
    <div class="principal_operation_value">
        {{ $view_second->other_opt['principal_operation'] }}
    </div>

    <div class="other_operation">
        OTHER OPERATION PROCEDURE:
    </div>
    <div class="other_operation_value">
        {{ $view_second->other_opt['other_operation'] }}
    </div>

    <div class="icpm_code">
        ICPM CODE:
    </div>
    <div class="icpm_code_value">
        {{ $view_second->icpm_code }}
    </div>

    <div class="created_at">
        000122{{ $view_first->patient_id }}{{ $view_first->created_at }}
    </div>
</body>

</html>
