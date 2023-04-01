<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $dischargeSummary_view->patients_identity }} Discharge Summary Info</title>
    <style>
        @page {
            margin: 20px 45px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1rem;
        }

        .title {
            position: absolute;
            top: 3%;
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
        }

        .discharge_title {
            position: absolute;
            top: 10%;
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
        }

        .place {
            position: absolute;
            top: 5.8%;
            width: 100%;
            text-align: center;
            font-size: 1.2rem;
        }

        .date_label {
            position: absolute;
            top: 16%;
            left: 66%;
            font-size: 1.1rem;
        }

        .date_value {
            position: absolute;
            top: 16%;
            left: 79%;
            font-size: 1.1rem;
        }

        .instruction {
            position: absolute;
            top: 19%;
            font-size: 1.1rem;
        }

        .identity_label {
            position: absolute;
            top: 23%;
            left: 3%;
            font-size: 1.1rem;
        }

        .identity_value {
            position: absolute;
            top: 26%;
            left: 6%;
            font-size: 1.1rem;
        }

        .finding_label {
            position: absolute;
            top: 36%;
            left: 3%;
            font-size: 1.1rem;
        }

        .finding_value {
            position: absolute;
            top: 39%;
            left: 6%;
            font-size: 1.1rem;
        }

        .treatment_label {
            position: absolute;
            top: 49%;
            left: 3%;
            font-size: 1.1rem;
        }

        .treatment_value {
            position: absolute;
            top: 52%;
            left: 6%;
            font-size: 1.1rem;
        }

        .course_label {
            position: absolute;
            top: 62%;
            left: 3%;
            font-size: 1.1rem;
        }

        .course_value {
            position: absolute;
            top: 65%;
            left: 6%;
            font-size: 1.1rem;
        }

        .diagnosis_label {
            position: absolute;
            top: 75%;
            left: 3%;
            font-size: 1.1rem;
        }

        .diagnosis_value {
            position: absolute;
            top: 78%;
            left: 6%;
            font-size: 1.1rem;
        }

        .doctor_label {
            position: absolute;
            top: 90%;
            left: 70%;
            font-size: 1.1rem;
        }

        .doctor_value {
            position: absolute;
            top: 90%;
            left: 76%;
            font-size: 1.1rem;
        }

        .license_value {
            position: absolute;
            top: 94%;
            left: 80%;
            font-size: 1.1rem;
        }
    </style>
</head>

<body>
    <div class="title">
        SAN MIGUEL DISTRICT HOSPITAL
    </div>
    <div class="place">
        Old Sta.Rita, San Miguel, Bulacan
    </div>
    <div class="discharge_title">
        DISCHARGE SUMMARY
    </div>
    <div class="date_label">
        Date:_______________________
    </div>
    <div class="date_value">
        {{ Carbon\Carbon::parse($dischargeSummary_view->discharge_date ?? '')->format('m/d/y') }}
    </div>
    <div class="instruction">
        NOTE: <i>To be filled up by Physician in charge.</i>
    </div>

    <div class="identity_label">
        1. Patient's Identity:
    </div>
    <div class="identity_value">
        <i>{{ $dischargeSummary_view->patients_identity ?? '' }}</i>
    </div>
    <div class="finding_label">
        2. Positive Finding:
    </div>
    <div class="finding_value">
        <i>{{ $dischargeSummary_view->positive_finding ?? '' }}</i>
    </div>
    <div class="treatment_label">
        3. Treatment:
    </div>
    <div class="treatment_value">
        <i>{{ $dischargeSummary_view->treatment ?? '' }}</i>
    </div>
    <div class="course_label">
        4. Course in Hospital Stay:
    </div>
    <div class="course_value">
        <i>{{ $dischargeSummary_view->course_in_hospital ?? '' }}</i>
    </div>
    <div class="diagnosis_label">
        5. Final Diagnosis:
    </div>
    <div class="diagnosis_value">
        <i>{{ $dischargeSummary_view->final_diagnosis ?? '' }}</i>
    </div>
    <div class="doctor_label">
        ____________________M.D
        <i>Signature Over Printed Name</i>
        License#_________________
    </div>
    <div class="doctor_value">
        {{ $dischargeSummary_view->doctor_name ?? '' }}
    </div>
    <div class="license_value">
        {{ $dischargeSummary_view->license_number ?? '' }}
    </div>
</body>

</html>
