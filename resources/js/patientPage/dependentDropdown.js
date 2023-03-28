var stateObject = {
    Philippines: {
        "Region 3": {
            Bulacan: {
                Malolos: ["Atlag", "Mojon"],
                "San Miguel": ["Salangan", "San Jose"],
            },
            "Nueva Ecija": {
                Gapan: ["Roseburg", "Winston"],
            },
        },
    },
};
window.onload = function () {
    var countrySelect = document.getElementById("country"),
        regionSelect = document.getElementById("region"),
        provinceSelect = document.getElementById("province"),
        municipalitySelect = document.getElementById("municipality"),
        barangaySelect = document.getElementById("barangay");

    for (var state in stateObject) {
        countrySelect.options[countrySelect.options.length] = new Option(
            state,
            state
        );
    }

    countrySelect.onchange = function () {
        regionSelect.length = 1;
        provinceSelect.length = 1;
        municipalitySelect.length = 1;
        barangaySelect.length = 1;

        if (this.selectedIndex < 1) {
            regionSelect.options[0].text = "Region";
            provinceSelect.options[0].text = "Province";
            municipalitySelect.options[0].text = "Municipality";
            barangaySelect.options[0].text = "Barangay";
            return;
        }

        regionSelect.options[0].text = "Region";
        for (var region in stateObject[this.value]) {
            regionSelect.options[regionSelect.options.length] = new Option(
                region,
                region
            );
        }
        if (regionSelect.options.length == 2) {
            regionSelect.selectedIndex = 1;
            regionSelect.onchange();
        }
    };

    regionSelect.onchange = function () {
        provinceSelect.length = 1;
        municipalitySelect.length = 1;
        barangaySelect.length = 1;

        if (this.selectedIndex < 1) {
            provinceSelect.options[0].text = "Province";
            municipalitySelect.options[0].text = "Municipality";
            barangaySelect.options[0].text = "Barangay";
            return;
        }

        provinceSelect.options[0].text = "Province";
        for (var county in stateObject[countrySelect.value][this.value]) {
            provinceSelect.options[provinceSelect.options.length] = new Option(
                county,
                county
            );
        }
        if (provinceSelect.options.length == 2) {
            provinceSelect.selectedIndex = 1;
            provinceSelect.onchange();
        }
    };

    provinceSelect.onchange = function () {
        municipalitySelect.length = 1;
        barangaySelect.length = 1;

        if (this.selectedIndex < 1) {
            municipalitySelect.options[0].text = "Municipality";
            barangaySelect.options[0].text = "Barangay";
            return;
        }

        municipalitySelect.options[0].text = "Please select city";
        for (var city in stateObject[countrySelect.value][regionSelect.value][
            this.value
        ]) {
            municipalitySelect.options[municipalitySelect.options.length] =
                new Option(city, city);
        }
        if (municipalitySelect.options.length == 2)
            municipalitySelect.selectedIndex = 1;
        municipalitySelect.onchange();
    };

    municipalitySelect.onchange = function () {
        barangaySelect.length = 1;

        if (this.selectedIndex < 1) {
            barangaySelect.options[0].text = "Municipality";
            return;
        }

        barangaySelect.options[0].text = "Barangay";
        var towns =
            stateObject[countrySelect.value][regionSelect.value][
                provinceSelect.value
            ][this.value];
        for (var i = 0; i < towns.length; i++) {
            barangaySelect.options[barangaySelect.options.length] = new Option(
                towns[i],
                towns[i]
            );
        }
        if (barangaySelect.options.length == 2) {
            barangaySelect.selectedIndex = 1;
        }
    };

    countrySelect.onchange();
};
