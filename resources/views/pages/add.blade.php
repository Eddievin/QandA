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

                        <!--  Modal Form -->
                        <form method="POST" action="/pages/add">
                        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        @csrf
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">

                                        <div class="md-form mb-5">
                                            <i class="icon-copy ion-help-circled"></i>
                                            <input type="text" class="form-control validate" name="description">
                                            <label data-error="wrong" data-success="right" for="form32">Question</label>

                                        </div>

                                        <div class="md-form">
                                            <i class="icon-copy ion-checkmark-circled"></i>
                                            <textarea type="text" name="answer" class="md-textarea form-control"
                                                rows="4"></textarea>
                                            <label data-error="wrong" data-success="right" for="form8">Answer</label>
                                        </div>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-primary"type="submit">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                        <div class="text-center">
                                <button class="btn btn-success btn-lg btn-block" data-toggle="modal"
                                data-target="#modalContactForm">Add a New Question</button>
                                <br />
                                <br />
                        </div>
                        <!--  Modal Form -->

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


                        <!--  Working part of the form Code test -->
                        <form method="POST" action="/pages/add">
                            <div class="form-group" >
                                @csrf
                                <label for="description">Task Description</label>
                                <input class="form-control" name="description" />
                            </div>
                            <div class="form-group" >
                                @csrf
                                <label for="answer">Answer</label>
                                <input class="form-control" name="answer" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary"type="submit">Create</button>
                            </div>
                        </form>
                        <!--  Working cards from the form -->

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
                <!--  form with 2 fields -->


                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
