function val1(){
    var service = document.plan.service;
    var city = document.plan.city;
    if(ser_val(service)){
        if(city_val(city)){
            if(filter(service,city)){
              return true;
            }
        }
    }
    return false;
    }
    function ser_val(service){
        if(service.value == "default"){
          swal("Please select the Services",{timer: 2000});
            return false;
        }
        else{
            return true;
        }
    }
    function city_val(city){
        if(city.value == "default"){
          swal("Please select the City",{timer: 2000});
            return false;
        }
        else{
            return true;
        }
    }
    function filter(service,city){
        if(service.value == "photo" && city.value == "delhi"){
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "photo" && city.value == "mumbai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "photo" && city.value == "banglore"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "photo" && city.value == "chennai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "bridal" && city.value == "delhi"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "bridal" && city.value == "mumbai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "bridal" && city.value == "banglore"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "bridal" && city.value == "chennai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "hotel" && city.value == "delhi"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "hotel" && city.value == "mumbai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "hotel" && city.value == "banglore"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "hotel" && city.value == "chennai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "mehandi" && city.value == "delhi"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "mehandi" && city.value == "mumbai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "mehandi" && city.value == "banglore"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "mehandi" && city.value == "chennai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "cards" && city.value == "delhi"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "cards" && city.value == "mumbai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "cards" && city.value == "banglore"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "cards" && city.value == "chennai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "makeup" && city.value == "delhi"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "makeup" && city.value == "mumbai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "makeup" && city.value == "banglore"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          window.location.hash = "vendor";
        }
        if(service.value == "makeup" && city.value == "chennai"){
          document.getElementById("photodelhi").style.display = "none";
          document.getElementById("photomumbai").style.display = "none";
          document.getElementById("photochennai").style.display = "none";
          document.getElementById("bridalmumbai").style.display = "none";
          document.getElementById("bridalchennai").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("hoteldelhi").style.display = "none";
          document.getElementById("hotelchennai").style.display = "none";
          document.getElementById("mehandibanglore").style.display = "none";
          document.getElementById("cardsdelhi").style.display = "none";
          document.getElementById("makeupmumbai").style.display = "none";
          document.getElementById("makeupbanglore").style.display = "none";
          window.location.hash = "vendor";
        }
        else{}
    }

function val2(){
    document.plan.service.value = "default";
    document.plan.city.value = "default";
    document.getElementById("photodelhi").style.display = "inline-block";
    document.getElementById("photomumbai").style.display = "inline-block";
    document.getElementById("photochennai").style.display = "inline-block";
    document.getElementById("bridalmumbai").style.display = "inline-block";
    document.getElementById("bridalchennai").style.display = "inline-block";
    document.getElementById("hotelchennai").style.display = "inline-block";
    document.getElementById("hoteldelhi").style.display = "inline-block";
    document.getElementById("hotelchennai").style.display = "inline-block";
    document.getElementById("mehandibanglore").style.display = "inline-block";
    document.getElementById("cardsdelhi").style.display = "inline-block";
    document.getElementById("makeupmumbai").style.display = "inline-block";
    document.getElementById("makeupbanglore").style.display = "inline-block";
    }