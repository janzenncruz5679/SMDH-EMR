<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Fluid Intake Info ' . $fluidIntake_view->id . '.pdf' }}</title>
    <style>
        @page {
            margin: 20px 45px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 0.8rem;
        }

        .title {
            position: absolute;
            top: 3%;
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

        .fluid_title {
            position: absolute;
            top: 8.5%;
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
        }

        .case_label {
            position: absolute;
            top: 12%;
            left: 79.8%;
        }

        .case_value {
            position: absolute;
            top: 11.8%;
            left: 93%;
            font-size: 1.1rem;
        }

        .name_label {
            position: absolute;
            top: 15%;
        }

        .name_value {
            position: absolute;
            top: 14.8%;
            left: 5.8%;
            font-size: 1.1rem;

        }

        .age_label {
            position: absolute;
            top: 15%;
            left: 53%;
        }

        .age_value {
            position: absolute;
            top: 14.8%;
            left: 57.5%;
            font-size: 1.1rem;

        }

        .sex_label {
            position: absolute;
            top: 15%;
            left: 64.1%;
        }

        .sex_value {
            position: absolute;
            top: 14.8%;
            left: 68.2%;
            font-size: 1.1rem;

        }

        .ward_label {
            position: absolute;
            top: 15%;
            left: 74.5%;
        }

        .ward_value {
            position: absolute;
            top: 14.8%;
            left: 80.8%;
            font-size: 1.1rem;
        }

        .bed_label {
            position: absolute;
            top: 15%;
            left: 88.5%;
        }

        .bed_value {
            position: absolute;
            top: 14.8%;
            left: 92.8%;
            font-size: 1.1rem;
        }

        .diagnosis_label {
            position: absolute;
            top: 17.4%;
        }

        .diagnosis_value {
            position: absolute;
            top: 17.25%;
            left: 10.2%;
            font-size: 1.1rem;
        }

        .date_intake_label_one {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 20%;
            left: 2%;
        }

        .date_intake_value_one {
            font-size: 1.2rem;
            position: absolute;
            top: 20%;
            left: 9%;
        }

        .date_intake_label_two {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 36%;
            left: 2%;
        }

        .date_intake_value_two {
            font-size: 1.2rem;
            position: absolute;
            top: 36%;
            left: 9%;
        }

        .date_intake_label_three {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 52%;
            left: 2%;
        }

        .date_intake_value_three {
            font-size: 1.2rem;
            position: absolute;
            top: 52%;
            left: 9%;
        }

        .date_intake_label_four {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 68%;
            left: 2%;
        }

        .date_intake_value_four {
            font-size: 1.2rem;
            position: absolute;
            top: 68%;
            left: 9%;
        }

        .date_intake_label_five {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 84%;
            left: 2%;
        }

        .date_intake_value_five {
            font-size: 1.2rem;
            position: absolute;
            top: 84%;
            left: 9%;
        }

        .intake_label_one {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 20%;
            left: 26%;
        }

        .intake_label_two {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 36%;
            left: 26%;
        }

        .intake_label_three {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 52%;
            left: 26%;
        }

        .intake_label_four {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 68%;
            left: 26%;
        }

        .intake_label_five {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 84%;
            left: 26%;
        }


        .output_label_one {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 20%;
            left: 75%;
        }

        .output_label_two {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 36%;
            left: 75%;
        }

        .output_label_three {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 52%;
            left: 75%;
        }

        .output_label_four {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 68%;
            left: 75%;
        }

        .output_label_five {
            font-weight: 600;
            font-size: 1.2rem;
            position: absolute;
            top: 84%;
            left: 75%;
        }

        .tbl {
            position: absolute;
            top: 18.5%;
            width: 100%;
            height: 20%;
        }

        .tbl_two {
            position: absolute;
            top: 34.5%;
            width: 100%;
            height: 20%;
        }

        .tbl_three {
            position: absolute;
            top: 50%;
            width: 100%;
            height: 20%;
        }

        .tbl_four {
            position: absolute;
            top: 66%;
            width: 100%;
            height: 20%;
        }

        .tbl_five {
            position: absolute;
            top: 82%;
            width: 100%;
            height: 20%;
        }

        table {
            width: 100%;
            border: solid 1px;
            border-collapse: collapse;
            position: absolute;
            top: 20%;
        }

        td {
            padding: 12px;
        }

        .tbl_timelabel_one {
            position: absolute;
            top: 23.1%;
            left: 3.4%;
        }

        .tbl_timelabel_two {
            position: absolute;
            top: 39%;
            left: 3.4%;
        }

        .tbl_timelabel_three {
            position: absolute;
            top: 54.4%;
            left: 3.4%;
        }

        .tbl_timelabel_four {
            position: absolute;
            top: 70.4%;
            left: 3.4%;
        }

        .tbl_timelabel_five {
            position: absolute;
            top: 86.4%;
            left: 3.4%;
        }

        .tbl_orallabel_one {
            position: absolute;
            top: 23.1%;
            left: 14.5%;
        }

        .tbl_orallabel_two {
            position: absolute;
            top: 39%;
            left: 14.5%;
        }

        .tbl_orallabel_three {
            position: absolute;
            top: 54.4%;
            left: 14.5%;
        }

        .tbl_orallabel_four {
            position: absolute;
            top: 70.4%;
            left: 14.5%;
        }

        .tbl_orallabel_five {
            position: absolute;
            top: 86.4%;
            left: 14.5%;
        }

        .tbl_parentallabel_one {
            position: absolute;
            top: 23.1%;
            left: 28.4%;
        }

        .tbl_parentallabel_two {
            position: absolute;
            top: 39%;
            left: 28.4%;
        }

        .tbl_parentallabel_three {
            position: absolute;
            top: 54.4%;
            left: 28.4%;
        }

        .tbl_parentallabel_four {
            position: absolute;
            top: 70.4%;
            left: 28.4%;
        }

        .tbl_parentallabel_five {
            position: absolute;
            top: 86.4%;
            left: 28.4%;
        }

        .tbl_totalfirstlabel_one {
            position: absolute;
            top: 23.1%;
            left: 46.85%;
        }

        .tbl_totalfirstlabel_two {
            position: absolute;
            top: 39%;
            left: 46.85%;
        }

        .tbl_totalfirstlabel_three {
            position: absolute;
            top: 54.4%;
            left: 46.85%;
        }

        .tbl_totalfirstlabel_four {
            position: absolute;
            top: 70.4%;
            left: 46.85%;
        }

        .tbl_totalfirstlabel_five {
            position: absolute;
            top: 86.4%;
            left: 46.85%;
        }

        .tbl_urinelabel_one {
            position: absolute;
            top: 23.1%;
            left: 58.2%;
        }

        .tbl_urinelabel_two {
            position: absolute;
            top: 39%;
            left: 58.2%;
        }

        .tbl_urinelabel_three {
            position: absolute;
            top: 54.4%;
            left: 58.2%;
        }

        .tbl_urinelabel_four {
            position: absolute;
            top: 70.4%;
            left: 58.2%;
        }

        .tbl_urinelabel_five {
            position: absolute;
            top: 86.4%;
            left: 58.2%;
        }

        .tbl_drainagelabel_one {
            position: absolute;
            top: 23.1%;
            left: 67.2%;
        }

        .tbl_drainagelabel_two {
            position: absolute;
            top: 39%;
            left: 67.2%;
        }

        .tbl_drainagelabel_three {
            position: absolute;
            top: 54.4%;
            left: 67.2%;
        }

        .tbl_drainagelabel_four {
            position: absolute;
            top: 70.4%;
            left: 67.2%;
        }

        .tbl_drainagelabel_five {
            position: absolute;
            top: 86.4%;
            left: 67.2%;
        }

        .tbl_otherlabel_one {
            position: absolute;
            top: 23.1%;
            left: 79.5%;
        }

        .tbl_otherlabel_two {
            position: absolute;
            top: 39%;
            left: 79.5%;
        }

        .tbl_otherlabel_three {
            position: absolute;
            top: 54.4%;
            left: 79.5%;
        }

        .tbl_otherlabel_four {
            position: absolute;
            top: 70.4%;
            left: 79.5%;
        }

        .tbl_otherlabel_five {
            position: absolute;
            top: 86.4%;
            left: 79.5%;
        }

        .tbl_totalsecondlabel_one {
            position: absolute;
            top: 23.1%;
            left: 91.5%;
        }

        .tbl_totalsecondlabel_two {
            position: absolute;
            top: 39%;
            left: 91.5%;
        }

        .tbl_totalsecondlabel_three {
            position: absolute;
            top: 54.4%;
            left: 91.5%;
        }

        .tbl_totalsecondlabel_four {
            position: absolute;
            top: 70.4%;
            left: 91.5%;
        }

        .tbl_totalsecondlabel_five {
            position: absolute;
            top: 86.4%;
            left: 91.5%;
        }

        .tbl_morninglabel_one {
            position: absolute;
            top: 25.3%;
            left: 4.5%;
        }

        .tbl_morninglabel_two {
            position: absolute;
            top: 41.3%;
            left: 4.5%;
        }

        .tbl_morninglabel_three {
            position: absolute;
            top: 56.8%;
            left: 4.5%;
        }

        .tbl_morninglabel_four {
            position: absolute;
            top: 72.8%;
            left: 4.5%;
        }

        .tbl_morninglabel_five {
            position: absolute;
            top: 88.8%;
            left: 4.5%;
        }

        .tbl_noonlabel_one {
            position: absolute;
            top: 27.6%;
            left: 4.2%;
        }

        .tbl_noonlabel_two {
            position: absolute;
            top: 43.6%;
            left: 4.2%;
        }

        .tbl_noonlabel_three {
            position: absolute;
            top: 59.1%;
            left: 4.2%;
        }

        .tbl_noonlabel_four {
            position: absolute;
            top: 75.1%;
            left: 4.2%;
        }

        .tbl_noonlabel_five {
            position: absolute;
            top: 91.1%;
            left: 4.2%;
        }

        .tbl_nightlabel_one {
            position: absolute;
            top: 29.9%;
            left: 4%;
        }

        .tbl_nightlabel_two {
            position: absolute;
            top: 45.8%;
            left: 4%;
        }

        .tbl_nightlabel_three {
            position: absolute;
            top: 61.4%;
            left: 4%;
        }

        .tbl_nightlabel_four {
            position: absolute;
            top: 77.4%;
            left: 4%;
        }

        .tbl_nightlabel_five {
            position: absolute;
            top: 93.4%;
            left: 4%;
        }

        .tbl_finaltotallabel_one {
            position: absolute;
            top: 32.2%;
            left: 2.7%;
        }

        .tbl_finaltotallabel_two {
            position: absolute;
            top: 48.2%;
            left: 2.7%;
        }

        .tbl_finaltotallabel_three {
            position: absolute;
            top: 63.7%;
            left: 2.7%;
        }

        .tbl_finaltotallabel_four {
            position: absolute;
            top: 79.67%;
            left: 2.7%;
        }

        .tbl_finaltotallabel_five {
            position: absolute;
            top: 95.7%;
            left: 2.7%;
        }

        .tbl_oralvalue_one {
            position: absolute;
            top: 25.3%;
            left: 14.3%;
        }

        .tbl_oralvalue_two {
            position: absolute;
            top: 27.6%;
            left: 14.3%;
        }

        .tbl_oralvalue_three {
            position: absolute;
            top: 29.9%;
            left: 14.3%;
        }

        .tbl_oralvalue_four {
            position: absolute;
            top: 32.2%;
            left: 14.3%;
        }

        .tbl_oralvalue_five {
            position: absolute;
            top: 41.3%;
            left: 14.3%;
        }

        .tbl_oralvalue_six {
            position: absolute;
            top: 43.6%;
            left: 14.3%;
        }

        .tbl_oralvalue_seven {
            position: absolute;
            top: 45.8%;
            left: 14.3%;
        }

        .tbl_oralvalue_eight {
            position: absolute;
            top: 48.2%;
            left: 14.3%;
        }

        .tbl_oralvalue_nine {
            position: absolute;
            top: 56.8%;
            left: 14.3%;
        }

        .tbl_oralvalue_ten {
            position: absolute;
            top: 59.1%;
            left: 14.3%;
        }

        .tbl_oralvalue_eleven {
            position: absolute;
            top: 61.4%;
            left: 14.3%;
        }

        .tbl_oralvalue_twelve {
            position: absolute;
            top: 63.7%;
            left: 14.3%;
        }

        .tbl_oralvalue_thirteen {
            position: absolute;
            top: 72.8%;
            left: 14.3%;
        }

        .tbl_oralvalue_fourteen {
            position: absolute;
            top: 75.1%;
            left: 14.3%;
        }

        .tbl_oralvalue_fifteen {
            position: absolute;
            top: 77.4%;
            left: 14.3%;
        }

        .tbl_oralvalue_sixteen {
            position: absolute;
            top: 79.67%;
            left: 14.3%;
        }

        .tbl_oralvalue_seventeen {
            position: absolute;
            top: 88.8%;
            left: 14.3%;
        }

        .tbl_oralvalue_eighteen {
            position: absolute;
            top: 91.1%;
            left: 14.3%;
        }

        .tbl_oralvalue_nineteen {
            position: absolute;
            top: 93.4%;
            left: 14.3%;
        }

        .tbl_oralvalue_twenty {
            position: absolute;
            top: 95.7%;
            left: 14.3%;
        }

        .tbl_parentalvalue_one {
            position: absolute;
            top: 25.3%;
            left: 30.4%;
        }

        .tbl_parentalvalue_two {
            position: absolute;
            top: 27.6%;
            left: 30.4%;
        }

        .tbl_parentalvalue_three {
            position: absolute;
            top: 29.9%;
            left: 30.4%;
        }

        .tbl_parentalvalue_four {
            position: absolute;
            top: 32.2%;
            left: 30.4%;
        }

        .tbl_parentalvalue_five {
            position: absolute;
            top: 41.3%;
            left: 30.4%;
        }

        .tbl_parentalvalue_six {
            position: absolute;
            top: 43.6%;
            left: 30.4%;
        }

        .tbl_parentalvalue_seven {
            position: absolute;
            top: 45.8%;
            left: 30.4%;
        }


        .tbl_parentalvalue_eight {
            position: absolute;
            top: 48.2%;
            left: 30.4%;
        }

        .tbl_parentalvalue_nine {
            position: absolute;
            top: 56.8%;
            left: 30.4%;
        }

        .tbl_parentalvalue_ten {
            position: absolute;
            top: 59.1%;
            left: 30.4%;
        }

        .tbl_parentalvalue_eleven {
            position: absolute;
            top: 61.4%;
            left: 30.4%;
        }

        .tbl_parentalvalue_twelve {
            position: absolute;
            top: 63.7%;
            left: 30.4%;
        }

        .tbl_parentalvalue_thirteen {
            position: absolute;
            top: 72.8%;
            left: 30.4%;
        }

        .tbl_parentalvalue_fourteen {
            position: absolute;
            top: 75.1%;
            left: 30.4%;
        }

        .tbl_parentalvalue_fifteen {
            position: absolute;
            top: 77.4%;
            left: 30.4%;
        }

        .tbl_parentalvalue_sixteen {
            position: absolute;
            top: 79.67%;
            left: 30.4%;
        }

        .tbl_parentalvalue_seventeen {
            position: absolute;
            top: 88.8%;
            left: 30.4%;
        }

        .tbl_parentalvalue_eighteen {
            position: absolute;
            top: 91.1%;
            left: 30.4%;
        }

        .tbl_parentalvalue_nineteen {
            position: absolute;
            top: 93.4%;
            left: 30.4%;
        }

        .tbl_parentalvalue_twenty {
            position: absolute;
            top: 95.7%;
            left: 30.4%;
        }

        .tbl_intaketotalvalue_one {
            position: absolute;
            top: 25.3%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_two {
            position: absolute;
            top: 27.6%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_three {
            position: absolute;
            top: 29.9%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_four {
            position: absolute;
            top: 32.2%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_five {
            position: absolute;
            top: 41.3%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_six {
            position: absolute;
            top: 43.6%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_seven {
            position: absolute;
            top: 45.8%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_eight {
            position: absolute;
            top: 48.2%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_nine {
            position: absolute;
            top: 56.8%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_ten {
            position: absolute;
            top: 59.1%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_eleven {
            position: absolute;
            top: 61.4%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_twelve {
            position: absolute;
            top: 63.7%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_thirteen {
            position: absolute;
            top: 72.8%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_fourteen {
            position: absolute;
            top: 75.1%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_fifteen {
            position: absolute;
            top: 77.4%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_sixteen {
            position: absolute;
            top: 79.67%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_seventeen {
            position: absolute;
            top: 88.8%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_eighteen {
            position: absolute;
            top: 91.1%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_nineteen {
            position: absolute;
            top: 93.4%;
            left: 47.3%;
        }

        .tbl_intaketotalvalue_twenty {
            position: absolute;
            top: 95.7%;
            left: 47.3%;
        }

        .tbl_urinevalue_one {
            position: absolute;
            top: 25.3%;
            left: 58.5%;
        }

        .tbl_urinevalue_two {
            position: absolute;
            top: 27.6%;
            left: 58.5%;
        }

        .tbl_urinevalue_three {
            position: absolute;
            top: 29.9%;
            left: 58.5%;
        }

        .tbl_urinevalue_four {
            position: absolute;
            top: 32.2%;
            left: 58.5%;
        }

        .tbl_urinevalue_five {
            position: absolute;
            top: 41.3%;
            left: 58.5%;
        }

        .tbl_urinevalue_six {
            position: absolute;
            top: 43.6%;
            left: 58.5%;
        }

        .tbl_urinevalue_seven {
            position: absolute;
            top: 45.8%;
            left: 58.5%;
        }

        .tbl_urinevalue_eight {
            position: absolute;
            top: 48.2%;
            left: 58.5%;
        }

        .tbl_urinevalue_nine {
            position: absolute;
            top: 56.8%;
            left: 58.5%;
        }

        .tbl_urinevalue_ten {
            position: absolute;
            top: 59.1%;
            left: 58.5%;
        }

        .tbl_urinevalue_eleven {
            position: absolute;
            top: 61.4%;
            left: 58.5%;
        }

        .tbl_urinevalue_twelve {
            position: absolute;
            top: 63.7%;
            left: 58.5%;
        }

        .tbl_urinevalue_thirteen {
            position: absolute;
            top: 72.8%;
            left: 58.5%;
        }

        .tbl_urinevalue_fourteen {
            position: absolute;
            top: 75.1%;
            left: 58.5%;
        }

        .tbl_urinevalue_fifteen {
            position: absolute;
            top: 77.4%;
            left: 58.5%;
        }

        .tbl_urinevalue_sixteen {
            position: absolute;
            top: 79.67%;
            left: 58.5%;
        }

        .tbl_urinevalue_seventeen {
            position: absolute;
            top: 88.8%;
            left: 58.5%;
        }

        .tbl_urinevalue_eighteen {
            position: absolute;
            top: 91.1%;
            left: 58.5%;
        }

        .tbl_urinevalue_nineteen {
            position: absolute;
            top: 93.4%;
            left: 58.5%;
        }

        .tbl_urinevalue_twenty {
            position: absolute;
            top: 95.7%;
            left: 58.5%;
        }

        .tbl_drainagevalue_one {
            position: absolute;
            top: 25.3%;
            left: 69.3%;
        }

        .tbl_drainagevalue_two {
            position: absolute;
            top: 27.6%;
            left: 69.3%;
        }

        .tbl_drainagevalue_three {
            position: absolute;
            top: 29.9%;
            left: 69.3%;
        }

        .tbl_drainagevalue_four {
            position: absolute;
            top: 32.2%;
            left: 69.3%;
        }

        .tbl_drainagevalue_five {
            position: absolute;
            top: 41.3%;
            left: 69.3%;
        }

        .tbl_drainagevalue_six {
            position: absolute;
            top: 43.6%;
            left: 69.3%;
        }

        .tbl_drainagevalue_seven {
            position: absolute;
            top: 45.8%;
            left: 69.3%;
        }

        .tbl_drainagevalue_eight {
            position: absolute;
            top: 48.2%;
            left: 69.3%;
        }

        .tbl_drainagevalue_nine {
            position: absolute;
            top: 56.8%;
            left: 69.3%;
        }

        .tbl_drainagevalue_ten {
            position: absolute;
            top: 59.1%;
            left: 69.3%;
        }

        .tbl_drainagevalue_eleven {
            position: absolute;
            top: 61.4%;
            left: 69.3%;
        }

        .tbl_drainagevalue_twelve {
            position: absolute;
            top: 63.7%;
            left: 69.3%;
        }

        .tbl_drainagevalue_thirteen {
            position: absolute;
            top: 72.8%;
            left: 69.3%;
        }

        .tbl_drainagevalue_fourteen {
            position: absolute;
            top: 75.1%;
            left: 69.3%;
        }

        .tbl_drainagevalue_fifteen {
            position: absolute;
            top: 77.4%;
            left: 69.3%;
        }

        .tbl_drainagevalue_sixteen {
            position: absolute;
            top: 79.67%;
            left: 69.3%;
        }

        .tbl_drainagevalue_seventeen {
            position: absolute;
            top: 88.8%;
            left: 69.3%;
        }

        .tbl_drainagevalue_eighteen {
            position: absolute;
            top: 91.1%;
            left: 69.3%;
        }

        .tbl_drainagevalue_nineteen {
            position: absolute;
            top: 93.4%;
            left: 69.3%;
        }

        .tbl_drainagevalue_twenty {
            position: absolute;
            top: 95.7%;
            left: 69.3%;
        }

        .tbl_othersvalue_one {
            position: absolute;
            top: 25.3%;
            left: 81%;
        }

        .tbl_othersvalue_two {
            position: absolute;
            top: 27.6%;
            left: 81%;
        }

        .tbl_othersvalue_three {
            position: absolute;
            top: 29.9%;
            left: 81%;
        }

        .tbl_othersvalue_four {
            position: absolute;
            top: 32.2%;
            left: 81%;
        }

        .tbl_othersvalue_five {
            position: absolute;
            top: 41.3%;
            left: 81%;
        }

        .tbl_othersvalue_six {
            position: absolute;
            top: 43.6%;
            left: 81%;
        }

        .tbl_othersvalue_seven {
            position: absolute;
            top: 45.8%;
            left: 81%;
        }

        .tbl_othersvalue_eight {
            position: absolute;
            top: 48.2%;
            left: 81%;
        }

        .tbl_othersvalue_nine {
            position: absolute;
            top: 56.8%;
            left: 81%;
        }

        .tbl_othersvalue_ten {
            position: absolute;
            top: 59.1%;
            left: 81%;
        }

        .tbl_othersvalue_eleven {
            position: absolute;
            top: 61.4%;
            left: 81%;
        }

        .tbl_othersvalue_twelve {
            position: absolute;
            top: 63.7%;
            left: 81%;
        }

        .tbl_othersvalue_thirteen {
            position: absolute;
            top: 72.8%;
            left: 81%;
        }

        .tbl_othersvalue_fourteen {
            position: absolute;
            top: 75.1%;
            left: 81%;
        }

        .tbl_othersvalue_fifteen {
            position: absolute;
            top: 77.4%;
            left: 81%;
        }

        .tbl_othersvalue_sixteen {
            position: absolute;
            top: 79.67%;
            left: 81%;
        }

        .tbl_othersvalue_seventeen {
            position: absolute;
            top: 88.8%;
            left: 81%;
        }

        .tbl_othersvalue_eighteen {
            position: absolute;
            top: 91.1%;
            left: 81%;
        }

        .tbl_othersvalue_nineteen {
            position: absolute;
            top: 93.4%;
            left: 81%;
        }

        .tbl_othersvalue_twenty {
            position: absolute;
            top: 95.7%;
            left: 81%;
        }

        .tbl_secondtotalvalue_one {
            position: absolute;
            top: 25.3%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_two {
            position: absolute;
            top: 27.6%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_three {
            position: absolute;
            top: 29.9%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_four {
            position: absolute;
            top: 32.2%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_five {
            position: absolute;
            top: 41.3%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_six {
            position: absolute;
            top: 43.6%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_seven {
            position: absolute;
            top: 45.8%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_eight {
            position: absolute;
            top: 48.2%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_nine {
            position: absolute;
            top: 56.8%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_ten {
            position: absolute;
            top: 59.1%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_eleven {
            position: absolute;
            top: 61.4%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_twelve {
            position: absolute;
            top: 63.7%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_thirteen {
            position: absolute;
            top: 72.8%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_fourteen {
            position: absolute;
            top: 75.1%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_fifteen {
            position: absolute;
            top: 77.4%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_sixteen {
            position: absolute;
            top: 79.67%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_seventeen {
            position: absolute;
            top: 88.8%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_eighteen {
            position: absolute;
            top: 91.1%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_nineteen {
            position: absolute;
            top: 93.4%;
            left: 92.2%;
        }

        .tbl_secondtotalvalue_twenty {
            position: absolute;
            top: 95.7%;
            left: 92.2%;
        }
    </style>
</head>

<body>
    <div class="title">
        SAN MIGUEL DISTRICT HOSPITAL
    </div>
    <div class="place">
        San Miguel, Bulacan
    </div>
    <div class="fluid_title">
        FLUID INTAKE AND OUTPUT CHART
    </div>
    <div class="case_label">
        CASE NO:_____________
    </div>
    <div class="case_value">
        {{ $fluidIntake_view->id }}
    </div>
    <div class="name_label">
        NAME:___________________________________________________
    </div>
    <div class="name_value">
        {{ $fluidIntake_view->full_name }}
    </div>
    <div class="age_label">
        AGE:_______
    </div>
    <div class="age_value">
        {{ $fluidIntake_view->patient_info['age'] }}
    </div>
    <div class="sex_label">
        SEX:_______
    </div>
    <div class="sex_value">
        {{ $fluidIntake_view->patient_info['gender'] }}
    </div>
    <div class="ward_label">
        WARD:________
    </div>
    <div class="ward_value">
        {{ $fluidIntake_view->patient_info['ward'] }}
    </div>
    <div class="bed_label">
        BED:________
    </div>
    <div class="bed_value">
        {{ $fluidIntake_view->patient_info['bed'] }}
    </div>
    <div class="diagnosis_label">
        DIAGNOSIS:__________________________________________________________________________________________________
    </div>
    <div class="diagnosis_value">
        {{ $fluidIntake_view->patient_info['diagnosis'] }}
    </div>
    <div class="date_intake_label_one">
        DATE:
    </div>
    <div class="date_intake_value_one">
        {{ $fluidIntake_view->date_of_intake['intake_dateArray'][1] ?? '' }}
    </div>
    <div class="intake_label_one">
        INTAKE
    </div>
    <div class="output_label_one">
        OUTPUT
    </div>
    <div class="tbl">
        <table>
            <thead>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="date_intake_label_two">
        DATE:
    </div>
    <div class="date_intake_value_two">
        {{ $fluidIntake_view->date_of_intake['intake_dateArray'][2] ?? '' }}
    </div>
    <div class="intake_label_two">
        INTAKE
    </div>
    <div class="output_label_two">
        OUTPUT
    </div>
    <div class="tbl_two">
        <table>
            <thead>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="date_intake_label_three">
        DATE
    </div>
    <div class="date_intake_value_three">
        {{ $fluidIntake_view->date_of_intake['intake_dateArray'][3] ?? '' }}
    </div>
    <div class="intake_label_three">
        INTAKE
    </div>
    <div class="output_label_three">
        OUTPUT
    </div>
    <div class="tbl_three">
        <table>
            <thead>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="date_intake_label_four">
        DATE
    </div>
    <div class="date_intake_value_four">
        {{ $fluidIntake_view->date_of_intake['intake_dateArray'][4] ?? '' }}
    </div>
    <div class="intake_label_four">
        INTAKE
    </div>
    <div class="output_label_four">
        OUTPUT
    </div>
    <div class="tbl_four">
        <table>
            <thead>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="date_intake_label_five">
        DATE
    </div>
    <div class="date_intake_value_five">
        {{ $fluidIntake_view->date_of_intake['intake_dateArray'][5] ?? '' }}
    </div>
    <div class="intake_label_five">
        INTAKE
    </div>
    <div class="output_label_five">
        OUTPUT
    </div>
    <div class="tbl_five">
        <table>
            <thead>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
                <tr>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border-bottom: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                    <td style="border: solid 1px;"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="tbl_timelabel_one">
        TIME
    </div>
    <div class="tbl_timelabel_two">
        TIME
    </div>
    <div class="tbl_timelabel_three">
        TIME
    </div>
    <div class="tbl_timelabel_four">
        TIME
    </div>
    <div class="tbl_timelabel_five">
        TIME
    </div>

    <div class="tbl_orallabel_one">
        ORAL
    </div>
    <div class="tbl_orallabel_two">
        ORAL
    </div>
    <div class="tbl_orallabel_three">
        ORAL
    </div>
    <div class="tbl_orallabel_four">
        ORAL
    </div>
    <div class="tbl_orallabel_five">
        ORAL
    </div>

    <div class="tbl_parentallabel_one">
        PARENTAL
    </div>
    <div class="tbl_parentallabel_two">
        PARENTAL
    </div>
    <div class="tbl_parentallabel_three">
        PARENTAL
    </div>
    <div class="tbl_parentallabel_four">
        PARENTAL
    </div>
    <div class="tbl_parentallabel_five">
        PARENTAL
    </div>

    <div class="tbl_totalfirstlabel_one">
        TOTAL
    </div>
    <div class="tbl_totalfirstlabel_two">
        TOTAL
    </div>
    <div class="tbl_totalfirstlabel_three">
        TOTAL
    </div>
    <div class="tbl_totalfirstlabel_four">
        TOTAL
    </div>
    <div class="tbl_totalfirstlabel_five">
        TOTAL
    </div>

    <div class="tbl_urinelabel_one">
        URINE
    </div>
    <div class="tbl_urinelabel_two">
        URINE
    </div>
    <div class="tbl_urinelabel_three">
        URINE
    </div>
    <div class="tbl_urinelabel_four">
        URINE
    </div>
    <div class="tbl_urinelabel_five">
        URINE
    </div>

    <div class="tbl_drainagelabel_one">
        DRAINAGE
    </div>
    <div class="tbl_drainagelabel_two">
        DRAINAGE
    </div>
    <div class="tbl_drainagelabel_three">
        DRAINAGE
    </div>
    <div class="tbl_drainagelabel_four">
        DRAINAGE
    </div>
    <div class="tbl_drainagelabel_five">
        DRAINAGE
    </div>

    <div class="tbl_otherlabel_one">
        OTHERS
    </div>
    <div class="tbl_otherlabel_two">
        OTHERS
    </div>
    <div class="tbl_otherlabel_three">
        OTHERS
    </div>
    <div class="tbl_otherlabel_four">
        OTHERS
    </div>
    <div class="tbl_otherlabel_five">
        OTHERS
    </div>

    <div class="tbl_totalsecondlabel_one">
        TOTAL
    </div>
    <div class="tbl_totalsecondlabel_two">
        TOTAL
    </div>
    <div class="tbl_totalsecondlabel_three">
        TOTAL
    </div>
    <div class="tbl_totalsecondlabel_four">
        TOTAL
    </div>
    <div class="tbl_totalsecondlabel_five">
        TOTAL
    </div>

    <div class="tbl_morninglabel_one">
        7-3
    </div>
    <div class="tbl_morninglabel_two">
        7-3
    </div>
    <div class="tbl_morninglabel_three">
        7-3
    </div>
    <div class="tbl_morninglabel_four">
        7-3
    </div>
    <div class="tbl_morninglabel_five">
        7-3
    </div>

    <div class="tbl_noonlabel_one">
        3-11
    </div>
    <div class="tbl_noonlabel_two">
        3-11
    </div>
    <div class="tbl_noonlabel_three">
        3-11
    </div>
    <div class="tbl_noonlabel_four">
        3-11
    </div>
    <div class="tbl_noonlabel_five">
        3-11
    </div>

    <div class="tbl_nightlabel_one">
        11-7
    </div>
    <div class="tbl_nightlabel_two">
        11-7
    </div>
    <div class="tbl_nightlabel_three">
        11-7
    </div>
    <div class="tbl_nightlabel_four">
        11-7
    </div>
    <div class="tbl_nightlabel_five">
        11-7
    </div>

    <div class="tbl_finaltotallabel_one">
        TOTAL
    </div>
    <div class="tbl_finaltotallabel_two">
        TOTAL
    </div>
    <div class="tbl_finaltotallabel_three">
        TOTAL
    </div>
    <div class="tbl_finaltotallabel_four">
        TOTAL
    </div>
    <div class="tbl_finaltotallabel_five">
        TOTAL
    </div>
    <div class="tbl_oralvalue_one">
        {{ $fluidIntake_view->oral['oralArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_two">
        {{ $fluidIntake_view->oral['oralArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_three">
        {{ $fluidIntake_view->oral['oralArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_four">
        {{ $fluidIntake_view->oral['oralArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_oralvalue_five">
        {{ $fluidIntake_view->oral['oralArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_six">
        {{ $fluidIntake_view->oral['oralArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_seven">
        {{ $fluidIntake_view->oral['oralArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_eight">
        {{ $fluidIntake_view->oral['oralArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_oralvalue_nine">
        {{ $fluidIntake_view->oral['oralArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_ten">
        {{ $fluidIntake_view->oral['oralArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_eleven">
        {{ $fluidIntake_view->oral['oralArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_twelve">
        {{ $fluidIntake_view->oral['oralArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_oralvalue_thirteen">
        {{ $fluidIntake_view->oral['oralArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_fourteen">
        {{ $fluidIntake_view->oral['oralArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_fifteen">
        {{ $fluidIntake_view->oral['oralArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_sixteen">
        {{ $fluidIntake_view->oral['oralArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_oralvalue_seventeen">
        {{ $fluidIntake_view->oral['oralArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_eighteen">
        {{ $fluidIntake_view->oral['oralArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_nineteen">
        {{ $fluidIntake_view->oral['oralArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_twenty">
        {{ $fluidIntake_view->oral['oralArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_parentalvalue_one">
        {{ $fluidIntake_view->parental['parentalArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_two">
        {{ $fluidIntake_view->parental['parentalArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_three">
        {{ $fluidIntake_view->parental['parentalArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_four">
        {{ $fluidIntake_view->parental['parentalArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_five">
        {{ $fluidIntake_view->parental['parentalArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_six">
        {{ $fluidIntake_view->parental['parentalArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_seven">
        {{ $fluidIntake_view->parental['parentalArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_eight">
        {{ $fluidIntake_view->parental['parentalArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_nine">
        {{ $fluidIntake_view->parental['parentalArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_ten">
        {{ $fluidIntake_view->parental['parentalArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_eleven">
        {{ $fluidIntake_view->parental['parentalArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_twelve">
        {{ $fluidIntake_view->parental['parentalArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_thirteen">
        {{ $fluidIntake_view->parental['parentalArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_fourteen">
        {{ $fluidIntake_view->parental['parentalArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_fifteen">
        {{ $fluidIntake_view->parental['parentalArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_sixteen">
        {{ $fluidIntake_view->parental['parentalArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_seventeen">
        {{ $fluidIntake_view->parental['parentalArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_eighteen">
        {{ $fluidIntake_view->parental['parentalArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_nineteen">
        {{ $fluidIntake_view->parental['parentalArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_twenty">
        {{ $fluidIntake_view->parental['parentalArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_intaketotalvalue_one">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_two">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_three">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_four">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_five">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_six">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_seven">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_eight">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_nine">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_ten">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_eleven">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_twelve">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_thirteen">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_fourteen">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_fifteen">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_sixteen">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_seventeen">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_eighteen">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_nineteen">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_twenty">
        {{ $fluidIntake_view->oral_parental_total['oralparentaltotalArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_urinevalue_one">
        {{ $fluidIntake_view->urine['urineArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_two">
        {{ $fluidIntake_view->urine['urineArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_three">
        {{ $fluidIntake_view->urine['urineArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_four">
        {{ $fluidIntake_view->urine['urineArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_urinevalue_five">
        {{ $fluidIntake_view->urine['urineArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_six">
        {{ $fluidIntake_view->urine['urineArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_seven">
        {{ $fluidIntake_view->urine['urineArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_eight">
        {{ $fluidIntake_view->urine['urineArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_urinevalue_nine">
        {{ $fluidIntake_view->urine['urineArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_ten">
        {{ $fluidIntake_view->urine['urineArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_eleven">
        {{ $fluidIntake_view->urine['urineArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_twelve">
        {{ $fluidIntake_view->urine['urineArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_urinevalue_thirteen">
        {{ $fluidIntake_view->urine['urineArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_fourteen">
        {{ $fluidIntake_view->urine['urineArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_fifteen">
        {{ $fluidIntake_view->urine['urineArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_sixteen">
        {{ $fluidIntake_view->urine['urineArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_urinevalue_seventeen">
        {{ $fluidIntake_view->urine['urineArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_eighteen">
        {{ $fluidIntake_view->urine['urineArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_nineteen">
        {{ $fluidIntake_view->urine['urineArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_twenty">
        {{ $fluidIntake_view->urine['urineArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_drainagevalue_one">
        {{ $fluidIntake_view->drainage['drainageArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_two">
        {{ $fluidIntake_view->drainage['drainageArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_three">
        {{ $fluidIntake_view->drainage['drainageArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_four">
        {{ $fluidIntake_view->drainage['drainageArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_five">
        {{ $fluidIntake_view->drainage['drainageArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_six">
        {{ $fluidIntake_view->drainage['drainageArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_seven">
        {{ $fluidIntake_view->drainage['drainageArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_eight">
        {{ $fluidIntake_view->drainage['drainageArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_nine">
        {{ $fluidIntake_view->drainage['drainageArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_ten">
        {{ $fluidIntake_view->drainage['drainageArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_eleven">
        {{ $fluidIntake_view->drainage['drainageArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_twelve">
        {{ $fluidIntake_view->drainage['drainageArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_thirteen">
        {{ $fluidIntake_view->drainage['drainageArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_fourteen">
        {{ $fluidIntake_view->drainage['drainageArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_fifteen">
        {{ $fluidIntake_view->drainage['drainageArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_sixteen">
        {{ $fluidIntake_view->drainage['drainageArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_seventeen">
        {{ $fluidIntake_view->drainage['drainageArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_eighteen">
        {{ $fluidIntake_view->drainage['drainageArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_nineteen">
        {{ $fluidIntake_view->drainage['drainageArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_twenty">
        {{ $fluidIntake_view->drainage['drainageArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_othersvalue_one">
        {{ $fluidIntake_view->others['othersArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_two">
        {{ $fluidIntake_view->others['othersArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_three">
        {{ $fluidIntake_view->others['othersArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_four">
        {{ $fluidIntake_view->others['othersArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_othersvalue_five">
        {{ $fluidIntake_view->others['othersArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_six">
        {{ $fluidIntake_view->others['othersArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_seven">
        {{ $fluidIntake_view->others['othersArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_eight">
        {{ $fluidIntake_view->others['othersArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_othersvalue_nine">
        {{ $fluidIntake_view->others['othersArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_ten">
        {{ $fluidIntake_view->others['othersArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_eleven">
        {{ $fluidIntake_view->others['othersArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_twelve">
        {{ $fluidIntake_view->others['othersArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_othersvalue_thirteen">
        {{ $fluidIntake_view->others['othersArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_fourteen">
        {{ $fluidIntake_view->others['othersArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_fifteen">
        {{ $fluidIntake_view->others['othersArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_sixteen">
        {{ $fluidIntake_view->others['othersArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_othersvalue_seventeen">
        {{ $fluidIntake_view->others['othersArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_eighteen">
        {{ $fluidIntake_view->others['othersArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_nineteen">
        {{ $fluidIntake_view->others['othersArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_twenty">
        {{ $fluidIntake_view->others['othersArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_secondtotalvalue_one">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_two">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_three">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_four">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_five">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_six">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_seven">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_eight">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_nine">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_ten">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_eleven">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_twelve">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_thirteen">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_fourteen">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_fifteen">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_sixteen">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_seventeen">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_eighteen">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_nineteen">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_twenty">
        {{ $fluidIntake_view->urine_drainage_others_total['urinedrainageotherstotalArray'][5][4] ?? '' }}
    </div>

</body>

</html>
