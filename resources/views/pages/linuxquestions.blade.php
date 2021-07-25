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
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3">
                                    What is BASH?
                                </button>
                            </div>
                            <div id="faq3" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    BASH is short for Bourne Again SHell.
                                    It was written by Steve Bourne as a replacement to the original Bourne Shell
                                    (represented by /bin/sh).
                                    It combines all the features from the original version of Bourne Shell,
                                    plus additional functions to make it easier and more convenient to use.
                                    It has since been adapted as the default shell for most systems running Linux.
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
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5">
                                    What is the advantage of open source?
                                </button>
                            </div>
                            <div id="faq5" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Open source allows you to distribute your software, including source codes freely to
                                    anyone who is interested.
                                    People would then be able to add features and even debug and correct errors that are
                                    in the source code.
                                    They can even make it run better and then redistribute these enhanced source code
                                    freely again.
                                    This eventually benefits everyone in the community.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq6">
                                    Does it help for a Linux system to have multiple desktop environments installed?
                                </button>
                            </div>
                            <div id="faq6" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    In general, one desktop environment, like KDE or Gnome, is good enough to operate
                                    without issues.
                                    It's all a matter of preference for the user, although the system allows switching
                                    from one environment to another.
                                    Some programs will work in one environment and not work on the other, so it could
                                    also be considered a factor in selecting which environment to use.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    @endsection
