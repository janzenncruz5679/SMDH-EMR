<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission_details_{{ $view_first->id }}</title>
    <style>
        @page {
            margin: 10px;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 2px;
        }

        body {
            margin: 0;
            width: 100%;

        }

        table.first_section,
        th,
        td {
            border: 2px solid;
        }

        table.second_section,
        th,
        td {
            border-top: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <table class="first_section">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
        <tr>
            <td>Peter</td>
            <td>Griffin</td>
        </tr>
        <tr>
            <td>Lois</td>
            <td>Griffin</td>
        </tr>
    </table>
    <table class="second_section">
        <tr>
            <th>s</th>

        </tr>
        <tr>
            <td>Peter</td>

        </tr>
    </table>

    {{-- <div class="">
        <div class="">
            <label>NAME OF HOSPITAL: San Miguel District Hospital</label>
        </div>
        <div class="">
            <label>NAME OF</label>
        </div>
    </div> --}}
    {{-- <input type="checkbox" id="html" name="fav_language" value="HTML"
        {{ $view_first->gender == 'Male' ? 'checked' : 'disabled' }}>
    <label for="html">HTML</label><br>
    <input type="checkbox" id="css" name="fav_language" value="CSS">
    <label for="css">CSS</label><br>
    <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label> --}}
</body>

</html>
