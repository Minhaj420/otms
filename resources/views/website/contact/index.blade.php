@extends('website.master')

@section('title')
    Contact
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa-solid fa-location-dot fa-2x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Address</h4>
                            <address>
                                House No - 420, Road No - 520
                                Dhanmondi, Dhaka - 1215
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa-solid fa-phone fa-2x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Phone</h4>
                            <p>01521426919</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa-solid fa-envelope fa-2x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Email</h4>
                            <p>sarkermajid21.bd@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card border-0">
                        <div class="card-header">Send Message</div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="name" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Write something</label>
                                    <div class="col-md-9">
                                        <textarea name="" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success btn-sm w-100" value="Send"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-0 text-center text-uppercase">
                        <h3>Location</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8791239799634!2d90.38349631486103!3d23.75168949464419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8afc5d28667%3A0x7e461056d052d494!2sPanthapath%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1670174749193!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection



