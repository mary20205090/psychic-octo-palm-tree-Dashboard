

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Dashboard</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>
<style>
    *{
    box-sizing: border-box;
}
body{
    margin: 0;
    padding: 0;
}
.header{
    position: absolute;
    height: 50px;
    width: 100%;
}
.sidebar{
    position: absolute;
    height: 100vh;
    width: 100%;
    background-color: #ff0000;
    padding-top: 50px;
}
.sidebar ul{
     list-style: none;
     margin: 0;
     padding: 0;

}
.sidebar ul li{
    padding: 20px 10px;
    border-bottom: 1px solid #fff;
}
.sidebar ul li a{
    color: #ffffff;
    text-decoration: none;
}
.sidebar{
    position: absolute;
    height: 100vh;
    width: 100%;
    background-color: #2D2A32;
    z-index: 4;
    padding-top: 50px;
}
.sidebar ul{
     list-style: none;
     margin: 0;
     padding: 0;

}
.sidebar ul li{
    padding: 20px 10px;
    border-bottom: 1px solid #fff;
}
.sidebar ul li a{
    color: #ffffff;
    text-decoration: none;
}
.main-content{
    padding-top: 100px;
    background-attachment: fixed;
}
.container-fluid{
    padding-top: 10px;
}
.col-lg-3{
    padding-top: 30px;
}
.col-lg-3 span{
    color: #2D2A32;
}
/* small devices(landscape phones ,576px and up */
@media screen  and (min-width :576px)
{
    .sidebar{
        width: 50px;
    }
    .sidebar ul li{
        text-align: center;
    }
    .sidebar ul li span:nth-child(2){
        display: none;
    }
    .sidebar ul li i{
        font-size: 30px;
    }
    .main-content{
        margin-left: 50px;
    }


}
/* extra small devices(potrait phones,less than 576px) */
@media (max-width :575.98px) {
    .sidebar{
        width: 50px;
    }
    .sidebar ul li{
        text-align: center;
    }
    .sidebar ul li span:nth-child(2){
        display: none;
    }
    .sidebar ul li i{
        font-size: 20px;
    }
    .main-content{
        margin-left: 50px;
    }


}
@media (min-width:768px){
    .sidebar{
        width: 100px;
    }
    .sidebar ul li{
        text-align: center;
    }
    .sidebar ul li span:nth-child(2){
        display: none;
    }
    .sidebar ul li i{
        font-size: 30px;
    }
    .main-content{
        margin-left: 100px;
    }


}
@media (min-width :992px){
    .sidebar{
        width: 200px;
    }
    .sidebar ul li{
        text-align: left;
    }
    .sidebar ul li span:nth-child(2){
        display: inline;
    }
    .sidebar ul li i{
        font-size: 30px;
    }
    .main-content{
        margin-left: 200px;
    }

 }
/* line graph */
.col-lg-6{
    padding-top: 30px;
}

#myChart{
    padding-top: 2px;
}
#myChart1{
    padding-top: 2px;

}
 

</style>

<body>
    
            <!--header starts-->
            @section('header')
            @show
        
            <!--header ends-->

            <!--sidebar starts-->
            @section('sidebar')
            @show
            <!--sidebar ends-->

            <!--main-content starts-->
            @section('main-content')
                       @show
            
            <!--main-content ends-->
            

            <script>
                var xValues = [2015,2016,2017,2018,2019,2020,2019,2020,2021,2022];
                
                new Chart("myChart", {
                  type: "line",
                  data: {
                    labels: xValues,
                    datasets: [{ 
                      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                      borderColor: "red",
                      fill: false
                    }, { 
                      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                      borderColor: "green",
                      fill: false
                    }, { 
                      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                      borderColor: "blue",
                      fill: false
                    }]
                  },
                  options: {
                    // legend: {display: false}
                    title: {
                    display: true,
                    text: "HMIS Annual distribution between 2015 to 2022"
                    }
                        
                  }
                });



            //   <!--myChart1-->  
            var xValues = ["Doctors", "Nurses", "Patients", "Pharmacists", "Non-stuff"];
            var yValues = [23, 44, 81, 40, 35];
            var barColors = ["blue", "green","purple","orange","red"];

            new Chart("myChart1", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "HMIS Population distribution 2022"
                }
            }
            });

                   </script>
                
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
         <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="../assets/js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="../assets/js/plugins/moment.min.js"></script>
        <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>