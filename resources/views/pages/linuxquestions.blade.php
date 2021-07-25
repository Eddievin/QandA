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
                                <h4>Linux Questions and Answers</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">LINUX</li>
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
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
                                    What is Linux?
                                </button>
                            </div>
                            <div id="faq2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Linux is an operating system based on UNIX and was first introduced by Linus
                                    Torvalds.
                                    It is based on the Linux Kernel and can run on different hardware platforms
                                    manufactured by Intel, MIPS, HP, IBM, SPARC, and Motorola.
                                    Another popular element in Linux is its mascot, a penguin figure named Tux.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq4">
                                    What is Linux Kernel?
                                </button>
                            </div>
                            <div id="faq4" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    The Linux Kernel is a low-level systems software whose main role is to manage
                                    hardware resources for the user.
                                    It is also used to provide an interface for user-level interaction.
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>

        </div>
    </div>
    @endsection
