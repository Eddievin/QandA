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
                                <h4>Php Questions and Answers</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">PHP</li>
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
                                    What is PHP?
                                </button>
                            </div>
                            <div id="faq1" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    PHP is a recursive acronym for "PHP: Hypertext Preprocessor". PHP is a server side
                                    scripting language that is embedded in HTML. It is used to manage dynamic content,
                                    databases, session tracking, even build entire e-commerce sites.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
                                    What do the initials of PHP stand for?
                                </button>
                            </div>
                            <div id="faq2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    PHP means PHP: Hypertext Preprocessor.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3">
                                    What is the function mysql_pconnect() useful for?
                                </button>
                            </div>
                            <div id="faq3" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>mysql_pconnect() ensure a persistent connection to the database, it means that
                                        the connection does not close when the PHP script ends.</p>
                                    <p class="mb-0">mysql_pconnect() ensure a persistent connection to the database, it
                                        means that the connection does not close when the PHP script ends.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq4">
                                    What’s the difference between the include() and require() functions?
                                </button>
                            </div>
                            <div id="faq4" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    They both include a specific file but on require the process exits with a fatal
                                    error if the file can’t be included, while include statement may still pass and jump
                                    to the next step in the execution.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5">
                                    How can we get the IP address of the client?
                                </button>
                            </div>
                            <div id="faq5" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    This question might show you how playful and creative the candidate is because there
                                    are many options. $_SERVER["REMOTE_ADDR"]; is the easiest solution, but the
                                    candidate can write x line scripts for this question.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq6">
                                    Explain the syntax for 'foreach' loop.
                                </button>
                            </div>
                            <div id="faq6" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The foreach statement is used to loop through arrays. For each pass the value of
                                        the current array element is assigned to $value and the array pointer is moved
                                        by one and in the next pass next element will be processed.</p>
                                    <p class="mb-0">The foreach statement is used to loop through arrays. For each pass
                                        the value of the current array element is assigned to $value and the array
                                        pointer is moved by one and in the next pass next element will be processed.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    @endsection
