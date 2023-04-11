import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/charts/sampleChart.js",
                "resources/js/charts/notesChart.js",
                "resources/js/billingPage/dropdown.js",
                "resources/js/billingPage/totalBilling.js",
                "resources/js/billingPage/totalMedicine.js",
                "resources/js/billingPage/totalLab.js",
                "resources/js/billingPage/totalXray.js",
                "resources/js/billingPage/totalEcg.js",
                "resources/js/billingPage/totalOxygen.js",
                "resources/js/billingPage/totalNbs.js",
                "resources/js/patientPage/birthdate.js",
                "resources/js/patientPage/admission_days.js",
                "resources/js/patientPage/multi-step-form.js",
                "resources/js/stationPage/addInput.js",
                "resources/js/patientPage/dependentDropdown.js",
                "resources/js/calendar.js",
                "resources/css/app.css",
                "node_modules/@fortawesome/fontawesome-free/js/all.min.js",
            ],
            refresh: true,
        }),
    ],
});
