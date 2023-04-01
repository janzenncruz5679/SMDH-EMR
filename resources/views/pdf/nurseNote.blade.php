<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Nurse Notes Info ' . $nurseNote_view->id . '.pdf' }}</title>
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
            top: 38%;
            left: 5%;
        }

        .date_three {
            position: absolute;
            top: 51%;
            left: 5%;
        }

        .date_four {
            position: absolute;
            top: 64%;
            left: 5%;
        }

        .date_five {
            position: absolute;
            top: 77%;
            left: 5%;
        }

        .focus {
            position: absolute;
            top: 19.3%;
            left: 34.7%;
        }

        .focus_one {
            height: 150px;
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
            height: 150px;
            position: absolute;
            top: 36.8%;
            left: 27.5%;
            width: 21.5%;
        }

        .focus_ptwo {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .focus_three {
            height: 150px;
            position: absolute;
            top: 49.7%;
            left: 27.5%;
            width: 21.5%;
        }

        .focus_pthree {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .focus_four {
            height: 150px;
            position: absolute;
            top: 62.5%;
            left: 27.5%;
            width: 21.5%;
        }

        .focus_pfour {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .focus_five {
            height: 150px;
            position: absolute;
            top: 75.7%;
            left: 27.5%;
            width: 21.5%;
        }

        .focus_pfive {
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
            height: 150px;
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
            height: 150px;
            position: absolute;
            top: 36.8%;
            left: 52.7%;
            width: 45.5%;
        }

        .dar_ptwo {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .dar_three {
            height: 150px;
            position: absolute;
            top: 49.7%;
            left: 52.7%;
            width: 45.5%;
        }

        .dar_pthree {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .dar_four {
            height: 150px;
            position: absolute;
            top: 62.5%;
            left: 52.7%;
            width: 45.5%;
        }

        .dar_pfour {
            max-width: 100%;
            word-wrap: break-word;
            text-align: center;
        }

        .dar_five {
            height: 150px;
            position: absolute;
            top: 75.7%;
            left: 52.7%;
            width: 45.5%;
        }

        .dar_pfive {
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
        {{ $nurseNote_view->patient_fullname ?? '' }}
    </div>
    <div class="case_label">
        CASE NO:_______________________________________
    </div>
    <div class="case_value">
        {{ $nurseNote_view->id ?? '' }}
    </div>
    <div class="age_label">
        AGE:_______________________________________________
    </div>
    <div class="age_value">
        {{ $nurseNote_view->age ?? '' }}
    </div>
    <div class="ward_label">
        WARD:_______________________________________
    </div>
    <div class="ward_value">
        {{ $nurseNote_view->ward ?? '' }}
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
        {{ Carbon\Carbon::parse($nurseNote_view->record_date['obsDate'][1] ?? '')->format('m/d/y') }}
        {{ Carbon\Carbon::parse($nurseNote_view->record_time['obsTime'][1] ?? '')->format('g:i A') }}
    </div>
    <div class="date_two">
        {{ Carbon\Carbon::parse($nurseNote_view->record_date['obsDate'][2] ?? '')->format('m/d/y') }}
        {{ Carbon\Carbon::parse($nurseNote_view->record_time['obsTime'][2] ?? '')->format('g:i A') }}
    </div>
    <div class="date_three">
        {{ Carbon\Carbon::parse($nurseNote_view->record_date['obsDate'][3] ?? '')->format('m/d/y') }}
        {{ Carbon\Carbon::parse($nurseNote_view->record_time['obsTime'][3] ?? '')->format('g:i A') }}
    </div>
    <div class="date_four">
        {{ Carbon\Carbon::parse($nurseNote_view->record_date['obsDate'][4] ?? '')->format('m/d/y') }}
        {{ Carbon\Carbon::parse($nurseNote_view->record_time['obsTime'][4] ?? '')->format('g:i A') }}
    </div>
    <div class="date_five">
        {{ Carbon\Carbon::parse($nurseNote_view->record_date['obsDate'][5] ?? '')->format('m/d/y') }}
        {{ Carbon\Carbon::parse($nurseNote_view->record_time['obsTime'][5] ?? '')->format('g:i A') }}
    </div>

    <div class="focus">
        FOCUS
    </div>

    <div class="focus_one">
        <p class="focus_pone">
            {{ $nurseNote_view->focus['obsFocus'][1] ?? '' }}
        </p>
    </div>
    <div class="focus_two">
        <p class="focus_ptwo">
            {{ $nurseNote_view->focus['obsFocus'][2] ?? '' }}
        </p>
    </div>
    <div class="focus_three">
        <p class="focus_pthree">
            {{ $nurseNote_view->focus['obsFocus'][3] ?? '' }}
        </p>
    </div>
    <div class="focus_four">
        <p class="focus_pfour">
            {{ $nurseNote_view->focus['obsFocus'][4] ?? '' }}
        </p>
    </div>
    <div class="focus_five">
        <p class="focus_pfive">
            {{ $nurseNote_view->focus['obsFocus'][5] ?? '' }}
        </p>
    </div>

    <div class="dar">
        DATA, ACTION & RESPONSE
    </div>
    <div class="dar_one">
        <p class="dar_pone">
            {{ $nurseNote_view->data_action_response['obsDar'][1] ?? '' }}
        </p>
    </div>
    <div class="dar_two">
        <p class="dar_ptwo">
            {{ $nurseNote_view->data_action_response['obsDar'][2] ?? '' }}
        </p>
    </div>
    <div class="dar_three">
        <p class="dar_pthree">
            {{ $nurseNote_view->data_action_response['obsDar'][3] ?? '' }}
        </p>
    </div>
    <div class="dar_four">
        <p class="dar_pfour">
            {{ $nurseNote_view->data_action_response['obsDar'][4] ?? '' }}
        </p>
    </div>
    <div class="dar_five">
        <p class="dar_pfive">
            {{ $nurseNote_view->data_action_response['obsDar'][5] ?? '' }}
        </p>
    </div>


</body>

</html>
