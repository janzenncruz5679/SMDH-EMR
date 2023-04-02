<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pdf_fluidintake->fullname }} Fluid Intake Info</title>
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
            left: 7%;
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
            left: 58%;
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
            left: 69.1%;
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
            left: 82%;
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
            left: 94%;
            font-size: 1.1rem;
        }

        .diagnosis_label {
            position: absolute;
            top: 17.4%;
        }

        .diagnosis_value {
            position: absolute;
            top: 17.25%;
            left: 11.3%;
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
        {{ $pdf_fluidintake->id }}
    </div>
    <div class="name_label">
        NAME:___________________________________________________
    </div>
    <div class="name_value">
        {{ $pdf_fluidintake->full_name }}
    </div>
    <div class="age_label">
        AGE:_______
    </div>
    <div class="age_value">
        {{ $pdf_fluidintake->patient_info['age'] }}
    </div>
    <div class="sex_label">
        SEX:_______
    </div>
    <div class="sex_value">
        {{ $pdf_fluidintake->patient_info['gender'] }}
    </div>
    <div class="ward_label">
        WARD:________
    </div>
    <div class="ward_value">
        {{ $pdf_fluidintake->patient_info['ward'] }}
    </div>
    <div class="bed_label">
        BED:________
    </div>
    <div class="bed_value">
        {{ $pdf_fluidintake->patient_info['bed'] }}
    </div>
    <div class="diagnosis_label">
        DIAGNOSIS:__________________________________________________________________________________________________
    </div>
    <div class="diagnosis_value">
        {{ $pdf_fluidintake->patient_info['diagnosis'] }}
    </div>
    <div class="date_intake_label_one">
        DATE:
    </div>
    <div class="date_intake_value_one">
        {{ $pdf_fluidintake->date_of_intake['intake_dateArray'][1] ?? '' }}
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
        {{ $pdf_fluidintake->date_of_intake['intake_dateArray'][2] ?? '' }}
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
        {{ $pdf_fluidintake->date_of_intake['intake_dateArray'][3] ?? '' }}
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
        {{ $pdf_fluidintake->date_of_intake['intake_dateArray'][4] ?? '' }}
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
        {{ $pdf_fluidintake->date_of_intake['intake_dateArray'][5] ?? '' }}
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
        {{ $pdf_fluidintake->oral['oralArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_two">
        {{ $pdf_fluidintake->oral['oralArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_three">
        {{ $pdf_fluidintake->oral['oralArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_four">
        {{ $pdf_fluidintake->oral['oralArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_oralvalue_five">
        {{ $pdf_fluidintake->oral['oralArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_six">
        {{ $pdf_fluidintake->oral['oralArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_seven">
        {{ $pdf_fluidintake->oral['oralArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_eight">
        {{ $pdf_fluidintake->oral['oralArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_oralvalue_nine">
        {{ $pdf_fluidintake->oral['oralArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_ten">
        {{ $pdf_fluidintake->oral['oralArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_eleven">
        {{ $pdf_fluidintake->oral['oralArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_twelve">
        {{ $pdf_fluidintake->oral['oralArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_oralvalue_thirteen">
        {{ $pdf_fluidintake->oral['oralArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_fourteen">
        {{ $pdf_fluidintake->oral['oralArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_fifteen">
        {{ $pdf_fluidintake->oral['oralArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_sixteen">
        {{ $pdf_fluidintake->oral['oralArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_oralvalue_seventeen">
        {{ $pdf_fluidintake->oral['oralArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_oralvalue_eighteen">
        {{ $pdf_fluidintake->oral['oralArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_oralvalue_nineteen">
        {{ $pdf_fluidintake->oral['oralArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_oralvalue_twenty">
        {{ $pdf_fluidintake->oral['oralArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_parentalvalue_one">
        {{ $pdf_fluidintake->parental['parentalArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_two">
        {{ $pdf_fluidintake->parental['parentalArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_three">
        {{ $pdf_fluidintake->parental['parentalArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_four">
        {{ $pdf_fluidintake->parental['parentalArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_five">
        {{ $pdf_fluidintake->parental['parentalArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_six">
        {{ $pdf_fluidintake->parental['parentalArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_seven">
        {{ $pdf_fluidintake->parental['parentalArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_eight">
        {{ $pdf_fluidintake->parental['parentalArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_nine">
        {{ $pdf_fluidintake->parental['parentalArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_ten">
        {{ $pdf_fluidintake->parental['parentalArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_eleven">
        {{ $pdf_fluidintake->parental['parentalArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_twelve">
        {{ $pdf_fluidintake->parental['parentalArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_thirteen">
        {{ $pdf_fluidintake->parental['parentalArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_fourteen">
        {{ $pdf_fluidintake->parental['parentalArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_fifteen">
        {{ $pdf_fluidintake->parental['parentalArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_sixteen">
        {{ $pdf_fluidintake->parental['parentalArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_seventeen">
        {{ $pdf_fluidintake->parental['parentalArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_eighteen">
        {{ $pdf_fluidintake->parental['parentalArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_nineteen">
        {{ $pdf_fluidintake->parental['parentalArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_parentalvalue_twenty">
        {{ $pdf_fluidintake->parental['parentalArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_intaketotalvalue_one">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_two">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_three">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_four">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_five">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_six">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_seven">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_eight">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_nine">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_ten">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_eleven">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_twelve">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_thirteen">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_fourteen">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_fifteen">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_sixteen">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_seventeen">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_eighteen">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_nineteen">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_intaketotalvalue_twenty">
        {{ $pdf_fluidintake->oral_parental_total['oralparentaltotalArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_urinevalue_one">
        {{ $pdf_fluidintake->urine['urineArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_two">
        {{ $pdf_fluidintake->urine['urineArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_three">
        {{ $pdf_fluidintake->urine['urineArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_four">
        {{ $pdf_fluidintake->urine['urineArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_urinevalue_five">
        {{ $pdf_fluidintake->urine['urineArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_six">
        {{ $pdf_fluidintake->urine['urineArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_seven">
        {{ $pdf_fluidintake->urine['urineArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_eight">
        {{ $pdf_fluidintake->urine['urineArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_urinevalue_nine">
        {{ $pdf_fluidintake->urine['urineArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_ten">
        {{ $pdf_fluidintake->urine['urineArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_eleven">
        {{ $pdf_fluidintake->urine['urineArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_twelve">
        {{ $pdf_fluidintake->urine['urineArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_urinevalue_thirteen">
        {{ $pdf_fluidintake->urine['urineArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_fourteen">
        {{ $pdf_fluidintake->urine['urineArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_fifteen">
        {{ $pdf_fluidintake->urine['urineArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_sixteen">
        {{ $pdf_fluidintake->urine['urineArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_urinevalue_seventeen">
        {{ $pdf_fluidintake->urine['urineArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_urinevalue_eighteen">
        {{ $pdf_fluidintake->urine['urineArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_urinevalue_nineteen">
        {{ $pdf_fluidintake->urine['urineArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_urinevalue_twenty">
        {{ $pdf_fluidintake->urine['urineArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_drainagevalue_one">
        {{ $pdf_fluidintake->drainage['drainageArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_two">
        {{ $pdf_fluidintake->drainage['drainageArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_three">
        {{ $pdf_fluidintake->drainage['drainageArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_four">
        {{ $pdf_fluidintake->drainage['drainageArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_five">
        {{ $pdf_fluidintake->drainage['drainageArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_six">
        {{ $pdf_fluidintake->drainage['drainageArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_seven">
        {{ $pdf_fluidintake->drainage['drainageArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_eight">
        {{ $pdf_fluidintake->drainage['drainageArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_nine">
        {{ $pdf_fluidintake->drainage['drainageArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_ten">
        {{ $pdf_fluidintake->drainage['drainageArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_eleven">
        {{ $pdf_fluidintake->drainage['drainageArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_twelve">
        {{ $pdf_fluidintake->drainage['drainageArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_thirteen">
        {{ $pdf_fluidintake->drainage['drainageArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_fourteen">
        {{ $pdf_fluidintake->drainage['drainageArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_fifteen">
        {{ $pdf_fluidintake->drainage['drainageArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_sixteen">
        {{ $pdf_fluidintake->drainage['drainageArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_seventeen">
        {{ $pdf_fluidintake->drainage['drainageArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_eighteen">
        {{ $pdf_fluidintake->drainage['drainageArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_nineteen">
        {{ $pdf_fluidintake->drainage['drainageArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_drainagevalue_twenty">
        {{ $pdf_fluidintake->drainage['drainageArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_othersvalue_one">
        {{ $pdf_fluidintake->others['othersArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_two">
        {{ $pdf_fluidintake->others['othersArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_three">
        {{ $pdf_fluidintake->others['othersArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_four">
        {{ $pdf_fluidintake->others['othersArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_othersvalue_five">
        {{ $pdf_fluidintake->others['othersArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_six">
        {{ $pdf_fluidintake->others['othersArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_seven">
        {{ $pdf_fluidintake->others['othersArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_eight">
        {{ $pdf_fluidintake->others['othersArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_othersvalue_nine">
        {{ $pdf_fluidintake->others['othersArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_ten">
        {{ $pdf_fluidintake->others['othersArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_eleven">
        {{ $pdf_fluidintake->others['othersArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_twelve">
        {{ $pdf_fluidintake->others['othersArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_othersvalue_thirteen">
        {{ $pdf_fluidintake->others['othersArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_fourteen">
        {{ $pdf_fluidintake->others['othersArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_fifteen">
        {{ $pdf_fluidintake->others['othersArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_sixteen">
        {{ $pdf_fluidintake->others['othersArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_othersvalue_seventeen">
        {{ $pdf_fluidintake->others['othersArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_othersvalue_eighteen">
        {{ $pdf_fluidintake->others['othersArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_othersvalue_nineteen">
        {{ $pdf_fluidintake->others['othersArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_othersvalue_twenty">
        {{ $pdf_fluidintake->others['othersArray'][5][4] ?? '' }}
    </div>

    <div class="tbl_secondtotalvalue_one">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][1][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_two">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][1][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_three">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][1][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_four">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][1][4] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_five">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][2][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_six">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][2][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_seven">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][2][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_eight">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][2][4] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_nine">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][3][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_ten">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][3][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_eleven">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][3][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_twelve">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][3][4] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_thirteen">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][4][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_fourteen">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][4][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_fifteen">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][4][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_sixteen">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][4][4] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_seventeen">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][5][1] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_eighteen">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][5][2] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_nineteen">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][5][3] ?? '' }}
    </div>
    <div class="tbl_secondtotalvalue_twenty">
        {{ $pdf_fluidintake->urine_drainage_others_total['urinedrainageotherstotalArray'][5][4] ?? '' }}
    </div>

</body>

</html>
