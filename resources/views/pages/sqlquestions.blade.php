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
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3">
                                    What is RDBMS?
                                </button>
                            </div>
                            <div id="faq3" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    RDBMS stands for Relational Database Management System. RDBMS store the data into
                                    the collection of tables, which is related by common fields between the columns of
                                    the table. It also provides relational operators to manipulate the data stored into
                                    the tables.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq4">
                                    What is a Database?
                                </button>
                            </div>
                            <div id="faq4" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Database is nothing but an organized form of data for easy access, storing,
                                    retrieval and managing of data. This is also known as structured form of data which
                                    can be accessed in many ways.

                                    Example: School Management Database, Bank Management Database.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5">
                                    What are tables and Fields?
                                </button>
                            </div>
                            <div id="faq5" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    A table is a set of data that are organized in a model with Columns and Rows.
                                    Columns can be categorized as vertical, and Rows are horizontal. A table has
                                    specified number of column called fields but can have any number of rows which is
                                    called record.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq6">
                                    What is a primary key?
                                </button>
                            </div>
                            <div id="faq6" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    A primary key is a combination of fields which uniquely specify a row. This is a
                                    special kind of unique key, and it has implicit NOT NULL constraint. It means,
                                    Primary key values cannot be NULL.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    @endsection
