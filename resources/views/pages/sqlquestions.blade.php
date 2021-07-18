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
                                <h4>SQL Questions and Answers</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">SQL</li>
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
                                    What is SQL?
                                </button>
                            </div>
                            <div id="faq1" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    SQL stands for Structured Query Language , and it is used to communicate with the
                                    Database. This is a standard language used to perform tasks such as retrieval,
                                    updation, insertion and deletion of data from a database.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
                                    What is DBMS?
                                </button>
                            </div>
                            <div id="faq2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    A Database Management System (DBMS) is a program that controls creation, maintenance
                                    and use of a database. DBMS can be termed as File Manager that manages data in a
                                    database rather than saving it in file systems.
                                </div>
                            </div>
                        </div>
                        @foreach ($tasks as $task)
                        <div class="card">
                            <div class="card-header">
                            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5">
                                {{ $task->description }}
                            </button>
                            </div>
                            <div id="faq5" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    {{ $task->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <br />
                        <br />
                        <br />

                    </div>


                </div>
            </div>

        </div>
    </div>
    @endsection
