@extends('layouts.appframe')

@section('body')
    <!--  Body Start -->
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>IOT Questions and Answers</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">IOT</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="faq-wrap">
                    <h4 class="mb-20 h4 text-blue">Revision Q and A</h4>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block" data-toggle="collapse" data-target="#faq1">
                                    What is the Internet Of Things (IoT)?
                                </button>
                            </div>
                            <div id="faq1" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    Internet of Things (IoT) is a network of physical objects or people called "things"
                                    that are embedded with software, electronics, network, and sensors that allow these
                                    objects to collect and exchange data. The goal of IoT is to extend to internet
                                    connectivity from standard devices like computer, mobile, tablet to relatively dumb
                                    devices like a toaster.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
                                    What industries can benefit from IoT?
                                </button>
                            </div>
                            <div id="faq2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    A wide range of industries can benefit from IoT, including healthcare, agriculture,
                                    manufacturing, automotive, public transportation, utilities and energy,
                                    environmental, smart cities, smart homes and consumer devices.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3">
                                    What is meant by a smart city in IoT?
                                </button>
                            </div>
                            <div id="faq3" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    A smart city is an urban area that uses IoT technologies to connect city services
                                    and enhance their delivery. Smart cities can help reduce crime, optimize public
                                    transportation, improve air quality, streamline traffic flow, lower energy use,
                                    manage infrastructure, reduce health risks, simplify parking, manage utilities and
                                    improve a variety of other processes.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq4">
                                    What is an embedded system on an IoT device?
                                </button>
                            </div>
                            <div id="faq4" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    An embedded system is a combination of hardware, software and firmware that's
                                    configured for a specific purpose. It's essentially a small computer that can be
                                    embedded in mechanical or electrical systems, such as automobiles, industrial
                                    equipment, medical devices, smart speakers or digital watches. An embedded system
                                    might be programmable or have fixed functionality.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5">
                                    What is a sensor in an IoT device?
                                </button>
                            </div>
                            <div id="faq5" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    A sensor is a physical object that detects and responds to input from its
                                    surrounding environment, essentially reading the environment for information. For
                                    example, a sensor that measures temperatures within a piece of heavy machinery will
                                    detect and respond to the temperature within that machinery, as opposed to
                                    registering the outside temperature.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq6">
                                    What is a thermocouple sensor?
                                </button>
                            </div>
                            <div id="faq6" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    A thermocouple sensor is a common type of sensor used to measure temperature.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    @endsection
