<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iLabAfrica Intranet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet" />

    <!-- FullCalendar JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

  <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
<link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
<link href="{{ asset('NiceAdmin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('NiceAdmin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('NiceAdmin/assets/css/style.css') }}" rel="stylesheet">

<style>
     /* Example CSS for styling the calendar container */

#calendar {
            max-width: 100%;
            background-color: #ffffff; /* Background color of the calendar */
            border: 1px solid #ccc; /* Border around the calendar */
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 0 5px #888; /* Box shadow for a subtle depth effect */
            padding: 10px;
            margin: 0px;
            height:100%;
            font-size:12px;
        }
        #calendar .fc-toolbar {
            background-color:darkblue; /* Header background color */
            color: #ffffff; /* Header text color */
            border-radius: 5px 5px 0 0; /* Rounded corners for the top */
        }
        #calendar .fc-toolbar button {
            color:black;
            border: none;
            border-radius: 0;
            margin: 2px;
            font-weight: 600;
            width:50px;
            font-size:12px;
        }
        

        /* Style the events in the calendar */
        #calendar .fc-event {
            background-color:yellowgreen; /* Event background color */
            color: #ffffff; /* Event text color */
            border: none;
            border-radius: 5px;
            padding: 5px;
            margin: 2px;
            width:50%;
        }

        #calendar .fc-event:hover {
            background-color: #0056b3;
        }

        /* Style the time display in the calendar */
        #calendar .fc-time {
            color: #333; /* Time text color */
            font-weight: bold;
            display: none;
        }
        .legend{

            margin-left: 1270px;
             margin-top:-500px;
              width:200px
        }
        .legend-color{
            margin-right: 5px; 
            height: 20px; width: 20px;
            display: inline-block;

        }

      *,
      ::before,
      ::after {
        box-sizing: border-box;
      }


</style>
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background:darkblue;height:">

    <div class="d-flex align-items-center justify-content-between">
      <img src="/logo/iLab white Logo-01.png" alt="iLab Logo" style="height: 120px; max-width: 250px;margin-top:10px">
      <i class="bi bi-list toggle-sidebar-btn" style="color:white"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
     <h5 class="nav-link" style="margin:18px; font-size:20px;font-weight:700"> <i class="bi bi-file-earmark-text"></i> Documents</h5>
     <hr>

    <ul class="sidebar-nav" id="sidebar-nav">

    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-text"></i><span>Hr Documents</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li><a href="https://sagana.strathmore.edu/intranet/uploads/Employee_Requisition_form.doc">Employee Requisition Form</a></li>
        <li><a href="#">Contract Renewal Full-time Staff</a></li>
        <li><a href="#">Contract Renewal Interns</a></li>
        <li><a href="https://sagana.strathmore.edu/intranet/uploads/Policies/Staff%20Training%20and%20Conference%20Request%20%20-%20General%20Staff.pdf">Staff Training Form - General Staff</a></li>
        <li><a href="https://sagana.strathmore.edu/intranet/uploads/HR%20Documents/Administrative%20Staff%20End%20of%20Contract%20Assessment%20Form.pdf">Administration Staff Employee Assessment</a></li>
        <li><a href="#">Probation Assessment</a></li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#finance-documents" data-bs-toggle="collapse" href="#">
        <i class="bi bi-cash-stack"></i> Finance Documents<i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="finance-documents" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="https://sagana.strathmore.edu/intranet/documents/hr/General_Claim_Form-V2.1-2020.pdf">General Claim Form</a></li>
        <li><a href="https://sagana.strathmore.edu/intranet/uploads/finance/IOU_Form%20(2).docx">IOU Form</a></li>
        <li><a href="https://sagana.strathmore.edu/intranet/documents/INVOICE_REQUEST_FORM.docx">Invoice Request Form</a></li>
        <li><a href="https://sagana.strathmore.edu/intranet/documents/hr/Lecturers_claim_form_2020.pdf">Lecturers Claim Form</a></li>
        <li><a href="https://sagana.strathmore.edu/intranet/uploads/Policies/International%20Per%20Diems%20(2).pdf">International Per Diem Rates</a></li>
        <li><a href="https://sagana.strathmore.edu/intranet/uploads/HR%20Documents/Local_Per_Diem_Rates%20revised.pdf">Locals Per Diem Rates</a></li>
    </ul>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#university-policies" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-text "></i> University Policies<i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="university-policies" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="https://policies.strathmore.edu/login">University Policies</a></li>
        <li><a href="#">iLab Policies - Department Policies</a></li>
    </ul>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#ilab-documents" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-text "></i> iLab/iBiz Documents<i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="ilab-documents" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="#">iLab/iBiz Logos</a></li>
        <li><a href="#">iLab/iBiz Templates PPT</a></li>
        <li><a href="#">iLab/iBiz Slidedeck</a></li>
    </ul>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#request-forms" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-text"></i> Request Forms<i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="request-forms" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="#">Store Requisition Forms</a></li>
        <li><a href="#">Internet Service Request Form</a></li>
        <!-- Add more request forms as needed -->
    </ul>
