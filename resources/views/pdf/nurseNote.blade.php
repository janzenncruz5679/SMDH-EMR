<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pdf_nursenotes->patient_fullname }} Nurse Notes Info</title>
    <style>
        @page {
            margin: 20px 45px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 0.9rem;
        }

        .titlebar {
            position: absolute;
            top: 3%;
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
        }

        .titlenurse {
            position: absolute;
            top: 14.5%;
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
        }


        .name_label {
            position: absolute;
            top: 8%;
        }

        .name_value {
            position: absolute;
            top: 8%;
            left: 7.5%;
        }

        .case_label {
            position: absolute;
            top: 8%;
            left: 50.8%
        }

        .case_value {
            position: absolute;
            top: 8%;
            left: 61%
        }

        .age_label {
            position: absolute;
            top: 11%;
        }

        .age_value {
            position: absolute;
            top: 11%;
            left: 5.5%;
        }

        .ward_label {
            position: absolute;
            top: 11%;
            left: 53.5%
        }

        .ward_value {
            position: absolute;
            top: 11%;
            left: 61%
        }

        .tbl {
            position: absolute;
            top: 18.5%;
            width: 100%;
            height: 78%;
            /* background-color: rgb(130, 130, 192); */
        }

        table {
            width: 100%;
            border: solid 2px;
            border-collapse: collapse;
        }

        td.head {
            padding: 15px;

        }

        td.body {
            padding: 44.2%;
        }

        .date {
            position: absolute;
            top: 19.3%;
            left: 7.2%;
        }

        .date_one {
            position: absolute;
            top: 23%;
            left: 5%;
        }

        .date_two {
            position: absolute;
            top: 41%;
            left: 5%;
        }

        .focus {
            position: absolute;
            top: 19.3%;
            left: 34.7%;
        }

        .focus_one {
            height: 200px;
            position: absolute;
            top: 21.7%;
            left: 27.5%;
            width: 21.5%;
        }

        .focus_pone {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .focus_two {
            height: 200px;
            position: absolute;
            top: 39.6%;
            left: 27.5%;
            width: 21.5%;
        }

        .focus_ptwo {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .dar {
            position: absolute;
            top: 19.3%;
            left: 61.5%;
        }

        .dar_one {
            /* background-color: rgb(130, 130, 192); */
            height: 200px;
            position: absolute;
            top: 21.7%;
            left: 52.7%;
            width: 45.5%;
        }

        .dar_pone {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .dar_two {
            /* background-color: rgb(130, 130, 192); */
            height: 200px;
            position: absolute;
            top: 39.6%;
            left: 52.7%;
            width: 45.5%;
        }

        .dar_ptwo {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="titlebar">
        <label>SAN MIGUEL DISTRICT HOSPITAL</label>
    </div>
    <div class="name_label">
        NAME:__________________________________________
    </div>
    <div class="name_value">
        {{ $pdf_nursenotes->patient_fullname ?? '' }}
    </div>
    <div class="case_label">
        CASE NO:_______________________________________
    </div>
    <div class="case_value">
        {{ $pdf_nursenotes->id ?? '' }}
    </div>
    <div class="age_label">
        AGE:_______________________________________________
    </div>
    <div class="age_value">
        {{ $pdf_nursenotes->age ?? '' }}
    </div>
    <div class="ward_label">
        WARD:_______________________________________
    </div>
    <div class="ward_value">
        {{ $pdf_nursenotes->ward ?? '' }}
    </div>
    <div class="titlenurse">
        <label>NURSE NOTES</label>
    </div>

    <div class="tbl">
        <table>
            <thead>
                <tr>
                    <td class="head" style="border: solid 2px; border-bottom: solid 2px;"></td>
                    <td class="head" style="border: solid 2px; border-bottom: solid 2px;"></td>
                    <td class="head" style="border-bottom: solid 2px;"></td>
                    <td class="head" style="border-bottom: solid 2px;"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="body" style="border: solid 2px;"></td>
                    <td class="body" style="border: solid 2px;"></td>
                    <td class="body"></td>
                    <td class="body"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="date">
        DATE/TIME
    </div>
    <div class="date_one">
        {{ $pdf_nursenotes->record_date['obsDate'][1] ?? '' }}
        {{ $pdf_nursenotes->record_time['obsTime'][1] ?? '' }}
    </div>
    <div class="date_two">
        {{ $pdf_nursenotes->record_date['obsDate'][2] ?? '' }}
        {{ $pdf_nursenotes->record_time['obsTime'][2] ?? '' }}
    </div>

    <div class="focus">
        FOCUS
    </div>

    <div class="focus_one">
        <p class="focus_pone">
            {{ $pdf_nursenotes->focus['obsFocus'][1] ?? '' }}
        </p>
    </div>
    <div class="focus_two">
        <p class="focus_ptwo">
            {{ $pdf_nursenotes->focus['obsFocus'][2] ?? '' }}
        </p>
    </div>

    <div class="dar">
        DATA, ACTION & RESPONSE
    </div>
    <div class="dar_one">
        <p class="dar_pone">
            {{ $pdf_nursenotes->data_action_response['obsDar'][1] ?? '' }}
        </p>
    </div>
    <div class="dar_two">
        <p class="dar_ptwo">
            {{ $pdf_nursenotes->data_action_response['obsDar'][2] ?? '' }}
        </p>
    </div>


</body>

</html>
