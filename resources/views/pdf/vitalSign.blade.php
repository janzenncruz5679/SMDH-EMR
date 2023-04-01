<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Vital Signs Info ' . $vitalSign_view->id }}</title>
    <style>
        @page {
            margin: 20px 70px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.8rem;
        }

        .tbl {
            /* background-color: rgb(130, 130, 192); */
            position: absolute;
            top: 15%;
            width: 100%;
        }

        .titlebar {
            font-size: 2.5rem;
            text-align: center;
            /* background-color: rgb(60, 158, 117); */
            position: absolute;
            top: 7%;
            width: 100%;
        }

        table {
            width: 100%;
            border: solid 2px;
            border-collapse: collapse;
        }

        td.content {
            border: solid 2px;
            border-collapse: collapse;
        }

        td {
            padding: 15px;
        }

        .patient_label {
            position: absolute;
            top: 15.7%;
            left: 1.4%;
        }

        .patient_value {
            position: absolute;
            top: 15.7%;
            left: 10%;
        }

        .birthday_label {
            position: absolute;
            top: 18.7%;
            left: 1.4%;
        }

        .birthday_value {
            position: absolute;
            top: 18.7%;
            left: 10%;
        }

        .gender_label {
            position: absolute;
            top: 21.7%;
            left: 1.4%;
        }

        .gender_value {
            position: absolute;
            top: 21.7%;
            left: 8%;
        }

        .physician_label {
            position: absolute;
            top: 24.7%;
            left: 1.4%;
        }

        .physician_value {
            position: absolute;
            top: 24.7%;
            left: 13.5%;
        }

        .notes_label {
            position: absolute;
            top: 15.7%;
            left: 51.2%;
        }

        .notes_value {
            position: absolute;
            top: 16%;
            left: 51.2%;
            width: 47.5%;
            height: 115px;
        }

        .notes {
            max-width: 100%;
            word-wrap: break-word;
        }

        .date_title {
            position: absolute;
            top: 30.5%;
            left: 7.5%;
        }

        .date_one {
            position: absolute;
            top: 33.5%;
            left: 4%;
        }

        .date_two {
            position: absolute;
            top: 36.5%;
            left: 4%;
        }

        .date_three {
            position: absolute;
            top: 39.5%;
            left: 4%;
        }

        .date_fourth {
            position: absolute;
            top: 42.5%;
            left: 4%;
        }

        .date_five {
            position: absolute;
            top: 45.5%;
            left: 4%;
        }

        .date_six {
            position: absolute;
            top: 48.5%;
            left: 4%;
        }

        .date_seven {
            position: absolute;
            top: 51.5%;
            left: 4%;
        }

        .date_eight {
            position: absolute;
            top: 54.2%;
            left: 4%;
        }

        .date_nine {
            position: absolute;
            top: 57%;
            left: 4%;
        }

        .date_ten {
            position: absolute;
            top: 60%;
            left: 4%;
        }

        .date_eleven {
            position: absolute;
            top: 63%;
            left: 4%;
        }

        .date_twelve {
            position: absolute;
            top: 66%;
            left: 4%;
        }

        .date_thirteen {
            position: absolute;
            top: 69%;
            left: 4%;
        }

        .date_fourteen {
            position: absolute;
            top: 72%;
            left: 4%;
        }

        .date_fifteen {
            position: absolute;
            top: 75%;
            left: 4%;
        }

        .date_sixteen {
            position: absolute;
            top: 78%;
            left: 4%;
        }

        .date_seventeen {
            position: absolute;
            top: 81%;
            left: 4%;
        }

        .date_eighteen {
            position: absolute;
            top: 83.8%;
            left: 4%;
        }

        .date_nineteen {
            position: absolute;
            top: 86.8%;
            left: 4%;
        }

        .date_twenty {
            position: absolute;
            top: 89.6%;
            left: 4%;
        }

        .weight_title {
            position: absolute;
            top: 30.5%;
            left: 21.2%;
        }

        .weight_one {
            position: absolute;
            top: 33.5%;
            left: 20.3%;
        }

        .weight_two {
            position: absolute;
            top: 36.5%;
            left: 20.3%;
        }

        .weight_three {
            position: absolute;
            top: 39.5%;
            left: 20.3%;
        }

        .weight_fourth {
            position: absolute;
            top: 42.5%;
            left: 20.3%;
        }

        .weight_five {
            position: absolute;
            top: 45.5%;
            left: 20.3%;
        }

        .weight_six {
            position: absolute;
            top: 48.5%;
            left: 20.3%;
        }

        .weight_seven {
            position: absolute;
            top: 51.5%;
            left: 20.3%;
        }

        .weight_eight {
            position: absolute;
            top: 54.2%;
            left: 20.3%;
        }

        .weight_nine {
            position: absolute;
            top: 57%;
            left: 20.3%;
        }

        .weight_ten {
            position: absolute;
            top: 60%;
            left: 20.3%;
        }

        .weight_eleven {
            position: absolute;
            top: 63%;
            left: 20.3%;
        }

        .weight_twelve {
            position: absolute;
            top: 66%;
            left: 20.3%;
        }

        .weight_thirteen {
            position: absolute;
            top: 69%;
            left: 20.3%;
        }

        .weight_fourteen {
            position: absolute;
            top: 72%;
            left: 20.3%;
        }

        .weight_fifteen {
            position: absolute;
            top: 75%;
            left: 20.3%;
        }

        .weight_sixteen {
            position: absolute;
            top: 78%;
            left: 20.3%;
        }

        .weight_seventeen {
            position: absolute;
            top: 81%;
            left: 20.3%;
        }

        .weight_eighteen {
            position: absolute;
            top: 83.8%;
            left: 20.3%;
        }

        .weight_nineteen {
            position: absolute;
            top: 86.8%;
            left: 20.3%;
        }

        .weight_twenty {
            position: absolute;
            top: 89.6%;
            left: 20.3%;
        }

        .temp_title {
            position: absolute;
            top: 30.5%;
            left: 32%;
        }

        .temp_one {
            position: absolute;
            top: 33.5%;
            left: 32%;
        }

        .temp_two {
            position: absolute;
            top: 36.5%;
            left: 32%;
        }

        .temp_three {
            position: absolute;
            top: 39.5%;
            left: 32%;
        }

        .temp_fourth {
            position: absolute;
            top: 42.5%;
            left: 32%;
        }

        .temp_five {
            position: absolute;
            top: 45.5%;
            left: 32%;
        }

        .temp_six {
            position: absolute;
            top: 48.5%;
            left: 32%;
        }

        .temp_seven {
            position: absolute;
            top: 51.5%;
            left: 32%;
        }

        .temp_eight {
            position: absolute;
            top: 54.2%;
            left: 32%;
        }

        .temp_nine {
            position: absolute;
            top: 57%;
            left: 32%;
        }

        .temp_ten {
            position: absolute;
            top: 60%;
            left: 32%;
        }

        .temp_eleven {
            position: absolute;
            top: 63%;
            left: 32%;
        }

        .temp_twelve {
            position: absolute;
            top: 66%;
            left: 32%;
        }

        .temp_thirteen {
            position: absolute;
            top: 69%;
            left: 32%;
        }

        .temp_fourteen {
            position: absolute;
            top: 72%;
            left: 32%;
        }

        .temp_fifteen {
            position: absolute;
            top: 75%;
            left: 32%;
        }

        .temp_sixteen {
            position: absolute;
            top: 78%;
            left: 32%;
        }

        .temp_seventeen {
            position: absolute;
            top: 81%;
            left: 32%;
        }

        .temp_eighteen {
            position: absolute;
            top: 83.8%;
            left: 32%;
        }

        .temp_nineteen {
            position: absolute;
            top: 86.8%;
            left: 32%;
        }

        .temp_twenty {
            position: absolute;
            top: 89.6%;
            left: 32%;
        }

        .bp_title {
            position: absolute;
            top: 30.5%;
            left: 43.5%;
        }

        .bp_one {
            position: absolute;
            top: 33.5%;
            left: 41.5%;
        }

        .bp_two {
            position: absolute;
            top: 36.5%;
            left: 41.5%;
        }

        .bp_three {
            position: absolute;
            top: 39.5%;
            left: 41.5%;
        }

        .bp_four {
            position: absolute;
            top: 42.5%;
            left: 41.5%;
        }

        .bp_five {
            position: absolute;
            top: 45.5%;
            left: 41.5%;
        }

        .bp_six {
            position: absolute;
            top: 48.5%;
            left: 41.5%;
        }

        .bp_seven {
            position: absolute;
            top: 51.5%;
            left: 41.5%;
        }

        .bp_eight {
            position: absolute;
            top: 54.2%;
            left: 41.5%;
        }

        .bp_nine {
            position: absolute;
            top: 57%;
            left: 41.5%;
        }

        .bp_ten {
            position: absolute;
            top: 60%;
            left: 41.5%;
        }

        .bp_eleven {
            position: absolute;
            top: 63%;
            left: 41.5%;
        }

        .bp_twelve {
            position: absolute;
            top: 66%;
            left: 41.5%;
        }

        .bp_thirteen {
            position: absolute;
            top: 69%;
            left: 41.5%;
        }

        .bp_fourteen {
            position: absolute;
            top: 72%;
            left: 41.5%;
        }

        .bp_fifteen {
            position: absolute;
            top: 75%;
            left: 41.5%;
        }

        .bp_sixteen {
            position: absolute;
            top: 78%;
            left: 41.5%;
        }

        .bp_seventeen {
            position: absolute;
            top: 81%;
            left: 41.5%;
        }

        .bp_eighteen {
            position: absolute;
            top: 83.8%;
            left: 41.5%;
        }

        .bp_nineteen {
            position: absolute;
            top: 86.8%;
            left: 41.5%;
        }

        .bp_twenty {
            position: absolute;
            top: 89.6%;
            left: 41.5%;
        }

        .pulse_title {
            position: absolute;
            top: 30.5%;
            left: 52.4%;
        }

        .pulse_one {
            position: absolute;
            top: 33.5%;
            left: 51.2%;
        }

        .pulse_two {
            position: absolute;
            top: 36.5%;
            left: 51.2%;
        }

        .pulse_three {
            position: absolute;
            top: 39.5%;
            left: 51.2%;
        }

        .pulse_four {
            position: absolute;
            top: 42.5%;
            left: 51.2%;
        }

        .pulse_five {
            position: absolute;
            top: 45.5%;
            left: 51.2%;
        }

        .pulse_six {
            position: absolute;
            top: 48.5%;
            left: 51.2%;
        }

        .pulse_seven {
            position: absolute;
            top: 51.5%;
            left: 51.2%;
        }

        .pulse_eight {
            position: absolute;
            top: 54.2%;
            left: 51.2%;
        }

        .pulse_nine {
            position: absolute;
            top: 57%;
            left: 51.2%;
        }

        .pulse_ten {
            position: absolute;
            top: 60%;
            left: 51.2%;
        }

        .pulse_eleven {
            position: absolute;
            top: 63%;
            left: 51.2%;
        }

        .pulse_twelve {
            position: absolute;
            top: 66%;
            left: 51.2%;
        }

        .pulse_thirteen {
            position: absolute;
            top: 69%;
            left: 51.2%;
        }

        .pulse_fourteen {
            position: absolute;
            top: 72%;
            left: 51.2%;
        }

        .pulse_fifteen {
            position: absolute;
            top: 75%;
            left: 51.2%;
        }

        .pulse_sixteen {
            position: absolute;
            top: 78%;
            left: 51.2%;
        }

        .pulse_seventeen {
            position: absolute;
            top: 81%;
            left: 51.2%;
        }

        .pulse_eighteen {
            position: absolute;
            top: 83.8%;
            left: 51.2%;
        }

        .pulse_nineteen {
            position: absolute;
            top: 86.8%;
            left: 51.2%;
        }

        .pulse_twenty {
            position: absolute;
            top: 89.6%;
            left: 51.2%;
        }

        .respiration_title {
            position: absolute;
            top: 30.5%;
            left: 64.8%;
        }

        .respiration_one {
            position: absolute;
            top: 33.5%;
            left: 66%;
        }

        .respiration_two {
            position: absolute;
            top: 36.5%;
            left: 66%;
        }

        .respiration_three {
            position: absolute;
            top: 39.5%;
            left: 66%;
        }

        .respiration_four {
            position: absolute;
            top: 42.5%;
            left: 66%;
        }

        .respiration_five {
            position: absolute;
            top: 45.5%;
            left: 66%;
        }

        .respiration_six {
            position: absolute;
            top: 48.5%;
            left: 66%;
        }

        .respiration_seven {
            position: absolute;
            top: 51.5%;
            left: 66%;
        }

        .respiration_eight {
            position: absolute;
            top: 54.2%;
            left: 66%;
        }

        .respiration_nine {
            position: absolute;
            top: 57%;
            left: 66%;
        }

        .respiration_ten {
            position: absolute;
            top: 60%;
            left: 66%;
        }

        .respiration_eleven {
            position: absolute;
            top: 63%;
            left: 66%;
        }

        .respiration_twelve {
            position: absolute;
            top: 66%;
            left: 66%;
        }

        .respiration_thirteen {
            position: absolute;
            top: 69%;
            left: 66%;
        }

        .respiration_fourteen {
            position: absolute;
            top: 72%;
            left: 66%;
        }

        .respiration_fifteen {
            position: absolute;
            top: 75%;
            left: 66%;
        }

        .respiration_sixteen {
            position: absolute;
            top: 78%;
            left: 66%;
        }

        .respiration_seventeen {
            position: absolute;
            top: 81%;
            left: 66%;
        }

        .respiration_eighteen {
            position: absolute;
            top: 83.8%;
            left: 66%;
        }

        .respiration_nineteen {
            position: absolute;
            top: 86.8%;
            left: 66%;
        }

        .respiration_twenty {
            position: absolute;
            top: 89.6%;
            left: 66%;
        }

        .pain_title {
            position: absolute;
            top: 30.5%;
            left: 83%;
        }

        .pain_one {
            position: absolute;
            top: 33.5%;
            left: 81.7%;
        }

        .pain_two {
            position: absolute;
            top: 36.5%;
            left: 81.7%;
        }

        .pain_three {
            position: absolute;
            top: 39.5%;
            left: 81.7%;
        }

        .pain_four {
            position: absolute;
            top: 42.5%;
            left: 81.7%;
        }

        .pain_five {
            position: absolute;
            top: 45.5%;
            left: 81.7%;
        }

        .pain_six {
            position: absolute;
            top: 48.5%;
            left: 81.7%;
        }

        .pain_seven {
            position: absolute;
            top: 51.5%;
            left: 81.7%;
        }

        .pain_eight {
            position: absolute;
            top: 54.2%;
            left: 81.7%;
        }

        .pain_nine {
            position: absolute;
            top: 57%;
            left: 81.7%;
        }

        .pain_ten {
            position: absolute;
            top: 60%;
            left: 81.7%;
        }

        .pain_eleven {
            position: absolute;
            top: 63%;
            left: 81.7%;
        }

        .pain_twelve {
            position: absolute;
            top: 66%;
            left: 81.7%;
        }

        .pain_thirteen {
            position: absolute;
            top: 69%;
            left: 81.7%;
        }

        .pain_fourteen {
            position: absolute;
            top: 72%;
            left: 81.7%;
        }

        .pain_fifteen {
            position: absolute;
            top: 75%;
            left: 81.7%;
        }

        .pain_sixteen {
            position: absolute;
            top: 78%;
            left: 81.7%;
        }

        .pain_seventeen {
            position: absolute;
            top: 81%;
            left: 81.7%;
        }

        .pain_eighteen {
            position: absolute;
            top: 83.8%;
            left: 81.7%;
        }

        .pain_nineteen {
            position: absolute;
            top: 86.8%;
            left: 81.7%;
        }

        .pain_twenty {
            position: absolute;
            top: 89.6%;
            left: 81.7%;
        }

        .initial_title {
            position: absolute;
            top: 30.5%;
            left: 91.8%;
        }

        .initials_one {
            position: absolute;
            top: 33.5%;
            left: 93.5%;
        }

        .initials_two {
            position: absolute;
            top: 36.5%;
            left: 93.5%;
        }

        .initials_three {
            position: absolute;
            top: 39.5%;
            left: 93.5%;
        }

        .initials_four {
            position: absolute;
            top: 42.5%;
            left: 93.5%;
        }

        .initials_five {
            position: absolute;
            top: 45.5%;
            left: 93.5%;
        }

        .initials_six {
            position: absolute;
            top: 48.5%;
            left: 93.5%;
        }

        .initials_seven {
            position: absolute;
            top: 51.5%;
            left: 93.5%;
        }

        .initials_eight {
            position: absolute;
            top: 54.2%;
            left: 93.5%;
        }

        .initials_nine {
            position: absolute;
            top: 57%;
            left: 93.5%;
        }

        .initials_ten {
            position: absolute;
            top: 60%;
            left: 93.5%;
        }

        .initials_eleven {
            position: absolute;
            top: 63%;
            left: 93.5%;
        }

        .initials_twelve {
            position: absolute;
            top: 66%;
            left: 93.5%;
        }

        .initials_thirteen {
            position: absolute;
            top: 69%;
            left: 93.5%;
        }

        .initials_fourteen {
            position: absolute;
            top: 72%;
            left: 93.5%;
        }

        .initials_fifteen {
            position: absolute;
            top: 75%;
            left: 93.5%;
        }

        .initials_sixteen {
            position: absolute;
            top: 78%;
            left: 93.5%;
        }

        .initials_seventeen {
            position: absolute;
            top: 81%;
            left: 93.5%;
        }

        .initials_eighteen {
            position: absolute;
            top: 83.8%;
            left: 93.5%;
        }

        .initials_nineteen {
            position: absolute;
            top: 86.8%;
            left: 93.5%;
        }

        .initials_twenty {
            position: absolute;
            top: 89.6%;
            left: 93.5%;
        }
    </style>