</li>

     

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card" style="background:darkblue;border-radius:20px">
                <div class="card-body">
                    <h5 class="card-title" style="color:white">Employee Performance</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person"></i> <!-- Example icon, replace with appropriate icon -->
                        </div>
                        <div class="ps-3">
                            <h6 style="color:white">85%</h6>
                            <span class=" small pt-1 fw-bold" style="color:orange">Improved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Employee Performance Card -->

        <!-- Project Progress Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card" style="background:darkblue;border-radius:20px">
                <div class="card-body">
                    <h5 class="card-title"  style="color:white">Project Progress</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-bar-chart"></i> <!-- Example icon, replace with appropriate icon -->
                        </div>
                        <div class="ps-3">
                            <h6 style="color:white">75%</h6>
                            <span class=" small pt-1 fw-bold" style="color:orange">On Track</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Project Progress Card -->

        <!-- Team Collaboration Card -->
        <div class="col-xxl-4 col-xl-12">
            <div class="card info-card customers-card" style="background:darkblue;border-radius:20px">
                <div class="card-body">
                    <h5 class="card-title"  style="color:white">Team Collaboration</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i> <!-- Example icon, replace with appropriate icon -->
                        </div>
                        <div class="ps-3">
                            <h6 style="color:white">98%</h6>
                            <span class=" small pt-1 fw-bold" style="color:orange">Increased</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Team Collaboration Card -->
            <!-- Revenue Card -->
          
            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>
                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                         new ApexCharts(document.querySelector("#reportsChart"), {
                              series: [{
                                   name: 'Employee Performance',
                                   data: [20, 25, 30, 35, 40, 45, 50],
                              }, {
                                   name: 'Project Progress',
                                   data: [10, 20, 30, 40, 50, 60, 70]
                              }, {
                                   name: 'Team Collaboration',
                                   data: [5, 10, 15, 20, 25, 30, 35]
                              }],
                              chart: {
                                   height: 350,
                                   type: 'area',
                                   toolbar: {
                                        show: false
                                   },
                              },
                              markers: {
                                   size: 4
                              },
                              colors: ['#4154f1', '#2eca6a', '#ff771d'],
                              fill: {
                                   type: "gradient",
                                   gradient: {
                                        shadeIntensity: 1,
                                        opacityFrom: 0.3,
                                        opacityTo: 0.4,
                                        stops: [0, 90, 100]
                                   }
                              },
                              dataLabels: {
                                   enabled: false
                              },
                              stroke: {
                                   curve: 'smooth',
                                   width: 2
                              },
                              xaxis: {
                                   type: 'datetime',
                                   categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                              },
                              tooltip: {
                                   x: {
                                        format: 'dd/MM/yy HH:mm'
                                   },
                              }
                         }).render();
                    });
                    </script>

                 

                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->



            <div class="card elevation-4 text-center" style="width:100%;height:100%; font-weight:700">ILABAFRICA  SYSTEMS</div>

            

                    
<div class="col-4">

<a href="system-details.html" class="text-decoration-none">
<div class="card elevation-4" style="background:orange;border-radius:20px;">

<div class="card-body text-center d-flex flex-column align-items-center">
<i class="bi bi-grid fs-4 mb-2" style="margin-top: 20px;color:blue"></i>
<h5 class="card-title">Room Booking</h5>
</div>

</div>
</a>
</div>

<div class="col-4">
<a href="system-details.html" class="text-decoration-none">
<div class="card elevation-4" style="background:orange;border-radius:20px;">

<div class="card-body text-center d-flex flex-column align-items-center">
<i class="bi bi-grid fs-4 mb-2" style="margin-top: 20px;"></i>
<h5 class="card-title">System Name</h5>
</div>

</div>
</a>
</div>

<div class="col-4">
<a href="system-details.html" class="text-decoration-none">
<div class="card elevation-4" style="background:orange;border-radius:20px;">

<div class="card-body text-center d-flex flex-column align-items-center">
<i class="bi bi-grid fs-4 mb-2" style="margin-top: 20px;"></i>
<h5 class="card-title">System Name</h5>
</div>

</div>
</a>
</div>

<div class="col-4">
<a href="system-details.html" class="text-decoration-none">
<div class="card elevation-4" style="background:orange;border-radius:20px">

