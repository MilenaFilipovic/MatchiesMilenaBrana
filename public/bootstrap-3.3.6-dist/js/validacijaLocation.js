function validacija2() {
    var proslo = true;
    
    var drzava = document.getElementById("country");
    var strDrzava = drzava.options[drzava.selectedIndex].value;
    var drzavaPrazno = false;
    
    var grad = document.getElementById("city");
    var strGrad = grad.options[grad.selectedIndex].value;
    var gradPrazno = false;

    if (strDrzava == "selectCountry") {
        drzavaPrazno = true;
    }
    if (strGrad == "selectCity") {
        gradPrazno = true;
    }
    
    if (drzavaPrazno) {
		proslo = false;
		document.getElementById("greskaDrzava").style.display = "inherit";
		document.getElementById("country").style.border = "1px solid #AE0000";
		document.getElementById("countrylabel").innerHTML = "Please select your country.";
	}
	else {
		document.getElementById("greskaDrzava").style.display = "none";
		document.getElementById("country").style.border = "";
		document.getElementById("countrylabel").innerHTML = "";
	}
    
    if (gradPrazno) {
        proslo = false;
        document.getElementById("greskaGrad").style.display = "inherit";
		document.getElementById("city").style.border = "1px solid #AE0000";
		document.getElementById("citylabel").innerHTML = "Please select your city.";
    }
    else {
        document.getElementById("greskaGrad").style.display = "none";
		document.getElementById("city").style.border = "";
		document.getElementById("citylabel").innerHTML = "";
    }
    
    return proslo;
}

function bla() {
    var myJson = {
        "country": [
            {
                "name": "Serbia",
                "id": "rs",
                "cities": [
                    {
                        "name": "Beograd",
                        "id": "beograd"
                    },
                    {
                        "name": "Novi Sad",
                        "id": "ns"
                    },
                    {
                        "name": "Subotica",
                        "id": "subotica"
                    },
                    {
                        "name": "Kraljevo",
                        "id": "kraljevo"
                    },
                    {
                        "name": "Kruševac",
                        "id": "krusevac"
                    }
                ]
            },
            {
                "name": "Germany",
                "id": "de",
                "cities": [
                    {
                        "name": "Berlin",
                        "id": "berlin"
                    },
                    {
                        "name": "Ulm",
                        "id": "ulm"
                    },
                    {
                        "name": "Munich",
                        "id": "munich"
                    },
                    {
                        "name": "Stuttgart",
                        "id": "stuttgart"
                    }
                ]
            }
        ]
    }

    $.each(myJson.country, function (index, value) {
        $("#country").append('<option value="'+value.id+'">'+value.name+'</option>');
    });

    $('#country').on('change', function(){
        console.log($(this).val());
        for(var i = 0; i < myJson.country.length; i++)
        {
          if(myJson.country[i].id == $(this).val())
          {
             $('#city').html('<option value="selectCity" disabled selected>Your city</option>');
             $.each(myJson.country[i].cities, function (index, value) {
                $("#city").append('<option value="'+value.id+'">'+value.name+'</option>');
            });
          }
        }
    });
}