</head>

<body>
    <div class="titlebar">
        <label>Vital Signs Flow Sheet</label>
    </div>
    <div class="tbl">
        <table>
            <thead>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-left: solid 2px;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-left: solid 2px;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-left: solid 2px;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-left: solid 2px; border-bottom: solid 2px;"></td>
                    <td style="border-bottom: solid 2px;"></td>
                    <td style="border-bottom: solid 2px;"></td>
                    <td style="border-bottom: solid 2px;"></td>
                    <td style="border-bottom: solid 2px;"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>

                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td style="border-bottom: solid 2px; border-top: solid 2px;"></td>
                    <td class="content"></td>
                    <td class="content"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="patient_label">
        Patient:
    </div>
    <div class="patient_value">
        {{ $vitalSign_view->patient_fullname ?? '' }}
    </div>
    <div class="birthday_label">
        D.O.B:
    </div>
    <div class="birthday_value">
        {{ Carbon\Carbon::parse($vitalSign_view->birthdate ?? '')->format('m/d/y') }}
    </div>
    <div class="gender_label">
        M/F:
    </div>
    <div class="gender_value">
        {{ $vitalSign_view->gender ?? '' }}
    </div>
    <div class="physician_label">
        Physician:
    </div>
    <div class="physician_value">
        {{ $vitalSign_view->physician ?? '' }}
    </div>
    <div class="notes_label">
        Notes:
    </div>
    <div class="notes_value">
        <p class="notes">
            {{ $vitalSign_view->notes ?? '' }}
        </p>
    </div>

    {{-- date section --}}
    <div class="date_title">
        Date
    </div>
    <div class="date_one">
        {{ $vitalSign_view->date['dateRecord'][1] ?? '' }}
    </div>
    <div class="date_two">
        {{ $vitalSign_view->date['dateRecord'][2] ?? '' }}
    </div>
    <div class="date_three">
        {{ $vitalSign_view->date['dateRecord'][3] ?? '' }}
    </div>
    <div class="date_fourth">
        {{ $vitalSign_view->date['dateRecord'][4] ?? '' }}
    </div>
    <div class="date_five">
        {{ $vitalSign_view->date['dateRecord'][5] ?? '' }}
    </div>
    <div class="date_six">
        {{ $vitalSign_view->date['dateRecord'][6] ?? '' }}
    </div>
    <div class="date_seven">
        {{ $vitalSign_view->date['dateRecord'][7] ?? '' }}
    </div>
    <div class="date_eight">
        {{ $vitalSign_view->date['dateRecord'][8] ?? '' }}
    </div>
    <div class="date_nine">
        {{ $vitalSign_view->date['dateRecord'][9] ?? '' }}
    </div>
    <div class="date_ten">
        {{ $vitalSign_view->date['dateRecord'][10] ?? '' }}
    </div>
    <div class="date_eleven">
        {{ $vitalSign_view->date['dateRecord'][11] ?? '' }}
    </div>
    <div class="date_twelve">
        {{ $vitalSign_view->date['dateRecord'][12] ?? '' }}
    </div>
    <div class="date_thirteen">
        {{ $vitalSign_view->date['dateRecord'][13] ?? '' }}
    </div>
    <div class="date_fourteen">
        {{ $vitalSign_view->date['dateRecord'][14] ?? '' }}
    </div>
    <div class="date_fifteen">
        {{ $vitalSign_view->date['dateRecord'][15] ?? '' }}
    </div>
    <div class="date_sixteen">
        {{ $vitalSign_view->date['dateRecord'][16] ?? '' }}
    </div>
    <div class="date_seventeen">
        {{ $vitalSign_view->date['dateRecord'][17] ?? '' }}
    </div>
    <div class="date_eighteen">
        {{ $vitalSign_view->date['dateRecord'][18] ?? '' }}
    </div>
    <div class="date_nineteen">
        {{ $vitalSign_view->date['dateRecord'][19] ?? '' }}
    </div>
    <div class="date_twenty">
        {{ $vitalSign_view->date['dateRecord'][20] ?? '' }}
    </div>

    {{-- weight section --}}
    <div class="weight_title">
        Weight
    </div>
    <div class="weight_one">
        {{ $vitalSign_view->weight['weightRecord'][1] ?? '' }}
    </div>
    <div class="weight_two">
        {{ $vitalSign_view->weight['weightRecord'][2] ?? '' }}
    </div>
    <div class="weight_three">
        {{ $vitalSign_view->weight['weightRecord'][3] ?? '' }}
    </div>
    <div class="weight_fourth">
        {{ $vitalSign_view->weight['weightRecord'][4] ?? '' }}
    </div>
    <div class="weight_five">
        {{ $vitalSign_view->weight['weightRecord'][5] ?? '' }}
    </div>
    <div class="weight_six">
        {{ $vitalSign_view->weight['weightRecord'][6] ?? '' }}
    </div>
    <div class="weight_seven">
        {{ $vitalSign_view->weight['weightRecord'][7] ?? '' }}
    </div>
    <div class="weight_eight">
        {{ $vitalSign_view->weight['weightRecord'][8] ?? '' }}
    </div>
    <div class="weight_nine">
        {{ $vitalSign_view->weight['weightRecord'][9] ?? '' }}
    </div>
    <div class="weight_ten">
        {{ $vitalSign_view->weight['weightRecord'][10] ?? '' }}
    </div>
    <div class="weight_eleven">
        {{ $vitalSign_view->weight['weightRecord'][11] ?? '' }}
    </div>
    <div class="weight_twelve">
        {{ $vitalSign_view->weight['weightRecord'][12] ?? '' }}
    </div>
    <div class="weight_thirteen">
        {{ $vitalSign_view->weight['weightRecord'][13] ?? '' }}
    </div>
    <div class="weight_fourteen">
        {{ $vitalSign_view->weight['weightRecord'][14] ?? '' }}
    </div>
    <div class="weight_fifteen">
        {{ $vitalSign_view->weight['weightRecord'][15] ?? '' }}
    </div>
    <div class="weight_sixteen">
        {{ $vitalSign_view->weight['weightRecord'][16] ?? '' }}
    </div>
    <div class="weight_seventeen">
        {{ $vitalSign_view->weight['weightRecord'][17] ?? '' }}
    </div>
    <div class="weight_eighteen">
        {{ $vitalSign_view->weight['weightRecord'][18] ?? '' }}
    </div>
    <div class="weight_nineteen">
        {{ $vitalSign_view->weight['weightRecord'][19] ?? '' }}
    </div>
    <div class="weight_twenty">
        {{ $vitalSign_view->weight['weightRecord'][20] ?? '' }}
    </div>

    {{-- Temp section --}}
    <div class="temp_title">
        Temp.
    </div>
    <div class="temp_one">
        {{ $vitalSign_view->temp['tempRecord'][1] ?? '' }}
    </div>
    <div class="temp_two">
        {{ $vitalSign_view->temp['tempRecord'][2] ?? '' }}
    </div>
    <div class="temp_three">
        {{ $vitalSign_view->temp['tempRecord'][3] ?? '' }}
    </div>
    <div class="temp_fourth">
        {{ $vitalSign_view->temp['tempRecord'][4] ?? '' }}
    </div>
    <div class="temp_five">
        {{ $vitalSign_view->temp['tempRecord'][5] ?? '' }}
    </div>
    <div class="temp_six">
        {{ $vitalSign_view->temp['tempRecord'][6] ?? '' }}
    </div>
    <div class="temp_seven">
        {{ $vitalSign_view->temp['tempRecord'][7] ?? '' }}
    </div>
    <div class="temp_eight">
        {{ $vitalSign_view->temp['tempRecord'][8] ?? '' }}
    </div>
    <div class="temp_nine">
        {{ $vitalSign_view->temp['tempRecord'][9] ?? '' }}
    </div>
    <div class="temp_ten">
        {{ $vitalSign_view->temp['tempRecord'][10] ?? '' }}
    </div>
    <div class="temp_eleven">
        {{ $vitalSign_view->temp['tempRecord'][11] ?? '' }}
    </div>
    <div class="temp_twelve">
        {{ $vitalSign_view->temp['tempRecord'][12] ?? '' }}
    </div>
    <div class="temp_thirteen">
        {{ $vitalSign_view->temp['tempRecord'][13] ?? '' }}
    </div>
    <div class="temp_fourteen">
        {{ $vitalSign_view->temp['tempRecord'][14] ?? '' }}
    </div>
    <div class="temp_fifteen">
        {{ $vitalSign_view->temp['tempRecord'][15] ?? '' }}
    </div>
    <div class="temp_sixteen">
        {{ $vitalSign_view->temp['tempRecord'][16] ?? '' }}
    </div>
    <div class="temp_seventeen">
        {{ $vitalSign_view->temp['tempRecord'][17] ?? '' }}
    </div>
    <div class="temp_eighteen">
        {{ $vitalSign_view->temp['tempRecord'][18] ?? '' }}
    </div>
    <div class="temp_nineteen">
        {{ $vitalSign_view->temp['tempRecord'][19] ?? '' }}
    </div>
    <div class="temp_twenty">
        {{ $vitalSign_view->temp['tempRecord'][20] ?? '' }}
    </div>


    {{-- bp section --}}
    <div class="bp_title">
        BP
    </div>
    <div class="bp_one">
        {{ $vitalSign_view->bp['bpRecord'][1] ?? '' }}
    </div>
    <div class="bp_two">
        {{ $vitalSign_view->bp['bpRecord'][2] ?? '' }}
    </div>
    <div class="bp_three">
        {{ $vitalSign_view->bp['bpRecord'][3] ?? '' }}
    </div>
    <div class="bp_four">
        {{ $vitalSign_view->bp['bpRecord'][4] ?? '' }}
    </div>
    <div class="bp_five">
        {{ $vitalSign_view->bp['bpRecord'][5] ?? '' }}
    </div>
    <div class="bp_six">
        {{ $vitalSign_view->bp['bpRecord'][6] ?? '' }}
    </div>
    <div class="bp_seven">
        {{ $vitalSign_view->bp['bpRecord'][7] ?? '' }}
    </div>
    <div class="bp_eight">
        {{ $vitalSign_view->bp['bpRecord'][8] ?? '' }}
    </div>
    <div class="bp_nine">
        {{ $vitalSign_view->bp['bpRecord'][9] ?? '' }}
    </div>
    <div class="bp_ten">
        {{ $vitalSign_view->bp['bpRecord'][10] ?? '' }}
    </div>
    <div class="bp_eleven">
        {{ $vitalSign_view->bp['bpRecord'][11] ?? '' }}
    </div>
    <div class="bp_twelve">
        {{ $vitalSign_view->bp['bpRecord'][12] ?? '' }}
    </div>
    <div class="bp_thirteen">
        {{ $vitalSign_view->bp['bpRecord'][13] ?? '' }}
    </div>
    <div class="bp_fourteen">
        {{ $vitalSign_view->bp['bpRecord'][14] ?? '' }}
    </div>
    <div class="bp_fifteen">
        {{ $vitalSign_view->bp['bpRecord'][15] ?? '' }}
    </div>
    <div class="bp_sixteen">
        {{ $vitalSign_view->bp['bpRecord'][16] ?? '' }}
    </div>
    <div class="bp_seventeen">
        {{ $vitalSign_view->bp['bpRecord'][17] ?? '' }}
    </div>
    <div class="bp_eighteen">
        {{ $vitalSign_view->bp['bpRecord'][18] ?? '' }}
    </div>
    <div class="bp_nineteen">
        {{ $vitalSign_view->bp['bpRecord'][19] ?? '' }}
    </div>
    <div class="bp_twenty">
        {{ $vitalSign_view->bp['bpRecord'][20] ?? '' }}
    </div>
    {{-- pulse section --}}
    <div class="pulse_title">
        Pulse
    </div>
    <div class="pulse_one">
        {{ $vitalSign_view->pulse['pulseRecord'][1] ?? '' }}
    </div>
    <div class="pulse_two">
        {{ $vitalSign_view->pulse['pulseRecord'][2] ?? '' }}
    </div>
    <div class="pulse_three">
        {{ $vitalSign_view->pulse['pulseRecord'][3] ?? '' }}
    </div>
    <div class="pulse_four">
        {{ $vitalSign_view->pulse['pulseRecord'][4] ?? '' }}
    </div>
    <div class="pulse_five">
        {{ $vitalSign_view->pulse['pulseRecord'][5] ?? '' }}
    </div>
    <div class="pulse_six">
        {{ $vitalSign_view->pulse['pulseRecord'][6] ?? '' }}
    </div>
    <div class="pulse_seven">
        {{ $vitalSign_view->pulse['pulseRecord'][7] ?? '' }}
    </div>
    <div class="pulse_eight">
        {{ $vitalSign_view->pulse['pulseRecord'][8] ?? '' }}
    </div>
    <div class="pulse_nine">
        {{ $vitalSign_view->pulse['pulseRecord'][9] ?? '' }}
    </div>
    <div class="pulse_ten">
        {{ $vitalSign_view->pulse['pulseRecord'][10] ?? '' }}
    </div>
    <div class="pulse_eleven">
        {{ $vitalSign_view->pulse['pulseRecord'][11] ?? '' }}
    </div>
    <div class="pulse_twelve">
        {{ $vitalSign_view->pulse['pulseRecord'][12] ?? '' }}
    </div>
    <div class="pulse_thirteen">
        {{ $vitalSign_view->pulse['pulseRecord'][13] ?? '' }}
    </div>
    <div class="pulse_fourteen">
        {{ $vitalSign_view->pulse['pulseRecord'][14] ?? '' }}
    </div>
    <div class="pulse_fifteen">
        {{ $vitalSign_view->pulse['pulseRecord'][15] ?? '' }}
    </div>
    <div class="pulse_sixteen">
        {{ $vitalSign_view->pulse['pulseRecord'][16] ?? '' }}
    </div>
    <div class="pulse_seventeen">
        {{ $vitalSign_view->pulse['pulseRecord'][17] ?? '' }}
    </div>
    <div class="pulse_eighteen">
        {{ $vitalSign_view->pulse['pulseRecord'][18] ?? '' }}
    </div>
    <div class="pulse_nineteen">
        {{ $vitalSign_view->pulse['pulseRecord'][19] ?? '' }}
    </div>
    <div class="pulse_twenty">
        {{ $vitalSign_view->pulse['pulseRecord'][20] ?? '' }}
    </div>


    {{-- respiration section --}}
    <div class="respiration_title">
        Respiration
    </div>
    <div class="respiration_one">
        {{ $vitalSign_view->respiration['respirationRecord'][1] ?? '' }}
    </div>
    <div class="respiration_two">
        {{ $vitalSign_view->respiration['respirationRecord'][2] ?? '' }}
    </div>
    <div class="respiration_three">
        {{ $vitalSign_view->respiration['respirationRecord'][3] ?? '' }}
    </div>
    <div class="respiration_four">
        {{ $vitalSign_view->respiration['respirationRecord'][4] ?? '' }}
    </div>
    <div class="respiration_five">
        {{ $vitalSign_view->respiration['respirationRecord'][5] ?? '' }}
    </div>
    <div class="respiration_six">
        {{ $vitalSign_view->respiration['respirationRecord'][6] ?? '' }}
    </div>
    <div class="respiration_seven">
        {{ $vitalSign_view->respiration['respirationRecord'][7] ?? '' }}
    </div>
    <div class="respiration_eight">
        {{ $vitalSign_view->respiration['respirationRecord'][8] ?? '' }}
    </div>
    <div class="respiration_nine">
        {{ $vitalSign_view->respiration['respirationRecord'][9] ?? '' }}
    </div>
    <div class="respiration_ten">
        {{ $vitalSign_view->respiration['respirationRecord'][10] ?? '' }}
    </div>
    <div class="respiration_eleven">
        {{ $vitalSign_view->respiration['respirationRecord'][11] ?? '' }}
    </div>
    <div class="respiration_twelve">
        {{ $vitalSign_view->respiration['respirationRecord'][12] ?? '' }}
    </div>
    <div class="respiration_thirteen">
        {{ $vitalSign_view->respiration['respirationRecord'][13] ?? '' }}
    </div>
    <div class="respiration_fourteen">
        {{ $vitalSign_view->respiration['respirationRecord'][14] ?? '' }}
    </div>
    <div class="respiration_fifteen">
        {{ $vitalSign_view->respiration['respirationRecord'][15] ?? '' }}
    </div>
    <div class="respiration_sixteen">
        {{ $vitalSign_view->respiration['respirationRecord'][16] ?? '' }}
    </div>
    <div class="respiration_seventeen">
        {{ $vitalSign_view->respiration['respirationRecord'][17] ?? '' }}
    </div>
    <div class="respiration_eighteen">
        {{ $vitalSign_view->respiration['respirationRecord'][18] ?? '' }}
    </div>
    <div class="respiration_nineteen">
        {{ $vitalSign_view->respiration['respirationRecord'][19] ?? '' }}
    </div>
    <div class="respiration_twenty">
        {{ $vitalSign_view->respiration['respirationRecord'][20] ?? '' }}
    </div>

    {{-- pain section --}}
    <div class="pain_title">
        Pain
    </div>
    <div class="pain_one">
        {{ $vitalSign_view->pains['painRecord'][1] ?? '' }}
    </div>
    <div class="pain_two">
        {{ $vitalSign_view->pains['painRecord'][2] ?? '' }}
    </div>
    <div class="pain_three">
        {{ $vitalSign_view->pains['painRecord'][3] ?? '' }}
    </div>
    <div class="pain_four">
        {{ $vitalSign_view->pains['painRecord'][4] ?? '' }}
    </div>
    <div class="pain_five">
        {{ $vitalSign_view->pains['painRecord'][5] ?? '' }}
    </div>
    <div class="pain_six">
        {{ $vitalSign_view->pains['painRecord'][6] ?? '' }}
    </div>
    <div class="pain_seven">
        {{ $vitalSign_view->pains['painRecord'][7] ?? '' }}
    </div>
    <div class="pain_eight">
        {{ $vitalSign_view->pains['painRecord'][8] ?? '' }}
    </div>
    <div class="pain_nine">
        {{ $vitalSign_view->pains['painRecord'][9] ?? '' }}
    </div>
    <div class="pain_ten">
        {{ $vitalSign_view->pains['painRecord'][10] ?? '' }}
    </div>
    <div class="pain_eleven">
        {{ $vitalSign_view->pains['painRecord'][11] ?? '' }}
    </div>
    <div class="pain_twelve">
        {{ $vitalSign_view->pains['painRecord'][12] ?? '' }}
    </div>
    <div class="pain_thirteen">
        {{ $vitalSign_view->pains['painRecord'][13] ?? '' }}
    </div>
    <div class="pain_fourteen">
        {{ $vitalSign_view->pains['painRecord'][14] ?? '' }}
    </div>
    <div class="pain_fifteen">
        {{ $vitalSign_view->pains['painRecord'][15] ?? '' }}
    </div>
    <div class="pain_sixteen">
        {{ $vitalSign_view->pains['painRecord'][16] ?? '' }}
    </div>
    <div class="pain_seventeen">
        {{ $vitalSign_view->pains['painRecord'][17] ?? '' }}
    </div>
    <div class="pain_eighteen">
        {{ $vitalSign_view->pains['painRecord'][18] ?? '' }}
    </div>
    <div class="pain_nineteen">
        {{ $vitalSign_view->pains['painRecord'][19] ?? '' }}
    </div>
    <div class="pain_twenty">
        {{ $vitalSign_view->pains['painRecord'][20] ?? '' }}
    </div>

    {{-- initial section --}}
    <div class="initial_title">
        Initials
    </div>
    <div class="initials_one">
        {{ $vitalSign_view->initials['initialsRecord'][1] ?? '' }}
    </div>
    <div class="initials_two">
        {{ $vitalSign_view->initials['initialsRecord'][2] ?? '' }}
    </div>
    <div class="initials_three">
        {{ $vitalSign_view->initials['initialsRecord'][3] ?? '' }}
    </div>
    <div class="initials_four">
        {{ $vitalSign_view->initials['initialsRecord'][4] ?? '' }}
    </div>
    <div class="initials_five">
        {{ $vitalSign_view->initials['initialsRecord'][5] ?? '' }}
    </div>
    <div class="initials_six">
        {{ $vitalSign_view->initials['initialsRecord'][6] ?? '' }}
    </div>
    <div class="initials_seven">
        {{ $vitalSign_view->initials['initialsRecord'][7] ?? '' }}
    </div>
    <div class="initials_eight">
        {{ $vitalSign_view->initials['initialsRecord'][8] ?? '' }}
    </div>
    <div class="initials_nine">
        {{ $vitalSign_view->initials['initialsRecord'][9] ?? '' }}
    </div>
    <div class="initials_ten">
        {{ $vitalSign_view->initials['initialsRecord'][10] ?? '' }}
    </div>
    <div class="initials_eleven">
        {{ $vitalSign_view->initials['initialsRecord'][11] ?? '' }}
    </div>
    <div class="initials_twelve">
        {{ $vitalSign_view->initials['initialsRecord'][12] ?? '' }}
    </div>
    <div class="initials_thirteen">
        {{ $vitalSign_view->initials['initialsRecord'][13] ?? '' }}
    </div>
    <div class="initials_fourteen">
        {{ $vitalSign_view->initials['initialsRecord'][14] ?? '' }}
    </div>
    <div class="initials_fifteen">
        {{ $vitalSign_view->initials['initialsRecord'][15] ?? '' }}
    </div>
    <div class="initials_sixteen">
        {{ $vitalSign_view->initials['initialsRecord'][16] ?? '' }}
    </div>
    <div class="initials_seventeen">
        {{ $vitalSign_view->initials['initialsRecord'][17] ?? '' }}
    </div>
    <div class="initials_eighteen">
        {{ $vitalSign_view->initials['initialsRecord'][15] ?? '' }}
    </div>
    <div class="initials_nineteen">
        {{ $vitalSign_view->initials['initialsRecord'][19] ?? '' }}
    </div>
    <div class="initials_twenty">
        {{ $vitalSign_view->initials['initialsRecord'][20] ?? '' }}
    </div>

</body>

</html>