<div class="card-body text-center d-flex flex-column align-items-center">
<i class="bi bi-grid fs-4 mb-2" style="margin-top: 20px;"></i>
<h5 class="card-title">System Name</h5>
</div>

</div>
</a>
</div>

<div class="col-4">
<a href="system-details.html" class="text-decoration-none">
<div class="card elevation-4" style="background:orange;border-radius:20px;">

<div class="card-body text-center d-flex flex-column align-items-center">
<i class="bi bi-grid fs-4 mb-2" style="margin-top: 20px;"></i>
<h5 class="card-title">System Name</h5>
</div>

</div>
</a>
</div>

<div class="col-4">
<a href="system-details.html" class="text-decoration-none">
<div class="card elevation-4" style="background:orange;border-radius:20px;">

<div class="card-body text-center d-flex flex-column align-items-center">
<i class="bi bi-grid fs-4 mb-2" style="margin-top: 20px;"></i>
<h5 class="card-title">System Name</h5>
</div>

</div>
</a>
</div>
           
         
         
                    

            
          </div>
        </div><!-- End Left side columns -->


        

        <!-- Right side columns -->
        <div class="col-lg-4">

        <div class="col-12">
    <div class="card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Employee Activity <span>| Today</span></h5>
            <div class="activity">
                <div class="activity-item d-flex">
                    <div class="activity-label">32 min ago</div>
                    <i class='bi bi-person-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                        <a href="#" class="fw-bold text-dark">John Doe</a> completed the sales report.
                    </div>
                </div><!-- End activity item-->
                <div class="activity-item d-flex">
                    <div class="activity-label">56 min ago</div>
                    <i class='bi bi-building activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                        <a href="#" class="fw-bold text-dark">Project Alpha</a> reached 75% completion.
                    </div>
                </div><!-- End activity item-->
                <div class="activity-item d-flex">
                    <div class="activity-label">2 hrs ago</div>
                    <i class='bi bi-chat-dots-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                        <a href="#" class="fw-bold text-dark">Team meeting</a> scheduled for tomorrow at 10:00 AM.
                    </div>
                </div><!-- End activity item-->
                <!-- Add more activity items as needed -->
            </div>
        </div>
    </div>
</div>

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
            <h5 class="card-title">Birthdays</h5>


            <div class="calender" id="calendar"></div>

            <script>
  $(document).ready(function() {
    // Initialize the FullCalendar
    $('#calendar').fullCalendar({
      defaultView: 'month',
      editable: false,
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      events: [
        // Example birthday events
        {
          title: 'John Doe Birthday',
          start: '2024-02-14', // Format: 'YYYY-MM-DD'
          allDay: true // Display the event for the whole day
        },
        {
          title: 'Jane Doe Birthday',
          start: '2024-03-20',
          allDay: true
        },
        // Add more birthday events as needed
      ],
      eventMouseover: function(event, jsEvent, view) {
        // Create a tooltip with event information
        var tooltip = '<div class="tooltip">' +
                         '<strong>' + event.title + '</strong><br>' +
                         '<em>' + moment(event.start).format('MMMM D, YYYY') + '</em>' +
                      '</div>';

        // Display the tooltip
        $("body").append(tooltip);
        $(this).mouseover(function(e) {
          $(this).css('z-index', 10000);
          $('.tooltip').fadeIn('500');
          $('.tooltip').fadeTo('10', 1.9);
        }).mousemove(function(e) {
          $('.tooltip').css('top', e.pageY + 10);
          $('.tooltip').css('left', e.pageX + 20);
        });
      },
      eventMouseout: function(event, jsEvent, view) {
        // Remove the tooltip when mouse leaves the event
        $(this).css('z-index', 8);
        $('.tooltip').remove();
      }
    });
  });
</script>



            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card">
            

            <div class="card-body pb-0">
              <h5 class="card-title">ILAB UNITS </h5>

              <div id="trafficChart" style="min-height: 500px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 48,
                          name: 'IOT'
                        },
                        {
                          value: 35,
                          name: 'IT Outsourcing & BITCU'
                        },
                        {
                          value: 40,
                          name: 'IT Security'
                        },
                        {
                          value: 40,
                          name: 'iBizAfrica'
                        },
                        {
                          value: 30,
                          name: 'Digital Learning'
                        },
                        {
                          value: 3,
                          name: 'IT Support'
                        },
                        {
                          value: 13,
                          name: 'IR & EE'
                        }, {
                          value: 23,
                          name: 'PR'
                        },
                        {
                          value: 50,
                          name: 'E-health'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>iLabAfrica</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
  <script src="{{ asset('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/php-email-form/validate.js') }}"></script>

</body>

</html>